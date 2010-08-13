<?php

/**
 * @defgroup plugins_importexport_crossref
 */
 
/**
 * @file plugins/importexport/crossref/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_crossref
 * @brief Wrapper for CrossRef export plugin.
 *
 */

// $Id: index.php,v 1.9 2009/04/08 19:54:45 asmecher Exp $


require_once('CrossRefExportPlugin.inc.php');

return new CrossRefExportPlugin();

?>
