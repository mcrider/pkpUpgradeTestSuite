{**
 * index.tpl
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List of operations this plugin can perform
 *
 * $Id: index.tpl,v 1.2 2005/06/24 16:55:58 alec Exp $
 *}

{assign var="pageTitle" value="plugins.importexport.users.displayName"}
{include file="common/header.tpl"}

<br/>

<h3>{translate key="plugins.importexport.users.export.exportUsers"}</h3>

<ul class="plain">
	<li>
		<form action="{$pluginUrl}/exportByRole" method="post">
			&#187; {translate key="plugins.importexport.users.export.exportByRole"}<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<select name="roles[]" size="5" multiple="multiple" class="selectMenu">
				{foreach from=$roleOptions item=roleOption key=roleKey}
					{if $roleKey != ''}<option value="{$roleKey}">{translate key=$roleOption}</option>{/if}
				{/foreach}
			</select><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button" value="{translate key="plugins.importexport.users.export.exportUsers"}"/>

		</form>
		&nbsp;
	</li>
	<li>&#187; <a href="{$pluginUrl}/exportAll">{translate key="plugins.importexport.users.export.exportAllUsers"}</a></li>
</ul>

<br/>

<h3>{translate key="plugins.importexport.users.import.importUsers"}</h3>

<form action="{$pluginUrl}/confirm" method="post" enctype="multipart/form-data">

<p>{translate key="plugins.importexport.users.import.instructions"}</p>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label">{translate key="plugins.importexport.users.import.dataFile"}</td>
		<td width="80%" class="value"><input type="file" name="userFile" id="userFile" class="uploadField" /></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="sendNotify" id="sendNotify" value="1"{if $sendNotify} checked="checked"{/if} /> <label for="sendNotify">{translate key="plugins.importexport.users.import.sendNotify"}</label></td>
	</tr>
	<tr>
		<td colspan="2" class="label"><input type="checkbox" name="continueOnError" id="continueOnError" value="1"{if $continueOnError} checked="checked"{/if} /> <label for="continueOnError">{translate key="plugins.importexport.users.import.continueOnError"}</label></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="formField">&nbsp;</td>
	</tr>
</table>

<p><input type="submit" value="{translate key="common.upload"}" class="button defaultButton" /> <input type="button" value="{translate key="common.cancel"}" class="button" onclick="document.location.href='{$pageUrl}/manager/importexport'" /></p>

</form>

{include file="common/footer.tpl"}
