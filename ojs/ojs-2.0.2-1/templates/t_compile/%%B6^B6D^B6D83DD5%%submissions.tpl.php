<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:14
         compiled from editor/submissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/submissions.tpl', 18, false),array('function', 'html_options_translate', 'editor/submissions.tpl', 36, false),array('function', 'html_select_date', 'editor/submissions.tpl', 48, false),array('function', 'html_options', 'editor/submissions.tpl', 58, false),array('modifier', 'escape', 'editor/submissions.tpl', 42, false),)), $this); ?>

<?php $this->assign('pageTitle', "common.queue.long.".($this->_tpl_vars['pageToDisplay']));  $this->assign('thisUrl', $this->_tpl_vars['currentUrl']);  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/editor");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li<?php if ($this->_tpl_vars['pageToDisplay'] == 'submissionsUnassigned'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsUnassigned"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['pageToDisplay'] == 'submissionsInReview'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInReview"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['pageToDisplay'] == 'submissionsInEditing'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsInEditing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['pageToDisplay'] == 'submissionsArchives'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/submissions/submissionsArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
</ul>

<br />

<?php if (! $this->_tpl_vars['dateFrom']):  $this->assign('dateFrom', "--");  endif; ?>

<?php if (! $this->_tpl_vars['dateTo']):  $this->assign('dateTo', "--");  endif; ?>

<form name="submit" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/submissions/<?php echo $this->_tpl_vars['pageToDisplay']; ?>
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
	<input type="text" size="15" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<br/>
	<select name="dateSearchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['dateFieldOptions'],'selected' => $this->_tpl_vars['dateSearchField']), $this);?>

	</select>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.between"), $this);?>

	<?php echo smarty_function_html_select_date(array('prefix' => 'dateFrom','time' => $this->_tpl_vars['dateFrom'],'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>

	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.and"), $this);?>

	<?php echo smarty_function_html_select_date(array('prefix' => 'dateTo','time' => $this->_tpl_vars['dateTo'],'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>

	<br/>
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>
&nbsp;

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editor/".($this->_tpl_vars['pageToDisplay']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
: <select name="section" onchange="location.href='<?php echo $this->_tpl_vars['thisUrl']; ?>
?section='+this.options[this.selectedIndex].value" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['section']), $this);?>
</select>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>