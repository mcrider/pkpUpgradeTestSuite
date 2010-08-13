{**
 * archive.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Issue Archive.
 *
 * $Id: archive.tpl,v 1.11 2005/06/13 16:10:58 alec Exp $
 *}

{assign var="pageTitle" value="archive.archives"} 
{include file="common/header.tpl"}

{iterate from=issues item=issue}
	{if $issue->getYear() != $lastYear}
		{if !$notFirstYear}
			{assign var=notFirstYear value=1}
		{else}
			</div>
			<br />
			<div class="separator"></div>
		{/if}
		<div>
		<h3>{$issue->getYear()}</h3>
		{assign var=lastYear value=$issue->getYear()}
	{/if}
	<h4><a href="{$requestPageUrl}/view/{$issue->getBestIssueId($currentJournal)}">{$issue->getIssueIdentification()}</a></h4>
{/iterate}

{if !$issues->wasEmpty()}
	{page_info iterator=$issues}&nbsp;&nbsp;&nbsp;&nbsp;
	{page_links name="issues" iterator=$issues}
{else}
	{translate key="current.noCurrentIssueDesc"}
{/if}

{include file="common/footer.tpl"}
