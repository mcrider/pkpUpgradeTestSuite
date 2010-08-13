<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:26
         compiled from admin/importConflicts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/importConflicts.tpl', 14, false),array('function', 'url', 'admin/importConflicts.tpl', 24, false),array('modifier', 'escape', 'admin/importConflicts.tpl', 20, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.conflict.desc"), $this);?>
</p>

<ul>
<?php $_from = $this->_tpl_vars['conflicts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conflict']):
?>
	<?php $this->assign('firstUser', $this->_tpl_vars['conflict'][0]); ?>
	<?php $this->assign('secondUser', $this->_tpl_vars['conflict'][1]); ?>
	<li><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.conflict",'firstUsername' => $this->_tpl_vars['firstUser']->getUsername(),'firstName' => $this->_tpl_vars['firstUser']->getFullName(),'secondUsername' => $this->_tpl_vars['secondUser']->getUsername(),'secondName' => $this->_tpl_vars['secondUser']->getFullName()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<p>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editJournal','path' => $this->_tpl_vars['journalId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.importOJS1.editMigratedJournal"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>