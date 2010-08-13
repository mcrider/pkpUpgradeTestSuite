<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/settingsForm.tpl', 16, false),array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/settingsForm.tpl', 16, false),array('function', 'fieldLabel', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/settingsForm.tpl', 41, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/settingsForm.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.generic.thesis.manager.settings");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'theses'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.theses"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.manager.settings"), $this);?>
</a></li>
</ul>

<br />

<table width="100%" class="listing">
	<tr>
		<td class="headseparator">&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.settings.description"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator">&nbsp;</td>
	</tr>
</table>

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.settings.thesisContact"), $this);?>
</h4>
<br/>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'thesisName','required' => 'true','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="thesisName" id="thesisName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thesisName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'thesisEmail','required' => 'true','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="thesisEmail" id="thesisEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thesisEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'thesisPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="thesisPhone" id="thesisPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thesisPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'thesisFax','key' => "user.fax"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="thesisFax" id="thesisFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thesisFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'thesisMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="thesisMailingAddress" id="thesisMailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['thesisMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>

<div class="separator"></div>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.settings.thesisIntroduction"), $this);?>
</h4>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.settings.thesisIntroductionDescription"), $this);?>
</p>
<table width="100%" class="data">
	<tr valign="top">
		<td width="100%" class="value"><textarea name="thesisIntroduction" id="thesisIntroduction" rows="5" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['thesisIntroduction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>

<br/>

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>