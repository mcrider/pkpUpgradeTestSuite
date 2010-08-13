<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from author/submit/suppFile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/suppFile.tpl', 15, false),array('function', 'fieldLabel', 'author/submit/suppFile.tpl', 29, false),array('function', 'html_options_translate', 'author/submit/suppFile.tpl', 42, false),array('modifier', 'escape', 'author/submit/suppFile.tpl', 30, false),array('modifier', 'date_format', 'author/submit/suppFile.tpl', 107, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step4a");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/4?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.backToSupplementaryFiles"), $this);?>
</a></p>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/saveSubmitSuppFile/<?php echo $this->_tpl_vars['suppFileId']; ?>
" enctype="multipart/form-data">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileData"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileDataDescription"), $this);?>
</p>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('required' => 'true','name' => 'title','key' => "common.title"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'creator','key' => "author.submit.suppFile.createrOrOwner"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="creator" class="textField" id="creator" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['creator'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "common.keywords"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="subject" class="textField" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "common.type"), $this);?>
</td>
	<td width="80%" class="value"><select name="type" class="selectMenu" id="type" size="1"><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('output' => $this->_tpl_vars['typeOptionsOutput'],'values' => $this->_tpl_vars['typeOptionsValues'],'translateValues' => 'true','selected' => $this->_tpl_vars['type']), $this);?>
</select><br /><label for="typeOther"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.specifyOtherType"), $this);?>
</label> <input type="text" name="typeOther" id="typeOther" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeOther'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="45" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "author.submit.suppFile.briefDescription"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="description" class="textArea" id="description" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisher','key' => "common.publisher"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="publisher" class="textField" id="publisher" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" />
	</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.publisherDescription"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "author.submit.suppFile.contributorOrSponsor"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="sponsor" class="textField" id="sponsor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateCreated','key' => "common.date"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="dateCreated" class="textField" id="dateCreated" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateCreated'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="11" maxlength="10" /> YYYY-MM-DD</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.dateDescription"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'source','key' => "common.source"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="source" class="textField" id="source" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.sourceDescription"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "common.language"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="language" class="textField" id="language" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="10" /></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span></td>
</tr>
</table>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileUpload"), $this);?>
</h3>

<table class="data" width="100%">
<?php if ($this->_tpl_vars['suppFile'] && $this->_tpl_vars['suppFile']->getFileId()): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="80%" class="value"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="80%" class="value"><?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</td>
</tr>
</table>

<table class="data" width="100%">
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value"><input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> /> 
	<label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
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

<div class="separator"></div>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "common.replaceFile"), $this);?>
</td>
	<td width="80%" class="value"><input type="file" name="uploadSuppFile" id="uploadSuppFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>
</td>
</tr>
<?php if (! $this->_tpl_vars['suppFile']): ?>
<tr valign="top">
	<td>&nbsp;</td>
        <td class="value"><input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
</label></td>
</tr>
<?php endif; ?>
</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/4?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>