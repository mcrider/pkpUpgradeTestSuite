<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for native XML import/export plugin.
 *
 * $Id: index.php,v 1.2 2006/06/12 23:26:21 alec Exp $
 */

require('NativeImportExportPlugin.inc.php');

return new NativeImportExportPlugin();

?>
