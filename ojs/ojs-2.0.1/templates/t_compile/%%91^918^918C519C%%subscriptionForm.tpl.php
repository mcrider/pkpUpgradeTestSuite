<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:01
         compiled from manager/subscription/subscriptionForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/subscription/subscriptionForm.tpl', 23, false),array('function', 'fieldLabel', 'manager/subscription/subscriptionForm.tpl', 37, false),array('function', 'html_select_date', 'manager/subscription/subscriptionForm.tpl', 54, false),array('block', 'iterate', 'manager/subscription/subscriptionForm.tpl', 39, false),array('modifier', 'escape', 'manager/subscription/subscriptionForm.tpl', 63, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['subscriptionTitle']));  if ($this->_tpl_vars['subscriptionId']): ?>
	<?php $this->assign('pageTitle', "manager.subscriptions.edit");  else: ?>
	<?php $this->assign('pageTitle', "manager.subscriptions.create");  endif; ?>

<?php $this->assign('pageId', "manager.subscription.subscriptionForm");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['subscriptionCreated']): ?>
<br/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.subscriptionCreatedSuccessfully"), $this);?>
<br/>
<?php endif; ?>

<br/>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/updateSubscription">
<?php if ($this->_tpl_vars['subscriptionId']): ?>
<input type="hidden" name="subscriptionId" value="<?php echo $this->_tpl_vars['subscriptionId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userId','required' => 'true','key' => "manager.subscriptions.form.userId"), $this);?>
</td>
	<td width="80%" class="value"><select name="userId" id="userId" class="selectMenu" />
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
		<option value="<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" <?php if ($this->_tpl_vars['userId'] == $this->_tpl_vars['user']->getUserId()): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['user']->getFullName(); ?>
 (<?php echo $this->_tpl_vars['user']->getUsername(); ?>
)</option>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?> 
	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'typeId','required' => 'true','key' => "manager.subscriptions.form.typeId"), $this);?>
</td>
	<td class="value"><select name="typeId" id="typeId" class="selectMenu" />
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'subscriptionTypes','item' => 'subscriptionType')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
		<option value="<?php echo $this->_tpl_vars['subscriptionType']->getTypeId(); ?>
"<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['subscriptionType']->getTypeId()): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['subscriptionType']->getSummaryString(); ?>
</option>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?> 
	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateStart','required' => 'true','key' => "manager.subscriptions.form.dateStart"), $this);?>
</td>
	<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateStart','all_extra' => "class=\"selectMenu\"",'start_year' => ($this->_tpl_vars['yearOffsetPast']),'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateStart'])), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateEnd','required' => 'true','key' => "manager.subscriptions.form.dateEnd"), $this);?>
</td>
	<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateEnd','start_year' => ($this->_tpl_vars['yearOffsetPast']),'all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateEnd'])), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'membership','key' => "manager.subscriptions.form.membership"), $this);?>
</td>
	<td class="value">
		<input type="text" name="membership" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['membership'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="membership" size="40" maxlength="40" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.membershipInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'domain','key' => "manager.subscriptions.form.domain"), $this);?>
</td>
	<td class="value">
		<input type="text" name="domain" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['domain'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="domain" maxlength="255" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.domainInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'ipRange','key' => "manager.subscriptions.form.ipRange"), $this);?>
</td>
	<td class="value">
		<input type="text" id="ipRange" name="ipRange" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ipRange'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="255" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.ipRangeInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<table width="100%">
			<tr valign="top">
				<td width="5%"><input type="checkbox" name="notifyEmail" id="notifyEmail" value="1"<?php if ($this->_tpl_vars['notifyEmail']): ?> checked="checked"<?php endif; ?> /></td>
				<td width="95%"><label for=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.notifyEmail"), $this);?>
</label></td>
			</tr>
		</table>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['subscriptionId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/subscriptions'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>