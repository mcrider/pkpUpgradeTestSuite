<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:48
         compiled from comment/comment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'comment/comment.tpl', 28, false),array('function', 'translate', 'comment/comment.tpl', 40, false),)), $this); ?>

<?php $this->assign('pageTitle', "comments.enterComment");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
function handleAnonymousCheckbox(theBox) {
	if (theBox.checked) {
		document.submit.posterName.disabled = false;
		document.submit.posterEmail.disabled = false;
		document.submit.posterName.value = "";
		document.submit.posterEmail.value = "";
		document.submit.posterName.focus();
	} else {
		document.submit.posterName.disabled = true;
		document.submit.posterEmail.disabled = true;
		';  if ($this->_tpl_vars['isUserLoggedIn'] && ( $this->_tpl_vars['enableComments'] == 'anonymous' || $this->_tpl_vars['enableComments'] == 'unauthenticated' )): ?>
		document.submit.posterName.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
";
		document.submit.posterEmail.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
";
		<?php endif;  echo '
	}
}

'; ?>

</script>

<form name="submit" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php if ($this->_tpl_vars['commentId']): ?>edit/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['commentId'];  else: ?>add/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['parentId']; ?>
/save<?php endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="posterName"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.name"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="posterName" id="posterName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="posterEmail"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.email"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="posterEmail" id="posterEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
	</tr>
	<?php if ($this->_tpl_vars['isUserLoggedIn'] && ( $this->_tpl_vars['enableComments'] == 'anonymous' || $this->_tpl_vars['enableComments'] == 'unauthenticated' )): ?>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value">
			<input type="checkbox" name="anonymous" id="anonymous" onClick="handleAnonymousCheckbox(this)">
			<label for="anonymous"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.postAnonymously"), $this);?>
</label>
		</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.title"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="bodyField"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.body"), $this);?>
</label></td>
		<td class="value">
			<textarea class="textArea" name="body" id="bodyField" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/comments/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['parentId']; ?>
" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>