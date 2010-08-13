<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:35
         compiled from editor/issues/futureIssues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'editor/issues/futureIssues.tpl', 13, false),array('function', 'translate', 'editor/issues/futureIssues.tpl', 17, false),array('function', 'page_info', 'editor/issues/futureIssues.tpl', 56, false),array('function', 'page_links', 'editor/issues/futureIssues.tpl', 57, false),array('modifier', 'assign', 'editor/issues/futureIssues.tpl', 13, false),array('modifier', 'escape', 'editor/issues/futureIssues.tpl', 39, false),array('block', 'iterate', 'editor/issues/futureIssues.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageTitle', "editor.issues.futureIssues");  echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'editor','op' => 'issues'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'schedulingQueue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInScheduling"), $this);?>
</a></li>
        <li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'futureIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'backIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<br/>

<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="80%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.numArticles"), $this);?>
</td>
		<td width="5%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => $this->_tpl_vars['issue']->getIssueId()), $this);?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
		<td><?php echo $this->_tpl_vars['issue']->getNumArticles(); ?>
</td>
		<td align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeIssue','path' => $this->_tpl_vars['issue']->getIssueId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if ($this->_tpl_vars['issues']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['issues']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.noIssues"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="1" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'issues','iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>