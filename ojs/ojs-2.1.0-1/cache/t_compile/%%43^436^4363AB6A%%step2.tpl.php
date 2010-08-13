<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:38
         compiled from manager/setup/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step2.tpl', 15, false),array('function', 'translate', 'manager/setup/step2.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step2.tpl', 165, false),array('modifier', 'escape', 'manager/setup/step2.tpl', 21, false),array('modifier', 'assign', 'manager/setup/step2.tpl', 198, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.journalPolicies");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '2'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>2.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.focusAndScopeOfJournal"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.focusAndScopeDescription"), $this);?>
</p>
<p>
	<textarea name="focusScopeDesc" id="focusScopeDesc" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['focusScopeDesc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3>2.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.peerReviewPolicy"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.peerReviewDescription"), $this);?>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewPolicy"), $this);?>
</h4>

<p><textarea name="reviewPolicy" id="reviewPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewGuidelines"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewGuidelinesDescription"), $this);?>
</p>

<p><textarea name="reviewGuidelines" id="reviewGuidelines" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewGuidelines'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcess"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcessDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="mailSubmissionsToReviewers" id="mailSubmissionsToReviewers-0" value="0"<?php if (! $this->_tpl_vars['mailSubmissionsToReviewers']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<label for="mailSubmissionsToReviewers-0"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcessStandard"), $this);?>
</strong></label>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcessStandardDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="mailSubmissionsToReviewers" id="mailSubmissionsToReviewers-1" value="1"<?php if ($this->_tpl_vars['mailSubmissionsToReviewers']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<label for="mailSubmissionsToReviewers-1"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcessEmail"), $this);?>
</strong></label>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewProcessEmailDescription"), $this);?>
</span>
		</td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions"), $this);?>
</h4>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleAllowSetInviteReminder(form) {
				form.numDaysBeforeInviteReminder.disabled = !form.numDaysBeforeInviteReminder.disabled;
			}
			function toggleAllowSetSubmitReminder(form) {
				form.numDaysBeforeSubmitReminder.disabled = !form.numDaysBeforeSubmitReminder.disabled;
			}
		// -->
		'; ?>

	</script>

<p>
	<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewTime"), $this);?>
</strong><br/>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.numWeeksPerReview"), $this);?>
: <input type="text" name="numWeeksPerReview" id="numWeeksPerReview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['numWeeksPerReview'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="2" maxlength="8" class="textField" /> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.weeks"), $this);?>
<br/>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.note"), $this);?>
: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.noteOnModification"), $this);?>

</p>

	<p>
		<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewerReminders"), $this);?>
</strong><br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.automatedReminders"), $this);?>
:<br/>
		<input type="checkbox" name="remindForInvite" id="remindForInvite" value="1" onclick="toggleAllowSetInviteReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['remindForInvite']): ?> checked="checked"<?php endif; ?> />&nbsp;
		<label for="remindForInvite"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.remindForInvite1"), $this);?>
</label>
		<select name="numDaysBeforeInviteReminder" size="1" class="selectMenu"<?php if (! $this->_tpl_vars['remindForInvite'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>>
			<?php unset($this->_sections['inviteDayOptions']);
$this->_sections['inviteDayOptions']['name'] = 'inviteDayOptions';
$this->_sections['inviteDayOptions']['start'] = (int)3;
$this->_sections['inviteDayOptions']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['inviteDayOptions']['show'] = true;
$this->_sections['inviteDayOptions']['max'] = $this->_sections['inviteDayOptions']['loop'];
$this->_sections['inviteDayOptions']['step'] = 1;
if ($this->_sections['inviteDayOptions']['start'] < 0)
    $this->_sections['inviteDayOptions']['start'] = max($this->_sections['inviteDayOptions']['step'] > 0 ? 0 : -1, $this->_sections['inviteDayOptions']['loop'] + $this->_sections['inviteDayOptions']['start']);
else
    $this->_sections['inviteDayOptions']['start'] = min($this->_sections['inviteDayOptions']['start'], $this->_sections['inviteDayOptions']['step'] > 0 ? $this->_sections['inviteDayOptions']['loop'] : $this->_sections['inviteDayOptions']['loop']-1);
if ($this->_sections['inviteDayOptions']['show']) {
    $this->_sections['inviteDayOptions']['total'] = min(ceil(($this->_sections['inviteDayOptions']['step'] > 0 ? $this->_sections['inviteDayOptions']['loop'] - $this->_sections['inviteDayOptions']['start'] : $this->_sections['inviteDayOptions']['start']+1)/abs($this->_sections['inviteDayOptions']['step'])), $this->_sections['inviteDayOptions']['max']);
    if ($this->_sections['inviteDayOptions']['total'] == 0)
        $this->_sections['inviteDayOptions']['show'] = false;
} else
    $this->_sections['inviteDayOptions']['total'] = 0;
if ($this->_sections['inviteDayOptions']['show']):

            for ($this->_sections['inviteDayOptions']['index'] = $this->_sections['inviteDayOptions']['start'], $this->_sections['inviteDayOptions']['iteration'] = 1;
                 $this->_sections['inviteDayOptions']['iteration'] <= $this->_sections['inviteDayOptions']['total'];
                 $this->_sections['inviteDayOptions']['index'] += $this->_sections['inviteDayOptions']['step'], $this->_sections['inviteDayOptions']['iteration']++):
$this->_sections['inviteDayOptions']['rownum'] = $this->_sections['inviteDayOptions']['iteration'];
$this->_sections['inviteDayOptions']['index_prev'] = $this->_sections['inviteDayOptions']['index'] - $this->_sections['inviteDayOptions']['step'];
$this->_sections['inviteDayOptions']['index_next'] = $this->_sections['inviteDayOptions']['index'] + $this->_sections['inviteDayOptions']['step'];
$this->_sections['inviteDayOptions']['first']      = ($this->_sections['inviteDayOptions']['iteration'] == 1);
$this->_sections['inviteDayOptions']['last']       = ($this->_sections['inviteDayOptions']['iteration'] == $this->_sections['inviteDayOptions']['total']);
?>
			<option value="<?php echo $this->_sections['inviteDayOptions']['index']; ?>
"<?php if ($this->_tpl_vars['numDaysBeforeInviteReminder'] == $this->_sections['inviteDayOptions']['index'] || ( $this->_sections['inviteDayOptions']['index'] == 5 && ! $this->_tpl_vars['remindForInvite'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_sections['inviteDayOptions']['index']; ?>
</option>
			<?php endfor; endif; ?>
		</select>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.remindForInvite2"), $this);?>

		<br/>

		<input type="checkbox" name="remindForSubmit" id="remindForSubmit" value="1" onclick="toggleAllowSetSubmitReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php elseif ($this->_tpl_vars['remindForSubmit']): ?> checked="checked"<?php endif; ?> />&nbsp;
		<label for="remindForSubmit"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.remindForSubmit1"), $this);?>
</label>
		<select name="numDaysBeforeSubmitReminder" size="1" class="selectMenu"<?php if (! $this->_tpl_vars['remindForSubmit'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>>
			<?php unset($this->_sections['submitDayOptions']);
$this->_sections['submitDayOptions']['name'] = 'submitDayOptions';
$this->_sections['submitDayOptions']['start'] = (int)0;
$this->_sections['submitDayOptions']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['submitDayOptions']['show'] = true;
$this->_sections['submitDayOptions']['max'] = $this->_sections['submitDayOptions']['loop'];
$this->_sections['submitDayOptions']['step'] = 1;
if ($this->_sections['submitDayOptions']['start'] < 0)
    $this->_sections['submitDayOptions']['start'] = max($this->_sections['submitDayOptions']['step'] > 0 ? 0 : -1, $this->_sections['submitDayOptions']['loop'] + $this->_sections['submitDayOptions']['start']);
else
    $this->_sections['submitDayOptions']['start'] = min($this->_sections['submitDayOptions']['start'], $this->_sections['submitDayOptions']['step'] > 0 ? $this->_sections['submitDayOptions']['loop'] : $this->_sections['submitDayOptions']['loop']-1);
if ($this->_sections['submitDayOptions']['show']) {
    $this->_sections['submitDayOptions']['total'] = min(ceil(($this->_sections['submitDayOptions']['step'] > 0 ? $this->_sections['submitDayOptions']['loop'] - $this->_sections['submitDayOptions']['start'] : $this->_sections['submitDayOptions']['start']+1)/abs($this->_sections['submitDayOptions']['step'])), $this->_sections['submitDayOptions']['max']);
    if ($this->_sections['submitDayOptions']['total'] == 0)
        $this->_sections['submitDayOptions']['show'] = false;
} else
    $this->_sections['submitDayOptions']['total'] = 0;
if ($this->_sections['submitDayOptions']['show']):

            for ($this->_sections['submitDayOptions']['index'] = $this->_sections['submitDayOptions']['start'], $this->_sections['submitDayOptions']['iteration'] = 1;
                 $this->_sections['submitDayOptions']['iteration'] <= $this->_sections['submitDayOptions']['total'];
                 $this->_sections['submitDayOptions']['index'] += $this->_sections['submitDayOptions']['step'], $this->_sections['submitDayOptions']['iteration']++):
$this->_sections['submitDayOptions']['rownum'] = $this->_sections['submitDayOptions']['iteration'];
$this->_sections['submitDayOptions']['index_prev'] = $this->_sections['submitDayOptions']['index'] - $this->_sections['submitDayOptions']['step'];
$this->_sections['submitDayOptions']['index_next'] = $this->_sections['submitDayOptions']['index'] + $this->_sections['submitDayOptions']['step'];
$this->_sections['submitDayOptions']['first']      = ($this->_sections['submitDayOptions']['iteration'] == 1);
$this->_sections['submitDayOptions']['last']       = ($this->_sections['submitDayOptions']['iteration'] == $this->_sections['submitDayOptions']['total']);
?>
				<option value="<?php echo $this->_sections['submitDayOptions']['index']; ?>
"<?php if ($this->_tpl_vars['numDaysBeforeSubmitReminder'] == $this->_sections['submitDayOptions']['index']): ?> selected="selected"<?php endif; ?>><?php echo $this->_sections['submitDayOptions']['index']; ?>
</option>
		<?php endfor; endif; ?>
		</select>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.remindForSubmit2"), $this);?>

		<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?>
		<br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.automatedRemindersDisabled"), $this);?>

		<?php endif; ?>
	</p>

<p>
	<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewerRatings"), $this);?>
</strong><br/>
	<input type="checkbox" name="rateReviewerOnQuality" id="rateReviewerOnQuality" value="1"<?php if ($this->_tpl_vars['rateReviewerOnQuality']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="rateReviewerOnQuality"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.onQuality"), $this);?>
</label>
</p>

<p>
	<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewerAccess"), $this);?>
</strong><br/>
	<input type="checkbox" name="reviewerAccessKeysEnabled" id="reviewerAccessKeysEnabled" value="1"<?php if ($this->_tpl_vars['reviewerAccessKeysEnabled']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="reviewerAccessKeysEnabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewerAccessKeysEnabled"), $this);?>
</label><br/>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.reviewerAccessKeysEnabled.description"), $this);?>
</span><br/>
	<input type="checkbox" name="restrictReviewerFileAccess" id="restrictReviewerFileAccess" value="1"<?php if ($this->_tpl_vars['restrictReviewerFileAccess']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="restrictReviewerFileAccess"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.restrictReviewerFileAccess"), $this);?>
</label>
</p>


<div class="separator"></div>


<h3>2.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.privacyStatement"), $this);?>
</h3>

<p><textarea name="privacyStatement" id="privacyStatement" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['privacyStatement'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>2.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicy"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicyDescription"), $this);?>
</p>

<p><textarea name="openAccessPolicy" id="openAccessPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['openAccessPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>2.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addItemtoAboutJournal"), $this);?>
</h3>

<table width="100%" class="data">
<?php $_from = $this->_tpl_vars['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customAboutItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customAboutItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['aboutId'] => $this->_tpl_vars['aboutItem']):
        $this->_foreach['customAboutItems']['iteration']++;
?>
	<tr valign="top">
		<td width="5%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "customAboutItems-".($this->_tpl_vars['aboutId'])."-title",'key' => "common.title"), $this);?>
</td>
		<td width="95%" class="value"><input type="text" name="customAboutItems[<?php echo $this->_tpl_vars['aboutId']; ?>
][title]" id="customAboutItems-<?php echo $this->_tpl_vars['aboutId']; ?>
-title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['aboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /><?php if ($this->_foreach['customAboutItems']['total'] > 1): ?> <input type="submit" name="delCustomAboutItem[<?php echo $this->_tpl_vars['aboutId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /><?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "customAboutItems-".($this->_tpl_vars['aboutId'])."-content",'key' => "manager.setup.aboutItemContent"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="customAboutItems[<?php echo $this->_tpl_vars['aboutId']; ?>
][content]" id="customAboutItems-<?php echo $this->_tpl_vars['aboutId']; ?>
-content" rows="12" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['aboutItem']['content'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<?php if (! ($this->_foreach['contributors']['iteration'] == $this->_foreach['contributors']['total'])): ?>
	<tr valign="top">
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<?php endif;  endforeach; else: ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "customAboutItems-0-title",'key' => "common.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="customAboutItems[0][title]" id="customAboutItems-0-title" value="" size="40" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "customAboutItems-0-content",'key' => "manager.setup.aboutItemContent"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="customAboutItems[0][content]" id="customAboutItems-0-content" rows="12" cols="40" class="textArea"></textarea></td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<p><input type="submit" name="addCustomAboutItem" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addAboutItem"), $this);?>
" class="button" /></p>

<div class="separator"></div>


<h3>2.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalArchiving"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lockssDescription"), $this);?>
</p>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'email','template' => 'LOCKSS_EXISTING_ARCHIVE'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'lockssExistingArchiveUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'lockssExistingArchiveUrl'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'email','template' => 'LOCKSS_NEW_ARCHIVE'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'lockssNewArchiveUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'lockssNewArchiveUrl'));?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lockssRegister",'lockssExistingArchiveUrl' => $this->_tpl_vars['lockssExistingArchiveUrl'],'lockssNewArchiveUrl' => $this->_tpl_vars['lockssNewArchiveUrl']), $this);?>
</p>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'lockss'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'lockssUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'lockssUrl'));?>

<p><input type="checkbox" name="enableLockss" id="enableLockss" value="1"<?php if ($this->_tpl_vars['enableLockss']): ?> checked="checked"<?php endif; ?> /> <label for="enableLockss"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lockssEnable",'lockssUrl' => $this->_tpl_vars['lockssUrl']), $this);?>
</label></p>

<p>
	<textarea name="lockssLicense" id="lockssLicense" rows="6" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['lockssLicense'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lockssLicenses"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3>2.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.securitySettings"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.securitySettingsDescription"), $this);?>
</p>

<script type="text/javascript">
<?php echo '
<!--
function toggleRegAllowOpts(form) {
	form.allowRegReader.disabled=!form.allowRegReader.disabled;
	form.allowRegAuthor.disabled=!form.allowRegAuthor.disabled;
	form.allowRegReviewer.disabled=!form.allowRegReviewer.disabled;
}
// -->
'; ?>

</script>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.userRegistration"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="disableUserReg" id="disableUserReg-0" value="0" onclick="toggleRegAllowOpts(this.form)"<?php if (! $this->_tpl_vars['disableUserReg']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<label for="disableUserReg-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableUserRegistration"), $this);?>
</label>
			<table width="100%">
				<tr>
					<td width="5%"><input type="checkbox" name="allowRegReader" id="allowRegReader" value="1"<?php if ($this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null): ?> checked="checked"<?php endif;  if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /></td>
					<td width="95%"><label for="allowRegReader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</label></td>
				</tr>
				<tr>
					<td width="5%"><input type="checkbox" name="allowRegAuthor" id="allowRegAuthor" value="1"<?php if ($this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null): ?> checked="checked"<?php endif;  if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /></td>
					<td width="95%"><label for="allowRegAuthor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.authors"), $this);?>
</label></td>
				</tr>
				<tr>
					<td width="5%"><input type="checkbox" name="allowRegReviewer" id="allowRegReviewer" value="1"<?php if ($this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null): ?> checked="checked"<?php endif;  if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /></td>
					<td width="95%"><label for="allowRegReviewer"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewers"), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="disableUserReg" id="disableUserReg-1" value="1" onclick="toggleRegAllowOpts(this.form)"<?php if ($this->_tpl_vars['disableUserReg']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="disableUserReg-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disableUserRegistration"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.siteAccess"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="restrictSiteAccess" id="restrictSiteAccess-0" value="0"<?php if (! $this->_tpl_vars['restrictSiteAccess']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="restrictSiteAccess-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noRestrictSiteAccess"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="restrictSiteAccess" id="restrictSiteAccess-1" value="1"<?php if ($this->_tpl_vars['restrictSiteAccess']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="restrictSiteAccess-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.restrictSiteAccess"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.articleAccess"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="restrictArticleAccess" id="restrictArticleAccess-0" value="0"<?php if (! $this->_tpl_vars['restrictArticleAccess']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="restrictArticleAccess-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noRestrictArticleAccess"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="restrictArticleAccess" id="restrictArticleAccess-1" value="1"<?php if ($this->_tpl_vars['restrictArticleAccess']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="restrictArticleAccess-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.restrictArticleAccess"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.comments"), $this);?>
</h4>

<table width="100%" class="data">
<?php $_from = $this->_tpl_vars['commentsOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['keyName']):
?>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="enableComments" id="enableComments-<?php echo $this->_tpl_vars['value']; ?>
" value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['enableComments'] == $this->_tpl_vars['value']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enableComments-<?php echo $this->_tpl_vars['value']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['keyName']), $this);?>
</label></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.loggingAndAuditing"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="articleEventLog" id="articleEventLog" value="1"<?php if ($this->_tpl_vars['articleEventLog']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="articleEventLog"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionEventLogging"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="articleEmailLog" id="articleEmailLog" value="1"<?php if ($this->_tpl_vars['articleEmailLog']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="articleEmailLog"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionEmailLogging"), $this);?>
</label></td>
	</tr>
</table>


<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>