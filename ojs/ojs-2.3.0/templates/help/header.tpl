{**
 * header.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common header for help pages.
 *
 * $Id: header.tpl,v 1.21 2009/04/08 19:54:51 asmecher Exp $
 *}
{strip}
{translate|assign:applicationHelpTranslated key="help.ojsHelp"}
{include file="core:help/header.tpl"}
{/strip}