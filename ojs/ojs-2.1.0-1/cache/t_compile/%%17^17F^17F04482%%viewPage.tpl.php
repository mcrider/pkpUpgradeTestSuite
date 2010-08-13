<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:36
         compiled from issue/viewPage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/viewPage.tpl', 15, false),array('modifier', 'assign', 'issue/viewPage.tpl', 15, false),)), $this); ?>

<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
	<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issueTitle']);  else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.preview"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'previewText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'previewText'));?>

	<?php $this->assign('pageTitleTranslated', ($this->_tpl_vars['issueTitle'])." ".($this->_tpl_vars['previewText']));  endif; ?>

<?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issueCrumbTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>