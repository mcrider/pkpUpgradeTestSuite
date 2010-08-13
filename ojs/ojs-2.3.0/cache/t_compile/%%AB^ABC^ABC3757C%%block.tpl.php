<?php /* Smarty version 2.6.26, created on 2010-08-12 15:43:37
         compiled from file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.3.0/plugins/blocks/fontSize/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.3.0/plugins/blocks/fontSize/block.tpl', 12, false),array('function', 'icon', 'file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.3.0/plugins/blocks/fontSize/block.tpl', 13, false),array('modifier', 'escape', 'file:/Applications/MAMP/htdocs/dev/pkpUpgradeTests/ojs/ojs-2.3.0/plugins/blocks/fontSize/block.tpl', 13, false),)), $this); ?>
<div class="block" id="sidebarFontSize">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.fontSize.title"), $this);?>
</span>
	<a href="#" onclick="setFontSize('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.fontSize.small"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('path' => ($this->_tpl_vars['fontIconPath'])."/",'name' => 'font_small'), $this);?>
</a>&nbsp;
	<a href="#" onclick="setFontSize('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.fontSize.medium"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('path' => ($this->_tpl_vars['fontIconPath'])."/",'name' => 'font_medium'), $this);?>
</a>&nbsp;
	<a href="#" onclick="setFontSize('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.fontSize.large"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('path' => ($this->_tpl_vars['fontIconPath'])."/",'name' => 'font_large'), $this);?>
</a>
</div>