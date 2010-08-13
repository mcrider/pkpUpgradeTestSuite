<?php

/**
 * @defgroup plugins_importexport_crossref
 */
 
/**
 * @file plugins/importexport/crossref/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_crossref
 * @brief Wrapper for CrossRef export plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:14 asmecher Exp $


require_once('CrossRefExportPlugin.inc.php');

return new CrossRefExportPlugin();

?>
