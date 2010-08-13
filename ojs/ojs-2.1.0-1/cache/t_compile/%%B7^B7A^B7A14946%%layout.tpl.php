<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:41
         compiled from sectionEditor/submission/layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/layout.tpl', 15, false),array('function', 'url', 'sectionEditor/submission/layout.tpl', 20, false),array('function', 'icon', 'sectionEditor/submission/layout.tpl', 46, false),array('modifier', 'escape', 'sectionEditor/submission/layout.tpl', 19, false),array('modifier', 'to_array', 'sectionEditor/submission/layout.tpl', 34, false),array('modifier', 'date_format', 'sectionEditor/submission/layout.tpl', 34, false),array('modifier', 'assign', 'sectionEditor/submission/layout.tpl', 43, false),array('modifier', 'default', 'sectionEditor/submission/layout.tpl', 53, false),)), $this); ?>

<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment());  $this->assign('layoutFile', $this->_tpl_vars['layoutAssignment']->getLayoutFile()); ?>
<a name="layout"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
:
<?php if ($this->_tpl_vars['layoutAssignment']->getEditorId()): ?>&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>
&nbsp; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'assignLayoutEditor','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.assignLayoutEditor"), $this);?>
</a></p>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.layoutVersion"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="16%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="16%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
		<td width="22%" colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acknowledge"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php if ($this->_tpl_vars['layoutFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['layoutFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['layoutFile']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['layoutFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

				<?php $this->assign('needsLayoutFileNote', 1); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php if ($this->_tpl_vars['layoutAssignment']->getEditorId() && $this->_tpl_vars['layoutFile']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyLayoutEditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php if ($this->_tpl_vars['layoutAssignment']->getDateUnderway()): ?>
                                        	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.layout.confirmRenotify"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmText'));?>

                                        	<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmText'])."')",'url' => $this->_tpl_vars['url']), $this);?>

                                	<?php else: ?>
                                        	<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

                                	<?php endif; ?>
				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
		<td colspan="2">
			<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
				<?php if ($this->_tpl_vars['layoutAssignment']->getEditorId() && $this->_tpl_vars['layoutAssignment']->getDateCompleted() && ! $this->_tpl_vars['layoutAssignment']->getDateAcknowledged()): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'thankLayoutEditor','articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disable'), $this);?>

				<?php endif; ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notApplicableShort"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['needsLayoutFileNote']): ?>
		<tr valign="top">
			<td colspan="2">&nbsp;</td>
			<td colspan="4">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.mustUploadFileForLayout"), $this);?>

			</td>
		</tr>
	<?php endif; ?>
	<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFormat"), $this);?>
</td>
		<td colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.views"), $this);?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['submission']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleys']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleys']['iteration']++;
?>
	<tr>
		<td width="2%"><?php echo $this->_foreach['galleys']['iteration']; ?>
.</td>
		<td width="26%"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &nbsp; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'proofGalley','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.viewProof"), $this);?>
</td>
		<td colspan="2"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderGalley','d' => 'u','articleId' => $this->_tpl_vars['submission']->getArticleId(),'galleyId' => $this->_tpl_vars['galley']->getGalleyId()), $this);?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderGalley','d' => 'd','articleId' => $this->_tpl_vars['submission']->getArticleId(),'galleyId' => $this->_tpl_vars['galley']->getGalleyId()), $this);?>
" class="plain">&darr;</a></td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editGalley','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteGalley','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteGalley"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getViews())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td width="28%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supplementaryFiles"), $this);?>
</td>
		<td width="34%" colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td width="16%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td width="16%" colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['submission']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['suppFiles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['suppFiles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['suppFile']):
        $this->_foreach['suppFiles']['iteration']++;
?>
	<tr>
		<td width="2%"><?php echo $this->_foreach['suppFiles']['iteration']; ?>
.</td>
		<td width="26%"><?php echo $this->_tpl_vars['suppFile']->getTitle(); ?>
</td>
		<td colspan="2"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderSuppFile','d' => 'u','articleId' => $this->_tpl_vars['submission']->getArticleId(),'suppFileId' => $this->_tpl_vars['suppFile']->getSuppFileId()), $this);?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderSuppFile','d' => 'd','articleId' => $this->_tpl_vars['submission']->getArticleId(),'suppFileId' => $this->_tpl_vars['suppFile']->getSuppFileId()), $this);?>
" class="plain">&darr;</a></td>
		<td colspan="2">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getSuppFileId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteSupplementaryFile"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>
</table>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadLayoutFile'), $this);?>
"  enctype="multipart/form-data">
	<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.uploadFileTo"), $this);?>
 <input type="radio" name="layoutFileType" id="layoutFileTypeSubmission" value="submission" checked="checked" /><label for="layoutFileTypeSubmission"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.layoutVersion"), $this);?>
</label>, <input type="radio" name="layoutFileType" id="layoutFileTypeGalley" value="galley" /><label for="layoutFileTypeGalley"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.galley"), $this);?>
</label>, <input type="radio" name="layoutFileType" id="layoutFileTypeSupp" value="supp" /><label for="layoutFileTypeSupp"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.suppFilesAbbrev"), $this);?>
</label>
	<input type="file" name="layoutFile" size="10" class="uploadField" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
</form>

<p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.layoutComments"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentLayoutComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentLayoutComment()); ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewLayoutComments','path' => $this->_tpl_vars['submission']->getArticleId(),'anchor' => $this->_tpl_vars['comment']->getCommentId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewLayoutComments','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('layoutInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'layout'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.instructions"), $this);?>
</a>
<?php endif; ?>
</p>