<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for Resolver gateway plugin.
 *
 * @package plugins.gateways.resolver
 *
 * $Id: index.php,v 1.6 2007/07/24 18:18:50 asmecher Exp $
 */

require_once('ResolverPlugin.inc.php');

return new ResolverPlugin();

?>
