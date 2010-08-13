<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:56
         compiled from author/submission/copyedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/copyedit.tpl', 13, false),array('function', 'icon', 'author/submission/copyedit.tpl', 55, false),array('modifier', 'date_format', 'author/submission/copyedit.tpl', 30, false),array('modifier', 'default', 'author/submission/copyedit.tpl', 30, false),)), $this); ?>

<a name="copyedit"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyediting"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useCopyeditors']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
:
<?php if ($this->_tpl_vars['submission']->getCopyeditorId()): ?>&nbsp; <?php echo $this->_tpl_vars['copyeditor']->getFullName();  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this); endif; ?></p>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="40%" colspan="2"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewMetadata/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewMetadata"), $this);?>
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
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getCopyeditorDateNotified() && $this->_tpl_vars['initialCopyeditFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['initialCopyeditFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['initialCopyeditFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['initialCopyeditFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.editorAuthorReview"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td>
			<?php if (! $this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified() || $this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/completeAuthorCopyedit?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified() && $this->_tpl_vars['editorAuthorCopyeditFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['editorAuthorCopyeditFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['editorAuthorCopyeditFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['editorAuthorCopyeditFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
			<br />
			<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadCopyeditVersion"  enctype="multipart/form-data">
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="hidden" name="copyeditStage" value="author" />
				<input type="file" name="upload"<?php if (! $this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified() || $this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()): ?> disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if (! $this->_tpl_vars['submission']->getCopyeditorDateAuthorNotified() || $this->_tpl_vars['submission']->getCopyeditorDateAuthorCompleted()): ?> disabled="disabled"<?php endif; ?> />
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.finalCopyedit"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['submission']->getCopyeditorDateFinalNotified() && $this->_tpl_vars['finalCopyeditFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['finalCopyeditFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['finalCopyeditFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['finalCopyeditFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
</table>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.copyeditComments"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentCopyeditComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentCopyeditComment()); ?>
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewCopyeditComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewCopyeditComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('copyeditInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/instructions/copy')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.instructions"), $this);?>
</a>
<?php endif; ?>