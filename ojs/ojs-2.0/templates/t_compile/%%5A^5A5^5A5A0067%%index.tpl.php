<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:46
         compiled from admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/index.tpl', 15, false),array('modifier', 'escape', 'admin/index.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.siteAdmin");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteManagement"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/settings"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteSettings"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/journals"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.hostedJournals"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/languages"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.adminFunctions"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/systemInfo"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.systemInformation"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/expireSessions" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmExpireSessions"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.expireSessions"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/admin/clearTemplateCache" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmClearTemplateCache"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.clearTemplateCache"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>