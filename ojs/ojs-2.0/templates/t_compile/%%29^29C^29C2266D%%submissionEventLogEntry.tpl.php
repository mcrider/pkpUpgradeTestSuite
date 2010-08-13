<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:54
         compiled from sectionEditor/submissionEventLogEntry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submissionEventLogEntry.tpl', 17, false),array('function', 'icon', 'sectionEditor/submissionEventLogEntry.tpl', 58, false),array('modifier', 'date_format', 'sectionEditor/submissionEventLogEntry.tpl', 41, false),array('modifier', 'escape', 'sectionEditor/submissionEventLogEntry.tpl', 55, false),array('modifier', 'nl2br', 'sectionEditor/submissionEventLogEntry.tpl', 66, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.eventLog");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submission/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.summary"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionReview/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEditing/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editing"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionHistory/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history"), $this);?>
</a></li>
</ul>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEventLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEmailLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.history.submissionEmailLog"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionNotes/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
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
			<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['logEntry']->getEventTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo $this->_tpl_vars['logEntry']->getUserFullName(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&redirectUrl=".($this->_tpl_vars['urlEscaped'])."&subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.event"), $this);?>
</td>
		<td class="value">
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['logEntry']->getEventTitle()), $this);?>
</strong>
			<br /><br />
			<?php echo ((is_array($_tmp=$this->_tpl_vars['logEntry']->getMessage())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['isEditor']): ?>
	<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/clearSubmissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['logEntry']->getLogId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.confirmDeleteLogEntry"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.deleteLogEntry"), $this);?>
</a><br/>
<?php endif; ?>

<a class="action" href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissionEventLog/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.event.backToEventLog"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>