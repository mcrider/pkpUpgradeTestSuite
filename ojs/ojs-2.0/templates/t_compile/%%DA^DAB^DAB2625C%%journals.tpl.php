<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from rtadmin/journals.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/journals.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.readingTools");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myJournals"), $this);?>
</h3>

<ul class="plain">
<?php $_from = $this->_tpl_vars['journals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['journal']):
?>
<li>&#187; <a href="<?php echo $this->_tpl_vars['indexUrl']; ?>
/<?php echo $this->_tpl_vars['journal']->getPath(); ?>
/rtadmin"><?php echo $this->_tpl_vars['journal']->getTitle(); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>