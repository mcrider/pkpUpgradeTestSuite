{**
 * index.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal author index.
 *
 * $Id: index.tpl,v 1.17 2007/11/06 23:08:40 asmecher Exp $
 *}
{assign var="pageTitle" value="common.queue.long.$pageToDisplay"}
{include file="common/header.tpl"}

<ul class="menu">
	<li{if ($pageToDisplay == "active")} class="current"{/if}><a href="{url op="index" path="active"}">{translate key="common.queue.short.active"}</a></li>
	<li{if ($pageToDisplay == "completed")} class="current"{/if}><a href="{url op="index" path="completed"}">{translate key="common.queue.short.completed"}</a></li>
</ul>

<br />

{include file="author/$pageToDisplay.tpl"}

<h4>{translate key="author.submit.startHereTitle"}</h4>
{url|assign:"submitUrl" op="submit"}
{translate submitUrl=$submitUrl key="author.submit.startHereLink"}<br />

{include file="common/footer.tpl"}
