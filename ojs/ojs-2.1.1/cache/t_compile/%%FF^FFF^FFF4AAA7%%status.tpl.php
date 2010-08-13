<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:36
         compiled from sectionEditor/submission/status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/status.tpl', 16, false),array('function', 'url', 'sectionEditor/submission/status.tpl', 18, false),array('modifier', 'escape', 'sectionEditor/submission/status.tpl', 16, false),array('modifier', 'date_format', 'sectionEditor/submission/status.tpl', 54, false),)), $this); ?>

<script type="text/javascript">
<?php echo '
<!--
function confirmNotifyUnsuitable() {
	$result = confirm("';  echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.emailAuthorOnArchive"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'quote') : smarty_modifier_escape($_tmp, 'quote')); echo '");
	if ($result) {
		document.location = "';  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'unsuitableSubmission','articleId' => $this->_tpl_vars['submission']->getArticleId(),'escape' => false), $this); echo '"
	} else {
		document.location = "';  echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'archiveSubmission','path' => $this->_tpl_vars['submission']->getArticleId(),'escape' => false), $this); echo '";
	}
	return false;
}
// -->
'; ?>

</script>

<a name="status"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</h3>

<table width="100%" class="data">
	<tr>
		<?php $this->assign('status', $this->_tpl_vars['submission']->getSubmissionStatus()); ?>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
		<td width="30%" class="value">
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_UNASSIGNED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedUnassigned"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_EDITING):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedEditing"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_REVIEW):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedReview"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

			<?php endif; ?>
		</td>
		<td width="50%" class="value">
			<?php if ($this->_tpl_vars['status'] != STATUS_ARCHIVED): ?>
				<a onclick="confirmNotifyUnsuitable()" href="#" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.archiveSubmission"), $this);?>
</a>
			<?php else: ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'restoreToQueue','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.restoreToQueue"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.initiated"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateStatusModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.lastModified"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getLastModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
</table>