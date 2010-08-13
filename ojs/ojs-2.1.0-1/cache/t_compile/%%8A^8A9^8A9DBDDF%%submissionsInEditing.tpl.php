<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:36
         compiled from editor/submissionsInEditing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/submissionsInEditing.tpl', 17, false),array('function', 'url', 'editor/submissionsInEditing.tpl', 39, false),array('function', 'page_info', 'editor/submissionsInEditing.tpl', 61, false),array('function', 'page_links', 'editor/submissionsInEditing.tpl', 62, false),array('block', 'iterate', 'editor/submissionsInEditing.tpl', 31, false),array('modifier', 'date_format', 'editor/submissionsInEditing.tpl', 36, false),array('modifier', 'escape', 'editor/submissionsInEditing.tpl', 37, false),array('modifier', 'truncate', 'editor/submissionsInEditing.tpl', 38, false),array('modifier', 'strip_unsafe_html', 'editor/submissionsInEditing.tpl', 39, false),)), $this); ?>

<table width="100%" class="listing">
	<tr>
		<td colspan="9" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.submit"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.proof"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.sectionEditor"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="9" class="headseparator">&nbsp;</td>
	</tr>
	
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment()); ?>
	<?php $this->assign('proofAssignment', $this->_tpl_vars['submission']->getProofAssignment()); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")); ?>
</a></td>
		<td><?php if ($this->_tpl_vars['submission']->getCopyeditorDateFinalCompleted()):  echo ((is_array($_tmp=$this->_tpl_vars['submission']->getCopyeditorDateFinalCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
		<td><?php if ($this->_tpl_vars['layoutAssignment']->getDateCompleted()):  echo ((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
		<td><?php if ($this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted()):  echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
		<td>
			<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
			<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
 echo $this->_tpl_vars['editAssignment']->getEditorInitials(); ?>
 <?php endforeach; endif; unset($_from); ?>
		</td>
	</tr>
	<tr>
		<td colspan="9" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="9" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="9" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="5" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="4" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'section' => $this->_tpl_vars['section']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>