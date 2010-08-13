<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:55
         compiled from submission/suppFile/suppFile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/suppFile/suppFile.tpl', 25, false),array('function', 'fieldLabel', 'submission/suppFile/suppFile.tpl', 30, false),array('function', 'html_options_translate', 'submission/suppFile/suppFile.tpl', 46, false),array('modifier', 'escape', 'submission/suppFile/suppFile.tpl', 31, false),array('modifier', 'date_format', 'submission/suppFile/suppFile.tpl', 118, false),)), $this); ?>

<?php if ($this->_tpl_vars['suppFileId']): ?>
	<?php $this->assign('pageTitle', "author.submit.editSupplementaryFile");  else: ?>
	<?php $this->assign('pageTitle', "author.submit.addSupplementaryFile");  endif; ?>

<?php $this->assign('pageCrumbTitle', "submission.supplementaryFiles");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/<?php echo $this->_tpl_vars['rolePath']; ?>
/saveSuppFile/<?php echo $this->_tpl_vars['suppFileId']; ?>
" enctype="multipart/form-data">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileData"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileDataDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "common.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="title" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'creator','key' => "author.submit.suppFile.createrOrOwner"), $this);?>
</td>
		<td class="value"><input type="text" id="creator" name="creator" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['creator'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "common.subject"), $this);?>
</td>
		<td class="value"><input type="text" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "common.type"), $this);?>
</td>
		<td class="value"><select name="type" size="1" id="type" class="selectMenu"><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('output' => $this->_tpl_vars['typeOptionsOutput'],'values' => $this->_tpl_vars['typeOptionsValues'],'translateValues' => 'true','selected' => $this->_tpl_vars['type']), $this);?>
</select><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.specifyOtherType"), $this);?>
: <input type="text" name="typeOther" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeOther'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="45" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "author.submit.suppFile.briefDescription"), $this);?>
</td>
		<td class="value"><textarea name="description" id="description" rows="5" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisher','key' => "common.publisher"), $this);?>
</td>
		<td class="value">
			<input type="text" name="publisher" id="publisher" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.publisherDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "author.submit.suppFile.contributorOrSponsor"), $this);?>
</td>
		<td class="value"><input id="sponsor" type="text" name="sponsor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateCreated','key' => "common.date"), $this);?>
</td>
		<td class="value">
			<input type="text" id="dateCreated" name="dateCreated" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateCreated'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="11" maxlength="10" class="textField" /> YYYY-MM-DD
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.dateDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'source','key' => "common.source"), $this);?>
</td>
		<td class="value">
			<input type="text" id="source" name="source" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.sourceDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "common.language"), $this);?>
</td>
		<td class="value">
			<input type="text" id="language" name="language" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="10" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileUpload"), $this);?>
</h3>

<table class="data">
<?php if ($this->_tpl_vars['suppFile']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
		<td width="80%" class="data"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
"><?php echo $this->_tpl_vars['suppFile']->getFileName(); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
		<td class="value"><?php echo $this->_tpl_vars['suppFile']->getOriginalFileName(); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
		<td class="value"><?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
</table>
	
<table width="100%"  class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
</label></td>
	</tr>
</table>
<?php else: ?>
	<tr valign="top">
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.noFile"), $this);?>
</td>
	</tr>
</table>
<?php endif; ?>

<br />

<table width="100%" class="data">
	<tr valign="top">
		<td class="label">
			<?php if ($this->_tpl_vars['suppFile']): ?>
				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "common.replaceFile"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "common.upload"), $this);?>

			<?php endif; ?>
		</td>
		<td class="value"><input type="file" name="uploadSuppFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>
</td>
	</tr>
	<?php if (! $this->_tpl_vars['suppFile']): ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> />&nbsp;
			<label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
</label>
		</td>
	</tr>
	<?php endif; ?>
</table>


<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEditing/<?php echo $this->_tpl_vars['articleId']; ?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>