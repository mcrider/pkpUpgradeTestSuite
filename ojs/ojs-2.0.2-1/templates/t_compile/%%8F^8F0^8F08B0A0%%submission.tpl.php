<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:15
         compiled from layoutEditor/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign_translate', 'layoutEditor/submission.tpl', 12, false),)), $this); ?>

<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'pageTitleTranslated','key' => "submission.page.editing",'id' => $this->_tpl_vars['submission']->getArticleId()), $this);?>

<?php $this->assign('pageCrumbTitle', "submission.editing");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment());  $this->assign('proofAssignment', $this->_tpl_vars['submission']->getProofAssignment());  $this->assign('layoutFile', $this->_tpl_vars['layoutAssignment']->getLayoutFile()); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layoutEditor/submission/summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="separator"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layoutEditor/submission/layout.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="separator"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layoutEditor/submission/proofread.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>