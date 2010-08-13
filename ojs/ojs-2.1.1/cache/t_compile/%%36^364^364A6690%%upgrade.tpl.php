<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from install/upgrade.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/upgrade.tpl', 15, false),array('function', 'url', 'install/upgrade.tpl', 21, false),)), $this); ?>

<?php $this->assign('pageTitle', "installer.ojsUpgrade");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeInstructions",'version' => $this->_tpl_vars['version']->getVersionString(),'baseUrl' => $this->_tpl_vars['baseUrl']), $this);?>



<div class="separator"></div>


<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'installUpgrade'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['isInstallError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installErrorsOccurred"), $this);?>
:</span>
	<ul class="formErrorList">
		<li><?php if ($this->_tpl_vars['dbErrorMsg']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.databaseError",'error' => $this->_tpl_vars['dbErrorMsg']), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['errorMsg']), $this); endif; ?></li>
	</ul>
</p>
<?php endif; ?>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeOJS"), $this);?>
" class="button defaultButton" /> <input type="submit" name="manualInstall" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.manualUpgrade"), $this);?>
" class="button" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>