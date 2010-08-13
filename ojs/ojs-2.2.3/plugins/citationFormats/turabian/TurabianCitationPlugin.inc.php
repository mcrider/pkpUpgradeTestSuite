<?php

/**
 * @file TurabianCitationPlugin.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class TurabianCitationPlugin
 * @ingroup plugins_citationFormats_turabian
 *
 * @brief Turabian citation format plugin
 */

// $Id: TurabianCitationPlugin.inc.php,v 1.5.2.1 2009/04/08 19:43:14 asmecher Exp $


import('classes.plugins.CitationPlugin');

class TurabianCitationPlugin extends CitationPlugin {
	function register($category, $path) {
		$success = parent::register($category, $path);
		$this->addLocaleData();
		return $success;
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'TurabianCitationPlugin';
	}

	function getDisplayName() {
		return Locale::translate('plugins.citationFormats.turabian.displayName');
	}

	function getCitationFormatName() {
		return Locale::translate('plugins.citationFormats.turabian.citationFormatName');
	}

	function getDescription() {
		return Locale::translate('plugins.citationFormats.turabian.description');
	}

}

?>
