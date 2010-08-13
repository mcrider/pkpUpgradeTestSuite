<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:42
         compiled from sectionEditor/submission/proofread.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/proofread.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/proofread.tpl', 18, false),array('function', 'icon', 'sectionEditor/submission/proofread.tpl', 36, false),array('modifier', 'escape', 'sectionEditor/submission/proofread.tpl', 17, false),array('modifier', 'assign', 'sectionEditor/submission/proofread.tpl', 33, false),array('modifier', 'date_format', 'sectionEditor/submission/proofread.tpl', 41, false),array('modifier', 'default', 'sectionEditor/submission/proofread.tpl', 41, false),)), $this); ?>

<a name="proofread"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofreading"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useProofreaders']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
:
<?php if ($this->_tpl_vars['proofAssignment']->getProofreaderId()): ?>&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getProofreaderFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>
&nbsp; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectProofreader','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectProofreader"), $this);?>
</a></p>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2">&nbsp;</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acknowledge"), $this);?>
</td>
	</tr>
	<tr>
		<td width="2%">1.</td>
		<td width="26%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</td>
		<td>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyAuthorProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php if ($this->_tpl_vars['proofAssignment']->getDateAuthorUnderway()): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.author.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>

			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
			<?php if ($this->_tpl_vars['proofAssignment']->getDateAuthorCompleted() && ! $this->_tpl_vars['proofAssignment']->getDateAuthorAcknowledged()): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankAuthorProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['useProofreaders']): ?>
				<?php if ($this->_tpl_vars['proofAssignment']->getProofreaderId() && $this->_tpl_vars['proofAssignment']->getDateAuthorCompleted()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php if ($this->_tpl_vars['proofAssignment']->getDateProofreaderUnderway()): ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.proofreader.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['proofAssignment']->getDateProofreaderNotified()): ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorInitiateProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.initiate"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
			<?php if ($this->_tpl_vars['useProofreaders']): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if (! $this->_tpl_vars['useProofreaders'] && ! $this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted() && $this->_tpl_vars['proofAssignment']->getDateProofreaderNotified()): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorCompleteProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useProofreaders']): ?>
				<?php if ($this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted() && ! $this->_tpl_vars['proofAssignment']->getDateProofreaderAcknowledged()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php if ($this->_tpl_vars['layoutAssignment']->getEditorId() && $this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyLayoutEditorProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php if ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorUnderway()): ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.layout.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['proofAssignment']->getDateLayoutEditorNotified()): ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorInitiateLayoutEditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.initiate"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php elseif ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php elseif ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorNotified()): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorCompleteLayoutEditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php if ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted() && ! $this->_tpl_vars['proofAssignment']->getDateLayoutEditorAcknowledged()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankLayoutEditorProofreader','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.corrections"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentProofreadComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentProofreadComment()); ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getArticleId(),'anchor' => $this->_tpl_vars['comment']->getCommentId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('proofInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'proof'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.instructions"), $this);?>
</a>
<?php endif; ?>


<div class="separator"></div>

<?php if ($this->_tpl_vars['proofAssignment']->getDateSchedulingQueue()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.placeSubmissionInSchedulingQueue"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateSchedulingQueue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'queueForScheduling','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.placeSubmissionInSchedulingQueue"), $this);?>
 
<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleSubmission"), $this);?>
"<?php if (! $this->_tpl_vars['submissionAccepted']): ?> disabled="disabled"<?php endif; ?> class="button defaultButton" />
</form>
<?php endif; ?>