<?php /* Smarty version 2.6.9, created on 2005-07-08 06:01:57
         compiled from author/submit/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submit/step1.tpl', 15, false),array('function', 'fieldLabel', 'author/submit/step1.tpl', 77, false),array('function', 'html_options', 'author/submit/step1.tpl', 78, false),array('modifier', 'escape', 'author/submit/step1.tpl', 29, false),array('modifier', 'nl2br', 'author/submit/step1.tpl', 58, false),)), $this); ?>

<?php $this->assign('pageTitle', "author.submit.step1");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.howToSubmit",'supportName' => $this->_tpl_vars['journalSettings']['supportName'],'supportEmail' => $this->_tpl_vars['journalSettings']['supportEmail'],'supportPhone' => $this->_tpl_vars['journalSettings']['supportPhone']), $this);?>
</p>

<div class="separator"></div>

<?php if (count ( $this->_tpl_vars['sectionOptions'] ) <= 1): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.notAccepting"), $this);?>
</p>
<?php else: ?>

<script type="text/javascript">
<?php echo '
function checkSubmissionChecklist() {
	var elements = document.submit.elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].type == \'checkbox\' && elements[i].name.match(\'^checklist\') && !elements[i].checked) {
			alert('; ?>
'<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.verifyChecklist"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
'<?php echo ');
			return false;
		}
	}
	return true;
}
'; ?>

</script>

<form name="submit" method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/author/saveSubmit/<?php echo $this->_tpl_vars['submitStep']; ?>
" onsubmit="return checkSubmissionChecklist()">

<?php if ($this->_tpl_vars['articleId']): ?>
<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['articleId']; ?>
" />
<?php endif; ?>
<input type="hidden" name="submissionChecklist" value="1" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['journalSettings']['submissionChecklist']): ?>

<?php $_from = $this->_tpl_vars['journalSettings']['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
	<?php if ($this->_tpl_vars['checklistItem']['content']): ?>
		<?php if (! $this->_tpl_vars['notFirstChecklistItem']): ?>
			<?php $this->assign('notFirstChecklistItem', 1); ?>
			<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionChecklist"), $this);?>
</h3>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionChecklistDescription"), $this);?>
</p>
			<table width="100%" class="data">
		<?php endif; ?>
		<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist[<?php echo $this->_foreach['checklist']['iteration']; ?>
]" name="checklist[]" value="<?php echo $this->_tpl_vars['checklistId']; ?>
"<?php if ($this->_tpl_vars['articleId'] || $this->_tpl_vars['submissionChecklist']): ?> checked="checked"<?php endif; ?> /></td>
			<td width="95%"><label for="checklist[<?php echo $this->_foreach['checklist']['iteration']; ?>
]"><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</label></td>
		</tr>
	<?php endif;  endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['notFirstChecklistItem']): ?>
	</table>
	<div class="separator"></div>
<?php endif; ?>

<?php endif; ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.journalSection"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.journalSectionDescription",'aboutUrl' => ($this->_tpl_vars['pageUrl'])."/about"), $this);?>
</p>


<table class="data" width="100%">
<tr valign="top">	
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sectionId','required' => 'true','key' => "section.section"), $this);?>
</td>
	<td width="80%" class="value"><select name="sectionId" id="sectionId" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['sectionId']), $this);?>
</select></td>
</tr>
	
</table>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.commentsForEditor"), $this);?>
</h3>
<table width="100%" class="data">

<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'commentsToEditor','key' => "author.submit.comments"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="commentsToEditor" id="commentsToEditor" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['commentsToEditor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
</tr>

</table>

<div class="separator"></div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="<?php if ($this->_tpl_vars['articleId']): ?>confirmAction('<?php echo $this->_tpl_vars['pageUrl']; ?>
/author', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.cancelSubmission"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')<?php else: ?>document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/author'<?php endif; ?>" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>