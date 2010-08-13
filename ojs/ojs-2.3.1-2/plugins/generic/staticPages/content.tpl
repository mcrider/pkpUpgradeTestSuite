{**
 * plugins/generic/staticPages/content.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display Static Page content
 *
 * $Id: journal.tpl,v 1.32 2009/07/06 17:43:00 asmecher Exp $
 *}
{assign var="pageTitleTranslated" value=$title}
{include file="common/header.tpl"}

{$content}

{include file="common/footer.tpl"}
