<?php

/**
 * @defgroup plugins_importexport_native
 */
 
/**
 * @file plugins/importexport/doaj/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_native
 * @brief Wrapper for native XML import/export plugin.
 *
 */

// $Id: index.php,v 1.2 2008/07/01 01:16:14 asmecher Exp $


require_once('DOAJPlugin.inc.php');

return new DOAJPlugin();

?>
