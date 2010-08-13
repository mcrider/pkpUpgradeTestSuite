<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:58
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 24, false),array('modifier', 'string_format', 'common/footer.tpl', 24, false),)), $this); ?>

<?php if ($this->_tpl_vars['pageFooter']): ?>
<br /><br />
<?php echo $this->_tpl_vars['pageFooter']; ?>

<?php endif; ?>
</div>
</div>
</div>

<div id="footer">
	<div id="footerContent">
		<?php if ($this->_tpl_vars['enableDebugStats']): ?>
		<div class="debugStats">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "debug.executionTime"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['debugExecutionTime'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.4f") : smarty_modifier_string_format($_tmp, "%.4f")); ?>
s<br />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "debug.databaseQueries"), $this);?>
: <?php echo $this->_tpl_vars['debugNumDatabaseQueries']; ?>

		</div>
		<?php endif; ?>
	</div>
</div>

</div>
</body>
</html>