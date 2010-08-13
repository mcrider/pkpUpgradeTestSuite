<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:52
         compiled from reviewer/completed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'reviewer/completed.tpl', 15, false),array('function', 'print_issue_id', 'reviewer/completed.tpl', 61, false),array('function', 'page_info', 'reviewer/completed.tpl', 81, false),array('function', 'page_links', 'reviewer/completed.tpl', 82, false),array('block', 'iterate', 'reviewer/completed.tpl', 24, false),array('modifier', 'date_format', 'reviewer/completed.tpl', 30, false),array('modifier', 'truncate', 'reviewer/completed.tpl', 32, false),array('modifier', 'default', 'reviewer/completed.tpl', 51, false),)), $this); ?>

<table class="listing" width="100%">
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assigned"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="45%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.completed"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
	</tr>
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getArticleId()); ?>
	<?php $this->assign('reviewId', $this->_tpl_vars['submission']->getReviewId()); ?>

	<tr valign="top">
		<td><?php echo $this->_tpl_vars['articleId']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo $this->_tpl_vars['submission']->getSectionAbbrev(); ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['reviewId']; ?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</a></td>
		<td>
						<?php $this->assign('round', $this->_tpl_vars['submission']->getRound()); ?>
			<?php $this->assign('decisions', $this->_tpl_vars['submission']->getDecisions($this->_tpl_vars['round'])); ?>
			<?php $_from = $this->_tpl_vars['decisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastDecisionFinder'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastDecisionFinder']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['decision']):
        $this->_foreach['lastDecisionFinder']['iteration']++;
?>
				<?php if (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_ACCEPT): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.accept"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.pendingRevisions"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_RESUBMIT): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.resubmit"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_DECLINE): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.decline"), $this);?>

				<?php endif; ?>
			<?php endforeach; else: ?>
				&mdash;
			<?php endif; unset($_from); ?>
		</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td>
			<?php $this->assign('status', $this->_tpl_vars['submission']->getStatus()); ?>
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queued"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_SCHEDULED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.scheduled"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED): ?>
				<?php echo $this->_plugins['function']['print_issue_id'][0][0]->smartyPrintIssueId(array('articleId' => ($this->_tpl_vars['articleId'])), $this);?>
			
			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>
								
			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<td colspan="7" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissions','iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>