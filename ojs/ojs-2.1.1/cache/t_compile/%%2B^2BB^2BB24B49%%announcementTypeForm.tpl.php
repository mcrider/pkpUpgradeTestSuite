<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from manager/announcement/announcementTypeForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/announcement/announcementTypeForm.tpl', 24, false),array('function', 'fieldLabel', 'manager/announcement/announcementTypeForm.tpl', 33, false),array('function', 'translate', 'manager/announcement/announcementTypeForm.tpl', 38, false),array('modifier', 'escape', 'manager/announcement/announcementTypeForm.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['announcementTypeTitle']));  if ($this->_tpl_vars['typeId']): ?>
	<?php $this->assign('pageTitle', "manager.announcementTypes.edit");  else: ?>
	<?php $this->assign('pageTitle', "manager.announcementTypes.create");  endif; ?>

<?php $this->assign('pageId', "manager.announcementTypes.announcementTypeForm");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateAnnouncementType'), $this);?>
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
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'typeName','required' => 'true','key' => "manager.announcementTypes.form.typeName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="typeName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="title" maxlength="80" class="textField" /></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['typeId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcementTypes.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'announcementTypes','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>