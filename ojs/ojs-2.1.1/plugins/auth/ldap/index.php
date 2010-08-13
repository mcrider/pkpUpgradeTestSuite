<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for loading the LDAP authentiation plugin.
 *
 * $Id: index.php,v 1.2 2006/06/12 23:26:16 alec Exp $
 */

require('LDAPAuthPlugin.inc.php');

return new LDAPAuthPlugin();

?>
