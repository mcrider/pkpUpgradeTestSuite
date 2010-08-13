<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:52
         compiled from reviewer/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'reviewer/index.tpl', 16, false),)), $this); ?>

<?php $this->assign('pageTitle', "common.queue.long.".($this->_tpl_vars['pageToDisplay']));  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'active' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/reviewer/index/active"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</a></li>
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'completed' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/reviewer/index/completed"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.completed"), $this);?>
</a></li>
</ul>

<br />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reviewer/".($this->_tpl_vars['pageToDisplay']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>