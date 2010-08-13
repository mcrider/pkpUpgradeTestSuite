<?php

/**
 * @defgroup plugins_blocks_fontSize
 */
 
/**
 * @file plugins/blocks/fontSize/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_fontSize
 * @brief Wrapper for font size block plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:13 asmecher Exp $


require_once('FontSizeBlockPlugin.inc.php');

return new FontSizeBlockPlugin();

?> 
