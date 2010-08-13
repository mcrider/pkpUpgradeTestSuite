<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from search/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/search.tpl', 19, false),array('function', 'html_options_translate', 'search/search.tpl', 37, false),array('function', 'html_options', 'search/search.tpl', 42, false),array('modifier', 'escape', 'search/search.tpl', 19, false),)), $this); ?>

<?php $this->assign('pageTitle', "navigation.search");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
function ensureKeyword() {
	if (document.search.query.value == \'\') {
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

<form name="search" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search/results">

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><label for="query"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchFor"), $this);?>
</label></td>
	<td width="80%" class="value"><input type="text" name="query" id="query" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['query']; ?>
" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><label for="searchField"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.inField"), $this);?>
</label></td>
	<td class="value"><select name="searchField" id="searchField" class="selectMenu" ><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['articleSearchByOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>
</select></td>
</tr>
<?php if ($this->_tpl_vars['siteSearch']): ?>
<tr valign="top">
	<td class="label"><label for="searchJournal"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.withinJournal"), $this);?>
</label></td>
	<td class="value"><select name="searchJournal" id="searchJournal" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['journalOptions'],'selected' => $this->_tpl_vars['searchJournal']), $this);?>
</select></td>
</tr>
<?php endif; ?>
</table>

<p><input type="button" onClick="ensureKeyword();" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
" class="button defaultButton" /></p>

<br />
&#187 <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search/advanced"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.advancedSearch"), $this);?>
</a>
<br />
&#187 <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/search/authors"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.browseAuthorIndex"), $this);?>
</a>

<script type="text/javascript">document.search.query.focus();</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>