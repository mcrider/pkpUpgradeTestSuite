<?php

/**
 * @file BibtexCitationPlugin.inc.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.citationFormats.bibtex
 * @class BibtexCitationPlugin
 *
 * BibTeX citation format plugin
 *
 * $Id: BibtexCitationPlugin.inc.php,v 1.3 2007/07/24 18:18:49 asmecher Exp $
 */

import('classes.plugins.CitationPlugin');

class BibtexCitationPlugin extends CitationPlugin {
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
		return 'BibtexCitationPlugin';
	}

	function getDisplayName() {
		return Locale::translate('plugins.citationFormats.bibtex.displayName');
	}

	function getCitationFormatName() {
		return Locale::translate('plugins.citationFormats.bibtex.citationFormatName');
	}

	function getDescription() {
		return Locale::translate('plugins.citationFormats.bibtex.description');
	}

}

?>
