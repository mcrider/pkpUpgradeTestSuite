{**
 * index.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal index page.
 *
 * $Id: journal.tpl,v 1.15 2005/11/16 19:45:00 alec Exp $
 *}

{assign var="pageTitleTranslated" value=$siteTitle}
{include file="common/header.tpl"}

<div>{$journalDescription}</div>

<br />

{if $homepageImage}
<div align="center"><img src="{$publicFilesDir}/{$homepageImage.uploadName|escape}" width="{$homepageImage.width}" height="{$homepageImage.height}" border="0" alt="" /></div>
{/if}

<br /><br />

{$additionalHomeContent}

{if $issue}
	{* Display the table of contents or cover page of the current issue. *}
	<h3>{$issue->getIssueIdentification()|escape}</h3>
	{include file="issue/view.tpl"}
{/if}

{include file="common/footer.tpl"}
