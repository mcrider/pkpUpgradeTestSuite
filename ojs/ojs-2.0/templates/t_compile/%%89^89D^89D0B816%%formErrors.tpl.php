<?php /* Smarty version 2.6.9, created on 2005-05-17 03:44:48
         compiled from common/formErrors.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/formErrors.tpl', 14, false),)), $this); ?>

<?php if ($this->_tpl_vars['isError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.errorsOccurred"), $this);?>
:</span>
	<ul class="formErrorList">
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['message'])), $this);?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</p>
<?php endif; ?>