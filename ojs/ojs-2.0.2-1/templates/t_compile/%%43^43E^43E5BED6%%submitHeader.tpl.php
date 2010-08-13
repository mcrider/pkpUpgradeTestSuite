<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:13
         compiled from author/submit/submitHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/submitHeader.tpl', 17, false),)), $this); ?>

<?php $this->assign('pageCrumbTitle', "author.submit");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="steplist">
<li<?php if ($this->_tpl_vars['submitStep'] == 1): ?> class="current"<?php endif; ?>><?php if ($this->_tpl_vars['submitStep'] != 1 && $this->_tpl_vars['submissionProgress'] >= 1): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/1?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
"><?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.start"), $this); if ($this->_tpl_vars['submitStep'] != 1 && $this->_tpl_vars['submissionProgress'] >= 1): ?></a><?php endif; ?></li>

<li<?php if ($this->_tpl_vars['submitStep'] == 2): ?> class="current"<?php endif; ?>><?php if ($this->_tpl_vars['submitStep'] != 2 && $this->_tpl_vars['submissionProgress'] >= 2): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/2?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
"><?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.metadata"), $this); if ($this->_tpl_vars['submitStep'] != 2 && $this->_tpl_vars['submissionProgress'] >= 2): ?></a><?php endif; ?></li>

<li<?php if ($this->_tpl_vars['submitStep'] == 3): ?> class="current"<?php endif; ?>><?php if ($this->_tpl_vars['submitStep'] != 3 && $this->_tpl_vars['submissionProgress'] >= 3): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/3?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
"><?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.upload"), $this); if ($this->_tpl_vars['submitStep'] != 3 && $this->_tpl_vars['submissionProgress'] >= 3): ?></a><?php endif; ?></li>

<li<?php if ($this->_tpl_vars['submitStep'] == 4): ?> class="current"<?php endif; ?>><?php if ($this->_tpl_vars['submitStep'] != 4 && $this->_tpl_vars['submissionProgress'] >= 4): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/4?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
"><?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFiles"), $this); if ($this->_tpl_vars['submitStep'] != 4 && $this->_tpl_vars['submissionProgress'] >= 4): ?></a><?php endif; ?></li>

<li<?php if ($this->_tpl_vars['submitStep'] == 5): ?> class="current"<?php endif; ?>><?php if ($this->_tpl_vars['submitStep'] != 5 && $this->_tpl_vars['submissionProgress'] >= 5): ?><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/submit/5?articleId=<?php echo $this->_tpl_vars['articleId']; ?>
"><?php endif;  echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.confirmation"), $this); if ($this->_tpl_vars['submitStep'] != 5 && $this->_tpl_vars['submissionProgress'] >= 5): ?></a><?php endif; ?></li>
</ul>