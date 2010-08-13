<?php /* Smarty version 2.6.18, created on 2008-07-14 10:41:08
         compiled from about/editorialTeam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/editorialTeam.tpl', 16, false),array('function', 'url', 'about/editorialTeam.tpl', 22, false),array('modifier', 'escape', 'about/editorialTeam.tpl', 22, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.editorialTeam"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['editors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['editors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['editor']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['editor']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['editor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['editor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['sectionEditors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['sectionEditors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['sectionEditor']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['sectionEditor']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['sectionEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['sectionEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['layoutEditors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['layoutEditors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layoutEditor']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['layoutEditor']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['layoutEditor']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['layoutEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['layoutEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['copyEditors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['copyEditors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['copyEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['copyEditor']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['copyEditor']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['copyEditor']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['copyEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['copyEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['proofreaders'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['proofreaders'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['proofreaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['proofreader']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['proofreader']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['proofreader']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['proofreader']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['proofreader']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>