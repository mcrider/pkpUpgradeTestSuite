<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for native XML import/export plugin.
 *
 * @package plugins.importexport.native
 *
 * $Id: index.php,v 1.6 2007/07/24 18:18:51 asmecher Exp $
 */

require_once('NativeImportExportPlugin.inc.php');

return new NativeImportExportPlugin();

?>
