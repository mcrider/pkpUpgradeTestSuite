<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/submissionNotes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submissionNotes.tpl', 49, false),array('function', 'page_info', 'sectionEditor/submissionNotes.tpl', 156, false),array('function', 'page_links', 'sectionEditor/submissionNotes.tpl', 157, false),array('modifier', 'date_format', 'sectionEditor/submissionNotes.tpl', 76, false),array('modifier', 'escape', 'sectionEditor/submissionNotes.tpl', 96, false),array('modifier', 'nl2br', 'sectionEditor/submissionNotes.tpl', 139, false),array('block', 'iterate', 'sectionEditor/submissionNotes.tpl', 135, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.notes");  $this->assign('pageCrumbTitle', "submission.notes.breadcrumb");  $_smarty_tpl_vars = $this->_tpl_vars;
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
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
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


<?php if ($this->_tpl_vars['noteViewType'] == 'edit'): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes"), $this);?>
</h3>
<form name="editNote" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/updateSubmissionNote" enctype="multipart/form-data">
	<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleNote']->getArticleId(); ?>
" />
	<input type="hidden" name="noteId" value="<?php echo $this->_tpl_vars['articleNote']->getNoteId(); ?>
" />
	<input type="hidden" name="fileId" value="<?php echo $this->_tpl_vars['articleNote']->getFileId(); ?>
" />

<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateModified"), $this);?>
</td>
		<td class="value" width="80%"><?php echo ((is_array($_tmp=$this->_tpl_vars['articleNote']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td class="value" width="80%"><input type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['articleNote']->getTitle(); ?>
" size="50" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.note"), $this);?>
</td>
		<td class="value" width="80%"><textarea name="note" id="note" rows="10" cols="50" class="textArea"><?php echo $this->_tpl_vars['articleNote']->getNote(); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td class="value" width="80%"><input type="file" id="upload" name="upload" class="uploadField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.uploadedFile"), $this);?>
</td>
		<td class="value" width="80%"><?php if ($this->_tpl_vars['articleNote']->getFileId()): ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['articleNote']->getFileId(); ?>
"><?php echo $this->_tpl_vars['articleNote']->getOriginalFileName(); ?>
</a><br /><input type="checkbox" name="removeUploadedFile" value="1" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.removeUploadedFile"), $this); else: ?>&mdash;<?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">&nbsp;</td>
		<td class="value" width="80%"><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.deleteNote"), $this);?>
" onclick="confirmAction('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/removeSubmissionNote?articleId=<?php echo $this->_tpl_vars['articleNote']->getArticleId(); ?>
&amp;noteId=<?php echo $this->_tpl_vars['articleNote']->getNoteId(); ?>
&amp;fileId=<?php echo $this->_tpl_vars['articleNote']->getFileId(); ?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')">&nbsp;<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.updateNote"), $this);?>
" /></td>
	</tr>
</table>

<?php elseif ($this->_tpl_vars['noteViewType'] == 'add'): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.addNewNote"), $this);?>
</h3>
	<form name="addNote" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/addSubmissionNote" enctype="multipart/form-data">
	<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
	<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td class="value" width="80%"><input type="text" id="title" name="title" size="50" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.note"), $this);?>
</td>
		<td class="value"><textarea name="note" id="note" rows="10" cols="50" class="textArea"></textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td class="value"><input type="file" name="upload" class="uploadField" /></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td class="formField"><input type="submit" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.createNewNote"), $this);?>
" /></td>
	</tr>
	</table>
	</form>
<?php else: ?>
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
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissionNotes']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissionNotes','iterator' => $this->_tpl_vars['submissionNotes']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a class="action" href="javascript:toggleNoteAll()"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.expandNotes"), $this);?>
 / <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.collapseNotes"), $this);?>
</a> | <a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/add"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.addNewNote"), $this);?>
</a> | <a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearAllSubmissionNotes?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.confirmDeleteAll"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notes.clearAllNotes"), $this);?>
</a>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>