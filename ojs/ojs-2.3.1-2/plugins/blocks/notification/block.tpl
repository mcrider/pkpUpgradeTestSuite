{**
 * block.tpl
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "Notification" block.
 *
 * $Id: block.tpl,v 1.4 2009/09/23 16:11:47 asmecher Exp $
 *}
 {if $currentJournal}
<div class="block" id="notification">
	<span class="blockTitle">{translate key="notification.notifications"}</span>
	<ul>
		{if $isUserLoggedIn}
			<li><a href="{url page="notification"}">{translate key="common.view"}</a>
				{if $unreadNotifications > 0}{translate key="notification.notificationsNew" numNew=$unreadNotifications}{/if}</li>
			<li><a href="{url page="notification" op="settings"}">{translate key="common.manage"}</a></li>			
		{else}
			<li><a href="{url page="notification"}">{translate key="common.view"}</a></li>
			<li><a href="{url page="notification" op="subscribeMailList"}">{translate key="notification.subscribe"}</a> / <a href="{url page="notification" op="unsubscribeMailList"}">{translate key="notification.unsubscribe"}</a></li>	
		{/if}
	</ul>
</div>
{/if}
