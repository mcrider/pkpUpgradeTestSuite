<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:05
         compiled from submission/suppFile/suppFileView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/suppFile/suppFileView.tpl', 16, false),array('modifier', 'default', 'submission/suppFile/suppFileView.tpl', 21, false),array('modifier', 'nl2br', 'submission/suppFile/suppFileView.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageTitle', "article.suppFile");  $this->assign('pageCrumbTitle', "submission.supplementaryFiles");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileData"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getTitle())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.createrOrOwner"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getCreator())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.subject"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getSubject())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getType())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.briefDescription"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['suppFile']->getDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.publisher"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getPublisher())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.contributorOrSponsor"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getSponsor())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getDateCreated())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.source"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getSource())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.language"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=@$this->_tpl_vars['suppFile']->getLanguage())) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileUpload"), $this);?>
</h3>

<table width="100%" class="data">
<?php if ($this->_tpl_vars['suppFile']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
		<td width="80%" class="value"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
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
	<tr valign="top">
		<td class="infoLabel"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
		<td class="value"><?php echo $this->_tpl_vars['suppFile']->getDateUploaded(); ?>
</td>
	</tr>
	</table>
<?php else: ?>
	<tr valign="top">
		<td colspan="2" class="noResults"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.noFile"), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>