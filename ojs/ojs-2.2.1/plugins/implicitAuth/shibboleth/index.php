<?php

/**
 * @file plugins/implicitAuth/shibboleth/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 */

// $Id: index.php,v 1.2 2008/07/01 01:16:14 asmecher Exp $


require_once('ShibAuthPlugin.inc.php');

return new ShibAuthPlugin();

?>
