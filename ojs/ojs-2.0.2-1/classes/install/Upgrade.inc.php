<?php

/**
 * Upgrade.inc.php
 *
 * Copyright (c) 2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package install
 *
 * Perform system upgrade.
 *
 * $Id: Upgrade.inc.php,v 1.2 2005/09/10 20:54:17 kevin Exp $
 */

import('install.Installer');

class Upgrade extends Installer {

	/**
	 * Constructor.
	 * @param $params array upgrade parameters
	 */
	function Upgrade($params) {
		parent::Installer('upgrade.xml', $params);
	}
	
	
	//
	// Upgrade actions
	//
	
	/**
	 * Rebuild the search index.
	 * @return boolean
	 */
	function rebuildSearchIndex() {
		import('search.ArticleSearchIndex');
		ArticleSearchIndex::rebuildIndex();
		return true;
	}
	
}

?>
