<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:33
         compiled from author/submission/management.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/management.tpl', 13, false),array('function', 'url', 'author/submission/management.tpl', 27, false),array('function', 'icon', 'author/submission/management.tpl', 50, false),array('modifier', 'escape', 'author/submission/management.tpl', 17, false),array('modifier', 'strip_unsafe_html', 'author/submission/management.tpl', 21, false),array('modifier', 'to_array', 'author/submission/management.tpl', 27, false),array('modifier', 'date_format', 'author/submission/management.tpl', 27, false),array('modifier', 'strip_tags', 'author/submission/management.tpl', 49, false),array('modifier', 'assign', 'author/submission/management.tpl', 49, false),array('modifier', 'nl2br', 'author/submission/management.tpl', 77, false),)), $this); ?>

<a name="submission"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submission"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="80%" colspan="2" class="data"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(false))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td width="80%" colspan="2" class="data"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.originalFile"), $this);?>
</td>
		<td width="80%" colspan="2" class="data">
			<?php if ($this->_tpl_vars['submissionFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['submissionFile']->getFileId(), $this->_tpl_vars['submissionFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['submissionFile']->getFileId(), $this->_tpl_vars['submissionFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFilesAbbrev"), $this);?>
</td>
		<td width="30%" class="value">
			<?php $_from = $this->_tpl_vars['suppFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['suppFiles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['suppFiles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['suppFile']):
        $this->_foreach['suppFiles']['iteration']++;
?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
<br />
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
		<td width="50%" class="value"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'addSuppFile','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.addSuppFile"), $this);?>
</a></td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submitter"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $this->assign('submitter', $this->_tpl_vars['submission']->getUser()); ?>
			<?php $this->assign('emailString', ($this->_tpl_vars['submitter']->getFullName())." <".($this->_tpl_vars['submitter']->getEmail()).">"); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'subject' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['submitter']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateSubmitted"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
</td>
		<td width="80%" colspan="2" class="data"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</td>
		<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
		<td width="80%" colspan="2" class="data">
			<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
?>
				<?php $this->assign('emailString', ($this->_tpl_vars['editAssignment']->getEditorFullName())." <".($this->_tpl_vars['editAssignment']->getEditorEmail()).">"); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl'],'subject' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>
<br/>
                        <?php endforeach; else: ?>
                                <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>

                        <?php endif; unset($_from); ?>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['submission']->getCommentsToEditor()): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.commentsToEditor"), $this);?>
</td>
		<td width="80%" colspan="2" class="data"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCommentsToEditor())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
	<?php endif; ?>
</table>
