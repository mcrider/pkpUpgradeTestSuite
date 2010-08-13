<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:18
         compiled from rtadmin/context.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/context.tpl', 17, false),array('modifier', 'escape', 'rtadmin/context.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.admin.contexts.edit.editContext");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['contextId']): ?>
	<ul class="menu">
		<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/editContext/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.metadata"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/searches/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId']; ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.searches"), $this);?>
</a></li>
	</ul>
<?php endif; ?>

<br />

<form action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php if ($this->_tpl_vars['contextId']): ?>saveContext/<?php echo $this->_tpl_vars['versionId']; ?>
/<?php echo $this->_tpl_vars['contextId'];  else: ?>createContext/<?php echo $this->_tpl_vars['versionId']; ?>
/save<?php endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.title"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="abbrev"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.abbrev"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="abbrev" id="abbrev" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['abbrev'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.description"), $this);?>
</label></td>
		<td class="value">
			<textarea class="textArea" name="description" id="description" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.options"), $this);?>
</label></td>
		<td class="value">
			<table width="100%" class="data">
				<tr valign="top">
					<td width="3%"><input type="checkbox" name="authorTerms" id="authorTerms" <?php if ($this->_tpl_vars['authorTerms']): ?>checked="checked"<?php endif; ?> /></td>
					<td><label for="authorTerms"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.options.authorTerms"), $this);?>
</label></td>
				</tr>
				<tr valign="top">
					<td><input type="checkbox" name="defineTerms" id="defineTerms" <?php if ($this->_tpl_vars['defineTerms']): ?>checked="checked"<?php endif; ?> /></td>
					<td><label for="defineTerms"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.options.defineTerms",'requestPageUrl' => $this->_tpl_vars['requestPageUrl']), $this);?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/contexts/<?php echo $this->_tpl_vars['versionId']; ?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>