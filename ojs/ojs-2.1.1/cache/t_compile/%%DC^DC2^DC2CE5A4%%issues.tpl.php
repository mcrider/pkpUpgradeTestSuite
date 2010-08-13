<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:41
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 33, false),array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 40, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 52, false),array('function', 'page_info', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 70, false),array('function', 'page_links', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 71, false),array('block', 'iterate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 49, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 52, false),array('modifier', 'date_format', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 53, false),array('modifier', 'to_array', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/importexport/pubmed/issues.tpl', 55, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.importexport.pubmed.export.selectIssue");  $this->assign('pageCrumbTitle', "plugins.importexport.pubmed.export.selectIssue");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
<!--
function toggleChecked() {
	var elements = document.issues.elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name = \'issueId[]\') {
			elements[i].checked = !elements[i].checked;
		}
	}
}
// -->
'; ?>

</script>

<br/>

<form action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'exportIssues'), $this);?>
" method="post" name="issues">
<table width="100%" class="listing">
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">&nbsp;</td>
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.published"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.numArticles"), $this);?>
</td>
		<td width="5%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><input type="checkbox" name="issueId[]" value="<?php echo $this->_tpl_vars['issue']->getIssueId(); ?>
"/></td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'issueToc','path' => $this->_tpl_vars['issue']->getIssueId()), $this);?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, ($this->_tpl_vars['dateFormatShort'])) : smarty_modifier_date_format($_tmp, ($this->_tpl_vars['dateFormatShort']))); ?>
</td>
		<td><?php echo $this->_tpl_vars['issue']->getNumArticles(); ?>
</td>
		<td align="right"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='exportIssue')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issue']->getIssueId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issue']->getIssueId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.export"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['issues']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['issues']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.noIssues"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'issues','iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.export"), $this);?>
" class="button defaultButton"/>&nbsp;<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="toggleChecked()" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>