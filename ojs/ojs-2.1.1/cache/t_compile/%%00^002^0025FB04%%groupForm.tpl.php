<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:31
         compiled from manager/groups/groupForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/groups/groupForm.tpl', 18, false),array('function', 'translate', 'manager/groups/groupForm.tpl', 18, false),array('function', 'fieldLabel', 'manager/groups/groupForm.tpl', 33, false),array('modifier', 'escape', 'manager/groups/groupForm.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageId', "manager.groups.groupForm");  $this->assign('pageCrumbTitle', $this->_tpl_vars['pageTitle']);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['group']): ?>
	<ul class="menu">
		<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editGroup','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.editTitle"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'groupMembership','path' => $this->_tpl_vars['group']->getGroupId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.groups.membership"), $this);?>
</a></li>
	</ul>
<?php endif; ?>

<br/>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateGroup'), $this);?>
">
<?php if ($this->_tpl_vars['group']): ?>
	<input type="hidden" name="groupId" value="<?php echo $this->_tpl_vars['group']->getGroupId(); ?>
"/>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "manager.groups.title"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="title" class="textField" /></td>
</tr>

<?php if ($this->_tpl_vars['alternateLocale1']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt1','required' => 'true','key' => "manager.groups.title"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale1']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
		<td width="80%" class="value"><input type="text" name="titleAlt1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="titleAlt1" class="textField" /></td>
	</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['alternateLocale2']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'titleAlt2','required' => 'true','key' => "manager.groups.title"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['languageToggleLocales'][$this->_tpl_vars['alternateLocale2']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</td>
		<td width="80%" class="value"><input type="text" name="titleAlt2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['titleAlt2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="35" maxlength="80" id="titleAlt2" class="textField" /></td>
	</tr>
<?php endif; ?>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'groups','escape' => false), $this);?>
'" /></p>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>