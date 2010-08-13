<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:38
         compiled from manager/plugins/plugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/plugins/plugins.tpl', 19, false),array('function', 'url', 'manager/plugins/plugins.tpl', 31, false),array('modifier', 'escape', 'manager/plugins/plugins.tpl', 25, false),array('modifier', 'to_array', 'manager/plugins/plugins.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.plugins.pluginManagement");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>
	<?php if ($this->_tpl_vars['plugin']->getCategory() != $this->_tpl_vars['category']): ?>
		<?php $this->assign('category', $this->_tpl_vars['plugin']->getCategory()); ?>
		<?php if ($this->_tpl_vars['notFirst']): ?></ul><?php endif; ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.categories.".($this->_tpl_vars['category'])), $this);?>
</h3>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.categories.".($this->_tpl_vars['category']).".description"), $this);?>
</p>
		<ul>
		<?php $this->assign('notFirst', 1); ?>
	<?php endif; ?>
	<li>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>:&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
		<?php $this->assign('managementVerbs', $this->_tpl_vars['plugin']->getManagementVerbs()); ?>
		<?php if ($this->_tpl_vars['managementVerbs'] && $this->_tpl_vars['plugin']->isSitePlugin() && ! $this->_tpl_vars['isSiteAdmin']): ?>
			<i><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.plugins.sitePlugin"), $this);?>
</i>
		<?php elseif ($this->_tpl_vars['managementVerbs']): ?>
			<?php $_from = $this->_tpl_vars['managementVerbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['verb']):
?>
				<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'plugin','path' => ((is_array($_tmp=$this->_tpl_vars['category'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['plugin']->getName(), $this->_tpl_vars['verb'][0]) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['plugin']->getName(), $this->_tpl_vars['verb'][0]))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['verb'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from);  if ($this->_tpl_vars['notFirst']): ?></ul><?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>