<?php

/**
 * @file classes/help/Help.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Help
 * @ingroup help
 *
 * @brief Provides methods for translating help topic keys to their respected topic
 * help ids.
 */

// $Id: Help.inc.php,v 1.20 2009/05/12 16:57:20 asmecher Exp $


import('help.PKPHelp');

class Help extends PKPHelp {
	/**
	 * Constructor.
	 */
	function Help() {
		parent::PKPHelp();
		import('help.OJSHelpMappingFile');
		$mainMappingFile = new OJSHelpMappingFile();
		$this->addMappingFile($mainMappingFile);
	}
}

?>
