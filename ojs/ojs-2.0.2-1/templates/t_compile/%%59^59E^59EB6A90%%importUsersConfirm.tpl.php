<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:22
         compiled from file:/home/asmecher/cvs/ojs2/update/ojs2/ojs.Ougx7b/ojs-2.0.2-1/plugins/importexport/users/importUsersConfirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/asmecher/cvs/ojs2/update/ojs2/ojs.Ougx7b/ojs-2.0.2-1/plugins/importexport/users/importUsersConfirm.tpl', 15, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/ojs2/update/ojs2/ojs.Ougx7b/ojs-2.0.2-1/plugins/importexport/users/importUsersConfirm.tpl', 18, false),)), $this); ?>

<?php $this->assign('pageTitle', "plugins.importexport.users.displayName");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.confirmUsers"), $this);?>
:
<form action="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/import" method="post">
<?php if ($this->_tpl_vars['sendNotify']): ?>
	<input type="hidden" name="sendNotify" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sendNotify'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif;  if ($this->_tpl_vars['continueOnError']): ?>
	<input type="hidden" name="continueOnError" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['continueOnError'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>

<table width="100%" class="listing">
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">&nbsp;</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.firstName"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.middleName"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.lastName"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.roles"), $this);?>
</td>
	</tr>	
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['users'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['users']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['userKey'] => $this->_tpl_vars['user']):
        $this->_foreach['users']['iteration']++;
?>
	<tr valign="top">
		<td>
			<input type="checkbox" name="userKeys[]" value="<?php echo $this->_tpl_vars['userKey']; ?>
" checked="checked" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFax())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPhone())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_mailingAddress" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMailingAddress())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_biography" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getBiography())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPassword())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo $this->_tpl_vars['userKey']; ?>
_unencryptedPassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUnencryptedPassword())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		</td>
		<td><input type="text" name="<?php echo $this->_tpl_vars['userKey']; ?>
_firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo $this->_tpl_vars['userKey']; ?>
_middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo $this->_tpl_vars['userKey']; ?>
_lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo $this->_tpl_vars['userKey']; ?>
_username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo $this->_tpl_vars['userKey']; ?>
_email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td>
			<select name="<?php echo $this->_tpl_vars['userKey']; ?>
_roles[]" size="5" multiple="multiple" class="selectMenu">
				<?php $_from = $this->_tpl_vars['roleOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roleKey'] => $this->_tpl_vars['roleOption']):
?>
					<option value="<?php echo $this->_tpl_vars['roleKey']; ?>
" <?php if (( $this->_tpl_vars['roleKey'] == '' && count ( $this->_tpl_vars['usersRoles'][$this->_tpl_vars['userKey']] ) == 0 )): ?>selected<?php elseif (( in_array ( $this->_tpl_vars['roleOption'] , $this->_tpl_vars['usersRoles'][$this->_tpl_vars['userKey']] ) )): ?>selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleOption']), $this);?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="7" class="<?php if (($this->_foreach['users']['iteration'] == $this->_foreach['users']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.importUsers"), $this);?>
" class="button defaultButton" />
</form>

<?php if ($this->_tpl_vars['isError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.errorsOccurred"), $this);?>
:</span>
	<ul class="formErrorList">
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
			<li><?php echo $this->_tpl_vars['message']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</p>
<?php endif; ?>

<p>&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.journalManagement"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>