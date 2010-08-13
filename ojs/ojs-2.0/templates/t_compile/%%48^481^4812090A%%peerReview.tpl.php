<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:54
         compiled from sectionEditor/submission/peerReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/peerReview.tpl', 12, false),array('function', 'icon', 'sectionEditor/submission/peerReview.tpl', 139, false),array('function', 'html_options_translate', 'sectionEditor/submission/peerReview.tpl', 258, false),array('modifier', 'date_format', 'sectionEditor/submission/peerReview.tpl', 46, false),array('modifier', 'count', 'sectionEditor/submission/peerReview.tpl', 59, false),array('modifier', 'ord', 'sectionEditor/submission/peerReview.tpl', 101, false),array('modifier', 'chr', 'sectionEditor/submission/peerReview.tpl', 111, false),)), $this); ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewVersion"), $this);?>
</h3>

<table width="100%" class="data">
<tr valign="top">
	<td colspan="2">
		<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/designateReviewVersion">
			<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
			<?php if ($this->_tpl_vars['submission']->getSubmissionFile()): ?>
				<label for="reviewDesignate"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.designateReviewVersion"), $this);?>
</label>
				<input type="checkbox" name="designate" id="reviewDesignate" value="1" /> 
				<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.designateReviewVersion"), $this);?>

				<input type="checkbox" disabled="disabled" name="designate" value="1" /> 
				<input type="submit" disabled="disabled" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
			<?php endif; ?>
		</form>
	</td>
</tr>
<tr valign="top">
	<td colspan="2">
		<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadReviewVersion" enctype="multipart/form-data">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.uploadReviewVersion"), $this);?>

			<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
			<input type="file" name="upload" class="uploadField" />
			<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
		</form>
	</td>
</tr>
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewVersion"), $this);?>
</td>
	<?php if ($this->_tpl_vars['reviewFile']): ?>
		<td width="80%" class="value">
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['reviewFile']->getFileName(); ?>
</a>&nbsp;&nbsp;
			<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

		</td>
	<?php else: ?>
		<td width="80%" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	<?php endif; ?>
</tr>
<?php $_from = $this->_tpl_vars['suppFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
	<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/setSuppFileVisibility">
	<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
	<input type="hidden" name="fileId" value="<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" />

	<tr valign="top">
		<?php if (! $this->_tpl_vars['notFirstSuppFile']): ?>
			<td class="label" rowspan="<?php echo count($this->_tpl_vars['suppFiles']); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFilesAbbrev"), $this);?>
</td>
			<?php $this->assign('notFirstSuppFile', 1); ?>
		<?php endif; ?>
		<td width="80%" class="value">
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['suppFile']->getFileName(); ?>
</a>&nbsp;&nbsp;
			<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<nobr>
				<label for="show"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.showSuppFile"), $this);?>
</label>
				<input type="checkbox" name="show" id="show" value="1"<?php if ($this->_tpl_vars['suppFile']->getShowReviewers() == 1): ?> checked="checked"<?php endif; ?>/>
				<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
			</nobr>
		</td>
	</tr>
	</form>
<?php endforeach; else: ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFilesAbbrev"), $this);?>
</td>
		<td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<div class="separator"></div>

<a name="peerReview"></a>
<table class="data" width="100%">
	<tr>
		<td width="22%"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.peerReview"), $this);?>
</h3></td>
		<td width="14%"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.round",'round' => $this->_tpl_vars['round']), $this);?>
</h4></td>
		<td width="64%">
			<nobr>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/selectReviewer/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectReviewer"), $this);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionRegrets/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets.link"), $this);?>
</a>
			</nobr>
		</td>
	</tr>
</table>

<br />

<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/notifyAllReviewers?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.initiateAllReviews"), $this);?>
</a><br/>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp)));  $_from = $this->_tpl_vars['reviewAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewKey'] => $this->_tpl_vars['reviewAssignment']):
 $this->assign('reviewId', $this->_tpl_vars['reviewAssignment']->getReviewId()); ?>

<?php if (! $this->_tpl_vars['reviewAssignment']->getCancelled()): ?>
	<?php $this->assign('reviewIndex', $this->_tpl_vars['reviewIndexes'][$this->_tpl_vars['reviewId']]); ?>
	<div class="separator"></div>

	<table class="data" width="100%">
	<tr>
		<td width="20%"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewIndex']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</h4></td>
		<td width="34%"><h4><?php echo $this->_tpl_vars['reviewAssignment']->getReviewerFullName(); ?>
</h4></td>
		<td width="46%">
				<?php if (! $this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearReview/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.clearReview"), $this);?>
</a>
				<?php elseif (! $this->_tpl_vars['reviewAssignment']->getDateCompleted()): ?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/cancelReview?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&reviewId=<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.cancelReview"), $this);?>
</a>
				<?php endif; ?>
		</td>
	</tr>
	</table>

	<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.schedule"), $this);?>
</td>
		<td width="80%">
			<table width="100%" class="info">
				<tr>
					<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
					<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
					<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.due"), $this);?>
</td>
					<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acknowledge"), $this);?>
</td>
				</tr>
				<tr valign="top">
					<td>
						<?php if ($this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

							<?php if (! $this->_tpl_vars['reviewAssignment']->getDateCompleted()): ?>
								<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyReviewer?reviewId=".($this->_tpl_vars['reviewAssignment']->getReviewId())."&articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

							<?php endif; ?>
						<?php elseif ($this->_tpl_vars['reviewAssignment']->getReviewFileId()): ?>
							<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyReviewer?reviewId=".($this->_tpl_vars['reviewAssignment']->getReviewId())."&articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

						<?php else: ?>
							<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled','url' => ($this->_tpl_vars['requestPageUrl'])."/notifyReviewer?reviewId=".($this->_tpl_vars['reviewAssignment']->getReviewId())."&articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

							<?php $this->assign('needsReviewFileNote', 1); ?>
						<?php endif; ?>
					</td>
					<td>
						<?php if ($this->_tpl_vars['reviewAssignment']->getDateConfirmed()): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

						<?php else: ?>
							&mdash;
						<?php endif; ?>
					</td>
					<td>
						<?php if ($this->_tpl_vars['reviewAssignment']->getDeclined()): ?>
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets"), $this);?>

						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/setDueDate/<?php echo $this->_tpl_vars['reviewAssignment']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
"><?php if ($this->_tpl_vars['reviewAssignment']->getDateDue()):  echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateDue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></a>
						<?php endif; ?>
					</td>
					<td>
						<?php if ($this->_tpl_vars['reviewAssignment']->getDateAcknowledged()): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

						<?php elseif ($this->_tpl_vars['reviewAssignment']->getDateCompleted()): ?>
							<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/thankReviewer?reviewId=".($this->_tpl_vars['reviewAssignment']->getReviewId())."&articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

						<?php else: ?>
							<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled','url' => ($this->_tpl_vars['requestPageUrl'])."/thankReviewer?reviewId=".($this->_tpl_vars['reviewAssignment']->getReviewId())."&articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

						<?php endif; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<?php if ($this->_tpl_vars['reviewAssignment']->getDateConfirmed() && ! $this->_tpl_vars['reviewAssignment']->getDeclined()): ?>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.recommendation"), $this);?>
</td>
			<td>
				<?php if ($this->_tpl_vars['reviewAssignment']->getRecommendation()): ?>
					<?php $this->assign('recommendation', $this->_tpl_vars['reviewAssignment']->getRecommendation()); ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['reviewerRecommendationOptions'][$this->_tpl_vars['recommendation']]), $this);?>

					&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/remindReviewer?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&reviewId=<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.sendReminder"), $this);?>
</a>
					<?php if ($this->_tpl_vars['reviewAssignment']->getDateReminded()): ?>
						&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateReminded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

						<?php if ($this->_tpl_vars['reviewAssignment']->getReminderWasAutomatic()): ?>
							&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.automatic"), $this);?>

						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
</td>
			<td>
				<?php if ($this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()): ?>
					<?php $this->assign('comment', $this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()); ?>
					<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewPeerReviewComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'letter'), $this);?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php else: ?>
					<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewPeerReviewComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'letter'), $this);?>
</a>
				<?php endif; ?>
			</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.uploadedFile"), $this);?>
</td>
			<td>
				<table width="100%" class="data">
					<?php $_from = $this->_tpl_vars['reviewAssignment']->getReviewerFileRevisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['reviewerFile']):
?>
					<tr valign="top">
						<td valign="middle">
							<form name="authorView<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/makeReviewerFileViewable">
								<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['reviewerFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

								<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" />
								<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
								<input type="hidden" name="fileId" value="<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
" />
								<input type="hidden" name="revision" value="<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
" />
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.showAuthor"), $this);?>
 <input type="checkbox" name="viewable" value="1"<?php if ($this->_tpl_vars['reviewerFile']->getViewable()): ?> checked="checked"<?php endif; ?> />
								<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
							</form>
						</td>
					</tr>
					<?php endforeach; else: ?>
					<tr valign="top">
						<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
					</tr>
					<?php endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	<?php endif; ?>

	<?php if (( ! $this->_tpl_vars['reviewAssignment']->getRecommendation() || ! $this->_tpl_vars['reviewAssignment']->getDateConfirmed() ) && $this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.editorToEnter"), $this);?>
</td>
			<td>
				<?php if (! $this->_tpl_vars['reviewAssignment']->getDateConfirmed() || $this->_tpl_vars['reviewAssignment']->getDeclined()): ?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/acceptReviewForReviewer/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acceptance"), $this);?>
</a>&nbsp;&nbsp;
				<?php endif; ?>
				<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/enterReviewerRecommendation?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&reviewId=<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.recommendation"), $this);?>
</a>
				</form>
			</td>
		</tr>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['reviewAssignment']->getDateConfirmed() && ! $this->_tpl_vars['reviewAssignment']->getDeclined()): ?>
		<?php if ($this->_tpl_vars['rateReviewerOnQuality']): ?>
			<tr valign="top">
				<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.rateReviewer"), $this);?>
</td>
				<td>
				<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/rateReviewer">
					<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['reviewAssignment']->getReviewId(); ?>
" />
					<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.quality"), $this);?>
&nbsp;
					<select name="quality" size="1" class="selectMenu"<?php if (! $this->_tpl_vars['reviewAssignment']->getRecommendation()): ?> disabled="disabled"<?php endif; ?>>
						<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['reviewerRatingOptions'],'selected' => $this->_tpl_vars['reviewAssignment']->getQuality()), $this);?>

					</select>&nbsp;&nbsp;
					<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
"<?php if (! $this->_tpl_vars['reviewAssignment']->getRecommendation()): ?> disabled="disabled"<?php endif; ?> class="button" />
					<?php if ($this->_tpl_vars['reviewAssignment']->getDateRated()): ?>
						&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateRated())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

					<?php endif; ?>
				</form>
				</td>
			</tr>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['needsReviewFileNote']): ?>
		<tr valign="top">
			<td>&nbsp;</td>
			<td>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review.mustUploadFileForReview"), $this);?>

			</td>
		</tr>
	<?php endif; ?>
	</table>
<?php endif;  endforeach; endif; unset($_from); ?>