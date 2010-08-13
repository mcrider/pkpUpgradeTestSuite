<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from sectionEditor/submission/editors.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/editors.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/editors.tpl', 14, false),array('function', 'icon', 'sectionEditor/submission/editors.tpl', 35, false),array('modifier', 'to_array', 'sectionEditor/submission/editors.tpl', 34, false),array('modifier', 'strip_tags', 'sectionEditor/submission/editors.tpl', 34, false),array('modifier', 'assign', 'sectionEditor/submission/editors.tpl', 34, false),array('modifier', 'escape', 'sectionEditor/submission/editors.tpl', 35, false),array('modifier', 'date_format', 'sectionEditor/submission/editors.tpl', 63, false),)), $this); ?>

<a name="editors"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h3>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setEditorFlags'), $this);?>
" method="post">
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
"/>
<table width="100%" class="listing">
	<tr class="heading" valign="bottom">
		<td width="<?php if ($this->_tpl_vars['isEditor']): ?>20%<?php else: ?>25%<?php endif; ?>">&nbsp;</td>
		<td width="30%">&nbsp;</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editing"), $this);?>
</td>
		<td width="<?php if ($this->_tpl_vars['isEditor']): ?>20%<?php else: ?>25%<?php endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<?php if ($this->_tpl_vars['isEditor']): ?><td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td><?php endif; ?>
	</tr>
	<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
	<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['editAssignments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['editAssignments']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
        $this->_foreach['editAssignments']['iteration']++;
?>
	<?php if ($this->_tpl_vars['editAssignment']->getEditorId() == $this->_tpl_vars['userId']): ?>
		<?php $this->assign('selfAssigned', 1); ?>
	<?php endif; ?>
		<tr valign="top">
			<td><?php if ($this->_tpl_vars['editAssignment']->getIsEditor()):  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this); else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this); endif; ?></td>
			<td>
				<?php $this->assign('emailString', ($this->_tpl_vars['editAssignment']->getEditorFullName())." <".($this->_tpl_vars['editAssignment']->getEditorEmail()).">"); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','redirectUrl' => $this->_tpl_vars['currentUrl'],'to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'subject' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)),'articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			</td>
			<td>
				&nbsp;&nbsp;<input
					type="checkbox"
					name="canReview-<?php echo $this->_tpl_vars['editAssignment']->getEditId(); ?>
"
					<?php if ($this->_tpl_vars['editAssignment']->getIsEditor()): ?>
						checked="checked"
						disabled="disabled"
					<?php else: ?>
						<?php if ($this->_tpl_vars['editAssignment']->getCanReview()): ?> checked="checked"<?php endif; ?>
						<?php if (! $this->_tpl_vars['isEditor']): ?>disabled="disabled"<?php endif; ?>
					<?php endif; ?>
				/>
			</td>
			<td>
				&nbsp;&nbsp;<input
					type="checkbox"
					name="canEdit-<?php echo $this->_tpl_vars['editAssignment']->getEditId(); ?>
"
					<?php if ($this->_tpl_vars['editAssignment']->getIsEditor()): ?>
						checked="checked"
						disabled="disabled"
					<?php else: ?>
						<?php if ($this->_tpl_vars['editAssignment']->getCanEdit()): ?> checked="checked"<?php endif; ?>
						<?php if (! $this->_tpl_vars['isEditor']): ?>disabled="disabled"<?php endif; ?>
					<?php endif; ?>
				/>
			</td>
			<td><?php if ($this->_tpl_vars['editAssignment']->getDateNotified()):  echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']));  else: ?>&mdash;<?php endif; ?></td>
			<?php if ($this->_tpl_vars['isEditor']): ?>
				<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteEditAssignment','path' => $this->_tpl_vars['editAssignment']->getEditId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
			<?php endif; ?>
		</tr>
	<?php endforeach; else: ?>
		<tr><td colspan="<?php if ($this->_tpl_vars['isEditor']): ?>6<?php else: ?>5<?php endif; ?>" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>
</td></tr>
	<?php endif; unset($_from); ?>
</table>
<?php if ($this->_tpl_vars['isEditor']): ?>
	<input type="submit" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
"/>&nbsp;&nbsp;
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'assignEditor','path' => 'sectionEditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.assignSectionEditor"), $this);?>
</a>
	| <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'assignEditor','path' => 'editor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.assignEditor"), $this);?>
</a>
	<?php if (! $this->_tpl_vars['selfAssigned']): ?>| <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'assignEditor','path' => 'editor','editorId' => $this->_tpl_vars['userId'],'articleId' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.addSelf"), $this);?>
</a><?php endif;  endif; ?>
</form>