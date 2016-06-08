{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}

<script>
SUGAR.util.doWhen(
	"SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts",
	function(){ldelim}
		var customChart = true;
		var css = new Array();
		var chartConfig = new Array();
		{foreach from=$css key=selector item=property}
		css["{$selector}"] = '{$property}';
		{/foreach}
		{foreach from=$config key=name item=value}
		chartConfig["{$name}"] = '{$value}';
		{/foreach}
    	SUGAR.mySugar.sugarCharts.addToChartsArray('{$chartId}','{$filename}',css,chartConfig,activePage);
		{rdelim}
	);
</script>