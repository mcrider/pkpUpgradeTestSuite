<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:00
         compiled from manager/importexport/plugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'manager/importexport/plugins.tpl', 17, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.importExport");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul>
	<?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/importexport/plugin/<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_tpl_vars['plugin']->getDisplayName(); ?>
</a>:&nbsp;<?php echo $this->_tpl_vars['plugin']->getDescription(); ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>