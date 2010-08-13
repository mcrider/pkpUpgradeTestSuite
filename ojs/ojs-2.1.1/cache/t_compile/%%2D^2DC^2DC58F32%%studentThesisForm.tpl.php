<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:40
         compiled from file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 15, false),array('function', 'url', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 20, false),array('function', 'fieldLabel', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 26, false),array('function', 'html_options', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 27, false),array('function', 'html_select_date', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 39, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/ojs.S10234/ojs-2.1.1/plugins/generic/thesis/studentThesisForm.tpl', 31, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.generic.thesis.submit");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.form.introduction"), $this);?>


<br/>
<br/>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'save'), $this);?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'degree','required' => 'true','key' => "plugins.generic.thesis.form.degree"), $this);?>
</td>
	<td width="80%" class="value"><select name="degree" id="degree" class="selectMenu" /><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validDegrees'],'selected' => $this->_tpl_vars['degree']), $this);?>
</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'department','required' => 'true','key' => "plugins.generic.thesis.form.department"), $this);?>
</td>
	<td class="value"><input type="text" name="department" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['department'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="department" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'university','required' => 'true','key' => "plugins.generic.thesis.form.university"), $this);?>
</td>
	<td class="value"><input type="text" name="university" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['university'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="university" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateApproved','required' => 'true','key' => "plugins.generic.thesis.form.dateApproved"), $this);?>
</td>
	<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateApproved','all_extra' => "class=\"selectMenu\"",'start_year' => ($this->_tpl_vars['yearOffsetPast']),'time' => ($this->_tpl_vars['dateApproved'])), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "plugins.generic.thesis.form.title"), $this);?>
</td>
	<td class="value"><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="title" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'url','key' => "plugins.generic.thesis.form.url"), $this);?>
</td>
	<td class="value"><input type="text" name="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="url" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.form.urlInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'studentFirstName','required' => 'true','key' => "plugins.generic.thesis.form.studentFirstName"), $this);?>
</td>
	<td class="value"><input type="text" name="studentFirstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['studentFirstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="studentFirstName" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'studentMiddleName','key' => "plugins.generic.thesis.form.studentMiddleName"), $this);?>
</td>
	<td class="value"><input type="text" name="studentMiddleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['studentMiddleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="studentMiddleName" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'studentLastName','required' => 'true','key' => "plugins.generic.thesis.form.studentLastName"), $this);?>
</td>
	<td class="value"><input type="text" name="studentLastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['studentLastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="studentLastName" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'studentEmail','required' => 'true','key' => "plugins.generic.thesis.form.studentEmail"), $this);?>
</td>
	<td class="value"><input type="text" name="studentEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['studentEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="studentEmail" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supervisorFirstName','required' => 'true','key' => "plugins.generic.thesis.form.supervisorFirstName"), $this);?>
</td>
	<td class="value"><input type="text" name="supervisorFirstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supervisorFirstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="supervisorFirstName" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supervisorMiddleName','key' => "plugins.generic.thesis.form.supervisorMiddleName"), $this);?>
</td>
	<td class="value"><input type="text" name="supervisorMiddleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supervisorMiddleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="supervisorMiddleName" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supervisorLastName','required' => 'true','key' => "plugins.generic.thesis.form.supervisorLastName"), $this);?>
</td>
	<td class="value"><input type="text" name="supervisorLastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supervisorLastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="supervisorLastName" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supervisorEmail','required' => 'true','key' => "plugins.generic.thesis.form.supervisorEmail"), $this);?>
</td>
	<td class="value"><input type="text" name="supervisorEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supervisorEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" id="supervisorEmail" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstract','required' => 'true','key' => "plugins.generic.thesis.form.abstract"), $this);?>
</td>
	<td class="value"><textarea name="abstract" id="abstract" cols="40" rows="6" class="textArea" /><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.form.abstractInstructions"), $this);?>
</span>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.submitButton"), $this);?>
" class="button defaultButton" /><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thesis','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>