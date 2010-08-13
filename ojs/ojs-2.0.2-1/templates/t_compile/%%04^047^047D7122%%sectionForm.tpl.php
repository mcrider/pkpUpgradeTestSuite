<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:16
         compiled from manager/sections/sectionForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/sections/sectionForm.tpl', 63, false),array('function', 'fieldLabel', 'manager/sections/sectionForm.tpl', 105, false),array('modifier', 'escape', 'manager/sections/sectionForm.tpl', 63, false),)), $this); ?>

<?php $this->assign('pageTitle', "section.section");  $this->assign('pageCrumbTitle', "section.sections");  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/manager/sections");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="section" method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/updateSection" onsubmit="return saveSelectedEditors()">
<?php if ($this->_tpl_vars['sectionId']): ?>
<input type="hidden" name="sectionId" value="<?php echo $this->_tpl_vars['sectionId']; ?>
" />
<?php endif; ?>
<input type="hidden" name="assignedEditors" value="" />
<input type="hidden" name="unassignedEditors" value="" />

<?php echo '
<script type="text/javascript">
<!--
	// Move the currently selected item between two select menus
	function moveSelectItem(currField, newField) {
		var selectedIndex = currField.selectedIndex;
		
		if (selectedIndex == -1) {
			return;
		}
		
		var selectedOption = currField.options[selectedIndex];

		// If "None" exists in new menu, delete it.
		for (var i = 0; i < newField.options.length; i++) {
			if (newField.options[i].disabled) {
				// Delete item from old menu
				for (var j = i + 1; j < newField.options.length; j++) {
					newField.options[j - 1].value = newField.options[j].value;
					newField.options[j - 1].text = newField.options[j].text;
				}
				newField.options.length -= 1;
			}
		}

		// Add item to new menu
		newField.options.length += 1;
		newField.options[newField.options.length - 1] = new Option(selectedOption.text, selectedOption.value);

		// Delete item from old menu
		for (var i = selectedIndex + 1; i < currField.options.length; i++) {
			currField.options[i - 1].value = currField.options[i].value;
			currField.options[i - 1].text = currField.options[i].text;
		}
		currField.options.length -= 1;

		// If no items are left in the current menu, add a "None" item.
		if (currField.options.length == 0) {
			currField.options.length = 1;
			currField.options[0] = new Option(\'';  echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'quote') : smarty_modifier_escape($_tmp, 'quote')); echo '\', \'\');
			currField.options[0].disabled = true;
		}

		// Update selected item
		else if (currField.options.length > 0) {
			currField.selectedIndex = selectedIndex < (currField.options.length - 1) ? selectedIndex : (currField.options.length - 1);
		}
	}
	
	// Save IDs of selected editors in hidden field
	function saveSelectedEditors() {
		var assigned = document.section.assigned;
		var assignedIds = \'\';
		for (var i = 0; i < assigned.options.length; i++) {
			if (assignedIds != \'\') {
				assignedIds += \':\';
			}
			assignedIds += assigned.options[i].value;
		}
		document.section.assignedEditors.value = assignedIds;
		
		var unassigned = document.section.unassigned;
		var unassignedIds = \'\';
		for (var i = 0; i < unassigned.options.length; i++) {
			if (unassignedIds != \'\') {
				unassignedIds += \':\';
			}
			unassignedIds += unassigned.options[i].value;
		}
		document.section.unassignedEditors.value = unassignedIds;
		
		return true;
	}
// -->
</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "section.title"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="title" size="40" maxlength="120" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abbrev','required' => 'true','key' => "section.abbreviation"), $this);?>
</td>
	<td class="value"><input type="text" name="abbrev" id="abbrev" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['abbrev'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="20" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.abbreviation.example"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'policy','key' => "manager.sections.policy"), $this);?>
</td>
	<td class="value"><textarea name="policy" rows="4" cols="40" id="policy" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['policy'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td rowspan="3" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','key' => "submission.indexing"), $this);?>
</td>
	<td class="value">
		<input type="checkbox" name="metaIndexed" id="metaIndexed" value="1" <?php if ($this->_tpl_vars['metaIndexed']): ?>checked="checked"<?php endif; ?> />
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaIndexed','key' => "manager.sections.submissionIndexing"), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="value">
		<input type="checkbox" name="abstractsDisabled" id="abstractsDisabled" value="1" <?php if ($this->_tpl_vars['abstractsDisabled']): ?>checked="checked"<?php endif; ?> />
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstractsDisabled','key' => "manager.sections.abstractsDisabled"), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="value">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'identifyType','key' => "manager.sections.identifyType"), $this);?>
 <input type="text" name="identifyType" id="identifyType" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['identifyType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="60" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.identifyTypeExamples"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','key' => "submission.restrictions"), $this);?>
</td>
	<td class="value">
		<input type="checkbox" name="editorRestriction" id="editorRestriction" value="1" <?php if ($this->_tpl_vars['editorRestriction']): ?>checked="checked"<?php endif; ?> />
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'editorRestriction','key' => "manager.sections.editorRestriction"), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'hideTitle','key' => "issue.toc"), $this);?>
</td>
	<td class="value">
		<input type="checkbox" name="hideTitle" id="hideTitle" value="1" <?php if ($this->_tpl_vars['hideTitle']): ?>checked="checked"<?php endif; ?> />
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'hideTitle','key' => "manager.sections.hideTocTitle"), $this);?>

	</td>
</tr>
</table>
<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h3>
<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.section.sectionEditorInstructions"), $this);?>
</span></p>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%">&nbsp;</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.unassigned"), $this);?>
</td>
	<td>&nbsp;</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.assigned"), $this);?>
</td>
</tr>
<tr valign="top">
	<td width="20%">&nbsp;</td>
	<td><select name="unassigned" size="15" style="width: 150px" class="selectMenu">
		<?php $_from = $this->_tpl_vars['unassignedEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
			<option value="<?php echo $this->_tpl_vars['editor']->getUserId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
		<?php endforeach; else: ?>
			<option value="" disabled="disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</option>
		<?php endif; unset($_from); ?>
	</select></td>
	<td><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.assignEditor"), $this);?>
 &gt;&gt;" onclick="moveSelectItem(this.form.unassigned, this.form.assigned)" class="button" />
		<br /><br />
		<input type="button" value="&lt;&lt; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.unassignEditor"), $this);?>
" onclick="moveSelectItem(this.form.assigned, this.form.unassigned)" class="button" /></td>
	<td><select name="assigned" size="15" style="width: 150px" class="selectMenu">
		<?php $_from = $this->_tpl_vars['assignedEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
			<option value="<?php echo $this->_tpl_vars['editor']->getUserId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
		<?php endforeach; else: ?>
			<option value="" disabled="disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</option>
		<?php endif; unset($_from); ?>
	</select></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/sections'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>