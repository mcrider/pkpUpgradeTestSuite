{**
 * registerSite.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site registration.
 *
 * $Id: registerSite.tpl,v 1.6 2005/05/05 14:25:16 alec Exp $
 *}

{include file="common/header.tpl"}
{translate key="user.register.selectJournal"}:

<ul>
{iterate from=journals item=journal}
	<li><a href="{$indexUrl}/{$journal->getPath()}/user/register">{$journal->getTitle()}</a></li>
{/iterate}
</ul>

{include file="common/footer.tpl"}
