<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for SEHL (Search Engine HighLighting) plugin.
 *
 * @package plugins.generic.sehl
 *
 * $Id: index.php,v 1.1 2007/08/03 23:14:33 asmecher Exp $
 */

require_once('SehlPlugin.inc.php');

return new SehlPlugin();

?> 
