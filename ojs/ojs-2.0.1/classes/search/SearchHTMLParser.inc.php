<?php

/**
 * SearchHTMLParser.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package search
 *
 * Class to extract text from an HTML file.
 *
 * $Id: SearchHTMLParser.inc.php,v 1.2 2005/04/25 20:38:11 alec Exp $
 */

import('search.SearchTextParser');

class SearchHTMLParser extends SearchTextParser {

	function toText() {
		return strip_tags(parent::toText());
	}
	
}

?>
