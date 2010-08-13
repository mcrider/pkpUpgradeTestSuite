<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:32
         compiled from admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/index.tpl', 15, false),array('function', 'url', 'admin/index.tpl', 18, false),array('function', 'call_hook', 'admin/index.tpl', 22, false),array('modifier', 'escape', 'admin/index.tpl', 30, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.siteAdmin");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteManagement"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteSettings"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journals'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.hostedJournals"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'languages'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'auth'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.authSources"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Admin::Index::SiteManagement"), $this);?>

</ul>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.adminFunctions"), $this);?>
</h3>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'systemInfo'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.systemInformation"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'expireSessions'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmExpireSessions"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.expireSessions"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearDataCache'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.clearDataCache"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearTemplateCache'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmClearTemplateCache"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.clearTemplateCache"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Admin::Index::AdminFunctions"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>