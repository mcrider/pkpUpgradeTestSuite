<?php

/**
 * Transcoder.inc.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package db
 *
 * "iconv"-based transcoder. NOTE: iconv may not always be available.
 *
 * $Id: Transcoder.inc.php,v 1.1 2006/01/05 21:05:10 alec Exp $
 */

class Transcoder {
	var $fromEncoding;
	var $toEncoding;

	function Transcoder($fromEncoding, $toEncoding) {
		$this->fromEncoding = $fromEncoding;
		$this->toEncoding = $toEncoding;
	}

	function trans($string) {
		return iconv($this->fromEncoding, $this->toEncoding . '//TRANSLIT', $string);
	}
}

?>
