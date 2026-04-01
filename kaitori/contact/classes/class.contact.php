<?php
/**
 * class.contact.php
 *
 * @package     PHP Contact Form
 * @author      Takahiko Takei [73#] http://73web.net/
 * @copyright   Copyright (c) nanasan Inc. All Right Reserved.
 */

/**
 * ContactForm class.
 *
 * @package     PHPMailer
 */
class ContactForm extends PHPMailer {

/**
 * Variables.
 */
	/**
	 * mail charset.
	 */
	public $CharSet = 'iso-2022-jp';

	/**
	 * mail encoding.
	 */
	public $Encoding = '7bit';

	/**
	 * internal encoding.
	 */
	public $InternalEncoding = 'UTF-8';

/**
 * Methods.
 */
	/**
	 * Original encode MIME header.
	 *
	 * @param   String  $string
	 * @param   String  $charset
	 * @param   String  $linefeed
	 * @return  String
	 */
	public function encodeMimeHeader($string, $charset = null, $linefeed = "\r\n")
	{

		if (!strlen($string))
			return '';

		if (empty($charset))
			$charset = $this->CharSet;

		$start   = "=?{$charset}?B?";
		$end     = '?=';
		$encoded = '';

		/**
		 * Each line must have length <= 75, including $start and $end
		 */
		$length = 75 - strlen($start) - strlen($end);

		/**
		 * Average multi-byte ratio
		 */
		$ratio = mb_strlen($string, $charset) / strlen($string);

		/**
		 * Base64 has a 4:3 ratio
		 */
		$magic = $avglength = floor(3 * $length * $ratio / 4);

		for ($i = 0; $i <= mb_strlen($string, $charset); $i += $magic)
		{

			$magic  = $avglength;
			$offset = 0;

			/**
			 * Recalculate magic for each line to be 100% sure
			 */
			do
			{
				$magic -= $offset;
				$chunk = mb_substr($string, $i, $magic, $charset);
				$chunk = base64_encode($chunk);
				$offset++;
			}
			while (strlen($chunk) > $length);

			if ($chunk)
				$encoded .= " {$start}{$chunk}{$end}{$linefeed}";

		}

		/**
		 * Chomp the first space and the last linefeed
		 */
		$encoded = substr($encoded, 1, -strlen($linefeed));

		return $encoded;
	}

	/**
	 * Add a "To" address.
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @return  Boolean
	 */
	public function addAddress($address, $name = '')
	{
		if (!empty($name))
			$name = $this->encodeMimeHeader(mb_convert_encoding($name, 'JIS', $this->InternalEncoding));
		return parent::addAddress($address, $name);
	}

	/**
	 * Add a "To" address (Alias).
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @return  Boolean
	 */
	public function addTo($address, $name = '')
	{
		return $this->addAddress($address, $name);
	}

	/**
	 * Add a "CC" address.
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @return  Boolean
	 */
	public function addCC($address, $name = '')
	{
		if (!empty($name))
			$name = $this->encodeMimeHeader(mb_convert_encoding($name, 'JIS', $this->InternalEncoding));
		return parent::addCC($address, $name);
	}

	/**
	 * Add a "BCC" address.
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @return  Boolean
	 */
	public function addBCC($address, $name = '')
	{
		if (!empty($name))
			$name = $this->encodeMimeHeader(mb_convert_encoding($name, 'JIS', $this->InternalEncoding));
		return parent::addBCC($address, $name);
	}

	/**
	 * Add a "Reply-to" address.
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @return  Boolean
	 */
	public function addReplyTo($address, $name = '')
	{
		if (!empty($name))
			$name = $this->encodeMimeHeader(mb_convert_encoding($name, 'JIS', $this->InternalEncoding));
		return parent::addReplyTo($address, $name);
	}

	/**
	 * Set subject text.
	 *
	 * @param   String  $subject
	 */
	public function setSubject($subject)
	{
		$this->Subject = $this->encodeMimeHeader(mb_convert_encoding($subject, 'JIS', $this->InternalEncoding));
	}

	/**
	 * Set the From and FromName properties.
	 *
	 * @param   String  $address
	 * @param   String  $name
	 * @param   Boolean
	 * @throws  phpmailerException
	 * @return  Boolean
	 */
	public function setFrom($address, $name = '', $auto = true)
	{
		if (!empty($name))
			$name = $this->encodeMimeHeader(mb_convert_encoding($name, 'JIS', $this->InternalEncoding));
		return parent::setFrom($address, $name, $auto);
	}

	/**
	 * Set body text(text/plain).
	 *
	 * @param   String  $body
	 */
	public function setBody($body)
	{
		$this->Body = mb_convert_encoding($body, 'JIS', $this->InternalEncoding);
		$this->AltBody = '';
		$this->isHTML(false);
	}

	/**
	 * Set body text(text/html).
	 *
	 * @param   String  $body
	 */
	public function setHtmlBody($body)
	{
		$this->Body = mb_convert_encoding($body, 'JIS', $this->InternalEncoding);
		$this->isHTML(true);
	}

	/**
	 * Set altanative body text(text/plain).
	 *
	 * @param   String  $body
	 */
	public function setAltBody($body)
	{
		$this->AltBody = mb_convert_encoding($body, 'JIS', $this->InternalEncoding);
	}

	/**
	 * Add custom header.
	 *
	 * @param   String  $key
	 * @param   String  $value
	 */
	public function addHeader($key, $value)
	{
		if ($value)
			$this->addCustomHeader($key . ':' . $this->encodeMimeHeader(mb_convert_encoding($value, 'JIS', $this->InternalEncoding)));
	}

	/**
	 * Get error message.
	 *
	 * @return  String
	 */
	public function getErrorMessage()
	{
		return $this->ErrorInfo;
	}

	/**
	 * Disabled PHPMailer of encodeHeader.
	 */
	public function encodeHeader($string, $position = 'text')
	{
		return $string;
	}

}
