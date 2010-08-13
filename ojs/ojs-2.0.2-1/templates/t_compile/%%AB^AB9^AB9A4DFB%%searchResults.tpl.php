<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:14
         compiled from help/searchResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'help/searchResults.tpl', 16, false),array('function', 'get_help_id', 'help/searchResults.tpl', 21, false),array('function', 'eval', 'help/searchResults.tpl', 36, false),array('modifier', 'escape', 'help/searchResults.tpl', 27, false),array('modifier', 'count', 'help/searchResults.tpl', 30, false),array('modifier', 'truncate', 'help/searchResults.tpl', 36, false),)), $this); ?>

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
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a>
	</div>

	<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.searchResults"), $this);?>
</h2>

	<div id="content">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.searchResultsFor"), $this);?>
 "<?php echo ((is_array($_tmp=$this->_tpl_vars['helpSearchKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"</h4>
		<div id="search">
		<?php if (count ( $this->_tpl_vars['searchResults'] ) > 0): ?>
			<h5><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.matchesFound",'matches' => count($this->_tpl_vars['searchResults'])), $this);?>
</h5>
			<ul>
			<?php $_from = $this->_tpl_vars['searchResults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['results'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['results']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['results']['iteration']++;
?>
				<?php $this->assign('sections', $this->_tpl_vars['result']['topic']->getSections()); ?>
				<li>
					<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['result']['topic']->getId(); ?>
"><?php echo $this->_tpl_vars['result']['topic']->getTitle(); ?>
</a>
					<?php echo smarty_function_eval(array('var' => ((is_array($_tmp=$this->_tpl_vars['sections'][0]->getContent())) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200))), $this);?>

					<div class="searchBreadcrumb">
						<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/index/topic/000000"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a>
						<?php $_from = $this->_tpl_vars['result']['toc']->getBreadcrumbs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['breadcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['breadcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['breadcrumb']):
        $this->_foreach['breadcrumbs']['iteration']++;
?>
							<?php if ($this->_tpl_vars['breadcrumb'] != $this->_tpl_vars['result']['topic']->getId()): ?>
							 &gt; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['breadcrumb']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</a>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php if ($this->_tpl_vars['result']['topic']->getId() != "index/topic/000000"): ?>
						&gt; <a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/help/view/<?php echo $this->_tpl_vars['result']['topic']->getId(); ?>
" class="current"><?php echo $this->_tpl_vars['result']['topic']->getTitle(); ?>
</a>
						<?php endif; ?>
					</div>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php else: ?>
			<em><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.noMatchingTopics"), $this);?>
</em>
		<?php endif; ?>
		</div>

		<div class="separator"></div>

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