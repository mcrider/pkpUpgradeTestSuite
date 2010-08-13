<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:46
         compiled from file:/home/asmecher/cvs/ojs2/ojs.PRyAMe/ojs-2.1.0-1/plugins/auth/ldap/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.PRyAMe/ojs-2.1.0-1/plugins/auth/ldap/settings.tpl', 14, false),array('function', 'fieldLabel', 'file:/home/asmecher/cvs/ojs2/ojs.PRyAMe/ojs-2.1.0-1/plugins/auth/ldap/settings.tpl', 18, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.PRyAMe/ojs-2.1.0-1/plugins/auth/ldap/settings.tpl', 20, false),)), $this); ?>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings"), $this);?>
</h3>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'hostname','key' => "plugins.auth.ldap.settings.hostname"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" id="hostname" name="settings[hostname]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['hostname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.hostname.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'port','key' => "plugins.auth.ldap.settings.port"), $this);?>
</td>
		<td class="value">
			<input type="text" id="port" name="settings[port]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="8" maxlength="5" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.port.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'basedn','key' => "plugins.auth.ldap.settings.basedn"), $this);?>
</td>
		<td class="value">
			<input type="text" id="basedn" name="settings[basedn]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['basedn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.basedn.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'managerdn','key' => "plugins.auth.ldap.settings.managerdn"), $this);?>
</td>
		<td class="value">
			<input type="text" id="managerdn" name="settings[managerdn]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['managerdn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.managerdn.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'managerpwd','key' => "plugins.auth.ldap.settings.managerpwd"), $this);?>
</td>
		<td class="value">
			<input type="text" id="managerpwd" name="settings[managerpwd]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['managerpwd'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.managerpwd.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'pwhash','key' => "plugins.auth.ldap.settings.pwhash"), $this);?>
</td>
		<td class="value">
			<select name="settings[pwhash]" id="pwhash" size="1" class="selectMenu">
				<option value="">CLEARTEXT</option>
				<option value="ssha"<?php if ($this->_tpl_vars['settings']['pwhash'] == 'ssha'): ?> selected="selected"<?php endif; ?>>SSHA</option>
				<option value="sha"<?php if ($this->_tpl_vars['settings']['pwhash'] == 'sha'): ?> selected="selected"<?php endif; ?>>SHA</option>
				<option value="smd5"<?php if ($this->_tpl_vars['settings']['pwhash'] == 'smd5'): ?> selected="selected"<?php endif; ?>>SMD5</option>
				<option value="md5"<?php if ($this->_tpl_vars['settings']['pwhash'] == 'md5'): ?> selected="selected"<?php endif; ?>>MD5</option>
				<option value="crypt"<?php if ($this->_tpl_vars['settings']['pwhash'] == 'crypt'): ?> selected="selected"<?php endif; ?>>CRYPT</option>
			</select>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.pwhash.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" colspan="2">
			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.saslopt"), $this);?>
</h4>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right">
			<input type="checkbox" name="settings[sasl]" id="sasl" value="1"<?php if ($this->_tpl_vars['settings']['sasl']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td class="value">
			<label for="sasl"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.sasl"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'saslmech','key' => "plugins.auth.ldap.settings.saslmech"), $this);?>
</td>
		<td class="value">
			<input type="text" id="saslmech" name="settings[saslmech]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['saslmech'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.auth.ldap.settings.saslmech.description"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'saslrealm','key' => "plugins.auth.ldap.settings.saslrealm"), $this);?>
</td>
		<td class="value">
			<input type="text" id="saslrealm" name="settings[saslrealm]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['saslrealm'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'saslauthzid','key' => "plugins.auth.ldap.settings.saslauthzid"), $this);?>
</td>
		<td class="value">
			<input type="text" id="saslauthzid" name="settings[saslauthzid]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['saslauthzid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'saslprop','key' => "plugins.auth.ldap.settings.saslprop"), $this);?>
</td>
		<td class="value">
			<input type="text" id="saslprop" name="settings[saslprop]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['settings']['saslprop'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
</table>