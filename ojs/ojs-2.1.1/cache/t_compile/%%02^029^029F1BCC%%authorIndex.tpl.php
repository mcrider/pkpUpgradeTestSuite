<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:35
         compiled from search/authorIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'search/authorIndex.tpl', 15, false),array('function', 'translate', 'search/authorIndex.tpl', 15, false),array('function', 'page_info', 'search/authorIndex.tpl', 34, false),array('function', 'page_links', 'search/authorIndex.tpl', 34, false),array('block', 'iterate', 'search/authorIndex.tpl', 17, false),array('modifier', 'String_substr', 'search/authorIndex.tpl', 19, false),array('modifier', 'escape', 'search/authorIndex.tpl', 22, false),)), $this); ?>

<?php $this->assign('pageTitle', "search.authorIndex");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors','searchInitial' => $this->_tpl_vars['letter']), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo $this->_tpl_vars['letter']; ?>
</strong><?php else:  echo $this->_tpl_vars['letter'];  endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors'), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'authors','item' => 'author')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('lastFirstLetter', $this->_tpl_vars['firstLetter']); ?>
	<?php $this->assign('firstLetter', ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 1) : String::substr($_tmp, 0, 1))); ?>

	<?php if ($this->_tpl_vars['lastFirstLetter'] != $this->_tpl_vars['firstLetter']): ?>
		<a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></a>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<?php endif; ?>

	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors','path' => 'view','firstName' => $this->_tpl_vars['author']->getFirstName(),'middleName' => $this->_tpl_vars['author']->getMiddleName(),'lastName' => $this->_tpl_vars['author']->getLastName(),'affiliation' => $this->_tpl_vars['author']->getAffiliation()), $this);?>
">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if ($this->_tpl_vars['author']->getMiddleName()): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif;  if ($this->_tpl_vars['author']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>
	</a>
	<br/>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  if (! $this->_tpl_vars['authors']->wasEmpty()): ?>
	<br />
	<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['authors']), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('iterator' => $this->_tpl_vars['authors'],'name' => 'authors','searchInitial' => $this->_tpl_vars['searchInitial']), $this);?>

<?php else:  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>