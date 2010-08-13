<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:20
         compiled from sectionEditor/submissionsInReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submissionsInReview.tpl', 15, false),array('function', 'page_info', 'sectionEditor/submissionsInReview.tpl', 89, false),array('function', 'page_links', 'sectionEditor/submissionsInReview.tpl', 90, false),array('block', 'iterate', 'sectionEditor/submissionsInReview.tpl', 34, false),array('modifier', 'date_format', 'sectionEditor/submissionsInReview.tpl', 39, false),array('modifier', 'escape', 'sectionEditor/submissionsInReview.tpl', 40, false),array('modifier', 'truncate', 'sectionEditor/submissionsInReview.tpl', 41, false),)), $this); ?>

<table width="100%" class="listing">
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.submit"), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.sec"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="30%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.peerReview"), $this);?>

			<table width="100%">
				<tr valign="top">
					<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.ask"), $this);?>
</td>
					<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.start"), $this);?>
</td>
					<td width="34%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.done"), $this);?>
</td>
				</tr>
			</table>
		</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.ruling"), $this);?>
</td>
	</tr>
	<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>

	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getArticleId()); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionReview/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
		<td>
		<table width="100%">
			<?php $_from = $this->_tpl_vars['submission']->getReviewAssignments(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewAssignments']):
?>
				<?php $_from = $this->_tpl_vars['reviewAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['assignmentList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['assignmentList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['assignment']):
        $this->_foreach['assignmentList']['iteration']++;
?>
					<?php if (! $this->_tpl_vars['assignment']->getCancelled()): ?>
					<tr valign="top">
						<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateNotified()):  echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
						<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateConfirmed()):  if (! $this->_tpl_vars['assignment']->getDeclined()):  echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this); endif;  else: ?>&mdash;<?php endif; ?></td>
						<td width="34%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php if ($this->_tpl_vars['assignment']->getDateCompleted()):  echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc']));  else: ?>&mdash;<?php endif; ?></td>
					</tr>
					<?php endif; ?>
				<?php endforeach; else: ?>
					<tr valign="top">
						<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em">&mdash;</td>
						<td width="33%" style="padding: 0 4px 0 0; font-size: 1.0em">&mdash;</td>
						<td width="34%" style="padding: 0 0 0 0; font-size:1.0em">&mdash;</td>
					</tr>
				<?php endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>			
		</table>
		</td>
		<td>
			<?php $_from = $this->_tpl_vars['submission']->getDecisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['decisions']):
?>
				<?php $_from = $this->_tpl_vars['decisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['decisionList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['decisionList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['decision']):
        $this->_foreach['decisionList']['iteration']++;
?>
					<?php if (($this->_foreach['decisionList']['iteration'] == $this->_foreach['decisionList']['total'])): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['decision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
				
					<?php endif; ?>
				<?php endforeach; else: ?>
					&mdash;
				<?php endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>			
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
		<td colspan="5" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'submissions','iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>