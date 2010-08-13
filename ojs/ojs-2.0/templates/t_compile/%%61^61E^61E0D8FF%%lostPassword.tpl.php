<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:56
         compiled from user/lostPassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/lostPassword.tpl', 16, false),array('modifier', 'escape', 'user/lostPassword.tpl', 25, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.login.resetPassword");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="reset" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/login/requestResetPassword" method="post">
<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPasswordInstructions"), $this);?>
</span></p>

<?php if ($this->_tpl_vars['error']): ?>
	<p><span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error'])), $this);?>
</span></p>
<?php endif; ?>

<table class="data" width="100%">
<tr valign="top">
	<td class="label" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registeredEmail"), $this);?>
</td>
	<td class="value" width="75%"><input type="text" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPassword"), $this);?>
" class="button defaultButton" /></p>

&#187; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/user/register"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registerNewAccount"), $this);?>
</a>

<script type="text/javascript">document.reset.email.focus();</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>