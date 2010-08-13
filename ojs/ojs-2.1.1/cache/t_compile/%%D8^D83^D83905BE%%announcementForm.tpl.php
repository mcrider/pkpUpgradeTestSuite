<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from manager/announcement/announcementForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/announcement/announcementForm.tpl', 24, false),array('function', 'fieldLabel', 'manager/announcement/announcementForm.tpl', 33, false),array('function', 'translate', 'manager/announcement/announcementForm.tpl', 49, false),array('function', 'html_select_date', 'manager/announcement/announcementForm.tpl', 63, false),array('block', 'iterate', 'manager/announcement/announcementForm.tpl', 36, false),array('modifier', 'escape', 'manager/announcement/announcementForm.tpl', 37, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['announcementTitle']));  if ($this->_tpl_vars['announcementId']): ?>
	<?php $this->assign('pageTitle', "manager.announcements.edit");  else: ?>
	<?php $this->assign('pageTitle', "manager.announcements.create");  endif; ?>

<?php $this->assign('pageId', "manager.announcement.announcementForm");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateAnnouncement'), $this);?>
">
<?php if ($this->_tpl_vars['announcementId']): ?>
<input type="hidden" name="announcementId" value="<?php echo $this->_tpl_vars['announcementId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'typeId','key' => "manager.announcements.form.typeId"), $this);?>
</td>
	<td width="80%" class="value"><select name="typeId" id="typeId" class="selectMenu" />
		<option value=""></option>
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'announcementTypes','item' => 'announcementType')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<option value="<?php echo $this->_tpl_vars['announcementType']->getTypeId(); ?>
"<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['announcementType']->getTypeId()): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['announcementType']->getTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "manager.announcements.form.title"), $this);?>
</td>
	<td class="value"><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="title" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'descriptionShort','required' => 'true','key' => "manager.announcements.form.descriptionShort"), $this);?>
</td>
	<td class="value"><textarea name="descriptionShort" id="descriptionShort" cols="40" rows="6" class="textArea" /><?php echo ((is_array($_tmp=$this->_tpl_vars['descriptionShort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcements.form.descriptionShortInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','required' => 'true','key' => "manager.announcements.form.description"), $this);?>
</td>
	<td class="value"><textarea name="description" id="description" cols="40" rows="6" class="textArea" /><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcements.form.descriptionInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateExpire','key' => "manager.announcements.form.dateExpire"), $this);?>
</td>
	<td class="value">
		<?php if ($this->_tpl_vars['dateExpire'] != null): ?>
			<?php echo smarty_function_html_select_date(array('prefix' => 'dateExpire','all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'year_empty' => "",'month_empty' => "",'day_empty' => "",'time' => ($this->_tpl_vars['dateExpire'])), $this);?>

		<?php else: ?>
			<?php echo smarty_function_html_select_date(array('prefix' => 'dateExpire','all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'year_empty' => "",'month_empty' => "",'day_empty' => "",'time' => "-00-00"), $this);?>

		<?php endif; ?>
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcements.form.dateExpireInstructions"), $this);?>
</span>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['announcementId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcements.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'announcements','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>