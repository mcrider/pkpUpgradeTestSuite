{**
 * editorDecisionComment.tpl
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Form to enter comments.
 *
 * $Id: editorDecisionComment.tpl,v 1.3 2005/05/15 18:38:38 kevin Exp $
 *}


{include file="submission/comment/header.tpl"}

<table class="data" width="100%">
{if $isEditor}
<tr valign="top">
	<td colspan="2" align="center">
		<form method="post" action="{$requestPageUrl}/importPeerReviews">
			{if $hiddenFormParams}
				{foreach from=$hiddenFormParams item=hiddenFormParam key=key}
					<input type="hidden" name="{$key}" value="{$hiddenFormParam}" />
				{/foreach}
			{/if}
			<input type="submit" value="{translate key="submission.comments.importPeerReviews"}" class="button defaultButton" />
		</form>
	</td>
</tr>
{/if}
{foreach from=$articleComments item=comment}
<tr valign="top">
	<td width="25%">
		<div class="commentRole">{translate key=$comment->getRoleName()}</div>
		<div class="commentDate">{$comment->getDatePosted()|date_format:$datetimeFormatShort}</div>
	</td>
	<td width="75%">
		{if $comment->getAuthorId() eq $userId and not $isLocked}
			<div style="float: right"><a href="{$requestPageUrl}/editComment/{$articleId}/{$comment->getCommentId()}" class="action">{translate key="common.edit"}</a> <a href="{$requestPageUrl}/deleteComment/{$articleId}/{$comment->getCommentId()}" onclick="return confirm('{translate|escape:"javascript" key="submission.comments.confirmDelete"}')" class="action">{translate key="common.delete"}</a></div>
		{/if}
		<a name="{$comment->getCommentId()}"></a>
		{if $comment->getCommentTitle() neq ""}
			<div class="commentTitle">{translate key="submission.comments.subject"}: {$comment->getCommentTitle()}</div>
		{/if}
		<div class="comments">{$comment->getComments()|nl2br}</div>
	</td>
</tr>
{foreachelse}
<tr>
	<td class="nodata">{translate key="submission.comments.noComments"}</td>
</tr>
{/foreach}
</table>

<br />
<br />

{if not $isLocked}
<form method="post" action="{$requestPageUrl}/{$commentAction}">
{if $hiddenFormParams}
	{foreach from=$hiddenFormParams item=hiddenFormParam key=key}
		<input type="hidden" name="{$key}" value="{$hiddenFormParam}" />
	{/foreach}
{/if}


<a name="new"></a>
{include file="common/formErrors.tpl"}

<table class="data" width="100%">
<tr valign="top">
	<td class="label">{fieldLabel name="commentTitle" key="submission.comments.subject"}</td>
	<td class="value"><input type="text" name="commentTitle" id="commentTitle" value="{$commentTitle|escape}" size="50" maxlength="100" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label">{fieldLabel name="comments" required="true" key="submission.comments.comments"}</td>
	<td class="value"><textarea id="comments" name="comments" rows="10" cols="50" class="textArea">{$comments}</textarea></td>
</tr>
</table>

<p><input type="submit" name="save" value="{translate key="common.save"}" class="button defaultButton" /> <input type="submit" name="saveAndEmail" value="{if $isEditor}{translate key="submission.comments.saveAndEmailAuthor"}{else}{translate key="submission.comments.saveAndEmailEditor"}{/if}" class="button" /> <input type="button" value="{translate key="common.done"}" class="button" onclick="window.opener.location.reload(); window.close()" /></p>

{if $isEditor}
	{icon name="mail" url="`$requestPageUrl`/blindCcReviewsToReviewers?articleId=$articleId"} {translate key="submission.comments.sendDecisionToReviewers"}
{/if}

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

</form>

{else}
<input type="button" value="{translate key="common.close"}" class="button defaultButton" style="width: 5em" onclick="window.close()" />
{/if}

{include file="submission/comment/footer.tpl"}
