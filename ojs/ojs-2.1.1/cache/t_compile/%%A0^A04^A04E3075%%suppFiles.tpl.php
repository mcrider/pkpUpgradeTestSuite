<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:34
         compiled from rt/suppFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'rt/suppFiles.tpl', 16, false),array('modifier', 'escape', 'rt/suppFiles.tpl', 19, false),array('modifier', 'to_array', 'rt/suppFiles.tpl', 42, false),array('function', 'translate', 'rt/suppFiles.tpl', 22, false),array('function', 'url', 'rt/suppFiles.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.suppFiles"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3>

<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['suppFile']):
?>
<h4><?php echo $this->_tpl_vars['key']+1; ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4>
<table class="data" width="100%">
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.subject"), $this);?>
</td>
	<td class="value" width="80%">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	</td>
</tr>
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
	<td class="value" width="80%">
		<?php if (((is_array($_tmp=$this->_tpl_vars['suppFile']->getType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>
			<?php echo $this->_tpl_vars['suppFile']->getType(); ?>

		<?php elseif ($this->_tpl_vars['suppFile']->getTypeOther()): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getTypeOther())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.other"), $this);?>

		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label" width="20%">&nbsp;</td>
	<td class="value" width="80%">
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'downloadSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getBestSuppFileId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getBestSuppFileId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="action"><?php if ($this->_tpl_vars['suppFile']->isInlineable()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.download"), $this); endif; ?></a> (<?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
)&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'suppFileMetadata','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['suppFile']->getSuppFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['suppFile']->getSuppFileId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles.viewMetadata"), $this);?>
</a>
	</td>
</tr>
</table>

<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>