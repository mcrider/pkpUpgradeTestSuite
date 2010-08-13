<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:51
         compiled from manager/setup/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/step1.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step1.tpl', 22, false),array('modifier', 'escape', 'manager/setup/step1.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.gettingDownTheDetails");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/saveSetup/1">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>1.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.generalInformation"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'journalTitle','required' => 'true','key' => "manager.setup.journalTitle"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="journalTitle" id="journalTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'journalInitials','required' => 'true','key' => "manager.setup.journalInitials"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="journalInitials" id="journalInitials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalInitials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="8" maxlength="16" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'issn','key' => "manager.setup.issn"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="issn" id="issn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['issn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="8" maxlength="16" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.issnDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value">
			<textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.mailingAddressDescription"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3>1.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.principalContact"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.principalContactDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactName','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactName" id="contactName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactTitle','key' => "user.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactTitle" id="contactTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>	
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactAffiliation','key' => "user.affiliation"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactAffiliation" id="contactAffiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactAffiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactEmail" id="contactEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactPhone" id="contactPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactFax','key' => "user.fax"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contactFax" id="contactFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="contactMailingAddress" id="contactMailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['contactMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>


<div class="separator"></div>


<h3>1.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.technicalSupportContact"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.technicalSupportContactDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportName','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="supportName" id="supportName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="supportEmail" id="supportEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="supportPhone" id="supportPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
</table>

<div class="separator"></div>

<h3>1.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emails"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top"><td colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailSignatureDescription"), $this);?>
<br />&nbsp;</td></tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'emailSignature','key' => "manager.setup.emailSignature"), $this);?>
</td>
		<td class="value">
			<textarea name="emailSignature" id="emailSignature" rows="3" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['emailSignature'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['envelopeSenderEnabled']): ?>
	<tr valign="top"><td colspan="2">&nbsp;</td></tr>
	<tr valign="top"><td colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailBounceAddressDescription"), $this);?>
<br />&nbsp;</td></tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'envelopeSender','key' => "manager.setup.emailBounceAddress"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="envelopeSender" id="envelopeSender" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['envelopeSender'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
		</td>
	</tr>
	<?php endif; ?>
</table>


<div class="separator"></div>

<h3>1.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publisher"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publisherDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "publisher[note]",'key' => "manager.setup.note"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="publisher[note]" id="publisher[note]" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisher']['note'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "publisher[institution]",'key' => "manager.setup.institution"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="publisher[institution]" id="publisher[institution]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "publisher[url]",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="publisher[url]" id="publisher[url]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
</table>

<div class="separator"></div>

<h3>1.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.sponsors"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.sponsorsDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsorNote','key' => "manager.setup.note"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="sponsorNote" id="sponsorNote" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorNote'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
<?php $_from = $this->_tpl_vars['sponsors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sponsors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sponsors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sponsorId'] => $this->_tpl_vars['sponsor']):
        $this->_foreach['sponsors']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors[".($this->_tpl_vars['sponsorId'])."][institution]",'key' => "manager.setup.institution"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="sponsors[<?php echo $this->_tpl_vars['sponsorId']; ?>
][institution]" id="sponsors[<?php echo $this->_tpl_vars['sponsorId']; ?>
][institution]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="90" class="textField" /><?php if ($this->_foreach['sponsors']['total'] > 1): ?> <input type="submit" name="delSponsor[<?php echo $this->_tpl_vars['sponsorId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /><?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors[".($this->_tpl_vars['sponsorId'])."][url]",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="sponsors[<?php echo $this->_tpl_vars['sponsorId']; ?>
][url]" id="sponsors[<?php echo $this->_tpl_vars['sponsorId']; ?>
][url]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<?php if (! ($this->_foreach['sponsors']['iteration'] == $this->_foreach['sponsors']['total'])): ?>
	<tr valign="top">
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif;  endforeach; else: ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors[0][institution]",'key' => "manager.setup.institution"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="sponsors[0][institution]" id="sponsors[0][institution]" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors[0][url]",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="sponsors[0][url]" id="sponsors[0][url]" size="40" maxlength="255" class="textField" /></td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<p><input type="submit" name="addSponsor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addSponsor"), $this);?>
" class="button" /></p>


<div class="separator"></div>


<h3>1.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.contributors"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.contributorsDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contributorNote','key' => "manager.setup.note"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="contributorNote" id="contributorNote" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['contributorNote'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
<?php $_from = $this->_tpl_vars['contributors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['contributors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['contributors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['contributorId'] => $this->_tpl_vars['contributor']):
        $this->_foreach['contributors']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors[".($this->_tpl_vars['contributorId'])."][name]",'key' => "manager.setup.contributor"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contributors[<?php echo $this->_tpl_vars['contributorId']; ?>
][name]" id="contributors[<?php echo $this->_tpl_vars['contributorId']; ?>
][name]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="90" class="textField" /><?php if ($this->_foreach['contributors']['total'] > 1): ?> <input type="submit" name="delContributor[<?php echo $this->_tpl_vars['contributorId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /><?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors[".($this->_tpl_vars['contributorId'])."][url]",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contributors[<?php echo $this->_tpl_vars['contributorId']; ?>
][url]" id="contributors[<?php echo $this->_tpl_vars['contributorId']; ?>
][url]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<?php if (! ($this->_foreach['contributors']['iteration'] == $this->_foreach['contributors']['total'])): ?>
	<tr valign="top">
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif;  endforeach; else: ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors[0][name]",'key' => "manager.setup.contributor"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contributors[0][name]" id="contributors[0][name]" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors[0][url]",'key' => "common.url"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="contributors[0][url]" id="contributors[0][url]" size="40" maxlength="255" class="textField" /></td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<p><input type="submit" name="addContributor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addContributor"), $this);?>
" class="button" /></p>


<div class="separator"></div>


<h3>1.8 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.searchEngineIndexing"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.searchEngineIndexingDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'searchDescription','key' => "common.description"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="searchDescription" id="searchDescription" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'searchKeywords','key' => "common.keywords"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="searchKeywords" id="searchKeywords" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchKeywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'customHeaders','key' => "manager.setup.customTags"), $this);?>
</td>
		<td width="80%" class="value">
			<textarea name="customHeaders" id="customHeaders" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['customHeaders'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.customTagsDescription"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/setup'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>