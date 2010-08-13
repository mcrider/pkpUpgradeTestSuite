<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:54
         compiled from sectionEditor/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/index.tpl', 19, false),array('function', 'html_options', 'sectionEditor/index.tpl', 29, false),)), $this); ?>

<?php $this->assign('pageTitle', "common.queue.long.".($this->_tpl_vars['pageToDisplay']));  $this->assign('thisUrl', $this->_tpl_vars['currentUrl']);  $this->assign('currentUrl', ($this->_tpl_vars['pageUrl'])."/sectionEditor"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsInReview' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsInReview"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a></li>
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsInEditing' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsInEditing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInEditing"), $this);?>
</a></li>
	<li<?php if (( $this->_tpl_vars['pageToDisplay'] == 'submissionsArchives' )): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/sectionEditor/index/submissionsArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsArchives"), $this);?>
</a></li>
</ul>

<br />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sectionEditor/".($this->_tpl_vars['pageToDisplay']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
: <select name="section" class="selectMenu" onchange="location.href='<?php echo $this->_tpl_vars['thisUrl']; ?>
?section='+this.options[this.selectedIndex].value" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['section']), $this);?>
</select>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>