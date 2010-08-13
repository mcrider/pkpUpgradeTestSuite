<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from subscription/subscriptionTypeForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'subscription/subscriptionTypeForm.tpl', 24, false),array('function', 'url', 'subscription/subscriptionTypeForm.tpl', 29, false),array('function', 'fieldLabel', 'subscription/subscriptionTypeForm.tpl', 37, false),array('function', 'html_options', 'subscription/subscriptionTypeForm.tpl', 54, false),array('modifier', 'escape', 'subscription/subscriptionTypeForm.tpl', 38, false),)), $this); ?>

<?php if ($this->_tpl_vars['typeId']): ?>
	<?php $this->assign('pageTitle', "manager.subscriptionTypes.edit");  else: ?>
	<?php $this->assign('pageTitle', "manager.subscriptionTypes.create");  endif; ?>

<?php $this->assign('pageId', "manager.subscriptionTypes.subscriptionTypeForm");  $this->assign('pageCrumbTitle', $this->_tpl_vars['subscriptionTypeTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['subscriptionTypeCreated']): ?>
<br/>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.subscriptionTypeCreatedSuccessfully"), $this);?>
<br />
<?php endif; ?>

<br/>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateSubscriptionType'), $this);?>
">
<?php if ($this->_tpl_vars['typeId']): ?>
<input type="hidden" name="typeId" value="<?php echo $this->_tpl_vars['typeId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'typeName','required' => 'true','key' => "manager.subscriptionTypes.form.typeName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="typeName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="typeName" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "manager.subscriptionTypes.form.description"), $this);?>
</td>
	<td class="value"><textarea name="description" id="description" cols="40" rows="4" class="textArea" /><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'cost','required' => 'true','key' => "manager.subscriptionTypes.form.cost"), $this);?>
</td>
	<td class="value">
		<input type="text" name="cost" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cost'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="10" id="cost" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.costInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'currency','required' => 'true','key' => "manager.subscriptionTypes.form.currency"), $this);?>
</td>
	<td><select name="currency" id="currency" class="selectMenu" /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validCurrencies'],'selected' => $this->_tpl_vars['currency']), $this);?>
</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'duration','required' => 'true','key' => "manager.subscriptionTypes.form.duration"), $this);?>
</td>
	<td class="value">
		<input type="text" name="duration" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="10" id="duration" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.durationInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'format','required' => 'true','key' => "manager.subscriptionTypes.form.format"), $this);?>
</td>
	<td><select id="format" name="format" class="selectMenu" /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validFormats'],'selected' => $this->_tpl_vars['format']), $this);?>
</select></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="institutional" id="institutional" value="1"<?php if ($this->_tpl_vars['institutional']): ?> checked="checked"<?php endif; ?> />
		<label for="institutional"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.institutional"), $this);?>
</label>
	</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="membership" id="membership" value="1"<?php if ($this->_tpl_vars['membership']): ?> checked="checked"<?php endif; ?> />
		<label for="membership"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.membership"), $this);?>
</label>
	</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="public" id="public" value="1"<?php if ($this->_tpl_vars['public']): ?> checked="checked"<?php endif; ?> />
		<label for="public"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.public"), $this);?>
</label>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['typeId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.form.saveAndCreateAnotherType"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionTypes','escape' => false), $this);?>
'" /></p>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>