<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:37
         compiled from manager/people/enrollSync.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/enrollSync.tpl', 15, false),array('function', 'url', 'manager/people/enrollSync.tpl', 19, false),array('function', 'html_options', 'manager/people/enrollSync.tpl', 52, false),array('modifier', 'escape', 'manager/people/enrollSync.tpl', 26, false),)), $this); ?>

<?php $this->assign('pageTitle', "manager.people.enrollment");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.syncUsers"), $this);?>
</h3>

<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.syncUserDescription"), $this);?>
</span></p>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSync'), $this);?>
">

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><label for="rolePath"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSyncRole"), $this);?>
</label></td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['rolePath']): ?>
				<input type="hidden" name="rolePath" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rolePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleName']), $this);?>

			<?php else: ?>
				<select name="rolePath" id="rolePath" size="1" class="selectMenu">
					<option value=""></option>
					<option value="all"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allUsers"), $this);?>
</option>
					<option value="manager"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.manager"), $this);?>
</option>
					<option value="editor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</option>
					<option value="sectionEditor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</option>
					<option value="layoutEditor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</option>
					<option value="reviewer"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</option>
					<option value="copyeditor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</option>
					<option value="proofreader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</option>
					<option value="author"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</option>
					<option value="reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</option>
					<option value="subscriptionManager"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManager"), $this);?>
</option>
				</select>
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="syncJournal"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSyncJournal"), $this);?>
</label></td>
		<td class="value">
			<select name="syncJournal" id="syncJournal" size="1" class="selectMenu">
				<option value=""></option>
				<option value="all"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.allJournals"), $this);?>
</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['journalOptions']), $this);?>

			</select>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSync"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>