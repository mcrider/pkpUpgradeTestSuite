<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from rtadmin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/index.tpl', 15, false),array('function', 'url', 'rtadmin/index.tpl', 25, false),array('modifier', 'escape', 'rtadmin/index.tpl', 18, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.readingTools");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.status"), $this);?>
</h3>
<p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.readingToolsEnabled"), $this);?>
: <?php if ($this->_tpl_vars['enabled']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.enabled"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.disabled"), $this); endif; ?><br/>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.selectedVersion"), $this);?>
: <?php if ($this->_tpl_vars['versionTitle']):  echo ((is_array($_tmp=$this->_tpl_vars['versionTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.disabled"), $this); endif; ?>
<p>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.rtEnable"), $this);?>
</p>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.configuration"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'versions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.versions"), $this);?>
</a></li>
</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.management"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'validateUrls'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>