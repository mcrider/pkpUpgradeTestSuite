{**
 * journals.tpl
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin journal list
 *
 * $Id: journals.tpl,v 1.7 2006/06/12 23:26:32 alec Exp $
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
