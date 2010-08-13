{**
 * formErrors.tpl
 *
 * Copyright (c) 2003-2006 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List errors that occurred during form processing.
 *
 * $Id: formErrors.tpl,v 1.4 2006/06/12 23:26:27 alec Exp $
 *}

{if $isError}
<p>
	<span class="formError">{translate key="form.errorsOccurred"}:</span>
	<ul class="formErrorList">
	{foreach key=field item=message from=$errors}
		<li>{translate key="$message"}</li>
	{/foreach}
	</ul>
</p>
{/if}
