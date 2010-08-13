<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:49
         compiled from help/helpToc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'help/helpToc.tpl', 16, false),array('function', 'get_help_id', 'help/helpToc.tpl', 21, false),array('modifier', 'escape', 'help/helpToc.tpl', 42, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main" style="margin: 0; width: 660px;">

		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.ojsHelp"), $this);?>
</h4>

		<div class="thickSeparator"></div>

		<div id="breadcrumb">
			<a href="<?php echo $this->_plugins['function']['get_help_id'][0][0]->smartyGetHelpId(array('key' => "index.index",'url' => 'true'), $this);?>
" class="current"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a>
		</div>

		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.toc"), $this);?>
</h2>

		<div id="content">

		<div id="toc">
			<ul>
				<li><a href="<?php echo $this->_plugins['function']['get_help_id'][0][0]->smartyGetHelpId(array('key' => "index.index",'url' => 'true'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.ojsHelp"), $this);?>
</a></li>
				<?php $_from = $this->_tpl_vars['helpToc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topicId'] => $this->_tpl_vars['topic']):
?>
				<li><?php echo $this->_tpl_vars['topic']['prefix']; ?>
<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['topicId']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>

		<div class="separator" style="padding-top: 10px;"></div>

		<div>
			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.search"), $this);?>
</h4>
			<form action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/search" method="post" style="display: inline">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.searchFor"), $this);?>
&nbsp;&nbsp;<input type="text" name="keyword" size="30" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['helpSearchKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="textField" />
			<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
			</form>
		</div>

		</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>