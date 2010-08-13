<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for BibTeX citation plugin.
 *
 * @package plugins.citationFormats.bibtex
 *
 * $Id: index.php,v 1.3 2007/07/24 18:18:49 asmecher Exp $
 */

require_once('BibtexCitationPlugin.inc.php');

return new BibtexCitationPlugin();

?>
