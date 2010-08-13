<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:32
         compiled from admin/journalSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/journalSettings.tpl', 17, false),array('function', 'translate', 'admin/journalSettings.tpl', 25, false),array('function', 'fieldLabel', 'admin/journalSettings.tpl', 30, false),array('modifier', 'escape', 'admin/journalSettings.tpl', 31, false),array('modifier', 'assign', 'admin/journalSettings.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "admin.journals.journalSettings");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateJournal'), $this);?>
">
<?php if ($this->_tpl_vars['journalId']): ?>
<input type="hidden" name="journalId" value="<?php echo $this->_tpl_vars['journalId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['journalId']): ?>
<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.createInstructions"), $this);?>
</span></p>
<?php endif; ?>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "manager.setup.journalTitle",'required' => 'true'), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="title" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "admin.journals.journalDescription"), $this);?>
</td>
		<td class="value"><textarea name="description" id="description" cols="40" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "journal.path",'required' => 'true'), $this);?>
</td>
		<td class="value">
			<input type="text" id="path" name="path" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="16" maxlength="32" class="textField" />
			<br />
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'path'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sampleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sampleUrl'));?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.urlWillBe",'sampleUrl' => $this->_tpl_vars['sampleUrl']), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td colspan="2" class="label">
			<input type="checkbox" name="enabled" id="enabled" value="1"<?php if ($this->_tpl_vars['enabled']): ?> checked="checked"<?php endif; ?> /> <label for="enabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.journals.enableJournalInstructions"), $this);?>
</label>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journals','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>