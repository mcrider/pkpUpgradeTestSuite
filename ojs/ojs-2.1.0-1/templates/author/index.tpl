{**
 * index.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal author index.
 *
 * $Id: index.tpl,v 1.11 2005/11/26 19:45:35 alec Exp $
 *}

{assign var="pageTitle" value="common.queue.long.$pageToDisplay"}
{include file="common/header.tpl"}

<ul class="menu">
	<li{if ($pageToDisplay == "active")} class="current"{/if}><a href="{url op="index" path="active"}">{translate key="common.queue.short.active"}</a></li>
	<li{if ($pageToDisplay == "completed")} class="current"{/if}><a href="{url op="index" path="completed"}">{translate key="common.queue.short.completed"}</a></li>
</ul>

<br />

{include file="author/$pageToDisplay.tpl"}

<p>{translate key="author.submit.startHere"}<br/>
<a href="{url op="submit"}" class="action">{translate key="author.submit.startHereLink"}</a><br />
</p>

{include file="common/footer.tpl"}
