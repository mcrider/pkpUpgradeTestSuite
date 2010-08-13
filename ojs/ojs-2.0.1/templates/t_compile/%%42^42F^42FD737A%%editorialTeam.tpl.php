<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from about/editorialTeam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/editorialTeam.tpl', 16, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.editorialTeam");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['editors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h3>
<p>
<?php $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<?php echo $this->_tpl_vars['editor']->getFullName();  if (strlen ( $this->_tpl_vars['editor']->getAffiliation() ) > 0): ?>, <?php echo $this->_tpl_vars['editor']->getAffiliation();  endif; ?>
	<br />
<?php endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['sectionEditors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h3>
<p>
<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
	<?php echo $this->_tpl_vars['sectionEditor']->getFullName();  if (strlen ( $this->_tpl_vars['sectionEditor']->getAffiliation() ) > 0): ?>, <?php echo $this->_tpl_vars['sectionEditor']->getAffiliation();  endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['layoutEditors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</h3>
<p>
<?php $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layoutEditor']):
?>
	<?php echo $this->_tpl_vars['layoutEditor']->getFullName();  if (strlen ( $this->_tpl_vars['layoutEditor']->getAffiliation() ) > 0): ?>, <?php echo $this->_tpl_vars['layoutEditor']->getAffiliation();  endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>