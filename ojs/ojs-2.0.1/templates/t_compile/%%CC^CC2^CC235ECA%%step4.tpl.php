<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:01
         compiled from manager/setup/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/step4.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step4.tpl', 59, false),array('modifier', 'escape', 'manager/setup/step4.tpl', 24, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.managingTheJournal");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/saveSetup/4">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>4.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduling"), $this);?>
</h3>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationSchedule"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduleDescription"), $this);?>
</p>

<p><textarea name="pubFreqPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubFreqPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormat"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat[1]" value="1"<?php if (( ! $this->_tpl_vars['publicationFormat'] || $this->_tpl_vars['publicationFormat'] == 1 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat[1]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatIssue"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat[2]" value="2"<?php if (( $this->_tpl_vars['publicationFormat'] == 2 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat[2]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatVolume"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat[3]" value="3"<?php if (( $this->_tpl_vars['publicationFormat'] == 3 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat[3]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatYear"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat[4]" value="4"<?php if (( $this->_tpl_vars['publicationFormat'] == 4 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<label for="publicationFormat[4]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatTitle"), $this);?>
</label>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatTitleDescription"), $this);?>
</span>
		</td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublication"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialNumber','key' => "issue.number"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialNumber" id="initialNumber" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialVolume','key' => "issue.volume"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialVolume" id="initialVolume" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialYear','key' => "issue.year"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialYear" id="initialYear" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'issuePerVolume','key' => "manager.setup.issuePerVolume"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="issuePerVolume" id="issuePerVolume" value="<?php if ($this->_tpl_vars['issuePerVolume']):  echo ((is_array($_tmp=$this->_tpl_vars['issuePerVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'volumePerYear','key' => "manager.setup.volumePerYear"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="volumePerYear" id="volumePerYear" value="<?php if ($this->_tpl_vars['volumePerYear']):  echo ((is_array($_tmp=$this->_tpl_vars['volumePerYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" size="5" maxlength="8" class="textField" /></td>
	</tr>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationNote"), $this);?>
</p>


<div class="separator"></div>


<h3>4.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicIdentifier"), $this);?>
</h3>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifier"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifierDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePublicIssueId" id="enablePublicIssueId" value="1"<?php if ($this->_tpl_vars['enablePublicIssueId']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePublicIssueId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicIssueId"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePublicArticleId" id="enablePublicArticleId" value="1"<?php if ($this->_tpl_vars['enablePublicArticleId']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePublicArticleId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicArticleId"), $this);?>
</label></td>
	</tr>
</table>

<br />

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.pageNumberIdentifier"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePageNumber" id="enablePageNumber" value="1"<?php if ($this->_tpl_vars['enablePageNumber']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePageNumber"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePageNumber"), $this);?>
</label></td>
	</tr>
</table>


<div class="separator"></div>


<h3>4.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscription"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscriptionDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enableSubscriptions" id="enableSubscriptions" value="1"<?php if ($this->_tpl_vars['enableSubscriptions']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enableSubscriptions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableSubscriptions"), $this);?>
</label></td>
	</tr>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscriptionContactDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionName','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionName" id="subscriptionName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionEmail" id="subscriptionEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionPhone" id="subscriptionPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionFax','key' => "user.fax"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionFax" id="subscriptionFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="subscriptionMailingAddress" id="subscriptionMailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscriptionAdditionalInformationDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionAdditionalInformation','key' => "manager.setup.subscriptionAdditionalInformation"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="subscriptionAdditionalInformation" id="subscriptionAdditionalInformation" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionAdditionalInformation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>


<div class="separator"></div>


<h3>4.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyediting"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useCopyeditors" id="useCopyeditors[1]" value="1"<?php if ($this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useCopyeditors[1]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useCopyeditors"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useCopyeditors" id="useCopyeditors[0]" value="0"<?php if (! $this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useCopyeditors[0]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseCopyeditors"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="copyeditInstructions" id="copyeditInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3>4.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutAndGalleys"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useLayoutEditors" id="useLayoutEditors[1]" value="1"<?php if ($this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useLayoutEditors[1]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useLayoutEditors"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useLayoutEditors" id="useLayoutEditors[0]" value="0"<?php if (! $this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useLayoutEditors[0]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseLayoutEditors"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="layoutInstructions" id="layoutInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3>4.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofreading"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useProofreaders" id="useProofreaders[1]" value="1"<?php if ($this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useProofreaders[1]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useProofreaders"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useProofreaders" id="useProofreaders[0]" value="0"<?php if (! $this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useProofreaders[0]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseProofreaders"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="proofInstructions" id="proofInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


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