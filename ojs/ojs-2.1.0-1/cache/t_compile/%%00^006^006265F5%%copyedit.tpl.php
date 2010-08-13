<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:34
         compiled from copyeditor/submission/copyedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'copyeditor/submission/copyedit.tpl', 13, false),array('function', 'url', 'copyeditor/submission/copyedit.tpl', 20, false),array('function', 'icon', 'copyeditor/submission/copyedit.tpl', 32, false),array('modifier', 'escape', 'copyeditor/submission/copyedit.tpl', 16, false),array('modifier', 'date_format', 'copyeditor/submission/copyedit.tpl', 28, false),array('modifier', 'default', 'copyeditor/submission/copyedit.tpl', 28, false),array('modifier', 'assign', 'copyeditor/submission/copyedit.tpl', 34, false),array('modifier', 'to_array', 'copyeditor/submission/copyedit.tpl', 45, false),)), $this); ?>

<a name="copyedit"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
:
<?php if ($this->_tpl_vars['submission']->getCopyeditorId()): ?>&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this); endif; ?></p>

<table width="100%" class="info">
	<tr>
		<td width="40%" colspan="2"><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewMetadata','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewMetadata"), $this);?>
</a></td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
	</tr>
	<tr>
		<td width="5%">1.</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.initialCopyedit"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td>
			<?php if (! $this->_tpl_vars['submission']->getDateNotified() || $this->_tpl_vars['submission']->getDateCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'completeCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getDateNotified() && $this->_tpl_vars['initialCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['initialCopyeditFile']->getFileId(), $this->_tpl_vars['initialCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['initialCopyeditFile']->getFileId(), $this->_tpl_vars['initialCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
			<br />
			<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadCopyeditVersion'), $this);?>
"  enctype="multipart/form-data">
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="hidden" name="copyeditStage" value="initial" />
				<input type="file" name="upload"<?php if (! $this->_tpl_vars['submission']->getDateNotified() || $this->_tpl_vars['submission']->getDateCompleted()): ?> disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if (! $this->_tpl_vars['submission']->getDateNotified() || $this->_tpl_vars['submission']->getDateCompleted()): ?> disabled="disabled"<?php endif; ?> />
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.editorAuthorReview"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateAuthorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateAuthorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateAuthorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getDateAuthorCompleted() && $this->_tpl_vars['editorAuthorCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['editorAuthorCopyeditFile']->getFileId(), $this->_tpl_vars['editorAuthorCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['editorAuthorCopyeditFile']->getFileId(), $this->_tpl_vars['editorAuthorCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.finalCopyedit"), $this);?>
</td>
		<td width="20%"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateFinalNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td width="20%"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateFinalUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td width="20%">
			<?php if (! $this->_tpl_vars['submission']->getDateFinalNotified() || $this->_tpl_vars['submission']->getDateFinalCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'completeFinalCopyedit','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateFinalCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getDateFinalNotified() && $this->_tpl_vars['finalCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['finalCopyeditFile']->getFileId(), $this->_tpl_vars['finalCopyeditFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['finalCopyeditFile']->getFileId(), $this->_tpl_vars['finalCopyeditFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
			<br />
			<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadCopyeditVersion'), $this);?>
"  enctype="multipart/form-data">
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="hidden" name="copyeditStage" value="final" />
				<input type="file" name="upload"<?php if (! $this->_tpl_vars['submission']->getDateFinalNotified() || $this->_tpl_vars['submission']->getDateFinalCompleted()): ?> disabled="disabled"<?php endif; ?> class="uploadField">
				<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if (! $this->_tpl_vars['submission']->getDateFinalNotified() || $this->_tpl_vars['submission']->getDateFinalCompleted()): ?> disabled="disabled"<?php endif; ?> />
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
</table>

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