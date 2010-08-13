<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 15, false),array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 24, false),array('function', 'fieldLabel', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 29, false),array('modifier', 'assign', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 15, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 30, false),array('modifier', 'count', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/gateways/googleScholar/settingsForm.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.gateways.googleScholar.displayName");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => 'GoogleScholarPlugin'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'directoryUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'directoryUrl'));?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.gateways.googleScholar.settings.description",'directoryUrl' => $this->_tpl_vars['directoryUrl']), $this);?>


<div class="separator">&nbsp;</div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.gateways.googleScholar.settings"), $this);?>
</h3>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherName','required' => 'true','key' => "plugins.gateways.googleScholar.settings.publisherName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="publisherName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisherName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="publisherName" class="textField" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contact','required' => 'true','key' => "plugins.gateways.googleScholar.settings.contact"), $this);?>
</td>
	<td width="80%" class="value">
		<?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['thisContact']):
?>
			<input type="text" name="contact[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisContact'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="<?php if ($this->_tpl_vars['key'] == 0): ?>contact<?php else: ?>contact-<?php echo $this->_tpl_vars['key'];  endif; ?>" class="textField" />
			<?php if (count($this->_tpl_vars['contact']) > 1): ?><input type="submit" name="deleteContact-<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button"/><?php endif; ?>
			<br/>
		<?php endforeach; else: ?>
			<input type="text" name="contact[]" size="35" maxlength="80" id="contact" class="textField" /><br/>
		<?php endif; unset($_from); ?>
		<?php if (count($this->_tpl_vars['contact']) < 5): ?>
			<input type="submit" name="addContact" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.gateways.googleScholar.settings.addContact"), $this);?>
"/><br/>
		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherLocation','key' => "plugins.gateways.googleScholar.settings.publisherLocation"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="publisherLocation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisherLocation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="publisherLocation" class="textField" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherResultName','key' => "plugins.gateways.googleScholar.settings.publisherResultName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="publisherResultName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisherResultName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="publisherResultName" class="textField" /></td>
</tr>
</table>

<br/>

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/> <input type="button" class="button" onclick="document.location='<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'checkData','escape' => 'false'), $this);?>
'" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.gateways.googleScholar.checkData"), $this);?>
"/> <input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>