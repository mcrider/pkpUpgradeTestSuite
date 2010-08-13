<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:47
         compiled from author/submission/editorDecision.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/editorDecision.tpl', 13, false),array('function', 'icon', 'author/submission/editorDecision.tpl', 37, false),array('modifier', 'date_format', 'author/submission/editorDecision.tpl', 24, false),)), $this); ?>

<a name="editorDecision"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorDecision"), $this);?>
</h3>

<?php $this->assign('authorFiles', $this->_tpl_vars['submission']->getAuthorFileRevisions($this->_tpl_vars['submission']->getCurrentRound()));  $this->assign('editorFiles', $this->_tpl_vars['submission']->getEditorFileRevisions($this->_tpl_vars['submission']->getCurrentRound())); ?>

<table width="100%" class="data">
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['lastEditorDecision']): ?>
				<?php $this->assign('decision', $this->_tpl_vars['lastEditorDecision']['decision']); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['editorDecisionOptions'][$this->_tpl_vars['decision']]), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lastEditorDecision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorAuthorComments"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php if ($this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()): ?>
				<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()); ?>
				<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewEditorDecisionComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewEditorDecisionComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php $_from = $this->_tpl_vars['editorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['editorFile']):
?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['editorFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['editorFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
<br>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>

		</td>
		<td class="value" width="80%">
			<?php $_from = $this->_tpl_vars['authorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorFile']):
?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getRevision(); ?>
" class="file"><?php echo $this->_tpl_vars['authorFile']->getFileName(); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteArticleFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getFileId(); ?>
/<?php echo $this->_tpl_vars['authorFile']->getRevision(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.article.uploadAuthorVersion"), $this);?>

		</td>
		<td class="value" width="80%">
			<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadRevisedVersion" enctype="multipart/form-data">
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="file" name="upload" class="uploadField" />
				<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
			</form>

		</td>
	</tr>
</table>