<?php

/**
 * index.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins
 *
 * Wrapper for Google Scholar gateway plugin.
 *
 * $Id: index.php,v 1.1 2005/12/21 19:30:51 alec Exp $
 */

require('GoogleScholarPlugin.inc.php');

return new GoogleScholarPlugin();

?>
