<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:33
         compiled from author/active.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/active.tpl', 15, false),array('function', 'url', 'author/active.tpl', 34, false),array('function', 'page_info', 'author/active.tpl', 66, false),array('function', 'page_links', 'author/active.tpl', 67, false),array('block', 'iterate', 'author/active.tpl', 24, false),array('modifier', 'date_format', 'author/active.tpl', 30, false),array('modifier', 'escape', 'author/active.tpl', 31, false),array('modifier', 'truncate', 'author/active.tpl', 32, false),array('modifier', 'strip_unsafe_html', 'author/active.tpl', 34, false),)), $this); ?>

<table class="listing" width="100%">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.submit"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="25%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getArticleId()); ?>
	<?php $this->assign('progress', $this->_tpl_vars['submission']->getSubmissionProgress()); ?>

	<tr valign="top">
		<td><?php echo $this->_tpl_vars['articleId']; ?>
</td>
		<td><?php if ($this->_tpl_vars['submission']->getDateSubmitted()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<?php if ($this->_tpl_vars['progress'] == 0): ?>
			<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submission','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php if ($this->_tpl_vars['submission']->getArticleTitle()):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "..."));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.untitled"), $this); endif; ?></a></td>
			<td align="right">
				<?php $this->assign('status', $this->_tpl_vars['submission']->getSubmissionStatus()); ?>
				<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

				<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_UNASSIGNED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedUnassigned"), $this);?>

				<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_EDITING): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedEditing"), $this);?>
</a>
				<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_REVIEW): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionReview','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedReview"), $this);?>
</a>
				<?php elseif ($this->_tpl_vars['status'] == STATUS_SCHEDULED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.scheduled"), $this);?>

				<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>

				<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

				<?php endif; ?>
			</td>
		<?php else: ?>
			<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submit','path' => $this->_tpl_vars['progress'],'articleId' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php if ($this->_tpl_vars['submission']->getArticleTitle()):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "..."));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.untitled"), $this); endif; ?></a></td>
			<td align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.incomplete"), $this);?>
<br /><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSubmission','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submissions.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		<?php endif; ?>

	</tr>

	<tr>
		<td colspan="6" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissions','iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>