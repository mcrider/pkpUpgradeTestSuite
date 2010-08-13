<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from install/install.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/install.tpl', 15, false),array('function', 'fieldLabel', 'install/install.tpl', 40, false),array('function', 'html_options', 'install/install.tpl', 43, false),array('modifier', 'escape', 'install/install.tpl', 100, false),)), $this); ?>

<?php $this->assign('pageTitle', "installer.ojsInstallation");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installationInstructions",'baseUrl' => $this->_tpl_vars['baseUrl']), $this);?>



<div class="separator"></div>


<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/install/install">
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


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.localeSettings"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.localeSettingsInstructions",'supportsMBString' => $this->_tpl_vars['supportsMBString']), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'locale','key' => "locale.primary"), $this);?>
</td>
		<td width="80%" class="value">
			<select name="locale" id="locale" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['localeOptions'],'selected' => $this->_tpl_vars['locale']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.localeInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'additionalLocales','key' => "installer.additionalLocales"), $this);?>
</td>
		<td class="value">
			<?php $_from = $this->_tpl_vars['localeOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
				<input type="checkbox" name="additionalLocales[]" id="additionalLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]" value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['additionalLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="additionalLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]"><?php echo $this->_tpl_vars['localeName']; ?>
 (<?php echo $this->_tpl_vars['localeKey']; ?>
)</label><br />
			<?php endforeach; endif; unset($_from); ?>
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.additionalLocalesInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'clientCharset','key' => "installer.clientCharset"), $this);?>
</td>
		<td class="value">
			<select name="clientCharset" id="clientCharset" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['clientCharsetOptions'],'selected' => $this->_tpl_vars['clientCharset']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.clientCharsetInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'connectionCharset','key' => "installer.connectionCharset"), $this);?>
</td>
		<td class="value">
			<select name="connectionCharset" id="connectionCharset" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['connectionCharsetOptions'],'selected' => $this->_tpl_vars['connectionCharset']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.connectionCharsetInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databaseCharset','key' => "installer.databaseCharset"), $this);?>
</td>
		<td class="value">
			<select name="databaseCharset" id="databaseCharset" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['databaseCharsetOptions'],'selected' => $this->_tpl_vars['databaseCharset']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.databaseCharsetInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.fileSettings"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'filesDir','key' => "installer.filesDir"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="filesDir" id="filesDir" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filesDir'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.filesDirInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value"><input type="checkbox" name="skipFilesDir" id="skipFilesDir" value="1"<?php if ($this->_tpl_vars['skipFilesDir']): ?> checked="checked"<?php endif; ?> /> <label for="skipFilesDir"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.skipFilesDir"), $this);?>
</label></td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.securitySettings"), $this);?>
</h3>


<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'encryption','key' => "installer.encryption"), $this);?>
</td>
		<td width="80%" class="value">
			<select name="encryption" id="encryption" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['encryptionOptions'],'selected' => $this->_tpl_vars['encryption']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.encryptionInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.administratorAccount"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.administratorAccountInstructions"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">	
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'adminUsername','key' => "user.username"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="adminUsername" id="adminUsername" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adminUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'adminPassword','key' => "user.password"), $this);?>
</td>
		<td class="value"><input type="password" name="adminPassword" id="adminPassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adminPassword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'adminPassword2','key' => "user.register.repeatPassword"), $this);?>
</td>
		<td class="value"><input type="password" name="adminPassword2" id="adminPassword2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adminPassword2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>
	<tr valign="top">	
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'adminEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="adminEmail" id="adminEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adminEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.databaseSettings"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.administratorAccountInstructions"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databaseDriver','key' => "installer.databaseDriver"), $this);?>
</td>
		<td width="80%" class="value">
			<select name="databaseDriver" id="databaseDriver" size="1" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['databaseDriverOptions'],'selected' => $this->_tpl_vars['databaseDriver']), $this);?>

			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.databaseDriverInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databaseHost','key' => "installer.databaseHost"), $this);?>
</td>
		<td class="value">
			<input type="text" name="databaseHost" id="databaseHost" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['databaseHost'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.databaseHostInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databaseUsername','key' => "installer.databaseUsername"), $this);?>
</td>
		<td class="value"><input type="text" name="databaseUsername" id="databaseUsername" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['databaseUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databasePassword','key' => "installer.databasePassword"), $this);?>
</td>
		<td class="value"><input type="text" name="databasePassword" id="databasePassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['databasePassword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'databaseName','key' => "installer.databaseName"), $this);?>
</td>
		<td class="value"><input type="text" name="databaseName" id="databaseName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['databaseName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<input type="checkbox" name="createDatabase" id="createDatabase" value="1"<?php if ($this->_tpl_vars['createDatabase']): ?> checked="checked"<?php endif; ?> /> <label for="createDatabase"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.createDatabase"), $this);?>
</label>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.createDatabaseInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.miscSettings"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'oaiRepositoryId','key' => "installer.oaiRepositoryId"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="oaiRepositoryId" id="oaiRepositoryId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['oaiRepositoryId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.oaiRepositoryIdInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installOJS"), $this);?>
" class="button defaultButton" /> <input type="submit" name="manualInstall" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.manualInstall"), $this);?>
" class="button" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>