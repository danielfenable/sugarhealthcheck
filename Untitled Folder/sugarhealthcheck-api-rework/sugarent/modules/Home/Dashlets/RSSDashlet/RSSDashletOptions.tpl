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

<div style='width: 500px'>
<form name='configure_{$id}' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_{$id}", SUGAR.mySugar.uncoverPage);'>
{sugar_csrf_form_token}
<input type='hidden' name='id' value='{$id}'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="400" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td valign='top' nowrap scope='row'>{$titleLbl}</td>
    <td valign='top'>
    	<input class="text" name="title" size='20' value='{$title}'>
    </td>
</tr>
{if $isRefreshable}
<tr>
    <td scope='row'>
        {$autoRefresh}
    </td>
    <td>
        <select name='autoRefresh'>
            {html_options options=$autoRefreshOptions selected=$autoRefreshSelect}
        </select>
    </td>
</tr>
{/if}
<tr>
    <td valign='top' nowrap scope='row'>{$rssUrlLbl}</td>
    <td valign='top'>
    	<input class="text" name="url" size='20' value='{$url}'>
    </td>
</tr>
<tr>
    <td valign='top' nowrap scope='row'>{$heightLbl}</td>
    <td valign='top'>
    	<input class="text" name="height" size='3' value='{$height}'>
    </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='submit' class='button' value='{$saveLbl}'>
        <input type='submit' class='button' value='{$clearLbl}' onclick='SUGAR.searchForm.clear_form(this.form,["title","autoRefresh"]);return false;'>
   	</td>
</tr>
</table>
</form>

</div>