{**
 * journals.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin journal list
 *
 * $Id: journals.tpl,v 1.4 2005/04/04 17:43:24 alec Exp $
 *}

{assign var="pageTitle" value="rt.readingTools"}
{include file="common/header.tpl"}

<h3>{translate key="user.myJournals"}</h3>

<ul class="plain">
{foreach from=$journals item=journal}
<li>&#187; <a href="{$indexUrl}/{$journal->getPath()}/rtadmin">{$journal->getTitle()}</a></li>
{/foreach}
</ul>

{include file="common/footer.tpl"}
