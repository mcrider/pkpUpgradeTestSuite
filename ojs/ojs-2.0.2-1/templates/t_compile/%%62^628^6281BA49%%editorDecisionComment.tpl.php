<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:21
         compiled from submission/comment/editorDecisionComment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'submission/comment/editorDecisionComment.tpl', 22, false),array('modifier', 'date_format', 'submission/comment/editorDecisionComment.tpl', 34, false),array('modifier', 'strip_unsafe_html', 'submission/comment/editorDecisionComment.tpl', 44, false),array('modifier', 'nl2br', 'submission/comment/editorDecisionComment.tpl', 44, false),array('function', 'translate', 'submission/comment/editorDecisionComment.tpl', 25, false),array('function', 'fieldLabel', 'submission/comment/editorDecisionComment.tpl', 71, false),array('function', 'icon', 'submission/comment/editorDecisionComment.tpl', 83, false),)), $this); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if ($this->_tpl_vars['isEditor']): ?>
<tr valign="top">
	<td colspan="2" align="center">
		<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/importPeerReviews">
			<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
				<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
					<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['hiddenFormParam'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.importPeerReviews"), $this);?>
" class="button defaultButton" />
		</form>
	</td>
</tr>
<?php endif;  $_from = $this->_tpl_vars['articleComments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
			<div style="float: right"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editComment/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteComment/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
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
		<div class="comments"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getComments())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : $this->_plugins['modifier']['strip_unsafe_html'][0][0]->smartyStripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
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
<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php echo $this->_tpl_vars['commentAction']; ?>
">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['hiddenFormParam'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
" class="button defaultButton" /> <input type="submit" name="saveAndEmail" value="<?php if ($this->_tpl_vars['isEditor']):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.saveAndEmailAuthor"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.saveAndEmailEditor"), $this); endif; ?>" class="button" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button" onclick="window.opener.location.reload(); window.close()" /></p>

<?php if ($this->_tpl_vars['isEditor']): ?>
	<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/blindCcReviewsToReviewers?articleId=".($this->_tpl_vars['articleId'])), $this);?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.sendDecisionToReviewers"), $this);?>

<?php endif; ?>

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