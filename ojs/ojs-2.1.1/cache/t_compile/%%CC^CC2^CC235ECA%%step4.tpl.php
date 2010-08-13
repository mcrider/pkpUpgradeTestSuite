<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:33
         compiled from manager/setup/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step4.tpl', 15, false),array('function', 'translate', 'manager/setup/step4.tpl', 18, false),array('function', 'fieldLabel', 'manager/setup/step4.tpl', 59, false),array('modifier', 'escape', 'manager/setup/step4.tpl', 24, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.setup.managingTheJournal");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '4'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>4.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduling"), $this);?>
</h3>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationSchedule"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduleDescription"), $this);?>
</p>

<p><textarea name="pubFreqPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubFreqPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormat"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat-1" value="1"<?php if (( ! $this->_tpl_vars['publicationFormat'] || $this->_tpl_vars['publicationFormat'] == 1 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatIssue"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat-2" value="2"<?php if (( $this->_tpl_vars['publicationFormat'] == 2 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat-2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatVolume"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat-3" value="3"<?php if (( $this->_tpl_vars['publicationFormat'] == 3 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="publicationFormat-3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatYear"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="publicationFormat" id="publicationFormat-4" value="4"<?php if (( $this->_tpl_vars['publicationFormat'] == 4 )): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value">
			<label for="publicationFormat-4"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatTitle"), $this);?>
</label>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatTitleDescription"), $this);?>
</span>
		</td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublication"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialNumber','key' => "issue.number"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialNumber" id="initialNumber" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialVolume','key' => "issue.volume"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialVolume" id="initialVolume" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialYear','key' => "issue.year"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="initialYear" id="initialYear" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'issuePerVolume','key' => "manager.setup.issuePerVolume"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="issuePerVolume" id="issuePerVolume" value="<?php if ($this->_tpl_vars['issuePerVolume']):  echo ((is_array($_tmp=$this->_tpl_vars['issuePerVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" size="5" maxlength="8" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'volumePerYear','key' => "manager.setup.volumePerYear"), $this);?>
</td>
		<td width="80%" class="data"><input type="text" name="volumePerYear" id="volumePerYear" value="<?php if ($this->_tpl_vars['volumePerYear']):  echo ((is_array($_tmp=$this->_tpl_vars['volumePerYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" size="5" maxlength="8" class="textField" /></td>
	</tr>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationNote"), $this);?>
</p>


<div class="separator"></div>


<h3>4.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicIdentifier"), $this);?>
</h3>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifier"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifierDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePublicIssueId" id="enablePublicIssueId" value="1"<?php if ($this->_tpl_vars['enablePublicIssueId']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePublicIssueId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicIssueId"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePublicArticleId" id="enablePublicArticleId" value="1"<?php if ($this->_tpl_vars['enablePublicArticleId']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePublicArticleId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicArticleId"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePublicSuppFileId" id="enablePublicSuppFileId" value="1"<?php if ($this->_tpl_vars['enablePublicSuppFileId']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePublicSuppFileId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicSuppFileId"), $this);?>
</label></td>
	</tr>
</table>

<br />

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.pageNumberIdentifier"), $this);?>
</h4>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="checkbox" name="enablePageNumber" id="enablePageNumber" value="1"<?php if ($this->_tpl_vars['enablePageNumber']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="enablePageNumber"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePageNumber"), $this);?>
</label></td>
	</tr>
</table>


<div class="separator"></div>


<h3>4.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.onlineAccessManagement"), $this);?>
</h3>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleEnableSubscriptions(form) {
				if (form.enableSubscriptions[0].checked) {
					form.openAccessPolicy.disabled = false;
					form.subscriptionName.disabled = true;
					form.subscriptionEmail.disabled = true;
					form.subscriptionPhone.disabled = true;
					form.subscriptionFax.disabled = true;
					form.subscriptionMailingAddress.disabled = true;
				} else {
					form.openAccessPolicy.disabled = true;
					form.subscriptionName.disabled = false;
					form.subscriptionEmail.disabled = false;
					form.subscriptionPhone.disabled = false;
					form.subscriptionFax.disabled = false;
					form.subscriptionMailingAddress.disabled = false;
				}
			}
		// -->
		'; ?>

	</script>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="enableSubscriptions" id="enableSubscriptions-0" value="0" onclick="toggleEnableSubscriptions(this.form)"<?php if (! $this->_tpl_vars['enableSubscriptions']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<label for="enableSubscriptions-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccess"), $this);?>
</label>
			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicy"), $this);?>
</h4>
			<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicyDescription"), $this);?>
</span></p>
			<p><textarea name="openAccessPolicy" id="openAccessPolicy" rows="12" cols="60" class="textArea"<?php if ($this->_tpl_vars['enableSubscriptions']): ?> disabled="disabled"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['openAccessPolicy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="enableSubscriptions" id="enableSubscriptions-1" value="1" onclick="toggleEnableSubscriptions(this.form)"<?php if ($this->_tpl_vars['enableSubscriptions']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<label for="enableSubscriptions-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscription"), $this);?>
</label>
			<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscriptionDescription"), $this);?>
</span></p>
		</td>
	</tr>
</table>


<div class="separator"></div>


<h3>4.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcements"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsDescription"), $this);?>
</p>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleEnableAnnouncementsHomepage(form) {
				form.numAnnouncementsHomepage.disabled = !form.numAnnouncementsHomepage.disabled;
			}
		// -->
		'; ?>

	</script>

<p>
	<input type="checkbox" name="enableAnnouncements" id="enableAnnouncements" value="1" <?php if ($this->_tpl_vars['enableAnnouncements']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableAnnouncements"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncements"), $this);?>
</label>
</p>

<p>
	<input type="checkbox" name="enableAnnouncementsHomepage" id="enableAnnouncementsHomepage" value="1" onclick="toggleEnableAnnouncementsHomepage(this.form)"<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<label for="enableAnnouncementsHomepage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncementsHomepage1"), $this);?>
</label>
	<select name="numAnnouncementsHomepage" size="1" class="selectMenu" <?php if (! $this->_tpl_vars['enableAnnouncementsHomepage']): ?>disabled="disabled"<?php endif; ?>>
		<?php unset($this->_sections['numAnnouncementsHomepageOptions']);
$this->_sections['numAnnouncementsHomepageOptions']['name'] = 'numAnnouncementsHomepageOptions';
$this->_sections['numAnnouncementsHomepageOptions']['start'] = (int)1;
$this->_sections['numAnnouncementsHomepageOptions']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['numAnnouncementsHomepageOptions']['show'] = true;
$this->_sections['numAnnouncementsHomepageOptions']['max'] = $this->_sections['numAnnouncementsHomepageOptions']['loop'];
$this->_sections['numAnnouncementsHomepageOptions']['step'] = 1;
if ($this->_sections['numAnnouncementsHomepageOptions']['start'] < 0)
    $this->_sections['numAnnouncementsHomepageOptions']['start'] = max($this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? 0 : -1, $this->_sections['numAnnouncementsHomepageOptions']['loop'] + $this->_sections['numAnnouncementsHomepageOptions']['start']);
else
    $this->_sections['numAnnouncementsHomepageOptions']['start'] = min($this->_sections['numAnnouncementsHomepageOptions']['start'], $this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? $this->_sections['numAnnouncementsHomepageOptions']['loop'] : $this->_sections['numAnnouncementsHomepageOptions']['loop']-1);
if ($this->_sections['numAnnouncementsHomepageOptions']['show']) {
    $this->_sections['numAnnouncementsHomepageOptions']['total'] = min(ceil(($this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? $this->_sections['numAnnouncementsHomepageOptions']['loop'] - $this->_sections['numAnnouncementsHomepageOptions']['start'] : $this->_sections['numAnnouncementsHomepageOptions']['start']+1)/abs($this->_sections['numAnnouncementsHomepageOptions']['step'])), $this->_sections['numAnnouncementsHomepageOptions']['max']);
    if ($this->_sections['numAnnouncementsHomepageOptions']['total'] == 0)
        $this->_sections['numAnnouncementsHomepageOptions']['show'] = false;
} else
    $this->_sections['numAnnouncementsHomepageOptions']['total'] = 0;
if ($this->_sections['numAnnouncementsHomepageOptions']['show']):

            for ($this->_sections['numAnnouncementsHomepageOptions']['index'] = $this->_sections['numAnnouncementsHomepageOptions']['start'], $this->_sections['numAnnouncementsHomepageOptions']['iteration'] = 1;
                 $this->_sections['numAnnouncementsHomepageOptions']['iteration'] <= $this->_sections['numAnnouncementsHomepageOptions']['total'];
                 $this->_sections['numAnnouncementsHomepageOptions']['index'] += $this->_sections['numAnnouncementsHomepageOptions']['step'], $this->_sections['numAnnouncementsHomepageOptions']['iteration']++):
$this->_sections['numAnnouncementsHomepageOptions']['rownum'] = $this->_sections['numAnnouncementsHomepageOptions']['iteration'];
$this->_sections['numAnnouncementsHomepageOptions']['index_prev'] = $this->_sections['numAnnouncementsHomepageOptions']['index'] - $this->_sections['numAnnouncementsHomepageOptions']['step'];
$this->_sections['numAnnouncementsHomepageOptions']['index_next'] = $this->_sections['numAnnouncementsHomepageOptions']['index'] + $this->_sections['numAnnouncementsHomepageOptions']['step'];
$this->_sections['numAnnouncementsHomepageOptions']['first']      = ($this->_sections['numAnnouncementsHomepageOptions']['iteration'] == 1);
$this->_sections['numAnnouncementsHomepageOptions']['last']       = ($this->_sections['numAnnouncementsHomepageOptions']['iteration'] == $this->_sections['numAnnouncementsHomepageOptions']['total']);
?>
		<option value="<?php echo $this->_sections['numAnnouncementsHomepageOptions']['index']; ?>
"<?php if ($this->_tpl_vars['numAnnouncementsHomepage'] == $this->_sections['numAnnouncementsHomepageOptions']['index'] || ( $this->_sections['numAnnouncementsHomepageOptions']['index'] == 1 && ! $this->_tpl_vars['numAnnouncementsHomepage'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_sections['numAnnouncementsHomepageOptions']['index']; ?>
</option>
		<?php endfor; endif; ?>
	</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncementsHomepage2"), $this);?>

</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsIntroduction"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsIntroductionDescription"), $this);?>
</p>

<p><textarea name="announcementsIntroduction" id="announcementsIntroduction" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcementsIntroduction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></p>


<div class="separator"></div>


<h3>4.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyediting"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useCopyeditors" id="useCopyeditors-1" value="1"<?php if ($this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useCopyeditors-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useCopyeditors"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useCopyeditors" id="useCopyeditors-0" value="0"<?php if (! $this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useCopyeditors-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseCopyeditors"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="copyeditInstructions" id="copyeditInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


<div class="separator"></div>


<h3>4.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutAndGalleys"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useLayoutEditors" id="useLayoutEditors-1" value="1"<?php if ($this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useLayoutEditors-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useLayoutEditors"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useLayoutEditors" id="useLayoutEditors-0" value="0"<?php if (! $this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useLayoutEditors-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseLayoutEditors"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="layoutInstructions" id="layoutInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutTemplates"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutTemplatesDescription"), $this);?>
</p>

<table width="100%" class="data">
<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['templates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['templates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['templateId'] => $this->_tpl_vars['template']):
        $this->_foreach['templates']['iteration']++;
?>
	<tr valign="top">
		<td width="20%" class="label"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadLayoutTemplate','path' => $this->_tpl_vars['templateId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['template']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
		<td width="50%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['template']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td width="30%"><input type="submit" name="delTemplate[<?php echo $this->_tpl_vars['templateId']; ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /></td>
<?php endforeach; endif; unset($_from); ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "template-title",'key' => "manager.setup.layoutTemplates.title"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><input type="text" name="template-title" id="template-title" size="40" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "template-file",'key' => "manager.setup.layoutTemplates.file"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><input type="file" name="template-file" id="template-file" class="uploadField" /><input type="submit" name="addTemplate" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>
</table>

<div class="separator"></div>


<h3>4.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofreading"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useProofreaders" id="useProofreaders-1" value="1"<?php if ($this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useProofreaders-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useProofreaders"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label"><input type="radio" name="useProofreaders" id="useProofreaders-0" value="0"<?php if (! $this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /></td>
		<td width="95%" class="value"><label for="useProofreaders-0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseProofreaders"), $this);?>
</label></td>
	</tr>
</table>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructionsDescription"), $this);?>
</p>

<p>
	<textarea name="proofInstructions" id="proofInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.htmlSetupInstructions"), $this);?>
</span>
</p>


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