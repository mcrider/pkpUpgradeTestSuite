<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:36
         compiled from sectionEditor/submission/scheduling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/scheduling.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/scheduling.tpl', 15, false),array('function', 'html_options', 'sectionEditor/submission/scheduling.tpl', 25, false),array('modifier', 'truncate', 'sectionEditor/submission/scheduling.tpl', 25, false),)), $this); ?>

<a name="scheduling"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduling"), $this);?>
</h3>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'scheduleForPublication','path' => $this->_tpl_vars['submission']->getArticleId()), $this);?>
" method="post">
<p>
	<label for="issueId"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleForPublication"), $this);?>
</label>
	<?php if ($this->_tpl_vars['publishedArticle']): ?>
		<?php $this->assign('issueId', $this->_tpl_vars['publishedArticle']->getIssueId()); ?>
	<?php else: ?>
		<?php $this->assign('issueId', 0); ?>
	<?php endif; ?>
	<select name="issueId" id="issueId" class="selectMenu">
		<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.scheduleForPublication.toBeAssigned"), $this);?>
</option>
		<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['issueOptions'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")),'selected' => $this->_tpl_vars['issueId']), $this);?>

	</select>&nbsp;
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button defaultButton" />&nbsp;
	<?php if ($this->_tpl_vars['issueId']): ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issueId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
	<?php endif; ?>
</p>
</form>