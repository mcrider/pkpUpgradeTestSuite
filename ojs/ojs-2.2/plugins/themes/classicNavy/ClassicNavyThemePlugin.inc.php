<?php

/**
 * @file ClassicNavyThemePlugin.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.themes.classicNavy
 * @class ClassicNavyThemePlugin
 *
 * "ClassicNavy" theme plugin
 *
 * $Id: ClassicNavyThemePlugin.inc.php,v 1.4 2007/10/22 22:41:48 asmecher Exp $
 */

import('classes.plugins.ThemePlugin');

class ClassicNavyThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'ClassicNavyThemePlugin';
	}

	function getDisplayName() {
		return 'ClassicNavy Theme';
	}

	function getDescription() {
		return 'Classic navy layout';
	}

	function getStylesheetFilename() {
		return 'classicNavy.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
