<?php

/**
 * @file RedbarThemePlugin.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.themes.redbar
 * @class RedbarThemePlugin
 *
 * "Redbar" theme plugin
 *
 * $Id: RedbarThemePlugin.inc.php,v 1.4 2007/10/22 22:41:48 asmecher Exp $
 */

import('classes.plugins.ThemePlugin');

class RedbarThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'RedbarThemePlugin';
	}

	function getDisplayName() {
		return 'Redbar Theme';
	}

	function getDescription() {
		return 'Redbar layout';
	}

	function getStylesheetFilename() {
		return 'redbar.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
