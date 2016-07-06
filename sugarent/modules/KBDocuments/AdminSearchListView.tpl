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


<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
	{include file='modules/KBDocuments/tpls/ListViewPagination.tpl'}
	<tr height='20'>
		{if $prerow}
			<td scope='col'  nowrap width='1%'>
				<input type='checkbox' title="{sugar_translate label='LBL_SELECT_ALL_TITLE'}" class='checkbox' id='massall' name='massall' value='' onclick='checkUncheckAll();' />
			</td>
		{/if}
		{counter start=0 name="colCounter" print=false assign="colCounter"}
        {capture assign="other_attributes"}align="absmiddle" border="0"{/capture}
		{foreach from=$displayColumns key=colHeader item=params}
			<td scope='col' width='{$params.width}%'  >
				<span sugar="sugar{$colCounter}"><div style='white-space: normal;'width='100%' align='{$params.align|default:'left'}'>
                {if $params.sortable|default:true}
	                <a href='javascript:SUGAR.kb.sortBrowseList({$pageData.queries.orderBy|@json},"{$params.orderBy|default:$colHeader|lower}")' class='listViewThLinkS1'>{sugar_translate label=$params.label module=$pageData.bean.moduleDir}&nbsp;&nbsp;
					{if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
						{if $pageData.ordering.sortOrder == 'ASC'}
                            {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                            {sugar_getimage name=$imageName width=$arrowWidth height=$arrowHeight alt=$arrowAlt other_attributes="$other_attributes"}
                        {else}
                            {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                            {sugar_getimage name=$imageName width=$arrowWidth height=$arrowHeight alt=$arrowAlt other_attributes="$other_attributes"}
                        {/if}
                    {else}
                        {capture assign="imageName"}arrow.{$arrowExt}{/capture}
                        {sugar_getimage name=$imageName width=$arrowWidth height=$arrowHeight alt=$arrowAlt other_attributes="$other_attributes"}
                    {/if}
					</a>
				{else}
					{sugar_translate label=$params.label module=$pageData.bean.moduleDir}
				{/if}
				</div></span sugar='sugar{$colCounter}'>
			</td>
			{counter name="colCounter"}
		{/foreach}
		{if !empty($quickViewLinks)}
		<td scope='col'  nowrap width='1%'>&nbsp;</td>
		{/if}
	</tr>

	{foreach name=rowIteration from=$data key=id item=rowData}
		{if $smarty.foreach.rowIteration.iteration is odd}
			{assign var='_rowColor' value=$rowColor[0]}
		{else}
			{assign var='_rowColor' value=$rowColor[1]}
		{/if}
		<tr height='20' class='{$_rowColor}S1'>
			{if $prerow}
			<td width='1%' nowrap='nowrap'>
					<input onclick='update_sel_count(this); sListView.check_item(this, document.KBAdminView); ' type='checkbox' class='checkbox' name='mass[]' value='{$rowData[$params.id]|default:$rowData.ID}'>
			</td>
			{/if}
			{counter start=0 name="colCounter" print=false assign="colCounter"}
			{foreach from=$displayColumns key=col item=params}
				<td scope='row' align='{$params.align|default:'left'}' valign=top class='{$_rowColor}S1' bgcolor='{$_bgColor}'><span sugar="sugar{$colCounter}b">
					{if $params.link && !$params.customCode}
						{if $params.contextMenu}
						<span id='obj_{$rowData[$params.id]|default:$rowData.ID}'>
						{/if}
                           <span id='adspan_{$rowData[$params.id]|default:$rowData.ID}' onmouseout="return document_clearAdditionalDetailsCall('{$rowData[$params.id]|default:$rowData.ID}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}', '{$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}')"
							onmouseover="return getDocumentDetails('KBDocuments', '{$rowData[$params.id]|default:$rowData.ID}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}', '{$rowData[$params.id]|default:$rowData.KBDOCUMENT_NAME}', 'panel_{$rowData[$params.id]|default:$rowData.ID}','{$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}')" onclick="updateKBViewsCount('{$rowData[$params.id]|default:$rowData.ID}')">
								<{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href='index.php?action={$params.action|default:'DetailView'}&module={if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}&record={$rowData[$params.id]|default:$rowData.ID}'>
								{$rowData.$col}
								</{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>
							</span>
						{if $params.contextMenu}
						</span>
						<script>
						SUGAR.contextMenu.registerObject('{$params.contextMenu.objectType}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}'{if $params.contextMenu.metaData},	{sugar_evalcolumn var=$params.contextMenu.metaData rowData=$rowData toJSON=true}{/if}, false);
						</script>
						{/if}
					{elseif $params.customCode}
						{sugar_evalcolumn var=$params.customCode rowData=$rowData}
					{elseif $params.currency_format}
						{sugar_currency_format
							var=$rowData.$col
							round=$params.currency_format.round
							decimals=$params.currency_format.decimals
							symbol=$params.currency_format.symbol
						}
					{elseif $params.type == 'bool'}
							<input type='checkbox' disabled=disabled class='checkbox'
							{if !empty($rowData[$col])}
								checked=checked
							{/if}
							/>

					{else}
						{$rowData.$col}
					{/if}
                    {if empty($rowData.$col)}&nbsp;{/if}
				</span sugar='sugar{$colCounter}b'></td>
				{counter name="colCounter"}
			{/foreach}
			{if !empty($quickViewLinks)}
			<td width='1%' nowrap='nowrap'>
				{if $pageData.access.edit}
					<a title='{$editLinkString}' id="edit-{$rowData.ID}" href='index.php?action=EditView&module={$params.module|default:$pageData.bean.moduleDir}&record={$rowData[$params.id]|default:$rowData.ID}&offset={$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}&stamp={$pageData.stamp}&return_module={$params.module|default:$pageData.bean.moduleDir}&return_id={$rowData[$params.id]|default:$rowData.ID}&return_action=KBAdminView'>{sugar_getimage alt=$mod_strings.LBL_EDIT_INLINE name="edit_inline" ext=".gif" other_attributes='border="0" '}</a>
				{/if}
			</td>
	    	</tr>
			{/if}

	{/foreach}
	{include file='modules/KBDocuments/tpls/ListViewPagination.tpl'}
</table>
{if $prerow}
<a href='javascript:unCheckAll();'>{$clearAll}</a>
{/if}
{if $contextMenus}
<script type='text/javascript'>
{$contextMenuScript}
</script>
{/if}

<script type='text/javascript'>
set_update_select_count();
</script>
