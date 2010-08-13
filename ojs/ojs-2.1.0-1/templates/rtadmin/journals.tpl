{**
 * journals.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin journal list
 *
 * $Id: journals.tpl,v 1.6 2005/11/26 19:45:40 alec Exp $
 *}

{assign var="pageTitle" value="rt.readingTools"}
{include file="common/header.tpl"}

<h3>{translate key="user.myJournals"}</h3>

<ul class="plain">
{foreach from=$journals item=journal}
<li>&#187; <a href="{url journal=$journal->getPath() page="rtadmin"}">{$journal->getTitle()|escape}</a></li>
{/foreach}
</ul>

{include file="common/footer.tpl"}
