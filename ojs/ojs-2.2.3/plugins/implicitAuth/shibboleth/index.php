<?php

/**
 * @file plugins/implicitAuth/shibboleth/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 */

// $Id: index.php,v 1.2.2.1 2009/04/08 19:43:21 asmecher Exp $


require_once('ShibAuthPlugin.inc.php');

return new ShibAuthPlugin();

?>
