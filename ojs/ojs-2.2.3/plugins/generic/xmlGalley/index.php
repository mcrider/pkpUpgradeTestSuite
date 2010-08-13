<?php

/**
 * @defgroup plugins_generic_xmlGalley
 */
 
/**
 * @file plugins/generic/xmlGalley/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_xmlGalley
 * @brief Wrapper for XMLGalleyPlugin
 *
 */

// $Id: index.php,v 1.8.2.1 2009/04/08 19:43:20 asmecher Exp $


require_once('XMLGalleyPlugin.inc.php');

return new XMLGalleyPlugin();

?> 
