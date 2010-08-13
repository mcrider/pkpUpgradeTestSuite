<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:19
         compiled from search/authorIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'search/authorIndex.tpl', 12, false),array('modifier', 'chr', 'search/authorIndex.tpl', 17, false),array('modifier', 'escape', 'search/authorIndex.tpl', 26, false),array('function', 'translate', 'search/authorIndex.tpl', 17, false),array('function', 'page_info', 'search/authorIndex.tpl', 38, false),array('function', 'page_links', 'search/authorIndex.tpl', 38, false),array('block', 'iterate', 'search/authorIndex.tpl', 19, false),)), $this); ?>

<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>

<?php $this->assign('pageTitle', "search.authorIndex");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
/authors?searchInitial=<?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
"><?php if (chr ( $this->_sections['letters']['index']+$this->_tpl_vars['start'] ) == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
</strong><?php else:  echo ((is_array($_tmp=$this->_sections['letters']['index']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp));  endif; ?></a> <?php endfor; endif; ?><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/authors"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else:  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this); endif; ?></a></p>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'authors','item' => 'author')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('lastFirstLetter', $this->_tpl_vars['firstLetter']); ?>
	<?php $this->assign('firstLetter', $this->_tpl_vars['author']->getLastName()); ?>
	<?php $this->assign('firstLetter', $this->_tpl_vars['firstLetter'][0]); ?>

	<?php if ($this->_tpl_vars['lastFirstLetter'] != $this->_tpl_vars['firstLetter']): ?>
		<br />
		<a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></a>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<?php endif; ?>

	<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/authors/view?firstName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;middleName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;lastName=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;affiliation=<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  if ($this->_tpl_vars['author']->getMiddleName()): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif;  if ($this->_tpl_vars['author']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>
	</a>
	<br/>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack);  if (! $this->_tpl_vars['authors']->wasEmpty()): ?>
	<br />
	<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['authors']), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('iterator' => $this->_tpl_vars['authors'],'name' => 'authors'), $this);?>

<?php else:  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>