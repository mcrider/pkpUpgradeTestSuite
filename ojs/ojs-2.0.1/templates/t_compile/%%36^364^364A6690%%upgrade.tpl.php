<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:59
         compiled from install/upgrade.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/upgrade.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "installer.ojsUpgrade");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeInstructions",'version' => $this->_tpl_vars['version']->getVersionString(),'baseUrl' => $this->_tpl_vars['baseUrl'],'pageUrl' => $this->_tpl_vars['pageUrl']), $this);?>



<div class="separator"></div>


<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/install/installUpgrade">
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