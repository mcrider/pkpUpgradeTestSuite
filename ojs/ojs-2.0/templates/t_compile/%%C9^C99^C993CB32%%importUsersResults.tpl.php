<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from manager/people/importUsersResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/importUsersResults.tpl', 15, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.importUsers");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.usersWereImported"), $this);?>
:
<table width="100%" class="listing">
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
		<td width="30%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="headseparator">&nbsp;</td>
	</tr>
	<?php $_from = $this->_tpl_vars['importedUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['importedUsers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['importedUsers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['user']):
        $this->_foreach['importedUsers']['iteration']++;
?>
	<tr valign="top">
		<td><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/userProfile/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
"><?php echo $this->_tpl_vars['user']->getUsername(); ?>
</a></td>
		<td><?php echo $this->_tpl_vars['user']->getFullName(); ?>
</td>
		<td><?php echo $this->_tpl_vars['user']->getEmail(); ?>
</td>
		<td align="right">
			<nobr>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/editUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/manager/signInAsUser/<?php echo $this->_tpl_vars['user']->getUserId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.signInAs"), $this);?>
</a>
			</nobr>
		</td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if (($this->_foreach['importedUsers']['iteration'] == $this->_foreach['importedUsers']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<?php if ($this->_tpl_vars['isError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.importUsers.errorsOccurred"), $this);?>
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