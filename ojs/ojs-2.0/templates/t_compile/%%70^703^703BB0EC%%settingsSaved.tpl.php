<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:51
         compiled from manager/setup/settingsSaved.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/settingsSaved.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.journalSetup");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalSetupUpdated"), $this);?>
</p>

<?php if ($this->_tpl_vars['setupStep'] == 1): ?>
<div><span class="disabled">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousStep"), $this);?>
</span> | <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextStep"), $this);?>
 &gt;&gt;</a></div>

<?php elseif ($this->_tpl_vars['setupStep'] == 2): ?>
<div><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/1">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousStep"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextStep"), $this);?>
 &gt;&gt;</a></div>

<?php elseif ($this->_tpl_vars['setupStep'] == 3): ?>
<div><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/2">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousStep"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/4"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextStep"), $this);?>
 &gt;&gt;</a></div>

<?php elseif ($this->_tpl_vars['setupStep'] == 4): ?>
<div><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/3">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousStep"), $this);?>
</a> | <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/5"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextStep"), $this);?>
 &gt;&gt;</a></div>

<?php elseif ($this->_tpl_vars['setupStep'] == 5): ?>
<div><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup/4">&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousStep"), $this);?>
</a> | <span class="disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextStep"), $this);?>
 &gt;&gt;</span></div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>