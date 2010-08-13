<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:40
         compiled from rt/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/footer.tpl', 15, false),)), $this); ?>

<br />

<?php if (! $this->_tpl_vars['omitCloseButton']): ?>
<input type="button" onclick="window.close()" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" />
<?php endif; ?>

</div>
</div>
</div>
</div>
</body>
</html>