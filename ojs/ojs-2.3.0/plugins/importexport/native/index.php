<?php

/**
 * @defgroup plugins_importexport_native
 */
 
/**
 * @file plugins/importexport/native/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_native
 * @brief Wrapper for native XML import/export plugin.
 *
 */

// $Id: index.php,v 1.9 2009/04/08 19:54:46 asmecher Exp $


require_once('NativeImportExportPlugin.inc.php');

return new NativeImportExportPlugin();

?>
