<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:39
         compiled from subscription/subscriptionTypes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'subscription/subscriptionTypes.tpl', 17, false),array('function', 'translate', 'subscription/subscriptionTypes.tpl', 17, false),array('function', 'page_info', 'subscription/subscriptionTypes.tpl', 53, false),array('function', 'page_links', 'subscription/subscriptionTypes.tpl', 54, false),array('block', 'iterate', 'subscription/subscriptionTypes.tpl', 36, false),array('modifier', 'escape', 'subscription/subscriptionTypes.tpl', 38, false),array('modifier', 'string_format', 'subscription/subscriptionTypes.tpl', 39, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.subscriptionTypes");  $this->assign('pageId', "manager.subscriptionTypes");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionTypes'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies"), $this);?>
</a></li>
</ul>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="58%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.name"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.cost"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'subscriptionTypes','item' => 'subscriptionType')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getCost())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
&nbsp;(<?php echo $this->_tpl_vars['subscriptionType']->getCurrencyStringShort(); ?>
)</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSubscriptionType','path' => $this->_tpl_vars['subscriptionType']->getTypeId(),'dir' => 'u'), $this);?>
" class="action">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSubscriptionType','path' => $this->_tpl_vars['subscriptionType']->getTypeId(),'dir' => 'd'), $this);?>
" class="action">&darr;</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSubscriptionType','path' => $this->_tpl_vars['subscriptionType']->getTypeId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSubscriptionType','path' => $this->_tpl_vars['subscriptionType']->getTypeId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr><td colspan="3" class="<?php if ($this->_tpl_vars['subscriptionTypes']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['subscriptionTypes']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['subscriptionTypes']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'subscriptionTypes','iterator' => $this->_tpl_vars['subscriptionTypes']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSubscriptionType'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>