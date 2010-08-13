<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:44
         compiled from submission/layout/galleyView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/galleyView.tpl', 15, false),array('function', 'url', 'submission/layout/galleyView.tpl', 25, false),array('modifier', 'escape', 'submission/layout/galleyView.tpl', 20, false),array('modifier', 'to_array', 'submission/layout/galleyView.tpl', 25, false),array('modifier', 'date_format', 'submission/layout/galleyView.tpl', 57, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.galley");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFileData"), $this);?>
</p>

<table class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyLabel"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td class="value"><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
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
</table>

<?php if ($this->_tpl_vars['galley']->isHTMLGalley()): ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyHTMLData"), $this);?>
</h3>
<?php $this->assign('styleFile', $this->_tpl_vars['galley']->getStyleFile()); ?>

<table class="data" width="100%">
<tr valign="top">
	<td colspan="2" class="label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyStylesheet"), $this);?>
</strong></td>
</tr>
<?php if ($this->_tpl_vars['styleFile']): ?>
	<tr valign="top>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
		<td class="value"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['styleFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['styleFile']->getFileId()))), $this);?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
		<td class="value"><?php echo $this->_tpl_vars['styleFile']->getNiceFileSize(); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</td>
	</tr>
<?php else: ?>
<tr valign="top">
	<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.noStyleFile"), $this);?>
</td>
</tr>
<?php endif; ?>
</table>

<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyImages"), $this);?>
</strong>

<table class="listing" width="100%">
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
</tr>
<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['galley']->getImageFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['images'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['images']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imageFile']):
        $this->_foreach['images']['iteration']++;
?>
<tr valign="top">
	<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['imageFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['imageFile']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<td><?php echo $this->_tpl_vars['imageFile']->getNiceFileSize(); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>
<tr valign="top">
	<td colspan="4" class="<?php if (($this->_foreach['submissions']['iteration'] == $this->_foreach['submissions']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
</tr>
<?php endforeach; else: ?>
<tr valign="top">
	<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyNoImages"), $this);?>
</td>
</tr>
<tr valign="top">
	<td colspan="4" class="endseparator">&nbsp;</td>
</tr>
<?php endif; unset($_from); ?>
</table>
<?php endif; ?>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>