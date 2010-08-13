<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:21
         compiled from submission/layout/galleyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/galleyForm.tpl', 15, false),array('function', 'fieldLabel', 'submission/layout/galleyForm.tpl', 25, false),array('modifier', 'escape', 'submission/layout/galleyForm.tpl', 26, false),array('modifier', 'date_format', 'submission/layout/galleyForm.tpl', 51, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.galley");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php if ($this->_tpl_vars['galleyId']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.editGalley"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.addGalley"), $this); endif; ?></h3>

<br />

<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/saveGalley/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFileData"), $this);?>
</p>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'label','required' => 'true','key' => "submission.layout.galleyLabel"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="label" name="label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyLabelInstructions"), $this);?>
</td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td class="value"><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galley']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileType"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['galley']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>

<tr valign="top">
	<td class="label"><?php if ($this->_tpl_vars['galleyId']):  echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "layoutEditor.galley.replaceGalley"), $this); else:  echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "common.upload"), $this); endif; ?></td>
	<td class="value">
		<input type="file" name="galleyFile" id="galleyFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>

	</td>
</tr>
</table>
<br/>
<?php if ($this->_tpl_vars['galley']->isHTMLGalley()): ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyHTMLData"), $this);?>
</h3>

<p><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyStylesheet"), $this);?>
</strong></p>

<?php $this->assign('styleFile', $this->_tpl_vars['galley']->getStyleFile()); ?>

<table class="data" width="100%">
<?php if ($this->_tpl_vars['styleFile']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="80%" class="value"><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['styleFile']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['styleFile']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="deleteStyleFile" value="1"<?php if ($this->_tpl_vars['deleteStyleFile']): ?> checked="checked"<?php endif; ?> />&nbsp;
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.deleteGalleyStylesheet"), $this);?>

	</td>
</tr>
<?php else: ?>
<tr valign="top">
	<td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.noStyleFile"), $this);?>
</td>
</tr>
<?php endif; ?>
</table>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'styleFile','key' => "common.upload"), $this);?>
</td>
	<td class="value">
		<input type="file" name="styleFile" id="styleFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>

	</td>
</tr>
</table>

<br />

<p><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyImages"), $this);?>
</strong></p>

<table width="100%" class="listing">
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td width="10%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['galley']->getImageFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['images'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['images']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imageFile']):
        $this->_foreach['images']['iteration']++;
?>
<tr valign="top">
	<td><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['imageFile']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><?php echo $this->_tpl_vars['imageFile']->getNiceFileSize(); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	<td align="right"><input type="button" name="deleteImage[<?php echo $this->_tpl_vars['imageFile']->getFileId(); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" onclick="return confirmAction('', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteGalleyImage"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" /></td>
</tr>
<tr>
	<td colspan="6" class="<?php if (($this->_foreach['images']['iteration'] == $this->_foreach['images']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
</tr>
<?php endforeach; else: ?>
<tr>
	<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleryNoImages"), $this);?>
</td>
</tr>
<tr>
	<td colspan="6" class="endseparator">&nbsp;</td>
</tr>
<?php endif; unset($_from); ?>
</table>

<input type="file" name="imageFile" class="uploadField" />&nbsp;
<input type="submit" name="uploadImage" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" />

<?php endif; ?>

<br />

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