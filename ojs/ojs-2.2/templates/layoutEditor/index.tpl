{**
 * index.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Layout editor index.
 *
 * $Id: index.tpl,v 1.15 2007/09/04 16:31:45 asmecher Exp $
 *}
{assign var="pageTitle" value="user.role.layoutEditor"}
{include file="common/header.tpl"}

<h3>{translate key="article.submissions"}</h3>

<ul class="plain">
	<li>&#187; <a href="{url op="submissions" path="active"}">{translate key="common.queue.short.active"}</a></li>
	<li>&#187; <a href="{url op="submissions" path="completed"}">{translate key="common.queue.short.completed"}</a></li>
</ul>

<h3>{translate key="editor.navigation.issues"}</h3>

<ul class="plain">
	<li>&#187; <a href="{url op="futureIssues"}">{translate key="editor.navigation.futureIssues"}</a></li>
</ul>

{include file="common/footer.tpl"}
