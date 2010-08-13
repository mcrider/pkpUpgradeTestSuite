<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for CrossRef export plugin.
 *
 * $Id: index.php,v 1.2 2006/06/12 23:31:25 alec Exp $
 */

require('CrossRefExportPlugin.inc.php');

return new CrossRefExportPlugin();

?>
