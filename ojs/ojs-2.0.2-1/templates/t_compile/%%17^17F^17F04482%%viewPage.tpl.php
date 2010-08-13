<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:15
         compiled from issue/viewPage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign_translate', 'issue/viewPage.tpl', 15, false),)), $this); ?>

<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
	<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issueTitle']);  else: ?>
	<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'previewText','key' => "editor.issues.preview"), $this);?>

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