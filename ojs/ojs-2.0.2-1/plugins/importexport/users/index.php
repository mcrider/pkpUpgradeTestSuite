<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for XML user import/export plugin.
 *
 * $Id: index.php,v 1.1 2005/06/24 02:02:05 alec Exp $
 */

require('UserImportExportPlugin.inc.php');

return new UserImportExportPlugin();

?>
