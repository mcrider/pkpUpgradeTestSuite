<?php

/**
 * @defgroup plugins_generic_externalFeed
 */
 
/**
 * @file plugins/generic/externalFeed/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_externalFeed
 * @brief Wrapper for ExternalFeed plugin.
 *
 */

// $Id: index.php,v 1.2 2009/10/14 04:06:09 michael Exp $


require_once('ExternalFeedPlugin.inc.php');

return new ExternalFeedPlugin();

?>
