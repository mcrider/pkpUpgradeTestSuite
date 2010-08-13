<?php

/**
 * @file plugins/implicitAuth/shibboleth/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 */

// $Id: index.php,v 1.3 2009/04/08 19:54:44 asmecher Exp $


require_once('ShibAuthPlugin.inc.php');

return new ShibAuthPlugin();

?>
