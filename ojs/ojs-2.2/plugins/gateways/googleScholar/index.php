<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for Google Scholar gateway plugin.
 *
 * @package plugins.gateways.googleScholar
 *
 * $Id: index.php,v 1.6 2007/07/24 18:18:50 asmecher Exp $
 */

require_once('GoogleScholarPlugin.inc.php');

return new GoogleScholarPlugin();

?>
