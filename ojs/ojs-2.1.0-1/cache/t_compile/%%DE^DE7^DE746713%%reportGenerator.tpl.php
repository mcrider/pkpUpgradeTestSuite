<?php /* Smarty version 2.6.12, created on 2006-02-03 13:26:39
         compiled from manager/statistics/reportGenerator.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/statistics/reportGenerator.tpl', 13, false),array('function', 'url', 'manager/statistics/reportGenerator.tpl', 15, false),array('function', 'html_select_date', 'manager/statistics/reportGenerator.tpl', 19, false),array('function', 'html_options_translate', 'manager/statistics/reportGenerator.tpl', 27, false),)), $this); ?>

<a name="statistics"></a>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports"), $this);?>
</h3>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'reportGenerator'), $this);?>
">
<table width="100%" class="data">
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateFrom"), $this);?>
</td>
		<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateFrom','time' => "--",'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateTo"), $this);?>
</td>
		<td class="value"><?php echo smarty_function_html_select_date(array('prefix' => 'dateTo','time' => "--",'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => "-5",'end_year' => "+1"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label" colspan="2">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports.includeInReportType"), $this);?>
&nbsp;<select name="reportType" id="reportType" class="selectMenu"><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['reportTypes']), $this);?>
</select>
		</td>
	</td>
</table>

<input type="submit" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports.generate"), $this);?>
"/>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports.csvNote"), $this);?>
</p>

</form>