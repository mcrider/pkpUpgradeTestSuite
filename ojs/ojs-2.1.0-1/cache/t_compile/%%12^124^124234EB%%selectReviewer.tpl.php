<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:43
         compiled from sectionEditor/selectReviewer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'sectionEditor/selectReviewer.tpl', 15, false),array('modifier', 'escape', 'sectionEditor/selectReviewer.tpl', 26, false),array('modifier', 'chr', 'sectionEditor/selectReviewer.tpl', 29, false),array('modifier', 'string_format', 'sectionEditor/selectReviewer.tpl', 61, false),array('modifier', 'date_format', 'sectionEditor/selectReviewer.tpl', 82, false),array('modifier', 'default', 'sectionEditor/selectReviewer.tpl', 83, false),array('modifier', 'to_array', 'sectionEditor/selectReviewer.tpl', 88, false),array('function', 'translate', 'sectionEditor/selectReviewer.tpl', 17, false),array('function', 'url', 'sectionEditor/selectReviewer.tpl', 18, false),array('function', 'html_options_translate', 'sectionEditor/selectReviewer.tpl', 20, false),array('function', 'math', 'sectionEditor/selectReviewer.tpl', 77, false),array('function', 'page_info', 'sectionEditor/selectReviewer.tpl', 101, false),array('function', 'page_links', 'sectionEditor/selectReviewer.tpl', 102, false),array('block', 'iterate', 'sectionEditor/selectReviewer.tpl', 52, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.role.reviewers");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectReviewer"), $this);?>
</h3>
<form name="submit" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectReviewer','path' => $this->_tpl_vars['articleId']), $this);?>
">
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" size="10" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />&nbsp;<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>

<p><?php unset($this->_sections['letters']);
$this->_sections['letters']['loop'] = is_array($_loop=26) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['letters']['name'] = 'letters';
$this->_sections['letters']['show'] = true;
$this->_sections['letters']['max'] = $this->_sections['letters']['loop'];
$this->_sections['letters']['step'] = 1;
$this->_sections['letters']['start'] = $this->_sections['letters']['step'] > 0 ? 0 : $this->_sections['letters']['loop']-1;
if ($this->_sections['letters']['show']) {
    $this->_sections['letters']['total'] = $this->_sections['letters']['loop'];
    if ($this->_sections['letters']['total'] == 0)
        $this->_sections['letters']['show'] = false;
} else
    $this->_sections['letters']['total'] = 0;
if ($this->_sections['letters']['show']):

            for ($this->_sections['letters']['index'] = $this->_sections['letters']['start'], $this->_sections['letters']['iteration'] = 1;
                 $this->_sections['letters']['iteration'] <= $this->_sections['letters']['total'];
                 $this->_sections['letters']['index'] += $this->_sections['letters']['step'], $this->_sections['letters']['iteration']++):
$this->_sections['letters']['rownum'] = $this->_sections['letters']['iteration'];
$this->_sections['letters']['index_prev'] = $this->_sections['letters']['index'] - $this->_sections['letters']['step'];
$this->_sections['letters']['index_next'] = $this->_sections['letters']['index'] + $this->_sections['letters']['step'];
$this->_sections['letters']['first']      = ($this->_sections['letters']['iteration'] == 1);
$this->_sections['letters']['last']       = ($this->_sections['letters']['iteration'] == $this->_sections['letters']['total']);
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectReviewer','path' => $this->_tpl_vars['articleId'],'searchInitial' => ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp))), $this);?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectReviewer','path' => $this->_tpl_vars['articleId']), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<p><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','path' => $this->_tpl_vars['articleId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.review.enrollReviewer"), $this);?>
</a>&nbsp;|&nbsp;<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createReviewer','path' => $this->_tpl_vars['articleId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.review.createReviewer"), $this);?>
</a></p>

<table class="listing" width="100%">
<?php $this->assign('numCols', 6);  if ($this->_tpl_vars['rateReviewerOnQuality']): ?>
	<?php $this->assign('numCols', $this->_tpl_vars['numCols']+2);  endif; ?>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.interests"), $this);?>
</td>
	<?php if ($this->_tpl_vars['rateReviewerOnQuality']): ?>
		<td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.averageQuality"), $this);?>
</td>
		<td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.numberOfRatings"), $this);?>
</td>
	<?php endif; ?>
	<td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissions.averageTime"), $this);?>
</td>
	<td width="13%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissions.lastAssigned"), $this);?>
</td>
	<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.active"), $this);?>
</td>
	<td width="7%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'reviewers','item' => 'reviewer')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->assign('userId', $this->_tpl_vars['reviewer']->getUserId());  $this->assign('qualityCount', $this->_tpl_vars['averageQualityRatings'][$this->_tpl_vars['userId']]['count']);  $this->assign('reviewerStats', $this->_tpl_vars['reviewerStatistics'][$this->_tpl_vars['userId']]); ?>

<tr valign="top">
	<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'userProfile','path' => $this->_tpl_vars['userId']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewer']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewer']->getInterests())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<?php if ($this->_tpl_vars['rateReviewerOnQuality']): ?><td>
		<?php if ($this->_tpl_vars['qualityCount']):  echo ((is_array($_tmp=$this->_tpl_vars['averageQualityRatings'][$this->_tpl_vars['userId']]['average'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>

		<?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this); endif; ?>
	</td><?php endif; ?>

	<?php if ($this->_tpl_vars['rateReviewerOnQuality']): ?>
		<td>
			<?php if ($this->_tpl_vars['averageQualityRatings'][$this->_tpl_vars['userId']]['count']): ?>
				<?php echo $this->_tpl_vars['averageQualityRatings'][$this->_tpl_vars['userId']]['count']; ?>

			<?php else: ?>
				0
			<?php endif; ?>
		</td>
	<?php endif; ?>

	<td>
		<?php if ($this->_tpl_vars['reviewerStats']['average_span']): ?>
			<?php echo smarty_function_math(array('equation' => "round(theSpan)",'theSpan' => $this->_tpl_vars['reviewerStats']['average_span']), $this);?>

		<?php else: ?>
			&mdash;
		<?php endif; ?>
	</td>
	<td><?php if ($this->_tpl_vars['reviewerStats']['last_notified']):  echo ((is_array($_tmp=$this->_tpl_vars['reviewerStats']['last_notified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
	<td><?php echo ((is_array($_tmp=@$this->_tpl_vars['reviewerStats']['incomplete'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</td>
	<td>
		<?php if ($this->_tpl_vars['reviewer']->review_id): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.alreadyAssigned"), $this);?>

		<?php else: ?>
		<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectReviewer','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewer']->getUserId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewer']->getUserId()))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assign"), $this);?>
</a>
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="<?php if ($this->_tpl_vars['reviewers']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['reviewers']->wasEmpty()): ?>
<tr>
<td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
</tr>
<tr><td colspan="<?php echo $this->_tpl_vars['numCols']; ?>
" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['reviewers']), $this);?>
</td>
		<td colspan="<?php echo $this->_tpl_vars['numCols']-2; ?>
" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'reviewers','iterator' => $this->_tpl_vars['reviewers'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notes"), $this);?>
</h4>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectReviewerNotes"), $this);?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>