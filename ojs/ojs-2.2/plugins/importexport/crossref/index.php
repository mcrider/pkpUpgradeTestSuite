<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for CrossRef export plugin.
 *
 * @package plugins.importexport.crossref
 *
 * $Id: index.php,v 1.6 2007/07/24 18:18:51 asmecher Exp $
 */

require_once('CrossRefExportPlugin.inc.php');

return new CrossRefExportPlugin();

?>
