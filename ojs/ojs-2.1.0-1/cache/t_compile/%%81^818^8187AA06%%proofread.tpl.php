<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:33
         compiled from author/submission/proofread.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/proofread.tpl', 13, false),array('function', 'icon', 'author/submission/proofread.tpl', 34, false),array('function', 'url', 'author/submission/proofread.tpl', 36, false),array('modifier', 'escape', 'author/submission/proofread.tpl', 17, false),array('modifier', 'date_format', 'author/submission/proofread.tpl', 30, false),array('modifier', 'default', 'author/submission/proofread.tpl', 30, false),array('modifier', 'assign', 'author/submission/proofread.tpl', 36, false),)), $this); ?>

<a name="proofread"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofreading"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useProofreaders']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
:
&nbsp; <?php if ($this->_tpl_vars['proofAssignment']->getProofreaderId()):  echo ((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getProofreaderFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this); endif; ?></p>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="40%" colspan="2">&nbsp;</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
	</tr>
	<tr>
		<td width="5%">1.</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
				<td>
			<?php if (! $this->_tpl_vars['proofAssignment']->getDateAuthorNotified() || $this->_tpl_vars['proofAssignment']->getDateAuthorCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authorProofreadingComplete','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateAuthorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateProofreaderCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofAssignment']->getDateLayoutEditorCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
</table>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.corrections"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentProofreadComment()): ?>
        <?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentProofreadComment()); ?>
        <a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getArticleId(),'anchor' => $this->_tpl_vars['comment']->getCommentId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
        <a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('proofInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'proof'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.instructions"), $this);?>
</a>
<?php endif; ?>