{**
 * editorialTeam.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * About the Journal index.
 *
 * $Id: editorialTeamBoard.tpl,v 1.7 2005/11/29 01:15:34 alec Exp $
 *}

{assign var="pageTitle" value="about.editorialTeam"}
{include file="common/header.tpl"}

{foreach from=$groups item=group}
<h4>{$group->getGroupTitle()}</h4>
{assign var=groupId value=$group->getGroupId()}
{assign var=members value=$teamInfo[$groupId]}

{foreach from=$members item=member}
	{assign var=user value=$member->getUser()}
	<a href="javascript:openRTWindow('{url op="editorialTeamBio" path=$user->getUserId()}')">{$user->getFullName()|escape}</a>{if $user->getAffiliation()}, {$user->getAffiliation()|escape}{/if}{if $user->getCountry()}{assign var=countryCode value=$user->getCountry()}{assign var=country value=$countries.$countryCode}, {$country}{/if}
	<br />
{/foreach}
{/foreach}


{include file="common/footer.tpl"}
