<?php

/**
 * @defgroup plugins_blocks_role
 */
 
/**
 * @file plugins/blocks/role/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_role
 * @brief Wrapper for role block plugin.
 *
 */

// $Id: index.php,v 1.4 2009/04/08 19:54:35 asmecher Exp $


require_once('RoleBlockPlugin.inc.php');

return new RoleBlockPlugin();

?> 
