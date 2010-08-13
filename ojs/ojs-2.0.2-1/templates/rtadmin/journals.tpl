{**
 * journals.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin journal list
 *
 * $Id: journals.tpl,v 1.5 2005/08/03 19:40:30 alec Exp $
 *}

{assign var="pageTitle" value="rt.readingTools"}
{include file="common/header.tpl"}

<h3>{translate key="user.myJournals"}</h3>

<ul class="plain">
{foreach from=$journals item=journal}
<li>&#187; <a href="{$indexUrl}/{$journal->getPath()|escape:"url"}/rtadmin">{$journal->getTitle()|escape}</a></li>
{/foreach}
</ul>

{include file="common/footer.tpl"}
