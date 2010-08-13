<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for Erudit XML export plugin.
 *
 * $Id: index.php,v 1.1 2005/07/19 01:13:32 alec Exp $
 */

require('EruditExportPlugin.inc.php');

return new EruditExportPlugin();

?>
