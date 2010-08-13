<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:04
         compiled from sectionEditor/setDueDate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/setDueDate.tpl', 15, false),array('modifier', 'date_format', 'sectionEditor/setDueDate.tpl', 28, false),)), $this); ?>

<?php $this->assign('pageTitle', "submission.dueDate");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.designateDueDate"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.designateDueDateDescription"), $this);?>
</p>

<form method="post" action="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/<?php echo $this->_tpl_vars['actionHandler']; ?>
/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['reviewId']; ?>
">
	<table class="data" width="100%">
		<tr valign="top">
			<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.todaysDate"), $this);?>
</td>
			<td class="value" width="80%"><?php echo $this->_tpl_vars['todaysDate']; ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.requestedByDate"), $this);?>
</td>
			<td class="value">
				<input type="text" size="11" maxlength="10" name="dueDate" value="<?php if ($this->_tpl_vars['dueDate']):  echo ((is_array($_tmp=$this->_tpl_vars['dueDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d"));  endif; ?>" class="textField" />
				<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.dueDateFormat"), $this);?>
</span>
			</td>
		</tr>
		<tr valign="top">
			<td>&nbsp;</td>
			<td class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.or"), $this);?>
</span></td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.numberOfWeeks"), $this);?>
</td>
			<td class="value"><input type="text" name="numWeeks" value="<?php if (! $this->_tpl_vars['dueDate']):  echo $this->_tpl_vars['numWeeksPerReview'];  endif; ?>" size="3" maxlength="2" class="textField" /></td>
		</tr>
	</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.continue"), $this);?>
" class="button defaultButton" /> <input type="button" class="button" onClick="history.go(-1)" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
"></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>