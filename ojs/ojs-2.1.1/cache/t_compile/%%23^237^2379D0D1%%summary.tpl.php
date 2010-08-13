<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:36
         compiled from sectionEditor/submission/summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/summary.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/summary.tpl', 19, false),array('function', 'icon', 'sectionEditor/submission/summary.tpl', 20, false),array('modifier', 'assign', 'sectionEditor/submission/summary.tpl', 19, false),array('modifier', 'escape', 'sectionEditor/submission/summary.tpl', 20, false),array('modifier', 'strip_unsafe_html', 'sectionEditor/submission/summary.tpl', 25, false),array('modifier', 'to_array', 'sectionEditor/submission/summary.tpl', 37, false),array('modifier', 'strip_tags', 'sectionEditor/submission/summary.tpl', 37, false),)), $this); ?>

<a name="submission"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submission"), $this);?>
</h3>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="80%">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','redirectUrl' => $this->_tpl_vars['currentUrl'],'authorsArticleId' => $this->_tpl_vars['submission']->getArticleId(),'articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</td>
		<td>
			<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
			<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
?>
				<?php $this->assign('emailString', ($this->_tpl_vars['editAssignment']->getEditorFullName())." <".($this->_tpl_vars['editAssignment']->getEditorEmail()).">"); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','redirectUrl' => $this->_tpl_vars['currentUrl'],'to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'subject' => ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)),'articleId' => $this->_tpl_vars['submission']->getArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getEditorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<?php if (! $this->_tpl_vars['editAssignment']->getCanEdit() || ! $this->_tpl_vars['editAssignment']->getCanReview()): ?>
					<?php if ($this->_tpl_vars['editAssignment']->getCanEdit()): ?>
						(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editing"), $this);?>
)
					<?php else: ?>
						(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.review"), $this);?>
)
					<?php endif; ?>
				<?php endif; ?>
				<br/>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
</table>