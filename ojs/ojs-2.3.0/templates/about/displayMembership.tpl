{**
 * displayMembership.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display group membership information.
 *
 * $Id: displayMembership.tpl,v 1.10 2009/05/26 01:31:17 mcrider Exp $
 *}
{strip}
{assign var="pageTitle" value="about.people"}
{include file="common/header.tpl"}
{/strip}

<div id="displayMembership">
<h4>{$group->getLocalizedTitle()}</h4>
{assign var=groupId value=$group->getId()}

{foreach from=$memberships item=member}
	{assign var=user value=$member->getUser()}
	<div id="member"><a href="javascript:openRTWindow('{url op="editorialTeamBio" path=$user->getId()}')">{$user->getFullName()|escape}</a>{if $user->getAffiliation()}, {$user->getAffiliation()|escape}{/if}{if $user->getCountry()}{assign var=countryCode value=$user->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</div>
	<br />
{/foreach}
</div>

{include file="common/footer.tpl"}