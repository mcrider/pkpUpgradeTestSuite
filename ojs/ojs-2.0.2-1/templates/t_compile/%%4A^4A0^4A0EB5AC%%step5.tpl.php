<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from author/submit/step5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/step5.tpl', 15, false),array('modifier', 'escape', 'author/submit/step5.tpl', 38, false),array('modifier', 'date_format', 'author/submit/step5.tpl', 41, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step5");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.confirmationDescription",'journalTitle' => $this->_tpl_vars['journal']->getTitle()), $this);?>
</p>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/saveSubmit/<?php echo $this->_tpl_vars['submitStep']; ?>
">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.filesSummary"), $this);?>
</h3>
<table class="listing" width="100%">
<tr>
	<td colspan="5" class="headseparator">&nbsp;</td>
</tr>
<tr class="heading" valign="bottom">
	<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
	<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
	<td width="20%" class="nowrap"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="10%" class="nowrap"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
</tr>
<tr>
	<td colspan="5" class="headseparator">&nbsp;</td>
</tr>
<?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
<tr valign="top">
	<td><?php echo $this->_tpl_vars['file']->getFileId(); ?>
</td>
	<td><a class="file" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['file']->getFileId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	<td><?php if (( $this->_tpl_vars['file']->getType() == 'supp' )):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFile"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionFile"), $this); endif; ?></td>
	<td><?php echo $this->_tpl_vars['file']->getNiceFileSize(); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
</tr>
<?php endforeach; else: ?>
<tr valign="top">
<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.noFiles"), $this);?>
</td>
</tr>
<?php endif; unset($_from); ?>
</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.finishSubmission"), $this);?>
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