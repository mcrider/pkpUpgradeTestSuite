<?php

/**
 * @defgroup plugins_gateways_resolver
 */
 
/**
 * @file plugins/gateways/resolver/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_gateways_resolver
 * @brief Wrapper for Resolver gateway plugin.
 *
 */

// $Id: index.php,v 1.8.2.1 2009/04/08 19:43:14 asmecher Exp $


require_once('ResolverPlugin.inc.php');

return new ResolverPlugin();

?>
