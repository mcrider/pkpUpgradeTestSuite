<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:37
         compiled from layoutEditor/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'layoutEditor/submission.tpl', 12, false),array('modifier', 'assign', 'layoutEditor/submission.tpl', 12, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.page.editing",'id' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>

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