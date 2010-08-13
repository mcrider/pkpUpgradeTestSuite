<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:38
         compiled from sectionEditor/submissionsArchives.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submissionsArchives.tpl', 15, false),array('function', 'url', 'sectionEditor/submissionsArchives.tpl', 33, false),array('function', 'print_issue_id', 'sectionEditor/submissionsArchives.tpl', 39, false),array('function', 'page_info', 'sectionEditor/submissionsArchives.tpl', 58, false),array('function', 'page_links', 'sectionEditor/submissionsArchives.tpl', 59, false),array('block', 'iterate', 'sectionEditor/submissionsArchives.tpl', 24, false),array('modifier', 'date_format', 'sectionEditor/submissionsArchives.tpl', 30, false),array('modifier', 'escape', 'sectionEditor/submissionsArchives.tpl', 31, false),array('modifier', 'truncate', 'sectionEditor/submissionsArchives.tpl', 32, false),array('modifier', 'strip_unsafe_html', 'sectionEditor/submissionsArchives.tpl', 33, false),)), $this); ?>

<table width="100%" class="listing">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.submitted"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="20%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment()); ?>
	<?php $this->assign('proofAssignment', $this->_tpl_vars['submission']->getProofAssignment()); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getArticleId()); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : smarty_modifier_truncate($_tmp, 60, "...")); ?>
</a></td>
		<td align="right">
			<?php $this->assign('status', $this->_tpl_vars['submission']->getStatus()); ?>
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED): ?>
				<?php echo $this->_plugins['function']['print_issue_id'][0][0]->smartyPrintIssueId(array('articleId' => ($this->_tpl_vars['articleId'])), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

			<?php endif; ?>
		</td>
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
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'section' => $this->_tpl_vars['section']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>