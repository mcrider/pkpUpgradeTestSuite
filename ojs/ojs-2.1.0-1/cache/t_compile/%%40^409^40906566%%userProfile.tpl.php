<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:44
         compiled from sectionEditor/userProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/userProfile.tpl', 15, false),array('function', 'url', 'sectionEditor/userProfile.tpl', 43, false),array('function', 'icon', 'sectionEditor/userProfile.tpl', 44, false),array('modifier', 'escape', 'sectionEditor/userProfile.tpl', 15, false),array('modifier', 'to_array', 'sectionEditor/userProfile.tpl', 43, false),array('modifier', 'assign', 'sectionEditor/userProfile.tpl', 43, false),array('modifier', 'nl2br', 'sectionEditor/userProfile.tpl', 61, false),array('modifier', 'strip_unsafe_html', 'sectionEditor/userProfile.tpl', 65, false),array('modifier', 'date_format', 'sectionEditor/userProfile.tpl', 79, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
:</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.firstName"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.middleName"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.lastName"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
:</td>
	<td class="value">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 
		<?php $this->assign('emailString', ($this->_tpl_vars['user']->getFullName())." <".($this->_tpl_vars['user']->getEmail()).">"); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.phone"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPhone())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.fax"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFax())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.interests"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getInterests())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getMailingAddress())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getBiography())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['profileLocalesEnabled']): ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages"), $this);?>
:</td>
	<td class="value"><?php $_from = $this->_tpl_vars['user']->getLocales(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['workingLanguages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['workingLanguages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['localeKey']):
        $this->_foreach['workingLanguages']['iteration']++;
 echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if (! ($this->_foreach['workingLanguages']['iteration'] == $this->_foreach['workingLanguages']['total'])): ?>; <?php endif;  endforeach; endif; unset($_from); ?></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.dateRegistered"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getDateRegistered())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.dateLastLogin"), $this);?>
:</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getDateLastLogin())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>