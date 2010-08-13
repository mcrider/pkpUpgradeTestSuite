<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from editor/notifyUsers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/notifyUsers.tpl', 29, false),array('function', 'assign_translate', 'editor/notifyUsers.tpl', 33, false),array('function', 'fieldLabel', 'editor/notifyUsers.tpl', 90, false),array('modifier', 'escape', 'editor/notifyUsers.tpl', 34, false),array('block', 'iterate', 'editor/notifyUsers.tpl', 74, false),)), $this); ?>

<?php $this->assign('pageTitle', "email.compose");  $this->assign('pageCrumbTitle', "email.email");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="<?php echo $this->_tpl_vars['formActionUrl']; ?>
">
<input type="hidden" name="continued" value="1">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['hiddenFormParam']; ?>
" />
	<?php endforeach; endif; unset($_from);  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['errorMessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
	<?php if (! $this->_tpl_vars['notFirstMessage']): ?>
		<?php $this->assign('notFirstMessage', 1); ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.errorsOccurred"), $this);?>
</h4>
		<ul class="plain">
	<?php endif; ?>
	<?php if ($this->_tpl_vars['message']['type'] == MAIL_ERROR_INVALID_EMAIL): ?>
		<?php echo $this->_plugins['function']['assign_translate'][0][0]->smartyAssignTranslate(array('var' => 'message','key' => "email.invalid",'email' => ($this->_tpl_vars['message']['address'])), $this);?>

		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['notFirstMessage']): ?>
	</ul>
	<br/>
<?php endif; ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.recipients"), $this);?>
</h3>
<table class="data" width="100%">
<tr valign="top">
	<td width="5%">
		<input checked type="radio" name="whichUsers" id="interestedUsers" value="interestedUsers"/>
	</td>
	<td width="75%" class="label">
		<label for="interestedUsers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers.interestedUsers"), $this);?>
</label>
	</td>
</tr>
<tr valign="top">
	<td width="5%">
		<input type="radio" id="allUsers" name="whichUsers" value="allUsers"/>
	</td>
	<td width="95%" class="label">
		<label for="allUsers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers.allUsers"), $this);?>
</label>
	</td>
</tr>
</table>

<br/>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</h3>
<table class="data" width="100%">
<tr valign="top">
	<td width="5%">
		<input type="checkbox" name="includeToc" id="includeToc" value="1"/>
	</td>
	<td width="75%" class="label">
		<label for="includeToc"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.notifyUsers.includeToc"), $this);?>
</label>&nbsp;
		<select name="issue" id="issue" class="selectMenu">
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
				<option <?php if ($this->_tpl_vars['issue']->getCurrent()): ?>checked <?php endif; ?>value="<?php echo $this->_tpl_vars['issue']->getIssueId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
		</select>
	</td>
</tr>
</table>

<br/>

<table class="data" width="100%">
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.from"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['from'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "email.subject"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="subject" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" maxlength="120" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'body','key' => "email.body"), $this);?>
</td>
	<td class="value"><textarea name="body" cols="60" rows="15" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input name="send" type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.send"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>