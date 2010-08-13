<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:52
         compiled from reviewer/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign_translate', 'reviewer/submission.tpl', 14, false),array('function', 'translate', 'reviewer/submission.tpl', 19, false),array('function', 'icon', 'reviewer/submission.tpl', 42, false),array('function', 'html_options_translate', 'reviewer/submission.tpl', 247, false),array('modifier', 'escape', 'reviewer/submission.tpl', 39, false),array('modifier', 'date_format', 'reviewer/submission.tpl', 54, false),array('modifier', 'nl2br', 'reviewer/submission.tpl', 262, false),)), $this); ?>

<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'pageTitleTranslated','key' => "submission.page.review",'id' => $this->_tpl_vars['submission']->getArticleId()), $this);?>

<?php $this->assign('pageCrumbTitle', "submission.review"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.submissionToBeReviewed"), $this);?>
</h3>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
	<td width="80%" class="value"><?php echo $this->_tpl_vars['submission']->getArticleTitle(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.journalSection"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['submission']->getSectionTitle(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['submission']->getArticleAbstract(); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['editor']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.submissionEditor"), $this);?>
</td>
		<td class="value">
			<?php $this->assign('emailString', ($this->_tpl_vars['editor']->getEditorFullName())." <".($this->_tpl_vars['editor']->getEditorEmail()).">"); ?>
			<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo $this->_tpl_vars['editor']->getEditorFullName(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&redirectUrl=".($this->_tpl_vars['urlEscaped'])."&subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

		</td>
	</tr>
<?php endif; ?>
</table>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewSchedule"), $this);?>
</h3>
<table width="100%" class="data">
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.schedule.request"), $this);?>
</td>
	<td class="value" width="80%"><?php if ($this->_tpl_vars['submission']->getDateNotified()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.schedule.response"), $this);?>
</td>
	<td class="value"><?php if ($this->_tpl_vars['submission']->getDateConfirmed()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.schedule.submitted"), $this);?>
</td>
	<td class="value"><?php if ($this->_tpl_vars['submission']->getDateCompleted()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.schedule.due"), $this);?>
</td>
	<td class="value"><?php if ($this->_tpl_vars['submission']->getDateDue()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateDue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
</tr>
</table>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewSteps"), $this);?>
</h3>
<table width="100%" class="data">
<ol>
<tr valign="top">
	<td width="3%">1.</td>
	<td width="97%"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction1a"), $this); if ($this->_tpl_vars['editor']): ?>, <?php echo $this->_tpl_vars['editor']->getEditorFullName(); ?>
,<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction1b"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.response"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;
		<?php if (! $this->_tpl_vars['confirmedStatus']): ?>
			<?php if (! $this->_tpl_vars['submission']->getCancelled()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.canDoReview"), $this);?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/confirmReview?reviewId=".($this->_tpl_vars['submission']->getReviewId())), $this);?>

				&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.cannotDoReview"), $this);?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/confirmReview?reviewId=".($this->_tpl_vars['submission']->getReviewId())."&declineReview=1"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.canDoReview"), $this);?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled','url' => "{".($this->_tpl_vars['requestPageUrl'])), $this);?>
/confirmReview?reviewId=`$submission->getReviewId()`"}
				&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.cannotDoReview"), $this);?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled','url' => "{".($this->_tpl_vars['requestPageUrl'])), $this);?>
/confirmReview?reviewId=`$submission->getReviewId()`&declineReview=1"}
			<?php endif; ?>
		<?php else: ?>
			<?php if (! $this->_tpl_vars['declined']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.accepted"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.rejected"), $this); endif; ?>
		<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<?php if ($this->_tpl_vars['journal']->getSetting('reviewGuidelines')):  $this->assign('haveGuide', true); ?>
<tr valign="top">
        <td>2.</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction2"), $this);?>
</span></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<?php else:  $this->assign('haveGuide', false);  endif; ?>
<tr valign="top">
	<td><?php if ($this->_tpl_vars['haveGuide']): ?>3<?php else: ?>2<?php endif; ?>.</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction3"), $this);?>
</span></td>
</tr>
<tr valign="top"">
	<td>&nbsp;</td>
	<td>
		<table width="100%" class="data">
			<?php if (( $this->_tpl_vars['confirmedStatus'] && ! $this->_tpl_vars['declined'] ) || ! $this->_tpl_vars['journal']->getSetting('restrictReviewerFileAccess')): ?>
			<tr valign="top">
				<td width="30%" class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submissionManuscript"), $this);?>

				</td>
				<td class="value" width="70%">
					<?php if ($this->_tpl_vars['submission']->getDateConfirmed() || ! $this->_tpl_vars['journal']->getSetting('restrictReviewerAccessToFile')): ?>
						<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['reviewFile']->getFileName(); ?>
</a>
					<?php else:  echo $this->_tpl_vars['reviewFile']->getFileName();  endif; ?>
					&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				</td>
			</tr>
			<tr valign="top">
				<td class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFiles"), $this);?>

				</td>
				<td class="value">
					<?php $this->assign('sawSuppFile', 0); ?>
					<?php $_from = $this->_tpl_vars['suppFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
						<?php if ($this->_tpl_vars['suppFile']->getShowReviewers()): ?>
							<?php $this->assign('sawSuppFile', 1); ?>
							<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
" class="file"><?php echo $this->_tpl_vars['suppFile']->getFileName(); ?>
</a><br />
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>

					<?php if (! $this->_tpl_vars['sawSuppFile']): ?>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

					<?php endif; ?>
				</td>
			</tr>
			<?php else: ?>
			<tr><td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.restrictedFileAccess"), $this);?>
</td></tr>
			<?php endif; ?>
		</table>
	</td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr valign="top">
	<td><?php if ($this->_tpl_vars['haveGuide']): ?>4<?php else: ?>3<?php endif; ?>.</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction4a"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.logType.review"), $this);?>
 
		<?php if ($this->_tpl_vars['confirmedStatus'] && ! $this->_tpl_vars['declined']): ?>
			<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewPeerReviewComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
		<?php else: ?>
			 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment','disabled' => 'disabled'), $this);?>

		<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr valign="top">
	<td><?php if ($this->_tpl_vars['haveGuide']): ?>5<?php else: ?>4<?php endif; ?>.</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction5"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td>
		<table class="data" width="100%">
			<?php $_from = $this->_tpl_vars['submission']->getReviewerFileRevisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['reviewerFile']):
?>
				<?php $this->assign('uploadedFileExists', '1'); ?>
				<tr valign="top">
				<td class="label" width="30%">
					<?php if ($this->_tpl_vars['key'] == '0'): ?>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.uploadedFile"), $this);?>

					<?php endif; ?>
				</td>
				<td class="value" width="70%">
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['reviewerFile']->getFileName(); ?>
</a>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

					<?php if (( ! $this->_tpl_vars['submission']->getRecommendation() ) && ( ! $this->_tpl_vars['submission']->getCancelled() )): ?>
						<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteReviewerVersion/<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
					<?php endif; ?>
				</td>
				</tr>
			<?php endforeach; else: ?>
				<tr valign="top">
				<td class="label" width="30%">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.uploadedFile"), $this);?>

				</td>
				<td class="nodata">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

				</td>
				</tr>
			<?php endif; unset($_from); ?>
		</table>
		<?php if (! $this->_tpl_vars['submission']->getRecommendation()): ?>
			<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadReviewerVersion" enctype="multipart/form-data">
				<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
" />
				<input type="file" name="upload" <?php if (! $this->_tpl_vars['confirmedStatus'] || $this->_tpl_vars['declined'] || $this->_tpl_vars['submission']->getCancelled()): ?>disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" <?php if (! $this->_tpl_vars['confirmedStatus'] || $this->_tpl_vars['declined'] || $this->_tpl_vars['submission']->getCancelled()): ?>disabled="disabled"<?php endif; ?> class="button" />
			</form>
			<span class="instruct">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.noteOnUploads"), $this);?>

			</span>
		<?php endif; ?>
	</td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr valign="top">
	<td><?php if ($this->_tpl_vars['haveGuide']): ?>6<?php else: ?>5<?php endif; ?>.</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerInstruction6"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td>
		<table class="data" width="100%">
			<tr valign="top">
				<td class="label" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.recommendation"), $this);?>
</td>
				<td class="value" width="70%">
				<?php if ($this->_tpl_vars['submission']->getRecommendation()): ?>
					<?php $this->assign('recommendation', $this->_tpl_vars['submission']->getRecommendation()); ?>
					<b><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['reviewerRecommendationOptions'][$this->_tpl_vars['recommendation']]), $this);?>
</b>&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php else: ?>
					<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/recordRecommendation">
					<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['submission']->getReviewId(); ?>
" />
					<select name="recommendation" <?php if (! $this->_tpl_vars['confirmedStatus'] || $this->_tpl_vars['declined'] || $this->_tpl_vars['submission']->getCancelled() || ( ! $this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment() && ! $this->_tpl_vars['uploadedFileExists'] )): ?>disabled="disabled"<?php endif; ?> class="selectMenu">
						<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['reviewerRecommendationOptions'],'selected' => ''), $this);?>

					</select>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="submit" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.confirmDecision"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.submitReview"), $this);?>
" <?php if (! $this->_tpl_vars['confirmedStatus'] || $this->_tpl_vars['declined'] || $this->_tpl_vars['submission']->getCancelled() || ( ! $this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment() && ! $this->_tpl_vars['uploadedFileExists'] )): ?>disabled="disabled"<?php endif; ?> />
					</form>					
				<?php endif; ?>
				</td>		
			</tr>
		</table>
	</td>
</tr>
</table>

<?php if ($this->_tpl_vars['haveGuide']): ?>
<div class="separator"></div>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerGuidelines"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('reviewGuidelines'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


