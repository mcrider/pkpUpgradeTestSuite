<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for COUNTER stats plugin.
 *
 * @package plugins.generic.counter
 *
 * $Id: index.php,v 1.5 2007/07/24 18:18:50 asmecher Exp $
 */

require_once('CounterPlugin.inc.php');

return new CounterPlugin();

?>
