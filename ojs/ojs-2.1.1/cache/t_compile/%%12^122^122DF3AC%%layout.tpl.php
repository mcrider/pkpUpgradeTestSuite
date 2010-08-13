<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:33
         compiled from proofreader/submission/layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'proofreader/submission/layout.tpl', 15, false),array('function', 'url', 'proofreader/submission/layout.tpl', 34, false),array('function', 'icon', 'proofreader/submission/layout.tpl', 68, false),array('modifier', 'escape', 'proofreader/submission/layout.tpl', 21, false),array('modifier', 'to_array', 'proofreader/submission/layout.tpl', 34, false),array('modifier', 'date_format', 'proofreader/submission/layout.tpl', 35, false),)), $this); ?>

<?php $this->assign('layoutAssignment', $this->_tpl_vars['submission']->getLayoutAssignment());  $this->assign('layoutFile', $this->_tpl_vars['layoutAssignment']->getLayoutFile()); ?>
<a name="layout"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useLayoutEditors']): ?>
<table class="data" width="100%">
	<tr>
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</td>
		<td class="value" width="80%"><?php if ($this->_tpl_vars['layoutAssignment']->getEditorId()):  echo ((is_array($_tmp=$this->_tpl_vars['layoutAssignment']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this); endif; ?></td>
	</tr>
</table>
<?php endif; ?>

<table width="100%" class="info">
	<tr>
		<td width="40%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFormat"), $this);?>
</td>
		<td width="60%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
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
		<td width="35%"><?php echo $this->_tpl_vars['galley']->getLabel(); ?>
 &nbsp; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'proofGalley','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getGalleyId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.viewProof"), $this);?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td colspan="3" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.supplementaryFiles"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
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
		<td width="35%"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td colspan="3" class="separator">&nbsp;</td>
	</tr>
</table>

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