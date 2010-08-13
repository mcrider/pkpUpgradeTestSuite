<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/submissionHistory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign_translate', 'sectionEditor/submissionHistory.tpl', 13, false),array('function', 'translate', 'sectionEditor/submissionHistory.tpl', 49, false),array('function', 'icon', 'sectionEditor/submissionHistory.tpl', 87, false),array('block', 'iterate', 'sectionEditor/submissionHistory.tpl', 77, false),array('modifier', 'date_format', 'sectionEditor/submissionHistory.tpl', 79, false),array('modifier', 'escape', 'sectionEditor/submissionHistory.tpl', 84, false),array('modifier', 'truncate', 'sectionEditor/submissionHistory.tpl', 92, false),array('modifier', 'nl2br', 'sectionEditor/submissionHistory.tpl', 172, false),)), $this); ?>

<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'pageTitleTranslated','key' => "submission.page.history",'id' => $this->_tpl_vars['submission']->getArticleId()), $this);?>

<?php $this->assign('pageCrumbTitle', "submission.history");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
'; ?>

	var toggleAll = 0;
	var noteArray = new Array();
<?php echo '
	function toggleNote(divNoteId) {
		var domStyle = getBrowserObject(divNoteId,1);
		domStyle.display = (domStyle.display == "block") ? "none" : "block";
	}

	function toggleNoteAll() {
		for(var i = 0; i < noteArray.length; i++) {
			var domStyle = getBrowserObject(noteArray[i],1);
			domStyle.display = toggleAll ? "none" : "block";
		}
		toggleAll = toggleAll ? 0 : 1;

		var collapse = getBrowserObject("collapseNotes",1);
		var expand = getBrowserObject("expandNotes",1);
		if (collapse.display == "inline") {
			collapse.display = "none";
			expand.display = "inline";
		} else {
			collapse.display = "inline";
			expand.display = "none";
		}
	}
</script>
'; ?>


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
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionHistory/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history"), $this);?>
</a></li>
</ul>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
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

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
 - <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.recentLogEntries"), $this);?>
</h3>
<table width="100%" class="listing">
	<tr><td class="headseparator" colspan="6">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.logLevel"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.user"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.event"), $this);?>
</td>
		<td width="56" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td class="headseparator" colspan="6">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'eventLogEntries','item' => 'logEntry')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getDateLogged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo $this->_tpl_vars['logEntry']->getLogLevel(); ?>
</td>
		<td><?php echo $this->_tpl_vars['logEntry']->getAssocTypeString(); ?>
</td>
		<td>
			<?php $this->assign('emailString', ($this->_tpl_vars['logEntry']->getUserFullName())." <".($this->_tpl_vars['logEntry']->getUserEmail()).">"); ?>
			<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['logEntry']->getEventTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo $this->_tpl_vars['logEntry']->getUserFullName(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&redirectUrl=".($this->_tpl_vars['urlEscaped'])."&subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

		</td>
		<td>
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getEventTitle()), $this);?>
</strong>
			<br />
			<?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getMessage())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>

		</td>
		<td align="right"><?php if ($this->_tpl_vars['logEntry']->getAssocType()): ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLogType/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getAssocType(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getAssocId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.related"), $this);?>
</a>&nbsp;<?php endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a><?php if ($this->_tpl_vars['isEditor']): ?>&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.confirmDeleteLogEntry"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a><?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="<?php if ($this->_tpl_vars['eventLogEntries']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['eventLogEntries']->wasEmpty()): ?>
	<tr valign="top">
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.noLogEntries"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.viewLog"), $this);?>
</a><?php if ($this->_tpl_vars['isEditor']): ?> | <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.confirmClearLog"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.clearLog"), $this);?>
</a><?php endif; ?>

<br /><br />

<div class="separator"></div>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
 - <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.recentLogEntries"), $this);?>
</h3>

<table width="100%" class="listing">
	<tr><td class="headseparator" colspan="6">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
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
		<td><?php if ($this->_tpl_vars['logEntry']->getAssocType()): ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
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
<?php endif; ?>
</table>

<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.viewLog"), $this);?>
</a><?php if ($this->_tpl_vars['isEditor']): ?> | <a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.email.confirmClearLog"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.clearLog"), $this);?>
</a><?php endif; ?>

<br /><br />

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes"), $this);?>
</h3>

<table width="100%" class="listing">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.attachedFile"), $this);?>
</td>
		<td width="10%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissionNotes','item' => 'note')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<script type="text/javascript">noteArray.push(<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
);</script>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['note']->getDateCreated())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><a class="action" href="javascript:toggleNote(<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
)"><?php echo $this->_tpl_vars['note']->getTitle(); ?>
</a><div style="display: none" id="<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
" name="<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['note']->getNote())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div></td>
		<td><?php if ($this->_tpl_vars['note']->getFileId()): ?><a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['note']->getFileId(); ?>
"><?php echo $this->_tpl_vars['note']->getOriginalFileName(); ?>
</a><?php else: ?>&mdash;<?php endif; ?></td>
		<td align="right"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/edit/<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a>&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/removeSubmissionNote?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&amp;noteId=<?php echo $this->_tpl_vars['note']->getNoteId(); ?>
&amp;fileId=<?php echo $this->_tpl_vars['note']->getFileId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="<?php if ($this->_tpl_vars['submissionNotes']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['submissionNotes']->wasEmpty()): ?>
	<tr valign="top">
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.noSubmissionNotes"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; ?>
</table>

<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.viewNotes"), $this);?>
</a> | <a class="action" href="javascript:toggleNoteAll()"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.expandNotes"), $this);?>
 / <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.collapseNotes"), $this);?>
</a> | <a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/add"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.addNewNote"), $this);?>
</a> | <a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearAllSubmissionNotes?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.confirmDeleteAll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.clearAllNotes"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>