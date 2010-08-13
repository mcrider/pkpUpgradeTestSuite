<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from manager/languageSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/languageSettings.tpl', 15, false),array('function', 'fieldLabel', 'manager/languageSettings.tpl', 24, false),)), $this); ?>

<?php $this->assign('pageTitle', "common.languages");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.languageInstructions"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/saveLanguageSettings">

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'primaryLocale','required' => 'true','key' => "locale.primary"), $this);?>
</td>
	<td width="80%" colspan="2" class="value"><select id="primaryLocale" name="primaryLocale" size="1" class="selectMenu">
	<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<option value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if ($this->_tpl_vars['localeKey'] == $this->_tpl_vars['primaryLocale']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['localeName']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
	</select></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td colspan="2" class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.primaryLocaleInstructions"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportedLocales','key' => "locale.supported"), $this);?>
</td>
	<td colspan="2" class="value"><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<input type="checkbox" name="supportedLocales[]" id="supportedLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]" value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['supportedLocales'] )): ?> checked="checked"<?php endif; ?>> <label for="supportedLocales[<?php echo $this->_tpl_vars['localeKey']; ?>
]"><?php echo $this->_tpl_vars['localeName']; ?>
</label><br />
	<?php endforeach; endif; unset($_from); ?></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td colspan="2" class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.supportedLocalesInstructions"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'alternateLocale1','key' => "manager.languages.alternateLocale1"), $this);?>
</td>
	<td colspan="2" class="value"><select id="alternateLocale1" name="alternateLocale1" size="1" class="selectMenu">
	<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicable"), $this);?>
</option>
	<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<option value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if ($this->_tpl_vars['localeKey'] == $this->_tpl_vars['alternateLocale1']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['localeName']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'alternateLocale2','key' => "manager.languages.alternateLocale2"), $this);?>
</td>
	<td colspan="2" class="value"><select id="alternateLocale2" name="alternateLocale2" size="1" class="selectMenu">
	<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicable"), $this);?>
</option>
	<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<option value="<?php echo $this->_tpl_vars['localeKey']; ?>
"<?php if ($this->_tpl_vars['localeKey'] == $this->_tpl_vars['alternateLocale2']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['localeName']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
	</select></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td colspan="2" class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.alternateLocaleInstructions"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td rowspan="2" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.alternativeLanguageOptions"), $this);?>
</td>
	<td width="5%"><input type="checkbox" name="journalTitleAltLanguages" id="journalTitleAltLanguages" value="1" /></td>
	<td width="75%"><label for="journalTitleAltLanguages"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.journalTitleAltLanguages"), $this);?>
</label></td>
</tr>
<tr valign="top">
	<td><input type="checkbox" name="articleAltLanguages" id="articleAltLanguages" value="1" /></td>
	<td><label for="articleAltLanguages"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.articleAltLanguages"), $this);?>
</label></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php else: ?>
<div class="separator"></div>
<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.languages.noneAvailable"), $this);?>
</span></p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>