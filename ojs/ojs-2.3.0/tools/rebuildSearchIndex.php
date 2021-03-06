<?php

/**
 * @file rebuildSearchIndex.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class rebuildSearchIndex
 * @ingroup tools
 *
 * @brief CLI tool to rebuild the article keyword search database.
 */

// $Id: rebuildSearchIndex.php,v 1.12 2009/04/08 19:54:53 asmecher Exp $


define('INDEX_FILE_LOCATION', dirname(dirname(__FILE__)) . '/index.php');
require(dirname(dirname(__FILE__)) . '/lib/pkp/classes/cliTool/CliTool.inc.php');

import('search.ArticleSearchIndex');

class rebuildSearchIndex extends CommandLineTool {

	/**
	 * Print command usage information.
	 */
	function usage() {
		echo "Script to rebuild article search index\n"
			. "Usage: {$this->scriptName}\n";
	}

	/**
	 * Rebuild the search index for all articles in all journals.
	 */
	function execute() {
		ArticleSearchIndex::rebuildIndex(true);
	}

}

$tool = new rebuildSearchIndex(isset($argv) ? $argv : array());
$tool->execute();
?>
