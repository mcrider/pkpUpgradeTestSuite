<?php

/**
 * @defgroup plugins_generic_webFeed
 */
 
/**
 * @file plugins/generic/webFeed/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_webFeed
 * @brief Wrapper for Web Feeds plugin.
 *
 */

// $Id: index.php,v 1.12 2008/07/01 01:16:13 asmecher Exp $


require_once('WebFeedPlugin.inc.php');

return new WebFeedPlugin(); 

?> 
