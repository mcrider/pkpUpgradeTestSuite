<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from search/advancedSearch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/advancedSearch.tpl', 30, false),array('function', 'html_options', 'search/advancedSearch.tpl', 57, false),array('function', 'html_select_date', 'search/advancedSearch.tpl', 86, false),array('modifier', 'escape', 'search/advancedSearch.tpl', 30, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.advancedSearch");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
function ensureKeyword() {
	var allBlank = document.search.query.value == \'\';

	if (allBlank) {allBlank = document.search.author.value == \'\';}
	if (allBlank) {allBlank = document.search.title.value == \'\';}
	if (allBlank) {allBlank = document.search.discipline.value == \'\';}
	if (allBlank) {allBlank = document.search.subject.value == \'\';}
	if (allBlank) {allBlank = document.search.type.value == \'\';}
	if (allBlank) {allBlank = document.search.coverage.value == \'\';}
	if (allBlank) {allBlank = document.search.supplementaryFiles.value == \'\';}
	if (allBlank) {allBlank = document.search.fullText.value == \'\';}

	if (allBlank) {
		alert('; ?>
'<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noKeywordError"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
'<?php echo ');
		return false;
	}
	document.search.submit();
	return true;
}
'; ?>

</script>

<?php if (! $this->_tpl_vars['dateFrom']):  $this->assign('dateFrom', "--");  endif; ?>

<?php if (! $this->_tpl_vars['dateTo']):  $this->assign('dateTo', "--");  endif; ?>

<form name="search" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search/advancedResults">

<table class="data" width="100%">
<tr valign="top">
	<td width="25%" class="label"><label for="query"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchAllCategories"), $this);?>
</label></td>
	<td width="75%" class="value"><input type="text" id="query" name="query" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['query']; ?>
" class="textField" /></td>
</tr>
<?php if ($this->_tpl_vars['siteSearch']): ?>
<tr valign="top">
	<td class="label"><label for="searchJournal"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.withinJournal"), $this);?>
</label></td>
	<td class="value"><select name="searchJournal" id="searchJournal" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['journalOptions'],'selected' => $this->_tpl_vars['searchJournal']), $this);?>
</select></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchCategories"), $this);?>
</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><label for="author"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.author"), $this);?>
</label></td>
	<td class="value"><input type="text" name="author" id="author" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['author']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</label></td>
	<td class="value"><input type="text" id="title" name="title" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['title']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="fullText"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.fullText"), $this);?>
</label></td>
	<td class="value"><input type="text" id="fullText" name="fullText" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['fullText']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="supplementaryFiles"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFiles"), $this);?>
</label></td>
	<td class="value"><input type="text" id="supplementaryFiles" name="supplementaryFiles" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['supplementaryFiles']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="formSubLabel"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.date"), $this);?>
</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateFrom"), $this);?>
</td>
	<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateFrom','time' => $this->_tpl_vars['dateFrom'],'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateTo"), $this);?>
</td>
	<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateTo','time' => $this->_tpl_vars['dateTo'],'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.indexTerms"), $this);?>
</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><label for="discipline"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.discipline"), $this);?>
</label></td>
	<td class="value"><input type="text" name="discipline" id="discipline" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['discipline']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="subject"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.subject"), $this);?>
</label></td>
	<td class="value"><input type="text" name="subject" id="subject" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['subject']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="type"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.typeMethodApproach"), $this);?>
</label></td>
	<td class="value"><input type="text" name="type" id="type" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['type']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="coverage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.coverage"), $this);?>
</label></td>
	<td class="value"><input type="text" name="coverage" id="coverage" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['coverage']; ?>
" class="textField" /></td>
</tr>
</table>

<p><input type="button" onClick="ensureKeyword();" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
" class="button defaultButton" /></p>

<br />
&#187 <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.basicSearch"), $this);?>
</a>

<script type="text/javascript">document.search.query.focus();</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>