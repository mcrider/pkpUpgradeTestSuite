<?php

/**
 * @defgroup plugins_importexport_pubmed
 */
 
/**
 * @file plugins/importexport/pubmed/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_pubmed
 * @brief Wrapper for PubMed export plugin.
 *
 */

// $Id: index.php,v 1.8 2008/07/01 01:16:14 asmecher Exp $


require_once('PubMedExportPlugin.inc.php');

return new PubMedExportPlugin();

?>
