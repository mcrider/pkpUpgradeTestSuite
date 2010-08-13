<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:55
         compiled from submission/metadata/metadataEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/metadata/metadataEdit.tpl', 33, false),array('function', 'fieldLabel', 'submission/metadata/metadataEdit.tpl', 48, false),array('modifier', 'escape', 'submission/metadata/metadataEdit.tpl', 35, false),)), $this); ?>
 
<?php $this->assign('pageTitle', "submission.editMetadata");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="metadata" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/saveMetadata">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['canViewAuthors']):  echo '
<script type="text/javascript">
// Move author up/down
function moveAuthor(dir, authorIndex) {
	var form = document.metadata;
	form.moveAuthor.value = 1;
	form.moveAuthorDir.value = dir;
	form.moveAuthorIndex.value = authorIndex;
	form.submit();
}
</script>
'; ?>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</h3>

<input type="hidden" name="deletedAuthors" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['deletedAuthors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<input type="hidden" name="moveAuthor" value="0" />
<input type="hidden" name="moveAuthorDir" value="" />
<input type="hidden" name="moveAuthorIndex" value="" />

<table width="100%" class="data">
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['authorIndex'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<input type="hidden" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][authorId]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['authorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][seq]" value="<?php echo $this->_tpl_vars['authorIndex']+1; ?>
" />
	<?php if ($this->_foreach['authors']['total'] <= 1): ?>
	<input type="hidden" name="primaryContact" value="<?php echo $this->_tpl_vars['authorIndex']; ?>
" />
	<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[".($this->_tpl_vars['authorIndex'])."][firstName]",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][firstName]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][firstName]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[{".($this->_tpl_vars['authorIndex'])."][middleName]",'key' => "user.middleName"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][middleName]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][middleName]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[".($this->_tpl_vars['authorIndex'])."][lastName]",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][lastName]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][lastName]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[".($this->_tpl_vars['authorIndex'])."][affiliation]",'key' => "user.affiliation"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][affiliation]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][affiliation]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[".($this->_tpl_vars['authorIndex'])."][email]",'required' => 'true','key' => "user.email"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][email]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][email]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[".($this->_tpl_vars['authorIndex'])."][biography]",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
		<td class="value"><textarea name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][biography]" id="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][biography]" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']['biography'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php if ($this->_foreach['authors']['total'] > 1): ?>
	<tr valign="top">
		<td class="label">Reorder author's name</td>
		<td class="value"><a href="javascript:moveAuthor('u', '<?php echo $this->_tpl_vars['authorIndex']; ?>
')" class="action plain">&uarr;</a> <a href="javascript:moveAuthor('d', '<?php echo $this->_tpl_vars['authorIndex']; ?>
')" class="action plain">&darr;</a></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="label"><input type="radio" name="primaryContact" id="primaryContact[<?php echo $this->_tpl_vars['authorIndex']; ?>
]" value="<?php echo $this->_tpl_vars['authorIndex']; ?>
"<?php if ($this->_tpl_vars['primaryContact'] == $this->_tpl_vars['authorIndex']): ?> checked="checked"<?php endif; ?> /> <label for="primaryContact[<?php echo $this->_tpl_vars['authorIndex']; ?>
]"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.selectPrincipalContact"), $this);?>
</label></td>
		<td class="labelRightPlain">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="value"><input type="submit" name="delAuthor[<?php echo $this->_tpl_vars['authorIndex']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.deleteAuthor"), $this);?>
" class="button" /></td>
	</tr>
	<?php endif; ?>
	<?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>

	<?php endforeach; else: ?>
	<input type="hidden" name="authors[0][authorId]" value="0" />
	<input type="hidden" name="primaryContact" value="0" />
	<input type="hidden" name="authors[0][seq]" value="1" />
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][firstName]",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="authors[0][firstName]" id="authors[0][firstName]" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][middleName]",'key' => "user.middleName"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[0][middleName]" id="authors[0][middleName]" size="20" maxlength="40" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][lastName]",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[0][lastName]" id="authors[0][lastName]" size="20" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][affiliation]",'key' => "user.affiliation"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[0][affiliation]" id="authors[0][affiliation]" size="30" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][email]",'required' => 'true','key' => "user.email"), $this);?>
</td>
		<td class="value"><input type="text" name="authors[0][email]" id="authors[0][email]" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors[0][biography]",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
		<td class="value"><textarea name="authors[0][biography]" ids="authors[0][biography]" rows="5" cols="40" class="textArea"></textarea></td>
	</tr>
	<?php endif; unset($_from); ?>
</table>

<p><input type="submit" class="button" name="addAuthor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.addAuthor"), $this);?>
" /></p>


<div class="separator"></div>
<?php endif; ?>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.titleAndAbstract"), $this);?>
</h3>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "article.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt1','key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><input type="text" name="titleAlt1" id="titleAlt1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt2','key' => "article.title"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><input type="text" name="titleAlt2" id="titleAlt2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstract','key' => "article.abstract"), $this);?>
</td>
		<td class="value"><textarea name="abstract" id="abstract" rows="15" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstractAlt1','key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']]; ?>
)</td>
		<td class="value"><textarea name="abstractAlt1" id="abstractAlt1" rows="15" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstractAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstractAlt2','key' => "article.abstract"), $this);?>
<br />(<?php echo $this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']]; ?>
)</td>
		<td class="value"><textarea name="abstractAlt2" id="abstractAlt2" rows="15" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstractAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php endif; ?>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.indexing"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionIndexingDescription"), $this);?>
</p>

<table width="100%" class="data">
	<?php if ($this->_tpl_vars['journalSettings']['metaDiscipline']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'discipline','key' => "article.discipline"), $this);?>
</td>
		<td class="value">
			<input type="text" name="discipline" id="discipline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['discipline'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<?php if ($this->_tpl_vars['journalSettings']['metaDisciplineExamples']): ?>
			<br />
			<span class="instruct"><?php echo $this->_tpl_vars['journalSettings']['metaDisciplineExamples']; ?>
</span>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubjectClass']): ?>
	<tr valign="top">
		<td colspan="2" class="label"><a href="<?php echo $this->_tpl_vars['journalSettings']['metaSubjectClassUrl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['journalSettings']['metaSubjectClassTitle']; ?>
</a></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subjectClass','key' => "article.subjectClassification"), $this);?>
</td>
		<td class="value">
			<input type="text" name="subjectClass" id="subjectClass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subjectClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.subjectClassInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubject']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "article.subject"), $this);?>
</td>
		<td class="value">
			<input type="text" name="subject" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<?php if ($this->_tpl_vars['journalSettings']['metaSubjectExamples']): ?>
			<br />
			<span class="instruct"><?php echo $this->_tpl_vars['journalSettings']['metaSubjectExamples']; ?>
</span>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverage']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageGeo','key' => "article.coverageGeo"), $this);?>
</td>
		<td class="value">
			<input type="text" name="coverageGeo" id="coverageGeo" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageGeo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<?php if ($this->_tpl_vars['journalSettings']['metaCoverageGeoExamples']): ?>
			<br />
			<span class="instruct"><?php echo $this->_tpl_vars['journalSettings']['metaCoverageGeoExamples']; ?>
</span>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageChron','key' => "article.coverageChron"), $this);?>
</td>
		<td class="value">
			<input type="text" name="coverageChron" id="coverageChron" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageChron'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<?php if ($this->_tpl_vars['journalSettings']['metaCoverageChronExamples']): ?>
			<br />
			<span class="instruct"><?php echo $this->_tpl_vars['journalSettings']['metaCoverageChronExamples']; ?>
</span>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageSample','key' => "article.coverageSample"), $this);?>
</td>
		<td class="value">
			<input type="text" name="coverageSample" id="coverageSample" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageSample'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
			<?php if ($this->_tpl_vars['journalSettings']['metaCoverageResearchSampleExamples']): ?>
			<br />
			<span class="instruct"><?php echo $this->_tpl_vars['journalSettings']['metaCoverageResearchSampleExamples']; ?>
</span>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['metaType']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "article.type"), $this);?>
</td>
		<td class="value">
			<input type="text" name="type" id="type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "article.language"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="language" id="language" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="10" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supportingAgencies"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionSupportingAgenciesDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "author.submit.agencies"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="text" name="sponsor" id="sponsor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
		</td>
	</tr>
</table>


<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.saveMetadata"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEditing/<?php echo $this->_tpl_vars['articleId']; ?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>