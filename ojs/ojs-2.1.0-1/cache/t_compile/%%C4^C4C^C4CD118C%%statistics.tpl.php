<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:39
         compiled from manager/statistics/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/statistics/statistics.tpl', 13, false),array('function', 'url', 'manager/statistics/statistics.tpl', 20, false),array('function', 'math', 'manager/statistics/statistics.tpl', 106, false),array('modifier', 'default', 'manager/statistics/statistics.tpl', 94, false),)), $this); ?>

<a name="statistics"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics"), $this);?>
</h3>

<table width="100%" class="data">

	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.year"), $this);?>
</td>
		<td colspan="2" class="value">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']-1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousPage"), $this);?>
</a>&nbsp;<?php echo $this->_tpl_vars['statisticsYear']; ?>
&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']+1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextPage"), $this);?>
</a>
		</td>
	</tr>

		<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numIssues"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['issueStatistics']['numPublishedIssues']; ?>
</td>
	</tr>

		<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.itemsPublished"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['articleStatistics']['numPublishedSubmissions']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numSubmissions"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['articleStatistics']['numSubmissions']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.accept"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['articleStatistics']['submissionsAccept'],'percentage' => $this->_tpl_vars['articleStatistics']['submissionsAcceptPercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.decline"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['articleStatistics']['submissionsDecline'],'percentage' => $this->_tpl_vars['articleStatistics']['submissionsDeclinePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.revise"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['articleStatistics']['submissionsRevise'],'percentage' => $this->_tpl_vars['articleStatistics']['submissionsRevisePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.undecided"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['articleStatistics']['submissionsUndecided'],'percentage' => $this->_tpl_vars['articleStatistics']['submissionsUndecidedPercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysToPublication"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['articleStatistics']['daysToPublication']; ?>
</td>
	</tr>

	<?php $_from = $this->_tpl_vars['sectionStatistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionStats']):
?>
	<?php $this->assign('section', $this->_tpl_vars['sectionStats']['section']); ?>
	<?php $this->assign('stats', $this->_tpl_vars['sectionStats']['statistics']); ?>
	<tr valign="top">
		<td width="20%" colspan="3" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.forSection",'sectionTitle' => $this->_tpl_vars['section']->getSectionTitle()), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numSubmissions"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['stats']['numSubmissions']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.accept"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['stats']['submissionsAccept'],'percentage' => $this->_tpl_vars['stats']['submissionsAcceptPercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.decline"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['stats']['submissionsDecline'],'percentage' => $this->_tpl_vars['stats']['submissionsDeclinePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.revise"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['stats']['submissionsRevise'],'percentage' => $this->_tpl_vars['stats']['submissionsRevisePercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.undecided"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['stats']['submissionsUndecided'],'percentage' => $this->_tpl_vars['stats']['submissionsUndecidedPercent']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysToPublication"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['stats']['daysToPublication']; ?>
</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>

	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.reviewers"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['allUserStatistics']['reviewer'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => $this->_tpl_vars['reviewerStatistics']['reviewerAddedCount']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.reviewerCount"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['reviewerStatistics']['reviewerCount']; ?>
</td>
	</tr>

	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.reviewsPerReviewer"), $this);?>
</td>
		<?php $this->assign('reviewerCount', $this->_tpl_vars['allUserStatistics']['reviewer']); ?>
		<?php $this->assign('reviewCount', $this->_tpl_vars['reviewStatistics']['reviewsCount']); ?>
		<?php if ($this->_tpl_vars['reviewCount'] != 0):  $this->assign('reviewsPerReviewer', $this->_tpl_vars['reviewerCount']/$this->_tpl_vars['reviewCount']);  else:  $this->assign('reviewsPerReviewer', 0);  endif; ?>
		<td colspan="2" class="value"><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['reviewsPerReviewer']).")"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.reviewerScore"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['reviewerStatistics']['reviewerScore']; ?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysPerReview"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $this->assign('daysPerReview', $this->_tpl_vars['reviewerStatistics']['daysPerReview']); ?>
			<?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['daysPerReview']).")"), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.registeredUsers"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => $this->_tpl_vars['allUserStatistics']['totalUsersCount'],'numNew' => $this->_tpl_vars['userStatistics']['totalUsersCount']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.readers"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['allUserStatistics']['readers'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => ((is_array($_tmp=@$this->_tpl_vars['userStatistics']['readers'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['enableSubscriptions']): ?>
		<tr valign="top">
			<td colspan="3" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.subscriptions"), $this);?>
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
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.countryDistribution"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $_from = $this->_tpl_vars['countryDistribution']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
				<?php echo $this->_tpl_vars['country']; ?>
 &nbsp;
			<?php endforeach; endif; unset($_from); ?>
		</td>
	</td>
</table>