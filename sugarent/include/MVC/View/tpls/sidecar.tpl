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

<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="UTF-8">
        <title>SugarCRM</title>
        <link rel="shortcut icon" href="{sugar_getjspath file='themes/default/images/sugar_icon.ico'}">
        <!-- CSS -->
        {foreach from=$css_url item=url}
            <link rel="stylesheet" href="{sugar_getjspath file=$url}"/>
        {/foreach}
        <!--[if lt IE 10]>
        <link rel="stylesheet" type="text/css" href="{sugar_getjspath file='themes/default/css/ie.css'}">
        <![endif]-->
        {sugar_getscript file="include/javascript/modernizr.js"}
    </head>
    <body>
        <div id="sugarcrm">
            <div id="sidecar">
                <div id="alerts" class="alert-top">
                    <div class="loading gate">
                        <strong>{$LBL_LOADING}</strong>
                        <i class="fa fa-circle l1"></i><i class="fa fa-circle l2"></i><i class="fa fa-circle l3"></i>
                    </div>
                    <noscript>
                        <div class="alert-top">
                            <div class="alert alert-danger">
                                <strong>{$LBL_ENABLE_JAVASCRIPT}</strong>
                            </div>
                        </div>
                    </noscript>
                </div>
                <div id="header"></div>
                <div id="content"></div>
                <div id="sweetspot"></div>
                <div id="drawers"></div>
                <div id="footer"></div>
            </div>
        </div>
        <!-- App Scripts -->
        {if !empty($developerMode)}
            {sugar_getscript file="sidecar/minified/sidecar.js"}
        {else}
            {sugar_getscript file="sidecar/minified/sidecar.min.js"}
        {/if}
        <script src='{sugar_getjspath file=$sugarSidecarPath}'></script>
        <script src='{sugar_getjspath file=$SLFunctionsPath}'></script>
        <!-- <script src='{sugar_getjspath file='sidecar/minified/sugar.min.js'}'></script> -->
        <script src='{sugar_getjspath file=$configFile|cat:'?hash=$configHash'}'></script>
        {sugar_getscript file="cache/include/javascript/sugar_grp7.min.js"}
        {literal}
        <script language="javascript">
            if (parent.window != window && typeof(parent.SUGAR.App.router) != "undefined") {
                parent.SUGAR.App.router.navigate("#Home", {trigger:true});
            } else {
                var App;
                {/literal}{if $authorization}
                SUGAR.App.cache.set("{$appPrefix}AuthAccessToken", "{$authorization.access_token}")
                {if $authorization.refresh_token}
                SUGAR.App.cache.set("{$appPrefix}AuthRefreshToken", "{$authorization.refresh_token}")
                {/if}
                if (window.SUGAR.App.config.siteUrl != '') {ldelim}
                    history.replaceState(null, 'SugarCRM', window.SUGAR.App.config.siteUrl+"/"+window.location.hash)
                {rdelim}
                {/if}{literal}
                App = SUGAR.App.init({
                    el: "#sidecar",
                    callback: function(app){
                        app.progress.set(0.6);
                        app.once("app:view:change", function(){
                            app.progress.done();
                        });
                        $('#alerts').empty();
                        app.start();
                    }
                });
                App.api.debug = App.config.debugSugarApi;
            }
        </script>
        {/literal}

        {if !empty($voodooFile)}
            <script src="{sugar_getjspath file=$voodooFile}"></script>
        {/if}
    </body>
</html>
