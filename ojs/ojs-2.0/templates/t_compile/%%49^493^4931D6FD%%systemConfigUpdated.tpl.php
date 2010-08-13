<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:47
         compiled from admin/systemConfigUpdated.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/systemConfigUpdated.tpl', 20, false),array('modifier', 'escape', 'admin/systemConfigUpdated.tpl', 30, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.systemConfiguration");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/admin/editSystemConfig");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<?php if ($this->_tpl_vars['writeConfigFailed']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.overwriteConfigFileInstructions"), $this);?>
</p>
<?php elseif ($this->_tpl_vars['displayConfigContents']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.displayConfigFileInstructions"), $this);?>
</p>
<?php else: ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.configFileUpdatedInstructions"), $this);?>
</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['writeConfigFailed'] || $this->_tpl_vars['displayConfigContents']): ?>
<form>
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.contentsOfConfigFile"), $this);?>
</h4>
<textarea name="config" cols="80" rows="20" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['configFileContents'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
</form>
<br />
<?php endif; ?>

<a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/systemInfo"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.systemInformation"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>