<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:53
         compiled from rtadmin/validate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/validate.tpl', 15, false),array('block', 'iterate', 'rtadmin/validate.tpl', 17, false),array('modifier', 'validate_url', 'rtadmin/validate.tpl', 24, false),array('modifier', 'truncate', 'rtadmin/validate.tpl', 28, false),array('modifier', 'escape', 'rtadmin/validate.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.validateUrls");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls.description"), $this);?>
</p>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'versions','item' => 'version')); $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat=true);while ($_block_repeat) { ob_start(); ?>
	<h3><?php echo $this->_tpl_vars['version']->getTitle(); ?>
</h3>
	<ul>
	<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
		<li><?php echo $this->_tpl_vars['context']->getTitle(); ?>

		<?php $this->assign('errors', 0); ?>
		<?php $_from = $this->_tpl_vars['context']->getSearches(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search']):
?>
			<?php $this->assign('errors', ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('validate_url', true, $_tmp, $this->_tpl_vars['errors']) : smarty_modifier_validate_url($_tmp, $this->_tpl_vars['errors']))); ?>.
		<?php endforeach; endif; unset($_from); ?>
		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
			<br />
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls.urlIsInvalid",'url' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['error']['url'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editSearch/<?php echo $this->_tpl_vars['version']->getVersionId(); ?>
/<?php echo $this->_tpl_vars['context']->getContextId(); ?>
/<?php echo $this->_tpl_vars['error']['id']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
		<?php endforeach; else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls.ok"), $this);?>

		<?php endif; unset($_from); ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat=false); }  array_pop($this->_tag_stack); ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls.complete"), $this);?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>