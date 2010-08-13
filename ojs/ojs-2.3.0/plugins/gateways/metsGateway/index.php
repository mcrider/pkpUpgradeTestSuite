<?php

/**
 * @defgroup plugins
 */
 
/**
 * @file plugins/gateways/metsGateway/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins
 * @brief Wrapper for Journal Export gateway plugin.
 *
 */

// $Id: index.php,v 1.4 2009/04/08 19:54:39 asmecher Exp $


require_once('MetsGatewayPlugin.inc.php');

return new METSGatewayPlugin();

?>
