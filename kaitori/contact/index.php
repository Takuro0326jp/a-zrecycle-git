<?php
/**
 * index.php
 *
 * @package     PHP Contact Form
 * @author      Takahiko Takei [73#] http://73web.net/
 * @copyright   Copyright (c) nanasan Inc. All Right Reserved.
 */
mb_language('japanese');		// 言語(日本語)
mb_internal_encoding('UTF-8');	// 内部エンコーディング(UTF-8)

/**
 * Get root directory.
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

/**
 * Set const.
 */
define('CONFIG',  ROOT . DS . 'config');
define('CLASSES', ROOT . DS . 'classes');
define('LIB',     ROOT . DS . 'lib');
define('UPLOAD',  ROOT . DS . 'upload');

/**
 * Load configuration file and libraries.
 */
require_once(CONFIG . DS . 'config.php');
require_once(LIB . DS . 'phpmailer' . DS . 'class.phpmailer.php');

/**
 * Load contact form class.
 */
require_once(CLASSES . DS . 'class.contact.php');

/**
 * 以下処理
 */
	/**
	 * POSTデータ取得
	 */
	if (empty($_POST)) {
		header("Location: {$config['url']}");
		exit();
	}

	/**
	 * POSTデータ取得
	 */
	$data = $_POST;
	unset($data['email_confirm'], $data['MAX_FILE_SIZE'], $data['x'], $data['y']);

	/**
	 * ファイルアップロード処理
	 */
	if (!empty($_FILES)) {
		foreach ($_FILES as $field => $file) {
			if (!empty($file['tmp_name'])) {
				try {
					// "未定義である" "複数ファイルである" "$_FILES Corruption 攻撃を受けた"
					// どれかに該当していれば不正なパラメータとして処理する
					if (!isset($file['error']) || !is_int($file['error']))
						throw new RuntimeException('パラメータが不正です');

					// $file['error'] の値を確認
					switch ($file['error']) {
						case UPLOAD_ERR_OK:			// OK
							break;
						case UPLOAD_ERR_NO_FILE:	// ファイル未選択
							throw new RuntimeException('ファイルが選択されていません');
						case UPLOAD_ERR_INI_SIZE:	// php.ini定義の最大サイズ超過
						case UPLOAD_ERR_FORM_SIZE:	// フォーム定義の最大サイズ超過
							throw new RuntimeException('ファイルサイズが大きすぎます');
						default:
							throw new RuntimeException('予期せぬエラーが発生しました');
					}

					// ファイルタイプチェック
					$mime  = array(
						'gif' => 'image/gif',
						'jpg' => 'image/jpeg',
						'png' => 'image/png',
					);
					if (!$ext = array_search($file['type'], $mime, true))
						throw new RuntimeException('ファイル形式が不正です');

					// 保存領域の確保
					$dir = UPLOAD . DS . date('Y') . DS . date('m') . DS . date('d') . DS;
					if (!file_exists($dir))
						mkdir($dir, 0777, true);

					// ファイルをtmp領域から保存移動
					$name = preg_replace("/(.+)(\.[^.]+$)/", "$1", $file['name']);
					$path = sprintf($dir . '%s.%s', date('His') . '-' . $name, $ext);
					if (!move_uploaded_file($file['tmp_name'], $path))
						throw new RuntimeException('ファイル保存時にエラーが発生しました');

					// アップロードファイルのパーミッションを確実に0644に設定する
					chmod($path, 0644);

					// アップロード情報をメール情報に書き込む
					$url = rtrim(rtrim($config['url']), '/') . '/' . $config['dir'] . '/upload/' . date('Y/m/d') . '/';
					$data[$field] = sprintf($url . '%s.%s', date('His') . '-' . $name, $ext);

				} catch (RuntimeException $e) {
					// エラーログ出力
				}
			}
		}
	}

	/**
	 * 本文作成
	 */
	$content = '';
	foreach ($data as $field => $text) {
		$content .= "{$field}:" . PHP_EOL;
		$content .= "{$text}" . PHP_EOL . PHP_EOL;
	}

	/**
	 * メール送信
	 */
	$posted = new ContactForm();
	$posted->addTo($config['To'], $config['ToName']);			// 宛先(To)をセット
	$posted->setFrom($data['メールアドレス'], $data['お名前']);	// 差出人(From/From名)をセット
	$posted->setSubject($config['PostedSubject']);				// 件名(Subject)をセット
	$posted->setBody(sprintf($config['Posted'], $content));		// 本文(Body)をセット

	if (!$posted->send()) {
		echo("Failed to send mail. Error:" . $posted->getErrorMessage());
	} else {
		if ($config['ResponderFlag']) {
			$responder = new ContactForm();
			$responder->addTo($data['メールアドレス'], $data['お名前']);	// 宛先(To)をセット
			$responder->setFrom($config['To'], $config['ToName']);			// 差出人(From/From名)をセット
			$responder->setSubject($config['ResponderSubject']);			// 件名(Subject)をセット
			$responder->setBody(sprintf($config['Responder'], $content));	// 本文(Body)をセット
			$responder->send();
		}
		header("Location: " . rtrim(rtrim($config['url']), '/') . '/' . $config['ThanksPage']);
	}
