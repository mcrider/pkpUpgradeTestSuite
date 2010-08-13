<?php

/**
 * @defgroup plugins_blocks_fontSize
 */
 
/**
 * @file plugins/blocks/fontSize/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_fontSize
 * @brief Wrapper for font size block plugin.
 *
 */

// $Id: index.php,v 1.6 2009/04/08 19:54:34 asmecher Exp $


require_once('FontSizeBlockPlugin.inc.php');

return new FontSizeBlockPlugin();

?> 
