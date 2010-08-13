<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for COUNTER stats plugin.
 *
 * $Id: index.php,v 1.1 2006/05/31 22:17:11 alec Exp $
 */

require('CounterPlugin.inc.php');

return new CounterPlugin();

?>
