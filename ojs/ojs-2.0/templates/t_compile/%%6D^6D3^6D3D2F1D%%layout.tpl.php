<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:50
         compiled from layoutEditor/submission/layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'layoutEditor/submission/layout.tpl', 13, false),array('function', 'icon', 'layoutEditor/submission/layout.tpl', 42, false),array('modifier', 'date_format', 'layoutEditor/submission/layout.tpl', 29, false),array('modifier', 'default', 'layoutEditor/submission/layout.tpl', 35, false),array('modifier', 'escape', 'layoutEditor/submission/layout.tpl', 76, false),)), $this); ?>

<a name="layout"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
:
&nbsp; <?php echo $this->_tpl_vars['layoutAssignment']->getEditorFullName(); ?>
</p>

<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.layoutVersion"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
		<td width="18%">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php if ($this->_tpl_vars['layoutFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['layoutFile']->getFileId(); ?>
" class="file"><?php echo $this->_tpl_vars['layoutFile']->getFileName(); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
		<td>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>

		</td>
		<td>
			<?php if (! $this->_tpl_vars['layoutAssignment']->getDateNotified() || $this->_tpl_vars['layoutAssignment']->getDateCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['requestPageUrl'])."/completeAssignment?articleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

			<?php endif; ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td width="28%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFormat"), $this);?>
</td>
		<td width="36%" colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['submission']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleys']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleys']['iteration']++;
?>
	<tr>
		<td width="5%"><?php echo $this->_foreach['galleys']['iteration']; ?>
.</td>
		<td width="23%"><?php echo $this->_tpl_vars['galley']->getLabel(); ?>
 &nbsp; <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/proofGalley/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.viewProof"), $this);?>
</td>
		<td colspan="2"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getFileId(); ?>
" class="file"><?php echo $this->_tpl_vars['galley']->getFileName(); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td>
			<?php if ($this->_tpl_vars['disableEdit']): ?>
				&mdash;
			<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/orderGalley?d=u&amp;articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&amp;galleyId=<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/orderGalley?d=d&amp;articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&amp;galleyId=<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="plain">&darr;</a>
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['disableEdit']): ?>
				&mdash;
			<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editGalley/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteGalley/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['galley']->getGalleyId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteGalley"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadGalley" enctype="multipart/form-data">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "layoutEditor.galley.uploadGalleyFormat"), $this);?>

				&nbsp;
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="file" name="galleyFile"<?php if ($this->_tpl_vars['disableEdit']): ?> disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if ($this->_tpl_vars['disableEdit']): ?> disabled="disabled"<?php endif; ?> class="button" />
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td width="28%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supplementaryFiles"), $this);?>
</td>
		<td width="36%" colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td width="18%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['submission']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['suppFiles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['suppFiles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['suppFile']):
        $this->_foreach['suppFiles']['iteration']++;
?>
	<tr>
		<td width="5%"><?php echo $this->_foreach['suppFiles']['iteration']; ?>
.</td>
		<td width="23%"><?php echo $this->_tpl_vars['suppFile']->getTitle(); ?>
</td>
		<td colspan="2"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
" class="file"><?php echo $this->_tpl_vars['suppFile']->getFileName(); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td>
			<?php if ($this->_tpl_vars['disableEdit']): ?>
				&mdash;
			<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/orderSuppFile?d=u&amp;articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&amp;suppFileId=<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/orderSuppFile?d=d&amp;articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
&amp;suppFileId=<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="plain">&darr;</a>
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['disableEdit']): ?>
				&mdash;
			<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/deleteSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteSupplementaryFile"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/uploadSuppFile" enctype="multipart/form-data">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "layoutEditor.galley.uploadSuppFile"), $this);?>

				&nbsp;
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" />
				<input type="file" name="uploadSuppFile"<?php if ($this->_tpl_vars['disableEdit']): ?> disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" name="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if ($this->_tpl_vars['disableEdit']): ?> disabled="disabled"<?php endif; ?> class="button" />
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.layoutComments"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentLayoutComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentLayoutComment()); ?>
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewLayoutComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
#<?php echo $this->_tpl_vars['comment']->getCommentId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/viewLayoutComments/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('layoutInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/instructions/layout')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.instructions"), $this);?>
</a>
<?php endif; ?>