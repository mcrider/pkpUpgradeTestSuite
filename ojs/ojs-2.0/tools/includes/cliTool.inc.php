<?php

/**
 * cli.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package tools
 *
 * Initialization code for command-line scripts.
 *
 * $Id: cliTool.inc.php,v 1.2 2004/07/26 06:43:21 kevin Exp $
 */

/** Initialization code */
define('PWD', getcwd());
chdir(dirname(dirname(dirname(__FILE__)))); /* Change to base directory */
require('includes/driver.inc.php');
define('SESSION_DISABLE_INIT', 1);

class CommandLineTool {

	/** @var string the script being executed */
	var $scriptName;
	
	/** @vary array Command-line arguments */
	var $argv;

	function CommandLineTool($argv = array()) {
		$this->argv = isset($argv) && is_array($argv) ? $argv : array();
		
		if (isset($_SERVER['SERVER_NAME'])) {
			die('This script can only be executed from the command-line');
		}
		
		$this->scriptName = isset($this->argv[0]) ? array_shift($this->argv) : '';
		
		if (isset($this->argv[0]) && $this->argv[0] == '-h') {
			$this->usage();
			exit(0);
		}
	}
	
	function usage() {
	}

}
?>
