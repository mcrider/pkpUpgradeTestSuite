{**
 * registerSite.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site registration.
 *
 * $Id: registerSite.tpl,v 1.18 2009/05/26 01:31:18 mcrider Exp $
 *}
{strip}
{include file="common/header.tpl"}
{/strip}
<div id="journals">
{iterate from=journals item=journal}
	{if !$notFirstJournal}
		{translate key="user.register.selectJournal"}:
		<ul>
		{assign var=notFirstJournal value=1}
	{/if}
	<li><a href="{url journal=$journal->getPath() page="user" op="register"}">{$journal->getLocalizedTitle()|escape}</a></li>
{/iterate}
{if $journals->wasEmpty()}
	{translate key="user.register.noJournals"}
{else}
	</ul>
{/if}
</div>
{include file="common/footer.tpl"}
