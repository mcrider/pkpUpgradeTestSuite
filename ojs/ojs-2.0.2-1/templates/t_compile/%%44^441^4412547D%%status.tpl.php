<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:12
         compiled from author/submission/status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/status.tpl', 13, false),array('modifier', 'date_format', 'author/submission/status.tpl', 32, false),)), $this); ?>

<a name="status"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</h3>

<table width="100%" class="data">
	<tr>
		<?php $this->assign('status', $this->_tpl_vars['submission']->getSubmissionStatus()); ?>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_UNASSIGNED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedUnassigned"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_EDITING):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedEditing"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_QUEUED_REVIEW):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.queuedReview"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_SCHEDULED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.scheduled"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

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