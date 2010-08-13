<?php

/**
 * Transcoder.inc.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package db
 *
 * "iconv"-based transcoder. NOTE: iconv may not always be available.
 *
 * $Id: Transcoder.inc.php,v 1.2 2006/06/12 23:25:50 alec Exp $
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
