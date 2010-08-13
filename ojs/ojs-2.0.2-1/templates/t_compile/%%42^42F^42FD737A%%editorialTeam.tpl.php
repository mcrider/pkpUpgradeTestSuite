<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:11
         compiled from about/editorialTeam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/editorialTeam.tpl', 16, false),array('modifier', 'escape', 'about/editorialTeam.tpl', 25, false),array('modifier', 'nl2br', 'about/editorialTeam.tpl', 29, false),)), $this); ?>

<?php $this->assign('pageTitle', "about.editorialTeam");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['editors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h3>

<?php $this->assign('sectionHasBio', 0);  $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<?php if ($this->_tpl_vars['editor']->getBiography()):  $this->assign('sectionHasBio', 1);  endif;  endforeach; endif; unset($_from); ?>

<p>
<?php $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (strlen ( $this->_tpl_vars['editor']->getAffiliation() ) > 0): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?></strong>
	<br />
	<?php if ($this->_tpl_vars['sectionHasBio']): ?>
		<?php if ($this->_tpl_vars['editor']->getBiography()): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['editor']->getBiography())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			<br/>
		<?php endif; ?>
		<br/>
	<?php endif;  endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['sectionEditors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h3>

<?php $this->assign('sectionHasBio', 0);  $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<?php if ($this->_tpl_vars['editor']->getBiography()):  $this->assign('sectionHasBio', 1);  endif;  endforeach; endif; unset($_from); ?>

<p>
<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
	<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (strlen ( $this->_tpl_vars['sectionEditor']->getAffiliation() ) > 0): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?></strong>
	<br/>
	<?php if ($this->_tpl_vars['sectionHasBio']): ?>
		<?php if ($this->_tpl_vars['sectionEditor']->getBiography()): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getBiography())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			<br/>
		<?php endif; ?>
		<br/>
	<?php endif;  endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['layoutEditors'] ) > 0): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</h3>

<?php $this->assign('sectionHasBio', 0);  $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<?php if ($this->_tpl_vars['editor']->getBiography()):  $this->assign('sectionHasBio', 1);  endif;  endforeach; endif; unset($_from); ?>

<p>
<?php $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layoutEditor']):
?>
	<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (strlen ( $this->_tpl_vars['layoutEditor']->getAffiliation() ) > 0): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?></strong>
	<br/>
	<?php if ($this->_tpl_vars['sectionHasBio']): ?>
		<?php if ($this->_tpl_vars['layoutEditor']->getBiography()): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getBiography())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			<br/>
		<?php endif; ?>
		<br/>
	<?php endif;  endforeach; endif; unset($_from); ?>
</p>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>