<?php

/**
 * @defgroup plugins_blocks_keyword_cloud
 */
 
/**
 * @file plugins/blocks/keywordCloud/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_keyword_cloud
 * @brief Wrapper for keyword cloud block plugin.
 *
 */

// $Id: index.php,v 1.1 2009/05/27 16:02:16 asmecher Exp $


require_once('KeywordCloudBlockPlugin.inc.php');

return new KeywordCloudBlockPlugin();

?> 
