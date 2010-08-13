<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:32
         compiled from manager/setup/setupHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/setupHeader.tpl', 13, false),array('function', 'translate', 'manager/setup/setupHeader.tpl', 17, false),array('modifier', 'assign', 'manager/setup/setupHeader.tpl', 13, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', "manager.setup.journalSetup");  echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="steplist">
	<li<?php if ($this->_tpl_vars['setupStep'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '1'), $this);?>
">1. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 2): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '2'), $this);?>
">2. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 3): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '3'), $this);?>
">3. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 4): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '4'), $this);?>
">4. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 5): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '5'), $this);?>
">5. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.look"), $this);?>
</a></li>
</ul>