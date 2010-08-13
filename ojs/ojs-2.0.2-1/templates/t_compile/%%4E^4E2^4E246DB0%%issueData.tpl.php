<?php /* Smarty version 2.6.10, created on 2005-09-21 12:20:14
         compiled from editor/issues/issueData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/issues/issueData.tpl', 17, false),array('function', 'html_options', 'editor/issues/issueData.tpl', 26, false),array('function', 'fieldLabel', 'editor/issues/issueData.tpl', 45, false),array('function', 'html_select_date', 'editor/issues/issueData.tpl', 104, false),array('modifier', 'escape', 'editor/issues/issueData.tpl', 38, false),array('modifier', 'date_format', 'editor/issues/issueData.tpl', 79, false),)), $this); ?>

<?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification());  $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification(false,true));  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/createIssue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/schedulingQueue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInScheduling"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/futureIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li<?php if (! $this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/backIssues"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<br />

<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueData/'+this.options[this.selectedIndex].value" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId']), $this);?>
</select>
</form>

<div class="separator"></div>

<ul class="menu">
	<li><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueToc/<?php echo $this->_tpl_vars['issueId']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_tpl_vars['requestPageUrl']; ?>
/issueData/<?php echo $this->_tpl_vars['issueId']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueData"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['unpublished']): ?><li><a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/issue/view/<?php echo $this->_tpl_vars['issue']->getBestIssueId(); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.previewIssue"), $this);?>
</a></li><?php endif; ?>
</ul>

<form method="post" action="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/editIssue/<?php echo $this->_tpl_vars['issueId']; ?>
" enctype="multipart/form-data">
<input type="hidden" name="fileName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<input type="hidden" name="originalFileName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['originalFileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.identification"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'volume','key' => "issue.volume"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="volume" id="volume" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['volume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="5" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'number','key' => "issue.number"), $this);?>
</td>
		<td class="value"><input type="text" name="number" id="number" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="5" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'year','key' => "issue.year"), $this);?>
</td>
		<td class="value"><input type="text" name="year" id="year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="5" maxlength="4" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'labelFormat','key' => "editor.issues.issueIdentification"), $this);?>
</td>
		<td class="value"><select name="labelFormat" id="labelFormat" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['labelOptions'],'selected' => $this->_tpl_vars['labelFormat']), $this);?>
</select></td>
	</tr>
	<?php if ($this->_tpl_vars['enablePublicIssueId']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publicIssueId','key' => "editor.issues.publicIssueIdentifier"), $this);?>
</td>
		<td class="value"><input type="text" name="publicIssueId" id="publicIssueId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicIssueId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "issue.title"), $this);?>
</td>
		<td class="value"><input type="text" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "editor.issues.description"), $this);?>
</td>
		<td class="value"><textarea name="description" id="description" cols="40" rows="5" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
		<td class="value">
			<?php if ($this->_tpl_vars['issue']->getDatePublished()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.published"), $this);?>
&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.unpublished"), $this);?>

			<?php endif; ?>

			<?php if ($this->_tpl_vars['issue']->getDateNotified()): ?>
				<br/>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.usersNotified"), $this);?>
&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php endif; ?>
		</td>
	</tr>
</table>

<?php if ($this->_tpl_vars['enableSubscriptions']): ?>
<div class="separator"></div>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.access"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'accessStatus','key' => "editor.issues.accessStatus"), $this);?>
</td>
		<td width="80%" class="value"><select name="accessStatus" id="accessStatus" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accessOptions'],'selected' => $this->_tpl_vars['accessStatus']), $this);?>
</select></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'openAccessDate','key' => "editor.issues.accessDate"), $this);?>
</td>
		<?php if (( $this->_tpl_vars['Date_Year'] && $this->_tpl_vars['Date_Month'] && $this->_tpl_vars['Date_Day'] )): ?> 
			<td class="value"><?php echo smarty_function_html_select_date(array('time' => ($this->_tpl_vars['Date_Year'])."-".($this->_tpl_vars['Date_Month'])."-".($this->_tpl_vars['Date_Day']),'end_year' => "+20",'all_extra' => "class=\"selectMenu\""), $this);?>
</td>
		<?php else: ?>
			<td class="value"><?php echo smarty_function_html_select_date(array('end_year' => "+20",'all_extra' => "class=\"selectMenu\""), $this);?>
</td>
		<?php endif; ?>
	</tr>
</table>
<?php endif; ?>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.cover"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" colspan="2"><input type="checkbox" name="showCoverPage" id="showCoverPage" value="1" <?php if ($this->_tpl_vars['showCoverPage']): ?> checked="checked"<?php endif; ?> /> <label for="showCoverPage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.showCoverPage"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverPage','key' => "editor.issues.coverPage"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="coverPage" id="coverPage" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.coverPageInstructions"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.uploaded"), $this);?>
:&nbsp;<?php if ($this->_tpl_vars['fileName']): ?><a href="javascript:openWindow('<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo $this->_tpl_vars['fileName']; ?>
');" class="file"><?php echo $this->_tpl_vars['originalFileName']; ?>
</a>&nbsp;<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/removeCoverPage/<?php echo $this->_tpl_vars['issueId']; ?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.removeCoverPage"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.remove"), $this);?>
</a><?php else: ?>&mdash;<?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverPageDescription','key' => "editor.issues.coverPageCaption"), $this);?>
</td>
		<td class="value"><textarea name="coverPageDescription" id="coverPageDescription" cols="40" rows="5" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="document.location.href='<?php echo $this->_tpl_vars['pageUrl']; ?>
/editor/issueManagement/issueData/<?php echo $this->_tpl_vars['issueId']; ?>
'" class="button" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>