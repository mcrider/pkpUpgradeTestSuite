<?php

/**
 * @file classes/plugins/GenericPlugin.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class GenericPlugin
 * @ingroup plugins
 *
 * @brief Abstract class for generic plugins
 */

// $Id: GenericPlugin.inc.php,v 1.12 2009/12/10 01:40:11 asmecher Exp $


import('plugins.Plugin');

class GenericPlugin extends Plugin {
	function GenericPlugin() {
		parent::Plugin();
	}
	// No additional functions for now.
}

?>
