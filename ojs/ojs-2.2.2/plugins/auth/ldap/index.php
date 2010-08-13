<?php

/**
 * @defgroup plugins_auth_ldap
 */
 
/**
 * @file plugins/auth/ldap/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_auth_ldap
 * @brief Wrapper for loading the LDAP authentiation plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:12 asmecher Exp $


require_once('LDAPAuthPlugin.inc.php');

return new LDAPAuthPlugin();

?>
