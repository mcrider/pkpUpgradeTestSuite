<?php /* Smarty version 2.6.18, created on 2007-12-11 22:59:31
         compiled from about/memberships.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'about/memberships.tpl', 12, false),array('modifier', 'nl2br', 'about/memberships.tpl', 14, false),array('modifier', 'string_format', 'about/memberships.tpl', 15, false),array('function', 'translate', 'about/memberships.tpl', 15, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.memberships"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['membershipFeeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>

<p><?php echo ((is_array($_tmp=$this->_tpl_vars['membershipFeeDescription'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.cost"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['membershipFee'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currency']; ?>
)</p> 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>