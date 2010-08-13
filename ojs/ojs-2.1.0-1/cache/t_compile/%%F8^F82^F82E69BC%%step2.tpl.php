<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:34
         compiled from author/submit/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/step2.tpl', 14, false),array('function', 'url', 'author/submit/step2.tpl', 21, false),array('function', 'fieldLabel', 'author/submit/step2.tpl', 56, false),array('function', 'html_options', 'author/submit/step2.tpl', 76, false),array('modifier', 'nl2br', 'author/submit/step2.tpl', 17, false),array('modifier', 'escape', 'author/submit/step2.tpl', 42, false),array('modifier', 'default', 'author/submit/step2.tpl', 302, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step2");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.metadataDescription"), $this);?>
</p>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.privacyStatement"), $this);?>
</h3>
<br />
<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['privacyStatement'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>


<div class="separator"></div>

<form name="submit" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSubmit','path' => $this->_tpl_vars['submitStep']), $this);?>
">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
<!--
// Move author up/down
function moveAuthor(dir, authorIndex) {
	var form = document.submit;
	form.moveAuthor.value = 1;
	form.moveAuthorDir.value = dir;
	form.moveAuthorIndex.value = authorIndex;
	form.submit();
}
// -->
</script>
'; ?>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.authorsDescription"), $this);?>
</p>
<input type="hidden" name="deletedAuthors" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['deletedAuthors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<input type="hidden" name="moveAuthor" value="0" />
<input type="hidden" name="moveAuthorDir" value="" />
<input type="hidden" name="moveAuthorIndex" value="" />

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

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-firstName",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][firstName]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-middleName",'key' => "user.middleName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][middleName]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-lastName",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][lastName]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-affiliation",'key' => "user.affiliation"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][affiliation]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="255"/></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-country",'key' => "common.country"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][country]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['author']['country']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-email",'required' => 'true','key' => "user.email"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][email]" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-biography",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="authors[<?php echo $this->_tpl_vars['authorIndex']; ?>
][biography]" class="textArea" id="authors-<?php echo $this->_tpl_vars['authorIndex']; ?>
-biography" rows="5" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']['biography'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<?php if ($this->_foreach['authors']['total'] > 1): ?>
<tr valign="top">
	<td colspan="2">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.reorderAuthorName"), $this);?>
 <a href="javascript:moveAuthor('u', '<?php echo $this->_tpl_vars['authorIndex']; ?>
')" class="action">&uarr;</a> <a href="javascript:moveAuthor('d', '<?php echo $this->_tpl_vars['authorIndex']; ?>
')" class="action">&darr;</a><br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.reorderInstructions"), $this);?>

	</td>
</tr>
<tr valign="top">
	<td width="80%" class="value" colspan="2"><input type="radio" name="primaryContact" value="<?php echo $this->_tpl_vars['authorIndex']; ?>
"<?php if ($this->_tpl_vars['primaryContact'] == $this->_tpl_vars['authorIndex']): ?> checked="checked"<?php endif; ?> /> <label for="primaryContact"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.selectPrincipalContact"), $this);?>
</label> <input type="submit" name="delAuthor[<?php echo $this->_tpl_vars['authorIndex']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.deleteAuthor"), $this);?>
" class="button" /></td>
</tr>
<tr>
	<td colspan="2"><br/></td>
</tr>
<?php endif; ?>
</table>
<?php endforeach; else: ?>
<input type="hidden" name="authors[0][authorId]" value="0" />
<input type="hidden" name="primaryContact" value="0" />
<input type="hidden" name="authors[0][seq]" value="1" />
<table width="100%' class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-firstName",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][firstName]" id="authors-0-firstName" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-middleName",'key' => "user.middleName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][middleName]" id="authors-0-middleName" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-lastName",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][lastName]" id="authors-0-lastName" size="20" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-affiliation",'key' => "user.affiliation"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][affiliation]" id="authors-0-affiliation" size="30" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-country",'key' => "common.country"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="authors[0][country]" id="authors-0-country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-email",'required' => 'true','key' => "user.email"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][email]" id="authors-0-email" size="30" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-biography",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="authors[0][biography]" class="textArea" id="authors-0-biography" rows="5" cols="40"></textarea></td>
</tr>
</table>
<?php endif; unset($_from); ?>

<p><input type="submit" class="button" name="addAuthor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.addAuthor"), $this);?>
" /></p>

<div class="separator"></div>

<h3><?php if ($this->_tpl_vars['section']->getAbstractsDisabled() == 1):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.titleAndAbstract"), $this); endif; ?></h3>

<table width="100%" class="data">

<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "article.title"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['alternateLocale1']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt1','key' => "article.title"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
	<td width="80%" class="value"><input type="text" class="textField" name="titleAlt1" id="titleAlt1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<?php endif;  if ($this->_tpl_vars['alternateLocale2']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt2','key' => "article.title"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
	<td width="80%" class="value"><input type="text" class="textField" name="titleAlt2" id="titleAlt2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['section']->getAbstractsDisabled() == 0): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstract','key' => "article.abstract"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="abstract" id="abstract" class="textArea" rows="15" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<?php if ($this->_tpl_vars['alternateLocale1']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstractAlt1','key' => "article.abstract"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
	<td width="80%" class="value"><textarea name="abstractAlt1" class="textArea" id="abstractAlt1" rows="15" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstractAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<?php endif;  if ($this->_tpl_vars['alternateLocale2']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstractAlt2','key' => "article.abstract"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
	<td width="80%" class="value"><textarea name="abstractAlt2" class="textArea" id="abstractAlt2" rows="15" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstractAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<?php endif;  endif; ?></table>

<div class="separator"></div>

<?php if ($this->_tpl_vars['section']->getMetaIndexed() == 1): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.indexing"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionIndexingDescription"), $this);?>
</p>
	<table width="100%" class="data">
	<?php if ($this->_tpl_vars['journalSettings']['metaDiscipline']): ?>
	<tr valign="top">
		<td<?php if ($this->_tpl_vars['journalSettings']['metaDisciplineExamples']): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'discipline','key' => "article.discipline"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="discipline" id="discipline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['discipline'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<?php if ($this->_tpl_vars['journalSettings']['metaDisciplineExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaDisciplineExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['journalSettings']['metaSubjectClass']): ?>
	<tr valign="top">
		<td rowspan="2" width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subjectClass','key' => "article.subjectClassification"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="subjectClass" id="subjectClass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subjectClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaSubjectClassUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaSubjectClassTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['journalSettings']['metaSubject']): ?>
	<tr valign="top">
		<td<?php if ($this->_tpl_vars['journalSettings']['metaSubjectExamples']): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "article.subject"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="subject" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<?php if ($this->_tpl_vars['journalSettings']['metaSubjectExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaSubjectExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverage']): ?>
	<tr valign="top">
		<td<?php if ($this->_tpl_vars['journalSettings']['metaCoverageGeoExamples']): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageGeo','key' => "article.coverageGeo"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="coverageGeo" id="coverageGeo" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageGeo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverageGeoExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaCoverageGeoExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr valign="top">
		<td<?php if ($this->_tpl_vars['journalSettings']['metaCoverageChronExamples']): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageChron','key' => "article.coverageChron"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="coverageChron" id="coverageChron" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageChron'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverageChronExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaCoverageChronExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr valign="top">
		<td<?php if ($this->_tpl_vars['journalSettings']['metaCoverageResearchSampleExamples']): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageSample','key' => "article.coverageSample"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="coverageSample" id="coverageSample" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageSample'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>
	<?php if ($this->_tpl_vars['journalSettings']['metaCoverageResearchSampleExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaCoverageResearchSampleExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['journalSettings']['metaType']): ?>
	<tr valign="top">
		<td width="20%" <?php if ($this->_tpl_vars['journalSettings']['metaTypeExamples']): ?>rowspan="2" <?php endif; ?>class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "article.type"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="type" id="type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" /></td>
	</tr>

	<?php if ($this->_tpl_vars['journalSettings']['metaTypeExamples']): ?>
	<tr valign="top">
		<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['metaTypeExamples'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif; ?>
	
	<tr valign="top">
		<td rowspan="2" width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "article.language"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" class="textField" name="language" id="language" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'en') : smarty_modifier_default($_tmp, 'en')); ?>
" size="5" maxlength="10" /></td>
	</tr>
	<tr valign="top">
		<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span></td>
	</tr>
	</table>

<div class="separator"></div>

<?php endif; ?>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionSupportingAgencies"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionSupportingAgenciesDescription"), $this);?>
</p>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "author.submit.agencies"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="sponsor" id="sponsor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author'), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.cancelSubmission"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>