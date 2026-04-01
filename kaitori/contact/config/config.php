<?php
/**
 * config.php
 *
 * @package     PHP Contact Form
 * @author      Takahiko Takei [73#] http://73web.net/
 * @copyright   Copyright (c) nanasan Inc. All Right Reserved.
 */
$config = array();

/**
 * 設置URL
 */
$config['url'] = 'http://a-zrecycle.com/kaitori/';

/**
 * コンタクトフォームのディレクトリ名
 */
$config['dir'] = 'contact';

/**
 * フォームの送信先メールアドレス/名前
 */
$config['To']     = 'info@adoor.jp';
$config['ToName'] = 'アドア東京 STU株式会社';

$config['CC']   = array();
$config['BCC']  = array();

/**
 * 自動返信メールの差出人メールアドレス/名前
 */
$config['From']     = 'info@73web.net';
$config['FromName'] = '株式会社ナナサン';

/**
 * サンクスページ
 */
$config['ThanksPage'] = 'thanks.html#form';

/**
 * 設置者宛のメール内容
 */
$config['PostedSubject'] = 'お問い合せフォームから';
$config['Posted'] = <<< EOF
お問い合せフォームより以下のメールを受付ました。
──────────────────────────

%s

──────────────────────────

━━━━━━━━━━━━━━━━━━━━━━━━━━
　アドア東京 - STU株式会社
　〒158-0098 東京都世田谷区上用賀6-26-7 永井ビル1F
　TEL: 0120-531-017 営業時間: 10:00-19:00
　http://www.a-zrecycle.com/
━━━━━━━━━━━━━━━━━━━━━━━━━━
EOF;

/**
 * 自動返信のメール内容
 */
$config['ResponderFlag'] = true;
$config['ResponderSubject'] = 'お問い合せありがとうございました';
$config['Responder'] = <<< EOF
──────────────────────────

この度はお問い合せ頂き誠にありがとうございました。
改めて担当者よりご連絡をさせていただきます。

─ご送信内容の確認─────────────────

%s

──────────────────────────

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。

この度はお問い合わせ重ねてお礼申し上げます。

━━━━━━━━━━━━━━━━━━━━━━━━━━
　アドア東京 - STU株式会社
　〒158-0098 東京都世田谷区上用賀6-26-7 永井ビル1F
　TEL: 0120-531-017 営業時間: 10:00-19:00
　http://www.a-zrecycle.com/
━━━━━━━━━━━━━━━━━━━━━━━━━━
EOF;
