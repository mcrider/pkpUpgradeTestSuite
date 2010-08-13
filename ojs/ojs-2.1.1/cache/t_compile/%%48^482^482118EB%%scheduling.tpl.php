<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:30
         compiled from layoutEditor/submission/scheduling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'layoutEditor/submission/scheduling.tpl', 13, false),array('function', 'url', 'layoutEditor/submission/scheduling.tpl', 24, false),array('modifier', 'assign', 'layoutEditor/submission/scheduling.tpl', 18, false),)), $this); ?>

<a name="scheduling"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduling"), $this);?>
</h3>

<?php if ($this->_tpl_vars['issue']): ?>
	<?php $this->assign('issueName', $this->_tpl_vars['issue']->getIssueIdentification());  else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduledIn.tba"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'issueName') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'issueName'));?>

<?php endif; ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduledIn",'issueName' => $this->_tpl_vars['issueName']), $this);?>


<?php if ($this->_tpl_vars['issue']): ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
<?php endif; ?>