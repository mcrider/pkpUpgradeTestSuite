<?php /* Smarty version 2.6.18, created on 2009-04-09 15:34:09
         compiled from about/subscriptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/subscriptions.tpl', 14, false),array('function', 'mailto', 'about/subscriptions.tpl', 29, false),array('modifier', 'escape', 'about/subscriptions.tpl', 17, false),array('modifier', 'nl2br', 'about/subscriptions.tpl', 20, false),array('modifier', 'string_format', 'about/subscriptions.tpl', 56, false),array('block', 'iterate', 'about/subscriptions.tpl', 50, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.subscriptions"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.subscriptionsContact"), $this);?>
</h3>
<p>
	<?php if (! empty ( $this->_tpl_vars['subscriptionName'] )): ?>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['subscriptionMailingAddress'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionMailingAddress'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['subscriptionPhone'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.phone"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['subscriptionFax'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.fax"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['subscriptionEmail'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['subscriptionEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
<br /><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['subscriptionAdditionalInformation'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionAdditionalInformation'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
	<?php endif; ?>
</p>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.availableSubscriptionTypes"), $this);?>
</h3>
<table width="100%" class="listing">
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.name"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.format"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.duration"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.cost"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'subscriptionTypes','item' => 'subscriptionType')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if (! $this->_tpl_vars['subscriptionType']->getDisablePublicDisplay()): ?>
		<tr valign="top">
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getSubscriptionTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getSubscriptionTypeDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
			<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['subscriptionType']->getFormatString()), $this);?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getDurationYearsMonths())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getCost())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
&nbsp;(<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getCurrencyStringShort())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</td>
		</tr>
		<tr><td colspan="4" class="<?php if ($this->_tpl_vars['subscriptionTypes']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>