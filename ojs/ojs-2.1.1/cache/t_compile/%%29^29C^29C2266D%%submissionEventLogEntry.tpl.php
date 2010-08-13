<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:37
         compiled from sectionEditor/submissionEventLogEntry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'sectionEditor/submissionEventLogEntry.tpl', 17, false),array('function', 'translate', 'sectionEditor/submissionEventLogEntry.tpl', 17, false),array('function', 'icon', 'sectionEditor/submissionEventLogEntry.tpl', 56, false),array('modifier', 'date_format', 'sectionEditor/submissionEventLogEntry.tpl', 41, false),array('modifier', 'to_array', 'sectionEditor/submissionEventLogEntry.tpl', 55, false),array('modifier', 'translate', 'sectionEditor/submissionEventLogEntry.tpl', 55, false),array('modifier', 'assign', 'sectionEditor/submissionEventLogEntry.tpl', 55, false),array('modifier', 'escape', 'sectionEditor/submissionEventLogEntry.tpl', 56, false),array('modifier', 'strip_unsafe_html', 'sectionEditor/submissionEventLogEntry.tpl', 64, false),array('modifier', 'nl2br', 'sectionEditor/submissionEventLogEntry.tpl', 64, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.eventLog");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submission','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.summary"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['canReview']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionReview','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['canEdit']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editing"), $this);?>
</a></li><?php endif; ?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionHistory','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history"), $this);?>
</a></li>
</ul>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEventLog','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEmailLog','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionNotes','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionNotes"), $this);?>
</a></li>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sectionEditor/submission/summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
</td>
		<td width="80%" class="value"><?php echo $this->_tpl_vars['logEntry']->getLogID(); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getDateLogged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.logLevel"), $this);?>
</td>
		<td class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['logEntry']->getLogLevelString())), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getAssocTypeLongString()), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.user"), $this);?>
</td>
		<td class="value">
			<?php $this->assign('emailString', ($this->_tpl_vars['logEntry']->getUserFullName())." <".($this->_tpl_vars['logEntry']->getUserEmail()).">"); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'subject' => ((is_array($_tmp=$this->_tpl_vars['logEntry']->getEventTitle())) ? $this->_run_mod_handler('translate', true, $_tmp) : Locale::translate($_tmp)),'articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getUserFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.event"), $this);?>
</td>
		<td class="value">
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getEventTitle()), $this);?>
</strong>
			<br /><br />
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logEntry']->getMessage())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['isEditor']): ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearSubmissionEventLog','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['logEntry']->getLogId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['logEntry']->getLogId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.confirmDeleteLogEntry"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.deleteLogEntry"), $this);?>
</a><br/>
<?php endif; ?>

<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEventLog','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.backToEventLog"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>