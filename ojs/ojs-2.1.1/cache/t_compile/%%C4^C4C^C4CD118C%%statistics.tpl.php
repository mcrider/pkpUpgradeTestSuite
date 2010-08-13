<?php /* Smarty version 2.6.12, created on 2006-07-17 16:34:33
         compiled from manager/statistics/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/statistics/statistics.tpl', 15, false),array('function', 'url', 'manager/statistics/statistics.tpl', 19, false),array('function', 'math', 'manager/statistics/statistics.tpl', 72, false),array('modifier', 'default', 'manager/statistics/statistics.tpl', 85, false),)), $this); ?>

<a name="statistics"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.description"), $this);?>
</p>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.selectSections"), $this);?>
</p>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStatisticsSections'), $this);?>
" method="post">
	<select name="sectionIds[]" class="selectMenu" multiple size="5">
		<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
			<option <?php if (in_array ( $this->_tpl_vars['section']->getSectionId() , $this->_tpl_vars['sectionIds'] )): ?>selected <?php endif; ?>value="<?php echo $this->_tpl_vars['section']->getSectionId(); ?>
"><?php echo $this->_tpl_vars['section']->getSectionTitle(); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select><br/>&nbsp;<br/>
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button defaultButton"/>
</form>

<br/>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'savePublicStatisticsList'), $this);?>
" method="post">
<table width="100%" class="data">
	<tr valign="top">
		<td width="25%" class="label"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.year"), $this);?>
</h4></td>
		<td width="75%" colspan="2" class="value">
			<h4><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']-1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousPage"), $this);?>
</a>&nbsp;<?php echo $this->_tpl_vars['statisticsYear']; ?>
&nbsp;<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']+1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextPage"), $this);?>
</a></h4>
		</td>
	</tr>

	<tr valign="top">
		<td class="label"><input type="checkbox" name="statNumPublishedIssues" <?php if ($this->_tpl_vars['statNumPublishedIssues']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numIssues"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['issueStatistics']['numPublishedIssues']; ?>
</td>
	</tr>

	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statItemsPublished" <?php if ($this->_tpl_vars['statItemsPublished']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.itemsPublished"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['articleStatistics']['numPublishedSubmissions']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statNumSubmissions" <?php if ($this->_tpl_vars['statNumSubmissions']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numSubmissions"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['articleStatistics']['numSubmissions']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statPeerReviewed" <?php if ($this->_tpl_vars['statPeerReviewed']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.peerReviewed"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['reviewerStatistics']['reviewedSubmissionsCount']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statCountAccept" <?php if ($this->_tpl_vars['statCountAccept']): ?>checked <?php endif; ?>/>&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.accept"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['limitedArticleStatistics']['submissionsAccept'],'percentage' => $this->_tpl_vars['limitedArticleStatistics']['submissionsAcceptPercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statCountDecline" <?php if ($this->_tpl_vars['statCountDecline']): ?>checked <?php endif; ?>/>&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.decline"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['limitedArticleStatistics']['submissionsDecline'],'percentage' => $this->_tpl_vars['limitedArticleStatistics']['submissionsDeclinePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statCountRevise" <?php if ($this->_tpl_vars['statCountRevise']): ?>checked <?php endif; ?>/>&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.revise"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['limitedArticleStatistics']['submissionsRevise'],'percentage' => $this->_tpl_vars['limitedArticleStatistics']['submissionsRevisePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statDaysPerReview" <?php if ($this->_tpl_vars['statDaysPerReview']): ?>checked <?php endif; ?>/>&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysPerReview"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $this->assign('daysPerReview', $this->_tpl_vars['reviewerStatistics']['daysPerReview']); ?>
			<?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['daysPerReview']).")"), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statDaysToPublication" <?php if ($this->_tpl_vars['statDaysToPublication']): ?>checked <?php endif; ?>/>&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysToPublication"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['limitedArticleStatistics']['daysToPublication']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statRegisteredUsers" <?php if ($this->_tpl_vars['statRegisteredUsers']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.registeredUsers"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => $this->_tpl_vars['allUserStatistics']['totalUsersCount'],'numNew' => $this->_tpl_vars['userStatistics']['totalUsersCount']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><input type="checkbox" name="statRegisteredReaders" <?php if ($this->_tpl_vars['statRegisteredReaders']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.registeredReaders"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['allUserStatistics']['reader'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => ((is_array($_tmp=@$this->_tpl_vars['userStatistics']['reader'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
	</tr>

	<?php if ($this->_tpl_vars['enableSubscriptions']): ?>
		<tr valign="top">
			<td colspan="3" class="label"><input type="checkbox" name="statSubscriptions" <?php if ($this->_tpl_vars['statSubscriptions']): ?>checked <?php endif; ?>/><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.subscriptions"), $this);?>
</td>
		</tr>
		<?php $_from = $this->_tpl_vars['allSubscriptionStatistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type_id'] => $this->_tpl_vars['stats']):
?>
		<tr valign="top">
			<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_tpl_vars['stats']['name']; ?>
:</td>
			<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['stats']['count'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => ((is_array($_tmp=@$this->_tpl_vars['subscriptionStatistics'][$this->_tpl_vars['type_id']]['count'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
</table>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.note"), $this);?>
</p>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.makePublic"), $this);?>
<br/>
<input type="submit" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
"/>
</form>