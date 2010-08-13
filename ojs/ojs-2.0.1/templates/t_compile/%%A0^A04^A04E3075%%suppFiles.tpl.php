<?php /* Smarty version 2.6.9, created on 2005-07-08 06:02:02
         compiled from rt/suppFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/suppFiles.tpl', 22, false),)), $this); ?>

<?php $this->assign('pageTitle', "rt.suppFiles"); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>"<?php echo $this->_tpl_vars['article']->getArticleTitle(); ?>
"</h3>

<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['suppFile']):
?>
<h4><?php echo $this->_tpl_vars['key']+1; ?>
. <?php echo $this->_tpl_vars['suppFile']->getTitle(); ?>
</h4>
<table class="data" width="100%">
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.subject"), $this);?>
</td>
	<td class="value" width="80%">
		<?php echo $this->_tpl_vars['suppFile']->getSubject(); ?>

	</td>
</tr>
<tr valign="top">
	<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
	<td class="value" width="80%">
		<?php if ($this->_tpl_vars['suppFile']->getType()): ?>
			<?php echo $this->_tpl_vars['suppFile']->getType(); ?>

		<?php elseif ($this->_tpl_vars['suppFile']->getTypeOther()): ?>
			<?php echo $this->_tpl_vars['suppFile']->getTypeOther(); ?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.other"), $this);?>

		<?php endif; ?>
	</td>
</tr>
<tr valign="top">
	<td class="label" width="20%">&nbsp;</td>
	<td class="value" width="80%">
		<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/article/download/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['suppFile']->getFileId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles.download"), $this);?>
</a> (<?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
)&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/rt/suppFileMetadata/<?php echo $this->_tpl_vars['articleId']; ?>
/<?php echo $this->_tpl_vars['galleyId']; ?>
/<?php echo $this->_tpl_vars['suppFile']->getSuppFileId(); ?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles.viewMetadata"), $this);?>
</a>
	</td>
</tr>
</table>

<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>