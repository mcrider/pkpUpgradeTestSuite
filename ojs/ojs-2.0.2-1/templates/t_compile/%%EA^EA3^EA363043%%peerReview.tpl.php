<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:12
         compiled from author/submission/peerReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/peerReview.tpl', 13, false),array('modifier', 'ord', 'author/submission/peerReview.tpl', 15, false),array('modifier', 'escape', 'author/submission/peerReview.tpl', 33, false),array('modifier', 'date_format', 'author/submission/peerReview.tpl', 33, false),array('modifier', 'chr', 'author/submission/peerReview.tpl', 70, false),)), $this); ?>

<a name="peerReview"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.peerReview"), $this);?>
</h3>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp)));  unset($this->_sections['round']);
$this->_sections['round']['name'] = 'round';
$this->_sections['round']['loop'] = is_array($_loop=$this->_tpl_vars['submission']->getCurrentRound()) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['round']['show'] = true;
$this->_sections['round']['max'] = $this->_sections['round']['loop'];
$this->_sections['round']['step'] = 1;
$this->_sections['round']['start'] = $this->_sections['round']['step'] > 0 ? 0 : $this->_sections['round']['loop']-1;
if ($this->_sections['round']['show']) {
    $this->_sections['round']['total'] = $this->_sections['round']['loop'];
    if ($this->_sections['round']['total'] == 0)
        $this->_sections['round']['show'] = false;
} else
    $this->_sections['round']['total'] = 0;
if ($this->_sections['round']['show']):

            for ($this->_sections['round']['index'] = $this->_sections['round']['start'], $this->_sections['round']['iteration'] = 1;
                 $this->_sections['round']['iteration'] <= $this->_sections['round']['total'];
                 $this->_sections['round']['index'] += $this->_sections['round']['step'], $this->_sections['round']['iteration']++):
$this->_sections['round']['rownum'] = $this->_sections['round']['iteration'];
$this->_sections['round']['index_prev'] = $this->_sections['round']['index'] - $this->_sections['round']['step'];
$this->_sections['round']['index_next'] = $this->_sections['round']['index'] + $this->_sections['round']['step'];
$this->_sections['round']['first']      = ($this->_sections['round']['iteration'] == 1);
$this->_sections['round']['last']       = ($this->_sections['round']['iteration'] == $this->_sections['round']['total']);
 $this->assign('round', $this->_sections['round']['index']+1);  $this->assign('roundIndex', $this->_sections['round']['index']);  $this->assign('authorFiles', $this->_tpl_vars['submission']->getAuthorFileRevisions($this->_tpl_vars['round']));  $this->assign('editorFiles', $this->_tpl_vars['submission']->getEditorFileRevisions($this->_tpl_vars['round']));  $this->assign('viewableFiles', $this->_tpl_vars['authorViewableFilesByRound'][$this->_tpl_vars['round']]); ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.round",'round' => $this->_tpl_vars['round']), $this);?>
</h4>

<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewVersion"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php $this->assign('reviewFile', $this->_tpl_vars['reviewFilesByRound'][$this->_tpl_vars['round']]); ?>
			<?php if ($this->_tpl_vars['reviewFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['reviewFile']->getRevision(); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.initiated"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php if ($this->_tpl_vars['reviewEarliestNotificationByRound'][$this->_tpl_vars['round']]): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewEarliestNotificationByRound'][$this->_tpl_vars['round']])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.lastModified"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php if ($this->_tpl_vars['reviewModifiedByRound'][$this->_tpl_vars['round']]): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewModifiedByRound'][$this->_tpl_vars['round']])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.uploadedFile"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php $_from = $this->_tpl_vars['viewableFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewer'] => $this->_tpl_vars['reviewerFiles']):
?>
				<?php $_from = $this->_tpl_vars['reviewerFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['viewableFile']):
?>
					<?php $this->assign('thisReviewer', ((is_array($_tmp=$this->_tpl_vars['start']+$this->_tpl_vars['reviewer'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp))); ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
 <?php echo $this->_tpl_vars['thisReviewer']; ?>

					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['viewableFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['viewableFile']->getRevision(); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['viewableFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['viewableFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
<br />
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<?php if (! $this->_sections['round']['last']): ?>
		<tr valign="top">
			<td class="label" width="20%">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>

			</td>
			<td class="value" width="80%">
				<?php $_from = $this->_tpl_vars['editorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['editorFile']):
?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getRevision(); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
<br />
				<?php endforeach; else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

				<?php endif; unset($_from); ?>
			</td>
		</tr>
		<tr valign="top">
			<td class="label" width="20%">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>

			</td>
			<td class="value" width="80%">
				<?php $_from = $this->_tpl_vars['authorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorFile']):
?>
					<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getRevision(); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
<br />
				<?php endforeach; else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

				<?php endif; unset($_from); ?>
			</td>
		</tr>
	<?php endif; ?>
</table>

<?php if (! $this->_sections['round']['last']): ?>
	<div class="separator"></div>
<?php endif; ?>

<?php endfor; endif; ?>