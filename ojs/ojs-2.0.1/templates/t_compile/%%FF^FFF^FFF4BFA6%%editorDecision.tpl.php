<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:03
         compiled from sectionEditor/submission/editorDecision.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/editorDecision.tpl', 13, false),array('function', 'html_options_translate', 'sectionEditor/submission/editorDecision.tpl', 22, false),array('function', 'icon', 'sectionEditor/submission/editorDecision.tpl', 46, false),array('modifier', 'escape', 'sectionEditor/submission/editorDecision.tpl', 24, false),array('modifier', 'date_format', 'sectionEditor/submission/editorDecision.tpl', 35, false),array('modifier', 'count', 'sectionEditor/submission/editorDecision.tpl', 66, false),)), $this); ?>

<a name="editorDecision"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorDecision"), $this);?>
</h3>

<table width="100%" class="data">
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectDecision"), $this);?>
</td>
	<td width="80%" class="value" colspan="2">
		<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/recordDecision">
			<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
			<select name="decision" size="1" class="selectMenu"<?php if (! $this->_tpl_vars['allowRecommendation']): ?> disabled="disabled"<?php endif; ?>>
				<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['editorDecisionOptions'],'selected' => $this->_tpl_vars['lastDecision']), $this);?>

			</select>
			<input type="submit" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissionReview.confirmDecision"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.recordDecision"), $this);?>
" <?php if (! $this->_tpl_vars['allowRecommendation']): ?>disabled="disabled"<?php endif; ?> class="button" />
			<?php if (! $this->_tpl_vars['allowRecommendation']): ?><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.cannotRecord"), $this); endif; ?>
		</form>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision"), $this);?>
</td>
	<td class="value" colspan="2">
		<?php $_from = $this->_tpl_vars['submission']->getDecisions($this->_tpl_vars['round']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['decisionKey'] => $this->_tpl_vars['editorDecision']):
?>
			<?php if ($this->_tpl_vars['decisionKey'] != 0): ?> | <?php endif; ?>
			<?php $this->assign('decision', $this->_tpl_vars['editorDecision']['decision']); ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['editorDecisionOptions'][$this->_tpl_vars['decision']]), $this);?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorDecision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

		<?php endforeach; else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

		<?php endif; unset($_from); ?>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorAuthorComments"), $this);?>
</td>
	<td class="value" colspan="2">
		<?php if ($this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()): ?>
			<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()); ?>
			<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewEditorDecisionComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

		<?php else: ?>
			<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewEditorDecisionComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
		<?php endif; ?>
	</td>
</tr>
</table>

<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editorReview" enctype="multipart/form-data">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
<?php $this->assign('authorFiles', $this->_tpl_vars['submission']->getAuthorFileRevisions($this->_tpl_vars['round']));  $this->assign('editorFiles', $this->_tpl_vars['submission']->getEditorFileRevisions($this->_tpl_vars['round']));  $this->assign('authorRevisionExists', false);  $this->assign('editorRevisionExists', false); ?>

<table class="data" width="100%">
	<?php $_from = $this->_tpl_vars['authorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['authorRevisionExists']): ?>
				<?php $this->assign('authorRevisionExists', true); ?>
				<td width="20%" rowspan="<?php echo count($this->_tpl_vars['authorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<?php endif; ?>
			<td width="80%" class="value" colspan="3">
				<?php if ($this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_ACCEPT || $this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_RESUBMIT): ?><input type="radio" name="editorDecisionFile" value="<?php echo $this->_tpl_vars['authorFile']->getFileId(); ?>
,<?php echo $this->_tpl_vars['authorFile']->getRevision(); ?>
" /> <?php endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['authorFile']->getFileName(); ?>
</a>&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<td width="80%" colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['editorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['editorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['editorRevisionExists']): ?>
				<?php $this->assign('editorRevisionExists', true); ?>
				<td width="20%" rowspan="<?php echo count($this->_tpl_vars['editorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>
</td>
			<?php endif; ?>
			<td width="50%" class="value" colspan="2">
				<?php if ($this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_ACCEPT || $this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_RESUBMIT): ?><input type="radio" name="editorDecisionFile" value="<?php echo $this->_tpl_vars['editorFile']->getFileId(); ?>
,<?php echo $this->_tpl_vars['editorFile']->getRevision(); ?>
" /> <?php endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['editorFile']->getFileName(); ?>
</a>&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			</td>
			<td width="30%" class="value"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteArticleFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getRevision(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>
</td>
			<td width="80%" colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
</table>

<div>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.uploadEditorVersion"), $this);?>

	<input type="file" name="upload" class="uploadField" />
	<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
</div>

<?php if ($this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_RESUBMIT):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.resubmitFileForPeerReview"), $this);?>

<input type="submit" name="resubmit" <?php if (! ( $this->_tpl_vars['editorRevisionExists'] || $this->_tpl_vars['authorRevisionExists'] )): ?>disabled="disabled" <?php endif; ?>value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.resubmit"), $this);?>
" class="button" />

<?php elseif ($this->_tpl_vars['lastDecision'] == SUBMISSION_EDITOR_DECISION_ACCEPT):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.sendFileToCopyedit"), $this);?>

<input type="submit" <?php if (! ( $this->_tpl_vars['editorRevisionExists'] || $this->_tpl_vars['authorRevisionExists'] )): ?>disabled="disabled" <?php endif; ?>name="setCopyeditFile" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.send"), $this);?>
" class="button" />
<?php endif; ?>

<div class="separator"></div>

</form>