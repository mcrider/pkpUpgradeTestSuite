<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from sectionEditor/submission/copyedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/copyedit.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/copyedit.tpl', 20, false),array('function', 'icon', 'sectionEditor/submission/copyedit.tpl', 42, false),array('modifier', 'escape', 'sectionEditor/submission/copyedit.tpl', 19, false),array('modifier', 'assign', 'sectionEditor/submission/copyedit.tpl', 39, false),array('modifier', 'date_format', 'sectionEditor/submission/copyedit.tpl', 54, false),array('modifier', 'default', 'sectionEditor/submission/copyedit.tpl', 54, false),array('modifier', 'to_array', 'sectionEditor/submission/copyedit.tpl', 91, false),)), $this); ?>

<a name="copyedit"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyediting"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useCopyeditors']): ?>
<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</td>
		<?php if ($this->_tpl_vars['submission']->getCopyeditorId()): ?><td width="20%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td><?php endif; ?>
		<td class="value"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectCopyeditor','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectCopyeditor"), $this);?>
</a></td>
	</tr>
</table>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewMetadata','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewMetadata"), $this);?>
</a></td>
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
		<td width="26%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.initialCopyedit"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php if ($this->_tpl_vars['submission']->getCopyeditorId() && $this->_tpl_vars['initialCopyeditFile']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyCopyeditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php if ($this->_tpl_vars['submission']->getCopyeditorDateUnderway()): ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.copyedit.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['submission']->getCopyeditorDateNotified() && $this->_tpl_vars['initialCopyeditFile']): ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'initiateCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.initiate"), $this);?>
</a>
				<?php endif; ?>
			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['submission']->getCopyeditorDateCompleted()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php elseif (! $this->_tpl_vars['useCopyeditors']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'completeCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php if ($this->_tpl_vars['submission']->getCopyeditorId() && $this->_tpl_vars['submission']->getCopyeditorDateNotified() && ! $this->_tpl_vars['submission']->getCopyeditorDateAcknowledged()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankCopyeditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['initialCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['initialCopyeditFile']->getFileId(), $this->_tpl_vars['initialCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['initialCopyeditFile']->getFileId(), $this->_tpl_vars['initialCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo $this->_tpl_vars['initialCopyeditFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.mustUploadFileForInitialCopyedit"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.editorAuthorReview"), $this);?>
</td>
		<td>
			<?php if (( $this->_tpl_vars['submission']->getCopyeditorId() || ! $this->_tpl_vars['useCopyeditors'] ) && $this->_tpl_vars['submission']->getCopyeditorDateCompleted()): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyAuthorCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php if ($this->_tpl_vars['submission']->getCopyeditorDateAuthorUnderway()): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.author.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php endif; ?>
			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
			<?php if (( $this->_tpl_vars['submission']->getCopyeditorId() || ! $this->_tpl_vars['useCopyeditors'] ) && $this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified() && ! $this->_tpl_vars['submission']->getCopyeditorDateAuthorAcknowledged()): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankAuthorCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['editorAuthorCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['editorAuthorCopyeditFile']->getFileId(), $this->_tpl_vars['editorAuthorCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['editorAuthorCopyeditFile']->getFileId(), $this->_tpl_vars['editorAuthorCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.finalCopyedit"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php if ($this->_tpl_vars['submission']->getCopyeditorId() && $this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyFinalCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php if ($this->_tpl_vars['submission']->getCopyeditorDateFinalUnderway()): ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.copyedit.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['submission']->getCopyeditorDateFinalCompleted()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php elseif (! $this->_tpl_vars['useCopyeditors']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'completeFinalCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this);?>
</a>
			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useCopyeditors']): ?>
				<?php if ($this->_tpl_vars['submission']->getCopyeditorId() && $this->_tpl_vars['submission']->getCopyeditorDateFinalNotified() && ! $this->_tpl_vars['submission']->getCopyeditorDateFinalAcknowledged()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankFinalCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['finalCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['finalCopyeditFile']->getFileId(), $this->_tpl_vars['finalCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['finalCopyeditFile']->getFileId(), $this->_tpl_vars['finalCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>

<?php if ($this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()):  $this->assign('canUploadCopyedit', '3');  elseif ($this->_tpl_vars['submission']->getCopyeditorDateCompleted() && ! $this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()):  $this->assign('canUploadCopyedit', '2');  elseif (! $this->_tpl_vars['submission']->getCopyeditorDateCompleted()):  $this->assign('canUploadCopyedit', '1');  endif; ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadCopyeditVersion'), $this);?>
"  enctype="multipart/form-data">
	<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.uploadFileTo"), $this);?>
 <input type="radio" name="copyeditStage" id="copyeditStageInitial" value="initial" <?php if ($this->_tpl_vars['canUploadCopyedit'] != 1): ?> disabled="disabled"<?php else: ?> checked="checked"<?php endif; ?> /><label for="copyeditStageInitial"<?php if ($this->_tpl_vars['canUploadCopyedit'] != 1): ?> class="disabled"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.stepNumber",'step' => 1), $this);?>
</label>, <input type="radio" name="copyeditStage" id="copyeditStageAuthor" value="author"<?php if ($this->_tpl_vars['canUploadCopyedit'] != 2): ?> disabled="disabled"<?php else: ?> checked="checked"<?php endif; ?> /><label for="copyeditStageAuthor"<?php if ($this->_tpl_vars['canUploadCopyedit'] != 2): ?> class="disabled"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.stepNumber",'step' => 2), $this);?>
</label>, <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.or"), $this);?>
 <input type="radio" name="copyeditStage" id="copyeditStageFinal" value="final"<?php if ($this->_tpl_vars['canUploadCopyedit'] != 3): ?> disabled="disabled"<?php else: ?> checked="checked"<?php endif; ?> /><label for="copyeditStageFinal"<?php if ($this->_tpl_vars['canUploadCopyedit'] != 3): ?> class="disabled"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.stepNumber",'step' => 3), $this);?>
</label>
	<input type="file" name="upload" size="10" class="uploadField"<?php if (! $this->_tpl_vars['canUploadCopyedit']): ?> disabled="disabled"<?php endif; ?> />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button"<?php if (! $this->_tpl_vars['canUploadCopyedit']): ?> disabled="disabled"<?php endif; ?> />
</form>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.copyeditComments"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentCopyeditComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentCopyeditComment()); ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewCopyeditComments','path' => $this->_tpl_vars['submission']->getArticleId(),'anchor' => $this->_tpl_vars['comment']->getCommentId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewCopyeditComments','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('copyeditInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'copy'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.instructions"), $this);?>
</a>
<?php endif; ?>