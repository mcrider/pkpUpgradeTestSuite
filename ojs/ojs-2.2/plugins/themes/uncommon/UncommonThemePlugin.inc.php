<?php

/**
 * @file UncommonThemePlugin.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.themes.uncommon
 * @class UncommonThemePlugin
 *
 * "Uncommon" theme plugin
 *
 * $Id: UncommonThemePlugin.inc.php,v 1.5 2007/10/22 22:41:48 asmecher Exp $
 */

import('classes.plugins.ThemePlugin');

class UncommonThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'UncommonThemePlugin';
	}

	function getDisplayName() {
		return 'Uncommon Theme';
	}

	function getDescription() {
		return 'Chunky, blue, solid layout';
	}

	function getStylesheetFilename() {
		return 'uncommon.css';
	}
	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
