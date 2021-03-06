<?php

/**
 * @defgroup plugins_auth_ldap
 */
 
/**
 * @file plugins/auth/ldap/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_auth_ldap
 * @brief Wrapper for loading the LDAP authentiation plugin.
 *
 */

// $Id: index.php,v 1.8.2.1 2009/04/08 19:43:08 asmecher Exp $


require_once('LDAPAuthPlugin.inc.php');

return new LDAPAuthPlugin();

?>
