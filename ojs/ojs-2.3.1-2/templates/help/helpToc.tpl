{**
 * helpToc.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the help table of contents
 *
 * $Id: helpToc.tpl,v 1.13 2009/04/08 19:54:51 asmecher Exp $
 *}
{strip}
{translate|assign:applicationHelpTranslated key="help.ojsHelp"}
{include file="core:help/helpToc.tpl"}
{/strip}