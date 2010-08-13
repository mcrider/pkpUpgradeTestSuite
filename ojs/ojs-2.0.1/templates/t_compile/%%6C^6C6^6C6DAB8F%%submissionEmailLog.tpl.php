<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/submissionEmailLog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submissionEmailLog.tpl', 17, false),array('function', 'page_info', 'sectionEditor/submissionEmailLog.tpl', 68, false),array('function', 'page_links', 'sectionEditor/submissionEmailLog.tpl', 69, false),array('block', 'iterate', 'sectionEditor/submissionEmailLog.tpl', 46, false),array('modifier', 'date_format', 'sectionEditor/submissionEmailLog.tpl', 48, false),array('modifier', 'truncate', 'sectionEditor/submissionEmailLog.tpl', 50, false),array('modifier', 'escape', 'sectionEditor/submissionEmailLog.tpl', 50, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.emailLog");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.summary"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionReview/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEditing/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editing"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionHistory/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history"), $this);?>
</a></li>
</ul>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionNotes"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sectionEditor/submission/summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
</h3>

<table width="100%" class="listing">
	<tr><td class="headseparator" colspan="6">&nbsp;</td></tr>
	<tr valign="top" class="heading">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.sender"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.recipients"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.subject"), $this);?>
</td>
		<td width="60" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td class="headseparator" colspan="6">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'emailLogEntries','item' => 'logEntry')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getDateSent())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo $this->_tpl_vars['logEntry']->getAssocTypeString(); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logEntry']->getFrom())) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logEntry']->getRecipients())) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getSubject())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</strong></td>
		<td align="right"><?php if ($this->_tpl_vars['logEntry']->getAssocType()): ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLogType/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getAssocType(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getAssocId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.related"), $this);?>
</a>&nbsp;<?php endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a><?php if ($this->_tpl_vars['isEditor']): ?>&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.email.confirmDeleteLogEntry"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a><?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="<?php if ($this->_tpl_vars['emailLogEntries']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['emailLogEntries']->wasEmpty()): ?>
	<tr valign="top">
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.noLogEntries"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['emailLogEntries']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'emailLogEntries','iterator' => $this->_tpl_vars['emailLogEntries']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php if ($this->_tpl_vars['isEditor']): ?>
<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.email.confirmClearLog"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.clearLog"), $this);?>
</a>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>