{**
 * list.tpl
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display list of announcements without site header or footer. 
 *
 * $Id: list.tpl,v 1.3 2006/06/12 23:26:26 alec Exp $
 *}

<table width="100%" class="listing">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
{iterate from=announcements item=announcement}
	<tr valign="top">
	{if $announcement->getTypeId() != null}
		<td width="80%"><h4>{$announcement->getTypeName()|escape}: {$announcement->getTitle()|escape}</h4></td>
	{else}
		<td width="80%"><h4>{$announcement->getTitle()|escape}</h4></td>
	{/if}
		<td width="20%">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td>{$announcement->getDescriptionShort()|nl2br}</td>
		<td valign="bottom" align="right"><a href="{url page="announcement" op="view" path=$announcement->getAnnouncementId()}">{translate key="announcement.viewLink"}</a></td>
	</tr>
	<tr>
		<td colspan="2" class="{if $announcements->eof()}end{/if}separator">&nbsp;</td>
	</tr>
{/iterate}
{if $announcements->wasEmpty()}
	<tr>
		<td colspan="2" class="nodata">{translate key="announcement.noneExist"}</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
{/if}
</table>
