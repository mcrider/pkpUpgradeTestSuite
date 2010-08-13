<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from subscription/subscriptionPolicyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'subscription/subscriptionPolicyForm.tpl', 17, false),array('function', 'translate', 'subscription/subscriptionPolicyForm.tpl', 17, false),array('function', 'fieldLabel', 'subscription/subscriptionPolicyForm.tpl', 56, false),array('function', 'html_options', 'subscription/subscriptionPolicyForm.tpl', 99, false),array('modifier', 'escape', 'subscription/subscriptionPolicyForm.tpl', 57, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.subscriptionPolicies");  $this->assign('pageId', "manager.subscriptionPolicies");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionTypes'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies"), $this);?>
</a></li>
</ul>

<?php if ($this->_tpl_vars['subscriptionPoliciesSaved']): ?>
<br/>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionPoliciesSaved"), $this);?>
<br />
<?php endif; ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSubscriptionPolicies'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleAllowSetDelayedOpenAccessDuration(form) {
				form.delayedOpenAccessDuration.disabled = !form.delayedOpenAccessDuration.disabled;
			}
			function toggleAllowSetBeforeMonthsReminder(form) {
				form.numMonthsBeforeSubscriptionExpiryReminder.disabled = !form.numMonthsBeforeSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetBeforeWeeksReminder(form) {
				form.numWeeksBeforeSubscriptionExpiryReminder.disabled = !form.numWeeksBeforeSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetAfterMonthsReminder(form) {
				form.numMonthsAfterSubscriptionExpiryReminder.disabled = !form.numMonthsAfterSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetAfterWeeksReminder(form) {
				form.numWeeksAfterSubscriptionExpiryReminder.disabled = !form.numWeeksAfterSubscriptionExpiryReminder.disabled;
			}
		// -->
		'; ?>

	</script>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionContact"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionContactDescription"), $this);?>
</p>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionName','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionName" id="subscriptionName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionEmail" id="subscriptionEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionPhone" id="subscriptionPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionFax','key' => "user.fax"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionFax" id="subscriptionFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="subscriptionMailingAddress" id="subscriptionMailingAddress" rows="6" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionAdditionalInformation"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionAdditionalInformationDescription"), $this);?>
</p>
<p>
	<textarea name="subscriptionAdditionalInformation" id="subscriptionAdditionalInformation" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionAdditionalInformation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminders"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryRemindersDescription"), $this);?>
</p>

<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderBeforeMonths" id="enableSubscriptionExpiryReminderBeforeMonths" value="1" onclick="toggleAllowSetBeforeMonthsReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderBeforeMonths']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableSubscriptionExpiryReminderBeforeMonths"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderBeforeMonths1"), $this);?>
</label>
	<select name="numMonthsBeforeSubscriptionExpiryReminder" id="numMonthsBeforeSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderBeforeMonths'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?> /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumMonthsBeforeExpiry'],'selected' => $this->_tpl_vars['numMonthsBeforeSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderBeforeMonths2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderBeforeWeeks" id="enableSubscriptionExpiryReminderBeforeWeeks" value="1" onclick="toggleAllowSetBeforeWeeksReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderBeforeWeeks']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableSubscriptionExpiryReminderBeforeWeeks"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderBeforeWeeks1"), $this);?>
</label>
	<select name="numWeeksBeforeSubscriptionExpiryReminder" id="numWeeksBeforeSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderBeforeWeeks'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?> /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumWeeksBeforeExpiry'],'selected' => $this->_tpl_vars['numWeeksBeforeSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderBeforeWeeks2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderAfterWeeks" id="enableSubscriptionExpiryReminderAfterWeeks" value="1" onclick="toggleAllowSetAfterWeeksReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderAfterWeeks']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableSubscriptionExpiryReminderAfterWeeks"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderAfterWeeks1"), $this);?>
</label>
	<select name="numWeeksAfterSubscriptionExpiryReminder" id="numWeeksAfterSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderAfterWeeks'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?> /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumWeeksAfterExpiry'],'selected' => $this->_tpl_vars['numWeeksAfterSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderAfterWeeks2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderAfterMonths" id="enableSubscriptionExpiryReminderAfterMonths" value="1" onclick="toggleAllowSetAfterMonthsReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderAfterMonths']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableSubscriptionExpiryReminderAfterMonths"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderAfterMonths1"), $this);?>
</label>
	<select name="numMonthsAfterSubscriptionExpiryReminder" id="numMonthsAfterSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderAfterMonths'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?> /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumMonthsAfterExpiry'],'selected' => $this->_tpl_vars['numMonthsAfterSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminderAfterMonths2"), $this);?>

</p>

<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?>
	<br/>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryRemindersDisabled"), $this);?>

<?php endif; ?>


<div class="separator"></div>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessOptions"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessOptionsDescription"), $this);?>
</p>

	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccess"), $this);?>
</h4>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessDescription"), $this);?>
</p>
	<input type="checkbox" name="enableDelayedOpenAccess" id="enableDelayedOpenAccess" value="1" onclick="toggleAllowSetDelayedOpenAccessDuration(this.form)" <?php if ($this->_tpl_vars['enableDelayedOpenAccess']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableDelayedOpenAccess"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessDescription1"), $this);?>
</label>
	<select name="delayedOpenAccessDuration" id="delayedOpenAccessDuration" class="selectMenu" <?php if (! $this->_tpl_vars['enableDelayedOpenAccess']): ?> disabled="disabled"<?php endif; ?> /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validDuration'],'selected' => $this->_tpl_vars['delayedOpenAccessDuration']), $this);?>
</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessDescription2"), $this);?>


	<p>
	<input type="checkbox" name="enableOpenAccessNotification" id="enableOpenAccessNotification" value="1"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableOpenAccessNotification']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableOpenAccessNotification"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessNotificationDescription"), $this);?>
</label>
	<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?>
		<br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessNotificationDisabled"), $this);?>

	<?php endif; ?>
	</p>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessPolicyDescription"), $this);?>
</p>
	<p>
	<textarea name="delayedOpenAccessPolicy" id="delayedOpenAccessPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['delayedOpenAccessPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
	</p>

<p>
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.authorSelfArchive"), $this);?>
</h4>
	<input type="checkbox" name="enableAuthorSelfArchive" id="enableAuthorSelfArchive" value="1"<?php if ($this->_tpl_vars['enableAuthorSelfArchive']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableAuthorSelfArchive"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.authorSelfArchiveDescription"), $this);?>
</label>
</p>
<p>
	<textarea name="authorSelfArchivePolicy" id="authorSelfArchivePolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorSelfArchivePolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>