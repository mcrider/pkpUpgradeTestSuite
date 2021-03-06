<?php

/**
 * @file ClassicRedThemePlugin.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.themes.classicRed
 * @class ClassicRedThemePlugin
 *
 * "ClassicRed" theme plugin
 *
 * $Id: ClassicRedThemePlugin.inc.php,v 1.4 2007/10/22 22:41:48 asmecher Exp $
 */

import('classes.plugins.ThemePlugin');

class ClassicRedThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'ClassicRedThemePlugin';
	}

	function getDisplayName() {
		return 'ClassicRed Theme';
	}

	function getDescription() {
		return 'Classic red layout';
	}

	function getStylesheetFilename() {
		return 'classicRed.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
