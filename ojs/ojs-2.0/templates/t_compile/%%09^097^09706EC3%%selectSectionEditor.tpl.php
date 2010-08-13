<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from editor/selectSectionEditor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'editor/selectSectionEditor.tpl', 15, false),array('modifier', 'escape', 'editor/selectSectionEditor.tpl', 27, false),array('modifier', 'chr', 'editor/selectSectionEditor.tpl', 30, false),array('function', 'translate', 'editor/selectSectionEditor.tpl', 17, false),array('function', 'html_options_translate', 'editor/selectSectionEditor.tpl', 21, false),array('function', 'page_info', 'editor/selectSectionEditor.tpl', 79, false),array('function', 'page_links', 'editor/selectSectionEditor.tpl', 80, false),array('block', 'iterate', 'editor/selectSectionEditor.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "user.role.sectionEditors");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.selectSectionEditor"), $this);?>
</h3>

<form name="submit" method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/assignEditor?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
">
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />&nbsp;<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>

<p><?php unset($this->_sections['letters']);
$this->_sections['letters']['loop'] = is_array($_loop=26) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['letters']['name'] = 'letters';
$this->_sections['letters']['show'] = true;
$this->_sections['letters']['max'] = $this->_sections['letters']['loop'];
$this->_sections['letters']['step'] = 1;
$this->_sections['letters']['start'] = $this->_sections['letters']['step'] > 0 ? 0 : $this->_sections['letters']['loop']-1;
if ($this->_sections['letters']['show']) {
    $this->_sections['letters']['total'] = $this->_sections['letters']['loop'];
    if ($this->_sections['letters']['total'] == 0)
        $this->_sections['letters']['show'] = false;
} else
    $this->_sections['letters']['total'] = 0;
if ($this->_sections['letters']['show']):

            for ($this->_sections['letters']['index'] = $this->_sections['letters']['start'], $this->_sections['letters']['iteration'] = 1;
                 $this->_sections['letters']['iteration'] <= $this->_sections['letters']['total'];
                 $this->_sections['letters']['index'] += $this->_sections['letters']['step'], $this->_sections['letters']['iteration']++):
$this->_sections['letters']['rownum'] = $this->_sections['letters']['iteration'];
$this->_sections['letters']['index_prev'] = $this->_sections['letters']['index'] - $this->_sections['letters']['step'];
$this->_sections['letters']['index_next'] = $this->_sections['letters']['index'] + $this->_sections['letters']['step'];
$this->_sections['letters']['first']      = ($this->_sections['letters']['iteration'] == 1);
$this->_sections['letters']['last']       = ($this->_sections['letters']['iteration'] == $this->_sections['letters']['total']);
?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/assignEditor?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
&searchInitial=<?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?></p>

<table width="100%" class="listing">
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<tr valign="bottom">
	<td class="heading" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
	<td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.sections"), $this);?>
</td>
	<td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.completed"), $this);?>
</td>
	<td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.active"), $this);?>
</td>
	<td class="heading" width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'sectionEditors','item' => 'sectionEditor')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start();  $this->assign('sectionEditorId', $this->_tpl_vars['sectionEditor']->getUserId()); ?>
<tr valign="top">
	<td><a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/userProfile/<?php echo $this->_tpl_vars['sectionEditorId']; ?>
"><?php echo $this->_tpl_vars['sectionEditor']->getFullName(); ?>
</a></td>
	<td>
		<?php $this->assign('thisEditorSections', $this->_tpl_vars['editorSections'][$this->_tpl_vars['sectionEditorId']]); ?>
		<?php $_from = $this->_tpl_vars['thisEditorSections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
			<?php echo $this->_tpl_vars['section']->getAbbrev(); ?>
&nbsp;
		<?php endforeach; else: ?>
			&mdash;
		<?php endif; unset($_from); ?>
	</td>
	<td>
		<?php if ($this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']] && $this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']]['complete']): ?>
			<?php echo $this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']]['complete']; ?>

		<?php else: ?>
			0
		<?php endif; ?>
	</td>
	<td>
		<?php if ($this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']] && $this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']]['incomplete']): ?>
			<?php echo $this->_tpl_vars['editorStatistics'][$this->_tpl_vars['sectionEditorId']]['incomplete']; ?>

		<?php else: ?>
			0
		<?php endif; ?>
	</td>
	<td><a class="action" href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/assignEditor?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
&editorId=<?php echo $this->_tpl_vars['sectionEditorId']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.assign"), $this);?>
</a></td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['sectionEditors']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if ($this->_tpl_vars['sectionEditors']->wasEmpty()): ?>
<tr>
<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['sectionEditors']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['sectionEditors']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'sectionEditors','iterator' => $this->_tpl_vars['sectionEditors']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>