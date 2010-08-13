<?php

/**
 * @defgroup plugins_importexport_sample
 */
 
/**
 * @file plugins/importexport/sample/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_sample
 * @brief Wrapper for sample import/export plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:14 asmecher Exp $


require_once('SampleImportExportPlugin.inc.php');

return new SampleImportExportPlugin();

?>
