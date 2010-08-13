<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:43
         compiled from sectionEditor/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'sectionEditor/index.tpl', 13, false),array('function', 'translate', 'sectionEditor/index.tpl', 18, false),array('function', 'html_options_translate', 'sectionEditor/index.tpl', 36, false),array('function', 'html_select_date', 'sectionEditor/index.tpl', 48, false),array('function', 'html_options', 'sectionEditor/index.tpl', 59, false),array('modifier', 'assign', 'sectionEditor/index.tpl', 13, false),array('modifier', 'escape', 'sectionEditor/index.tpl', 34, false),)), $this); ?>

<?php $this->assign('pageTitle', "common.queue.long.".($this->_tpl_vars['pageToDisplay']));  echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'sectionEditor'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsInReview' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'submissionsInReview'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a></li>
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsInEditing' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'submissionsInEditing'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a></li>
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsArchives' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'submissionsArchives'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
</ul>

<br />

<?php if (! $this->_tpl_vars['dateFrom']):  $this->assign('dateFrom', "--");  endif; ?>

<?php if (! $this->_tpl_vars['dateTo']):  $this->assign('dateTo', "--");  endif; ?>

<form method="post" name="submit" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','path' => $this->_tpl_vars['pageToDisplay']), $this);?>
">
	<?php if ($this->_tpl_vars['section']): ?><input type="hidden" name="section" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['section'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
"/><?php endif; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "sectionEditor/".($this->_tpl_vars['pageToDisplay']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
: <select name="section" class="selectMenu" onchange="location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['pageToDisplay'],'section' => 'SECTION_ID','searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'escape' => false), $this);?>
'.replace('SECTION_ID', this.options[this.selectedIndex].value)" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['section']), $this);?>
</select>
</form>

<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsInReview' )): ?>
<br />
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notes"), $this);?>
</h4>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissionReview.notes"), $this);?>
</p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>