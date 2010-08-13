<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for donation block plugin.
 *
 * @package plugins.blocks.user
 *
 * $Id: index.php,v 1.1 2007/09/23 23:26:22 jalperin Exp $
 */

require_once('DonationBlockPlugin.inc.php');

return new DonationBlockPlugin();

?> 
