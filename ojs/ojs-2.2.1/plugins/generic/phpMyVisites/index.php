<?php

/**
 * @defgroup plugins_generic_phpMyVisites
 */
 
/**
 * @file plugins/generic/phpMyVisites/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_phpMyVisites
 * @brief Wrapper for phpMyVisites plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:13 asmecher Exp $


require_once('PhpMyVisitesPlugin.inc.php');

return new PhpMyVisitesPlugin();

?>
