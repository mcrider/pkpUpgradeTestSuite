<?php

/**
 * @defgroup pages_login
 */

/**
 * @file pages/login/index.php
 *
 * Copyright (c) 2000-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_login
 * @brief PKPHandle login/logout requests.
 *
 */

// $Id: index.php,v 1.3 2009/05/13 00:13:20 asmecher Exp $


define('HANDLER_CLASS', 'PKPLoginHandler');

import('pages.login.PKPLoginHandler');

?>
