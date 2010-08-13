<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:12
         compiled from author/submit/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/step3.tpl', 19, false),array('function', 'fieldLabel', 'author/submit/step3.tpl', 55, false),array('modifier', 'escape', 'author/submit/step3.tpl', 28, false),array('modifier', 'date_format', 'author/submit/step3.tpl', 40, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step3");  $_smarty_tpl_vars = $this->_tpl_vars;
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

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.uploadInstructions",'supportName' => $this->_tpl_vars['journalSettings']['supportName'],'supportEmail' => $this->_tpl_vars['journalSettings']['supportEmail'],'supportPhone' => $this->_tpl_vars['journalSettings']['supportPhone']), $this);?>
</h3>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionFile"), $this);?>
</h3>
<table class="data" width="100%">
<?php if ($this->_tpl_vars['submissionFile']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="80%" class="value"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['submissionFile']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="80%" class="value"><?php echo $this->_tpl_vars['submissionFile']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</td>
</tr>
<?php else: ?>
<tr valign="top">
	<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.noSubmissionFile"), $this);?>
</td>
</tr>
<?php endif; ?>
</table>

<div class="separator"></div>

<table class="data" width="100%">
<tr>
	<td width="30%" class="label">
		<?php if ($this->_tpl_vars['submissionFile']): ?>
			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'submissionFile','key' => "author.submit.replaceSubmissionFile"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'submissionFile','key' => "author.submit.uploadSubmissionFile"), $this);?>

		<?php endif; ?>
	</td>
	<td width="70%" class="value"><input type="file" class="uploadField" name="submissionFile" id="submissionFile" /> <input name="uploadSubmissionFile" type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
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