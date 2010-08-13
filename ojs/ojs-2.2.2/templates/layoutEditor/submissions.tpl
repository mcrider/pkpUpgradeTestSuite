{**
 * submissions.tpl
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Layout editor submissions list.
 *
 * $Id: submissions.tpl,v 1.7 2008/06/11 18:55:19 asmecher Exp $
 *}
{assign var="pageTitle" value="common.queue.long.$pageToDisplay"}
{include file="common/header.tpl"}

<ul class="menu">
	<li{if ($pageToDisplay == "active")} class="current"{/if}><a href="{url op="submissions" path="active"}">{translate key="common.queue.short.active"}</a></li>
	<li{if ($pageToDisplay == "completed")} class="current"{/if}><a href="{url op="submissions" path="completed"}">{translate key="common.queue.short.completed"}</a></li>
</ul>

<br />

{include file="layoutEditor/$pageToDisplay.tpl"}

{include file="common/footer.tpl"}
