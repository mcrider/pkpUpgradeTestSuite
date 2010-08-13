{**
 * view.tpl
 *
 * Copyright (c) 2003-2007 John Willinsky
 * Distributed under the GNU GPL v1. For full terms see the file docs/COPYING.
 *
 * View full announcement text. 
 *
 * $Id: view.tpl,v 1.5 2007/09/04 16:31:44 asmecher Exp $
 *}
{assign var="pageTitleTranslated" value=$announcementTitle}
{assign var="pageId" value="announcement.view"}
{include file="common/header.tpl"}

<table width="100%">
	<tr>
		<td>{$announcement->getAnnouncementDescription()|nl2br}</td>
	</tr>
</table>

{include file="common/footer.tpl"}
