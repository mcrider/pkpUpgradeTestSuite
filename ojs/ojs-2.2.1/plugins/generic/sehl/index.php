<?php

/**
 * @defgroup plugins_generic_sehl
 */
 
/**
 * @file plugins/generic/sehl/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_sehl
 * @brief Wrapper for SEHL (Search Engine HighLighting) plugin.
 *
 */

// $Id: index.php,v 1.3 2008/07/01 01:16:13 asmecher Exp $


require_once('SehlPlugin.inc.php');

return new SehlPlugin();

?> 
