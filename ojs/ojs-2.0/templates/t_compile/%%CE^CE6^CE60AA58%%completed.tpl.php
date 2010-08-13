<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from layoutEditor/completed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'layoutEditor/completed.tpl', 15, false),array('function', 'print_issue_id', 'layoutEditor/completed.tpl', 44, false),array('function', 'page_info', 'layoutEditor/completed.tpl', 63, false),array('function', 'page_links', 'layoutEditor/completed.tpl', 64, false),array('block', 'iterate', 'layoutEditor/completed.tpl', 24, false),array('modifier', 'date_format', 'layoutEditor/completed.tpl', 30, false),array('modifier', 'truncate', 'layoutEditor/completed.tpl', 32, false),)), $this); ?>

<table width="100%" class="listing">
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assign"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
		<td width="25%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
	</tr>
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getArticleId()); ?>
	<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment()); ?>

	<tr valign="top">
		<td><?php echo $this->_tpl_vars['articleId']; ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo $this->_tpl_vars['submission']->getSectionAbbrev(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")); ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['articleId']; ?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</a></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td align="right">
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