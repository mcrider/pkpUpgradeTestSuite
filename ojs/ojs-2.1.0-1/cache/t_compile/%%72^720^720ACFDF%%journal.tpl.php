<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:36
         compiled from index/journal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/journal.tpl', 20, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['siteTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div><?php echo $this->_tpl_vars['journalDescription']; ?>
</div>

<br />

<?php if ($this->_tpl_vars['homepageImage']): ?>
<div align="center"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="<?php echo $this->_tpl_vars['homepageImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homepageImage']['height']; ?>
" border="0" alt="" /></div>
<?php endif; ?>

<br /><br />

<?php echo $this->_tpl_vars['additionalHomeContent']; ?>


<?php if ($this->_tpl_vars['issue']): ?>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>