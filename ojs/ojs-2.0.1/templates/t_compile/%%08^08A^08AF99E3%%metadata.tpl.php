<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/metadata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/metadata.tpl', 23, false),array('modifier', 'date_format', 'rt/metadata.tpl', 94, false),array('modifier', 'escape', 'rt/metadata.tpl', 126, false),array('modifier', 'nl2br', 'rt/metadata.tpl', 169, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.articleMetadata"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>"<?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
"</h3>

<br />

<table class="listing" width="100%">
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="25%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkpItem"), $this);?>
</td>
		<td class="heading" width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.forThisDocument"), $this);?>
</td>
	</tr>
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>

<tr valign="top">
	<td>1.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.title"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.title"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
</td>
</tr>
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>2.</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.primaryAuthor"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.primaryAuthor"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['author']->getFullName();  if ($this->_tpl_vars['author']->getAffiliation()): ?>; <?php echo $this->_tpl_vars['author']->getAffiliation();  endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.discipline"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getDiscipline(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.subject"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getSubject(); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['article']->getSubjectClass()): ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.subjectClass"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getSubjectClass(); ?>
</td>
</tr>
<?php endif; ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>4.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.description"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.abstract"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getArticleAbstract(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>5.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.publisher"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.publisher"), $this);?>
</td>
	<?php $this->assign('pubUrl', $this->_tpl_vars['journalSettings']['publisher']['url']); ?>
	<td><?php if ($this->_tpl_vars['pubUrl']): ?><a target="_new" href="<?php echo $this->_tpl_vars['pubUrl']; ?>
"><?php endif;  echo $this->_tpl_vars['journalSettings']['publisher']['institution'];  if ($this->_tpl_vars['pubUrl']): ?></a><?php endif; ?></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>6.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.contributor"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.sponsors"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getSponsor(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>7.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.date"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.date"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>8.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.type"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.genre"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.peerReviewed"), $this);?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>8.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.type"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.type"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getType(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>9.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.format"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.format"), $this);?>
</td>
	<td>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleys']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleys']['iteration']++;
?>
			<?php echo $this->_tpl_vars['galley']->getLabel();  if (! ($this->_foreach['galleys']['iteration'] == $this->_foreach['galleys']['total'])): ?>, <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>10.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.identifier"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.uri"), $this);?>
</td>
	<td><a target="_new" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pageUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/article/view/<?php echo $this->_tpl_vars['articleId']; ?>
</a></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>11.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.source"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.source"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['currentJournal']->getTitle(); ?>
; <?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>12.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.language"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.language"), $this);?>
</td>
	<td><?php echo $this->_tpl_vars['article']->getLanguage(); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<?php if ($this->_tpl_vars['journalRt']->getSupplementaryFiles()): ?>
<tr valign="top">
	<td>13.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.relation"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.suppFiles"), $this);?>
</td>
	<td>
		<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
			<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
"><?php echo $this->_tpl_vars['suppFile']->getTitle(); ?>
</a> (<?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
)<br />
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<?php endif; ?>
<tr valign="top">
	<td>14.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.coverage"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.coverage"), $this);?>
</td>
	<td>
		<?php if ($this->_tpl_vars['article']->getCoverageGeo()):  echo $this->_tpl_vars['article']->getCoverageGeo();  $this->assign('notFirstItem', 1);  endif;  if ($this->_tpl_vars['article']->getCoverageChron()):  if ($this->_tpl_vars['notFirstItem']): ?>, <br/><?php endif;  echo $this->_tpl_vars['article']->getCoverageChron();  $this->assign('notFirstItem', 1);  endif;  if ($this->_tpl_vars['article']->getCoverageSample()):  if ($this->_tpl_vars['notFirstItem']): ?>, <br/><?php endif;  echo $this->_tpl_vars['article']->getCoverageSample();  $this->assign('notFirstItem', 1);  endif; ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>15.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.rights"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.copyright"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['journalSettings']['copyrightNotice'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>