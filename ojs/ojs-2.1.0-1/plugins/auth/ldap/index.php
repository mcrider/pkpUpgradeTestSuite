<?php

/**
 * index.php
 *
 * Copyright (c) 2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for loading the LDAP authentiation plugin.
 *
 * $Id: index.php,v 1.1 2005/10/10 23:32:16 kevin Exp $
 */

require('LDAPAuthPlugin.inc.php');

return new LDAPAuthPlugin();

?>
