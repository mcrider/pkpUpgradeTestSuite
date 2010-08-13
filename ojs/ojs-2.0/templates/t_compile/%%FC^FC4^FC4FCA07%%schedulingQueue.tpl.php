<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from editor/schedulingQueue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/schedulingQueue.tpl', 17, false),array('function', 'html_options', 'editor/schedulingQueue.tpl', 25, false),array('function', 'page_info', 'editor/schedulingQueue.tpl', 70, false),array('function', 'page_links', 'editor/schedulingQueue.tpl', 71, false),array('modifier', 'escape', 'editor/schedulingQueue.tpl', 29, false),array('modifier', 'date_format', 'editor/schedulingQueue.tpl', 50, false),array('modifier', 'truncate', 'editor/schedulingQueue.tpl', 52, false),array('block', 'iterate', 'editor/schedulingQueue.tpl', 47, false),)), $this); ?>

<?php $this->assign('pageTitle', "editor.schedulingQueue");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/editor/schedulingQueue");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/createIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInScheduling"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/futureIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/backIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<br/>

<form><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
:&nbsp;<select name="section" onchange="location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue?section='+this.options[this.selectedIndex].value" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['section']), $this);?>
</select></form>

<br />

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/updateSchedulingQueue" onsubmit="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.schedulingQueue.saveChanges"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')">

<table class="listing" width="100%">
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
	<tr valign="bottom" class="heading">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.submit"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.schedulingQueue.schedule"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.remove"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'schedulingQueueSubmissions','item' => 'submission')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo $this->_tpl_vars['submission']->getSectionAbbrev(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")); ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")); ?>
</a></td>
		<td><select name="schedule[<?php echo $this->_tpl_vars['submission']->getArticleID(); ?>
]" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions']), $this);?>
</select></td>
		<td width="10%"><input type="checkbox" name="remove[]" value="<?php echo $this->_tpl_vars['submission']->getArticleID(); ?>
" /></td>
	</tr>
	<tr>
		<td colspan="7" class="<?php if ($this->_tpl_vars['schedulingQueueSubmissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['schedulingQueueSubmissions']->wasEmpty()): ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['schedulingQueueSubmissions']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'articles','iterator' => $this->_tpl_vars['schedulingQueueSubmissions']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" />
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>