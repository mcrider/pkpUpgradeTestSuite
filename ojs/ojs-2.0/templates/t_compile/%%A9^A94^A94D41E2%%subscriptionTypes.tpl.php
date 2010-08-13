<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:51
         compiled from manager/subscription/subscriptionTypes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/subscription/subscriptionTypes.tpl', 17, false),array('function', 'page_info', 'manager/subscription/subscriptionTypes.tpl', 52, false),array('function', 'page_links', 'manager/subscription/subscriptionTypes.tpl', 53, false),array('block', 'iterate', 'manager/subscription/subscriptionTypes.tpl', 35, false),array('modifier', 'string_format', 'manager/subscription/subscriptionTypes.tpl', 38, false),array('modifier', 'escape', 'manager/subscription/subscriptionTypes.tpl', 39, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.subscriptionTypes");  $this->assign('pageId', "manager.subscriptionTypes");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/subscriptions"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/subscriptionTypes"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes"), $this);?>
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
<?php $this->_tag_stack[] = array('iterate', array('from' => 'subscriptionTypes','item' => 'subscriptionType')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['subscriptionType']->getTypeName(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getCost())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
&nbsp;(<?php echo $this->_tpl_vars['subscriptionType']->getCurrencyStringShort(); ?>
)</td>
		<td><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/editSubscriptionType/<?php echo $this->_tpl_vars['subscriptionType']->getTypeId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/deleteSubscriptionType/<?php echo $this->_tpl_vars['subscriptionType']->getTypeId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr><td colspan="3" class="<?php if ($this->_tpl_vars['subscriptionTypes']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['subscriptionTypes']->wasEmpty()): ?>
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

<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/createSubscriptionType" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>