<?php

/**
 * @defgroup plugins_generic_thesisFeed
 */
 
/**
 * @file plugins/generic/thesisFeed/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_thesisFeed
 * @brief Wrapper for Thesis Feed plugin. Based on Web Feed Plugin.
 *
 */

// $Id: index.php,v 1.3 2009/04/08 19:54:43 asmecher Exp $


require_once('ThesisFeedPlugin.inc.php');

return new ThesisFeedPlugin(); 

?> 
