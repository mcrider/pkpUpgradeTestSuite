<?php

/**
 * @defgroup plugins_importexport_quickSubmit
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for QuickSubmit plugin.
 *
 * @ingroup plugins_importexport_quickSubmit
 */

//$Id: index.php,v 1.1 2009/06/16 21:09:19 mcrider Exp $

require_once('QuickSubmitPlugin.inc.php');

return new QuickSubmitPlugin();

?>
