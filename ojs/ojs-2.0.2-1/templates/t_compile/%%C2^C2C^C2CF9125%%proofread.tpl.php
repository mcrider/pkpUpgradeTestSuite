<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:21
         compiled from sectionEditor/submission/proofread.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/proofread.tpl', 13, false),array('function', 'assign_translate', 'sectionEditor/submission/proofread.tpl', 34, false),array('function', 'icon', 'sectionEditor/submission/proofread.tpl', 35, false),array('modifier', 'escape', 'sectionEditor/submission/proofread.tpl', 17, false),array('modifier', 'date_format', 'sectionEditor/submission/proofread.tpl', 40, false),array('modifier', 'default', 'sectionEditor/submission/proofread.tpl', 40, false),)), $this); ?>

<a name="proofread"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofreading"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useProofreaders']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
:
<?php if ($this->_tpl_vars['proofAssignment']->getProofreaderId()): ?>&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getProofreaderFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>
&nbsp; <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/selectProofreader/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
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
			<?php if ($this->_tpl_vars['proofAssignment']->getDateAuthorUnderway()): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'confirmText','key' => "sectionEditor.author.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => ($this->_tpl_vars['requestPageUrl'])."/notifyAuthorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyAuthorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

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
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/thankAuthorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

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
					<?php if ($this->_tpl_vars['proofAssignment']->getDateProofreaderUnderway()): ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'confirmText','key' => "sectionEditor.proofreader.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => ($this->_tpl_vars['requestPageUrl'])."/notifyProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['proofAssignment']->getDateProofreaderNotified()): ?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editorInitiateProofreader?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
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
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editorCompleteProofreader/articleId?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useProofreaders']): ?>
				<?php if ($this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted() && ! $this->_tpl_vars['proofAssignment']->getDateProofreaderAcknowledged()): ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/thankProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

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
					<?php if ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorUnderway()): ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'confirmText','key' => "sectionEditor.layout.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => ($this->_tpl_vars['requestPageUrl'])."/notifyLayoutEditorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyLayoutEditorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['proofAssignment']->getDateLayoutEditorNotified()): ?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editorInitiateLayoutEditor?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
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
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editorCompleteLayoutEditor/articleId?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php if ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted() && ! $this->_tpl_vars['proofAssignment']->getDateLayoutEditorAcknowledged()): ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/thankLayoutEditorProofreader?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

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
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewProofreadComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewProofreadComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('proofInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/instructions/proof')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.instructions"), $this);?>
</a>
<?php endif; ?>


<div class="separator"></div>

<?php if ($this->_tpl_vars['proofAssignment']->getDateSchedulingQueue()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.placeSubmissionInSchedulingQueue"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateSchedulingQueue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/queueForScheduling/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.placeSubmissionInSchedulingQueue"), $this);?>
 
<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleSubmission"), $this);?>
"<?php if (! $this->_tpl_vars['submissionAccepted']): ?> disabled="disabled"<?php endif; ?> class="button defaultButton" />
</form>
<?php endif; ?>