<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:48
         compiled from copyeditor/submission/summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'copyeditor/submission/summary.tpl', 13, false),array('function', 'icon', 'copyeditor/submission/summary.tpl', 22, false),array('modifier', 'escape', 'copyeditor/submission/summary.tpl', 21, false),)), $this); ?>

<a name="submission"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.submission"), $this);?>
</h3>

<?php $this->assign('editor', $this->_tpl_vars['submission']->getEditor()); ?>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.authors"), $this);?>
</td>
		<td width="80%">
			<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
			<?php echo $this->_tpl_vars['submission']->getAuthorString(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?redirectUrl=".($this->_tpl_vars['urlEscaped'])."&authorsArticleId=".($this->_tpl_vars['submission']->getArticleId())), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</td>
		<td><?php echo $this->_tpl_vars['submission']->getArticleTitle(); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
</td>
		<td><?php echo $this->_tpl_vars['submission']->getSectionTitle(); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</td>
		<td>
			<?php if ($this->_tpl_vars['editor']): ?>
				<?php $this->assign('emailString', ($this->_tpl_vars['editor']->getEditorFullName())." <".($this->_tpl_vars['editor']->getEditorEmail()).">"); ?>
				<?php $this->assign('emailStringEscaped', ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php $this->assign('urlEscaped', ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php $this->assign('subjectEscaped', ((is_array($_tmp=$this->_tpl_vars['submission']->getArticleTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
				<?php echo $this->_tpl_vars['editor']->getEditorFullName(); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => ($this->_tpl_vars['pageUrl'])."/user/email?to[]=".($this->_tpl_vars['emailStringEscaped'])."&redirectUrl=".($this->_tpl_vars['urlEscaped'])."&subject=".($this->_tpl_vars['subjectEscaped'])), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
</table>