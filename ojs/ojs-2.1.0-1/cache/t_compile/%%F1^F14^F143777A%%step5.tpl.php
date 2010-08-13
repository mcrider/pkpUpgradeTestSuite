<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:39
         compiled from manager/setup/step5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step5.tpl', 15, false),array('function', 'translate', 'manager/setup/step5.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step5.tpl', 26, false),array('modifier', 'escape', 'manager/setup/step5.tpl', 27, false),array('modifier', 'date_format', 'manager/setup/step5.tpl', 36, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.customizingTheLook");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '5'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>5.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageHeader"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageHeaderDescription"), $this);?>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleType" id="homeHeaderTitleType-0" value="0"<?php if (! $this->_tpl_vars['homeHeaderTitleType']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleType-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="homeHeaderTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleType" id="homeHeaderTitleType-1" value="1"<?php if ($this->_tpl_vars['homeHeaderTitleType']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleType-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderTitleImage" class="uploadField" /> <input type="submit" name="uploadHomeHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderTitleImage']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderTitleImage']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderTitleImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderTitleImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderTitleImage']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderLogoImage" class="uploadField" /> <input type="submit" name="uploadHomeHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderLogoImage']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderLogoImage']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderLogoImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderLogoImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderLogoImage']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<?php if ($this->_tpl_vars['alternateLocale1']): ?>
<br />
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleTypeAlt1" id="homeHeaderTitleTypeAlt1-0" value="0"<?php if (! $this->_tpl_vars['homeHeaderTitleTypeAlt1']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleTypeAlt1-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="homeHeaderTitleAlt1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleTypeAlt1" id="homeHeaderTitleTypeAlt1-1" value="1"<?php if ($this->_tpl_vars['homeHeaderTitleTypeAlt1']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleTypeAlt1-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderTitleImageAlt1" class="uploadField" /> <input type="submit" name="uploadHomeHeaderTitleImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderTitleImageAlt1']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderTitleImageAlt1']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImageAlt1']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderTitleImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt1']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt1']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt1']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderLogoImageAlt1" class="uploadField" /> <input type="submit" name="uploadHomeHeaderLogoImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderLogoImageAlt1']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderLogoImageAlt1']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImageAlt1']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletehHomeHeaderLogoImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt1']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt1']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt1']['height']; ?>
" border="0" alt="" />
<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['alternateLocale2']): ?>
<br />
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleTypeAlt2" id="homeHeaderTitleTypeAlt2-0" value="0"<?php if (! $this->_tpl_vars['homeHeaderTitleTypeAlt2']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleTypeAlt2-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="homeHeaderTitleAlt2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="homeHeaderTitleTypeAlt2" id="homeHeaderTitleTypeAlt2-1" value="1"<?php if ($this->_tpl_vars['homeHeaderTitleTypeAlt2']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleTypeAlt2-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderTitleImageAlt2" class="uploadField" /> <input type="submit" name="uploadHomeHeaderTitleImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderTitleImageAlt2']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderTitleImageAlt2']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImageAlt2']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderTitleImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt2']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt2']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderTitleImageAlt2']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homeHeaderLogoImageAlt2" class="uploadField" /> <input type="submit" name="uploadHomeHeaderLogoImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homeHeaderLogoImageAlt2']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homeHeaderLogoImageAlt2']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImageAlt2']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletehHomeHeaderLogoImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt2']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt2']['width']; ?>
" height="<?php echo $this->_tpl_vars['homeHeaderLogoImageAlt2']['height']; ?>
" border="0" alt="" />
<?php endif;  endif; ?>


<div class="separator"></div>


<h3>5.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageContent"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageContentDescription"), $this);?>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalDescription"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalDescriptionDescription"), $this);?>
</p>

<p><textarea name="journalDescription" rows="3" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImage"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImageDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImage"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="homepageImage" class="uploadField" /> <input type="submit" name="uploadHomepageImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['homepageImage']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['homepageImage']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomepageImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['homepageImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['homepageImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['homepageImage']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.currentIssue"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="displayCurrentIssue" id="displayCurrentIssue" value="1" <?php if ($this->_tpl_vars['displayCurrentIssue']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="displayCurrentIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.displayCurrentIssue"), $this);?>
</label></td>
	</tr>
</table>


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.additionalContent"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.additionalContentDescription"), $this);?>
</p>

<p><textarea name="additionalHomeContent" id="additionalHomeContent" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['additionalHomeContent'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>5.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageHeader"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageHeaderDescription"), $this);?>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleType" id="pageHeaderTitleType-0" value="0"<?php if (! $this->_tpl_vars['pageHeaderTitleType']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleType-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="pageHeaderTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleType" id="pageHeaderTitleType-1" value="1"<?php if ($this->_tpl_vars['pageHeaderTitleType']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleType-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderTitleImage" class="uploadField" /> <input type="submit" name="uploadPageHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderTitleImage']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderTitleImage']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderTitleImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderTitleImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderTitleImage']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderLogoImage" class="uploadField" /> <input type="submit" name="uploadPageHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderLogoImage']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderLogoImage']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderLogoImage']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderLogoImage']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderLogoImage']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<?php if ($this->_tpl_vars['alternateLocale1']): ?>
<br />
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleTypeAlt1" id="pageHeaderTitleTypeAlt1-0" value="0"<?php if (! $this->_tpl_vars['pageHeaderTitleTypeAlt1']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleTypeAlt1-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="pageHeaderTitleAlt1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleTypeAlt1" id="pageHeaderTitleTypeAlt1-1" value="1"<?php if ($this->_tpl_vars['pageHeaderTitleTypeAlt1']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleTypeAlt1-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderTitleImageAlt1" class="uploadField" /> <input type="submit" name="uploadPageHeaderTitleImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderTitleImageAlt1']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderTitleImageAlt1']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImageAlt1']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderTitleImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt1']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt1']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt1']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderLogoImageAlt1" class="uploadField" /> <input type="submit" name="uploadPageHeaderLogoImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderLogoImageAlt1']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderLogoImageAlt1']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImageAlt1']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderLogoImageAlt1" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt1']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt1']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt1']['height']; ?>
" border="0" alt="" />
<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['alternateLocale2']): ?>
<br />
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleTypeAlt2" id="pageHeaderTitleTypeAlt2-0" value="0"<?php if (! $this->_tpl_vars['pageHeaderTitleTypeAlt2']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleTypeAlt2-0",'key' => "manager.setup.useTextTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="pageHeaderTitleAlt2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="radio" name="pageHeaderTitleTypeAlt2" id="pageHeaderTitleTypeAlt2-1" value="1"<?php if ($this->_tpl_vars['pageHeaderTitleTypeAlt2']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleTypeAlt2-1",'key' => "manager.setup.useImageTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderTitleImageAlt2" class="uploadField" /> <input type="submit" name="uploadPageHeaderTitleImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderTitleImageAlt2']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderTitleImageAlt2']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImageAlt2']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderTitleImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt2']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt2']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderTitleImageAlt2']['height']; ?>
" border="0" alt="" />
<?php endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
 (<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="pageHeaderLogoImageAlt2" class="uploadField" /> <input type="submit" name="uploadPageHeaderLogoImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pageHeaderLogoImageAlt2']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo $this->_tpl_vars['pageHeaderLogoImageAlt2']['name']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImageAlt2']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderLogoImageAlt2" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt2']['uploadName']; ?>
" width="<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt2']['width']; ?>
" height="<?php echo $this->_tpl_vars['pageHeaderLogoImageAlt2']['height']; ?>
" border="0" alt="" />
<?php endif;  endif; ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.alternateHeader"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.alternateHeaderDescription"), $this);?>
</p>

<p><textarea name="journalPageHeader" id="journalPageHeader" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalPageHeader'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>5.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageFooter"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageFooterDescription"), $this);?>
</p>

<p><textarea name="journalPageFooter" id="journalPageFooter" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalPageFooter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>5.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navigationBar"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.itemsDescription"), $this);?>
</p>

<table width="100%" class="data">
<?php $_from = $this->_tpl_vars['navItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['navItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['navItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['navItemId'] => $this->_tpl_vars['navItem']):
        $this->_foreach['navItems']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-".($this->_tpl_vars['navItemId'])."-name",'key' => "manager.setup.labelName"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="navItems[<?php echo $this->_tpl_vars['navItemId']; ?>
][name]" id="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /> <?php if ($this->_foreach['navItems']['total'] > 1): ?> <input type="submit" name="delNavItem[<?php echo $this->_tpl_vars['navItemId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /><?php endif; ?>
			<table width="100%">
				<tr valign="top">
					<td width="5%"><input type="checkbox" name="navItems[<?php echo $this->_tpl_vars['navItemId']; ?>
][isLiteral]" id="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-isLiteral" value="1"<?php if ($this->_tpl_vars['navItem']['isLiteral']): ?> checked="checked"<?php endif; ?> /></td>
					<td width="95%"><label for="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-isLiteral"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsLiteral"), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-".($this->_tpl_vars['navItemId'])."-url",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="navItems[<?php echo $this->_tpl_vars['navItemId']; ?>
][url]" id="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<table width="100%">
				<tr valign="top">
					<td width="5%"><input type="checkbox" name="navItems[<?php echo $this->_tpl_vars['navItemId']; ?>
][isAbsolute]" id="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-isAbsolute" value="1"<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?> checked="checked"<?php endif; ?> /></td>
					<td width="95%"><label for="navItems-<?php echo $this->_tpl_vars['navItemId']; ?>
-isAbsolute"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsAbsolute"), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<?php if (! ($this->_foreach['navItems']['iteration'] == $this->_foreach['navItems']['total'])): ?>
	<tr valign="top">
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif;  endforeach; else: ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-0-name",'key' => "manager.setup.labelName"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="navItems[0][name]" id="navItems-0-name" size="30" maxlength="90" class="textField" />
			<table width="100%">
				<tr valign="top">
					<td width="5%"><input type="checkbox" name="navItems[0][isLiteral]" id="navItems-0-isLiteral" value="1" /></td>
					<td width="95%"><label for="navItems-0-isLiteral"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsLiteral"), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-0-url",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="navItems[0][url]" id="navItems-0-url" size="60" maxlength="255" class="textField" />
			<table width="100%">
				<tr valign="top">
					<td width="5%"><input type="checkbox" name="navItems[0][isAbsolute]" id="navItems-0-isAbsolute" value="1" /></td>
					<td width="95%"><label for="navItems-0-isAbsolute"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsAbsolute"), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<p><input type="submit" name="addNavItem" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addNavItem"), $this);?>
" class="button" /></p>


<div class="separator"></div>


<h3>5.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalStyleSheet"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalStyleSheetDescription"), $this);?>
</p>

<table width="100%" class="data">
<tr>
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useJournalStyleSheet"), $this);?>
</td>
	<td width="80%" class="value"><input type="file" name="journalStyleSheet" class="uploadField" /> <input type="submit" name="uploadJournalStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
</tr>
</table>

<?php if ($this->_tpl_vars['journalStyleSheet']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <a href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['journalStyleSheet']['uploadName']; ?>
" class="file"><?php echo $this->_tpl_vars['journalStyleSheet']['name']; ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['journalStyleSheet']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteJournalStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<?php endif; ?>

<div class="separator"></div>

<h3>5.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.description"), $this);?>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forReaders"), $this);?>
</h4>

<p><textarea name="readerInformation" id="readerInformation" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['readerInformation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forAuthors"), $this);?>
</h4>

<p><textarea name="authorInformation" id="authorInformation" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorInformation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forLibrarians"), $this);?>
</h4>

<p><textarea name="librarianInformation" id="librarianInformation" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['librarianInformation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>

<h3>5.8 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lists"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.listsDescription"), $this);?>
</p>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.itemsPerPage"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" size="3" name="itemsPerPage" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['itemsPerPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.numPageLinks"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" size="3" name="numPageLinks" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['numPageLinks'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	</tr>
</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>