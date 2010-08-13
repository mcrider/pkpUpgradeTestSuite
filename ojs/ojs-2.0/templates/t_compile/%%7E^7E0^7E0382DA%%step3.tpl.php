<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:51
         compiled from manager/setup/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/setup/step3.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step3.tpl', 73, false),array('modifier', 'escape', 'manager/setup/step3.tpl', 23, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.guidingSubmissions");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/saveSetup/3">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>3.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorGuidelines"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorGuidelinesDescription"), $this);?>
</p>

<p>
	<textarea name="authorGuidelines" id="authorGuidelines" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorGuidelines'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionPreparationChecklist"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionPreparationChecklistDescription"), $this);?>
</p>

<?php $_from = $this->_tpl_vars['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
	<?php if (! $this->_tpl_vars['notFirstChecklistItem']): ?>
		<?php $this->assign('notFirstChecklistItem', 1); ?>
		<table width="100%" class="data">
			<tr valign="top">
				<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
				<td width="95%" colspan="2">&nbsp;</td>
			</tr>
	<?php endif; ?>

	<tr valign="top">
		<td width="5%" class="label"><input type="text" name="submissionChecklist[<?php echo $this->_tpl_vars['checklistId']; ?>
][order]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['order'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="3" maxlength="2" class="textField" /></td>
		<td class="value"><textarea name="submissionChecklist[<?php echo $this->_tpl_vars['checklistId']; ?>
][content]" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
		<td width="100%"><input type="submit" name="delChecklist[<?php echo $this->_tpl_vars['checklistId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<p><input type="submit" name="addChecklist" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addChecklistItem"), $this);?>
" class="button" /></p>


<div class="separator"></div>

<h3>3.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorCopyrightNotice"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorCopyrightNoticeDescription"), $this);?>
</p>

<p><textarea name="copyrightNotice" id="copyrightNotice" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyrightNotice'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>3.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.forAuthorsToIndexTheirWork"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.forAuthorsToIndexTheirWorkDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="metaDiscipline" id="metaDiscipline" value="1"<?php if ($this->_tpl_vars['metaDiscipline']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaDiscipline','key' => "manager.setup.discipline"), $this);?>
</strong>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaDisciplineExamples" id="metaDisciplineExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaDisciplineExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineExamples"), $this);?>
</span>
		</td>
	</tr>
	
	<tr>
		<td class="separator" colspan="2"><br />&nbsp;</td>
	</tr>
	
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="metaSubjectClass" id="metaSubjectClass" value="1"<?php if ($this->_tpl_vars['metaSubjectClass']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubjectClass','key' => "manager.setup.subjectClassification"), $this);?>
</strong>
		</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<table width="100%">
				<tr valign="top">
					<td width="10%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubjectClassTitle','key' => "common.title"), $this);?>
</td>
					<td width="90%"><input type="text" name="metaSubjectClassTitle" id="metaSubjectClassTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectClassTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
				</tr>
				<tr valign="top">
					<td width="10%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubjectClassUrl','key' => "common.url"), $this);?>
</td>
					<td width="90%"><input type="text" name="metaSubjectClassUrl" id="metaSubjectClassUrl" value="<?php if ($this->_tpl_vars['metaSubjectClassUrl']):  echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectClassUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else: ?>http://<?php endif; ?>" size="40" maxlength="255" class="textField" />
				</tr>
			</table>
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectClassificationExamples"), $this);?>
</span>
		</td>
	</tr>
	
	<tr>
		<td class="separator" colspan="2"><br />&nbsp;</td>
	</tr>
	
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="metaSubject" id="metaSubject" value="1"<?php if ($this->_tpl_vars['metaSubject']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubject','key' => "manager.setup.subjectKeywordTopic"), $this);?>
</strong>
		</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaSubjectExamples" id="metaSubjectExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectExamples"), $this);?>
</span>
		</td>
	</tr>
	
	<tr>
		<td class="separator" colspan="2"><br />&nbsp;</td>
	</tr>
	
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="metaCoverage" id="metaCoverage" value="1"<?php if ($this->_tpl_vars['metaCoverage']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaCoverage','key' => "manager.setup.coverage"), $this);?>
</strong>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td class="separator" colspan="2">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageGeoProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaCoverageGeoExamples" id="metaCoverageGeoExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageGeoExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageGeoExamples"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td class="separator" colspan="2">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageChronProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaCoverageChronExamples" id="metaCoverageChronExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageChronExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageChronExamples"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td class="separator" colspan="2">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageResearchSampleProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaCoverageResearchSampleExamples" id="metaCoverageResearchSampleExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageResearchSampleExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageResearchSampleExamples"), $this);?>
</span>
		</td>
	</tr>
	
	<tr>
		<td class="separator" colspan="2"><br />&nbsp;</td>
	</tr>
	
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="metaType" id="metaType" value="1"<?php if ($this->_tpl_vars['metaType']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaType','key' => "manager.setup.typeMethodApproach"), $this);?>
</strong>
		</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value">
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.typeProvideExamples"), $this);?>
:</span>
			<br />
			<input type="text" name="metaTypeExamples" id="metaTypeExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaTypeExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.typeExamples"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3>3.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.registerJournalForIndexing"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.registerJournalForIndexingDescription",'siteUrl' => ($this->_tpl_vars['pageUrl'])."/",'oaiUrl' => ($this->_tpl_vars['pageUrl'])."/oai/"), $this);?>
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