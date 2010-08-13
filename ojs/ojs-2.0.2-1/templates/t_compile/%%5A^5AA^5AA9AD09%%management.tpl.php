<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:20
         compiled from sectionEditor/submission/management.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/management.tpl', 13, false),array('function', 'icon', 'sectionEditor/submission/management.tpl', 24, false),array('function', 'html_options', 'sectionEditor/submission/management.tpl', 70, false),array('modifier', 'escape', 'sectionEditor/submission/management.tpl', 23, false),array('modifier', 'date_format', 'sectionEditor/submission/management.tpl', 35, false),array('modifier', 'strip_unsafe_html', 'sectionEditor/submission/management.tpl', 96, false),array('modifier', 'nl2br', 'sectionEditor/submission/management.tpl', 96, false),)), $this); ?>

<a name="submission"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submission"), $this);?>
</h3>

<?php $this->assign('editor', $this->_tpl_vars['submission']->getEditor());  $this->assign('submissionFile', $this->_tpl_vars['submission']->getSubmissionFile());  $this->assign('suppFiles', $this->_tpl_vars['submission']->getSuppFiles()); ?>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="80%" colspan="2" class="value">
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?redirectUrl=".($this->_tpl_vars['urlEscaped'])."&amp;authorsArticleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.originalFile"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php if ($this->_tpl_vars['submissionFile']): ?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/downloadFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['submissionFile']->getFileId(); ?>
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
		<td colspan="2" class="value">
			<?php $_from = $this->_tpl_vars['suppFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['suppFiles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['suppFiles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['suppFile']):
        $this->_foreach['suppFiles']['iteration']++;
?>
				<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
/<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;<?php if (! $this->_tpl_vars['notFirst']): ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/addSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.addSuppFile"), $this);?>
</a><?php endif; ?><br />
				<?php $this->assign('notFirst', 1); ?>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/addSuppFile/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.addSuppFile"), $this);?>
</a>
			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submitter"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $this->assign('submitter', $this->_tpl_vars['submission']->getUser()); ?>
			<?php $this->assign('emailString', ($this->_tpl_vars['submitter']->getFullName())." <".($this->_tpl_vars['submitter']->getEmail()).">"); ?>
			<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['submitter']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&amp;redirectUrl=".($this->_tpl_vars['urlEscaped'])."&amp;subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateSubmitted"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<td class="value"><form action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/updateSection/<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" method="post"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.changeSection"), $this);?>
 <select name="section" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sections'],'selected' => $this->_tpl_vars['submission']->getSectionId()), $this);?>
</select> <input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" /></form></td>
	</tr>
	<tr>
		<td class="label" valign="top"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</td>
		<td class="value" valign="top">
			<?php if ($this->_tpl_vars['editor']): ?>
				<?php $this->assign('emailString', ($this->_tpl_vars['editor']->getEditorFullName())." <".($this->_tpl_vars['editor']->getEditorEmail()).">"); ?>
				<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&amp;redirectUrl=".($this->_tpl_vars['urlEscaped'])."&amp;subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

				<?php if ($this->_tpl_vars['editor']->getDateNotified()): ?>
					<br/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php endif; ?>
				<?php if ($this->_tpl_vars['editor']->getDateUnderway()): ?>
					<br/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php endif; ?>
			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>

			<?php endif; ?>
		</td>
		<td class="value" valign="top"><?php if ($this->_tpl_vars['isEditor']): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/assignEditor?articleId=<?php echo $this->_tpl_vars['submission']->getArticleId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.assignEditor"), $this);?>
</a><?php endif; ?></td>
	</tr>
	<?php if ($this->_tpl_vars['submission']->getCommentsToEditor()): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.commentsToEditor"), $this);?>
</td>
		<td width="80%" colspan="2" class="data"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getCommentsToEditor())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : $this->_plugins['modifier']['strip_unsafe_html'][0][0]->smartyStripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['publishedArticle']): ?>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.abstractViews"), $this);?>
</td>
		<td><?php echo $this->_tpl_vars['publishedArticle']->getViews(); ?>
</td>
	</tr>
	<?php endif; ?>
</table>