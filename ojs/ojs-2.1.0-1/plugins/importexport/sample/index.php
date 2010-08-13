<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for sample import/export plugin.
 *
 * $Id: index.php,v 1.1 2005/06/04 00:44:42 alec Exp $
 */

require('SampleImportExportPlugin.inc.php');

return new SampleImportExportPlugin();

?>
