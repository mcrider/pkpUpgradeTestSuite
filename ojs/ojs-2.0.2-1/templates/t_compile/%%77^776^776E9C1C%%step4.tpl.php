<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from author/submit/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/step4.tpl', 19, false),array('function', 'fieldLabel', 'author/submit/step4.tpl', 54, false),array('modifier', 'escape', 'author/submit/step4.tpl', 38, false),array('modifier', 'date_format', 'author/submit/step4.tpl', 40, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step4");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/saveSubmit/<?php echo $this->_tpl_vars['submitStep']; ?>
" enctype="multipart/form-data">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFilesInstructions"), $this);?>
</p>

<table class="listing" width="100%">
<tr>
	<td colspan="5" class="headseparator">&nbsp;</td>
</tr>
<tr class="heading" valign="bottom">
	<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
	<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="15%" class="nowrap"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr>
	<td colspan="6" class="headseparator">&nbsp;</td>
</tr>
<?php $_from = $this->_tpl_vars['suppFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
<tr valign="top">
	<td><?php echo $this->_tpl_vars['file']->getSuppFileId(); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
	<td align="right"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submitSuppFile/<?php echo $this->_tpl_vars['file']->getSuppFileId(); ?>
?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/deleteSubmitSuppFile/<?php echo $this->_tpl_vars['file']->getSuppFileId(); ?>
?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.confirmDeleteSuppFile"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
</tr>
<?php endforeach; else: ?>
<tr valign="top">
	<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.noSupplementaryFiles"), $this);?>
</td>
</tr>
<?php endif; unset($_from); ?>
</table>

<div class="separator"></div>

<table class="data" width="100%">
<tr>
	<td width="30%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "author.submit.uploadSuppFile"), $this);?>
</td>
	<td width="70%" class="value"><input type="file" name="uploadSuppFile" id="uploadSuppFile"  class="uploadField" /> <input name="submitUploadSuppFile" type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" /></td>
</tr>
</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="confirmAction('<?php echo $this->_tpl_vars['pageUrl']; ?>
/author', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.cancelSubmission"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>