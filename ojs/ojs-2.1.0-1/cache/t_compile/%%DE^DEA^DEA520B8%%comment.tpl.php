<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:44
         compiled from submission/comment/comment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/comment/comment.tpl', 19, false),array('function', 'url', 'submission/comment/comment.tpl', 24, false),array('function', 'fieldLabel', 'submission/comment/comment.tpl', 57, false),array('modifier', 'date_format', 'submission/comment/comment.tpl', 20, false),array('modifier', 'to_array', 'submission/comment/comment.tpl', 24, false),array('modifier', 'escape', 'submission/comment/comment.tpl', 24, false),array('modifier', 'strip_unsafe_html', 'submission/comment/comment.tpl', 30, false),array('modifier', 'nl2br', 'submission/comment/comment.tpl', 30, false),)), $this); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php $_from = $this->_tpl_vars['articleComments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
<tr valign="top">
	<td width="25%">
		<div class="commentRole"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['comment']->getRoleName()), $this);?>
</div>
		<div class="commentDate"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</div>
	</td>
	<td width="75%">
		<?php if ($this->_tpl_vars['comment']->getAuthorId() == $this->_tpl_vars['userId'] && ! $this->_tpl_vars['isLocked']): ?>
			<div style="float: right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getCommentId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getCommentId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getCommentId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getCommentId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></div>
		<?php endif; ?>
		<a name="<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
"></a>
		<?php if ($this->_tpl_vars['comment']->getCommentTitle() != ""): ?>
			<div class="commentTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.subject"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getCommentTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
		<?php endif; ?>
		<div class="comments"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getComments())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	</td>
</tr>
<?php endforeach; else: ?>
<tr>
	<td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.noComments"), $this);?>
</td>
</tr>
<?php endif; unset($_from); ?>
</table>

<br />
<br />

<?php if (! $this->_tpl_vars['isLocked']): ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['commentAction']), $this);?>
">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['hiddenFormParam']; ?>
" />
	<?php endforeach; endif; unset($_from);  endif; ?>


<a name="new"></a>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'commentTitle','key' => "submission.comments.subject"), $this);?>
</td>
	<td class="value"><input type="text" name="commentTitle" id="commentTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="50" maxlength="100" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'comments','required' => 'true','key' => "submission.comments.comments"), $this);?>
</td>
	<td class="value"><textarea id="comments" name="comments" rows="10" cols="50" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input type="submit" name="save" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="submit" name="saveAndEmail" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndEmail"), $this);?>
" class="button" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button" onclick="window.opener.location.reload(); window.close()" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php else: ?>
<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" style="width: 5em" onclick="window.close()" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>