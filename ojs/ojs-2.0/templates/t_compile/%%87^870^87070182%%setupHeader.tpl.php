<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:51
         compiled from manager/setup/setupHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/setupHeader.tpl', 17, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', "manager.setup.journalSetup");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/manager/setup");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="steplist">
	<li<?php if ($this->_tpl_vars['setupStep'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/1">1. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.details"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 2): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/2">2. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.policies"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 3): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/3">3. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissions"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 4): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/4">4. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.management"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['setupStep'] == 5): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/5">5. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.look"), $this);?>
</a></li>
</ul>