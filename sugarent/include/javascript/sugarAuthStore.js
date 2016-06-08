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
(function(app){var serviceName="SugarCRM",emptyFn=function(){},tokenMap={"AuthAccessToken":app.AUTH_ACCESS_TOKEN,"AuthRefreshToken":app.AUTH_REFRESH_TOKEN};var _keychain={get:function(key){return tokenMap[key];},set:function(key,value){tokenMap[key]=value;},cut:function(key){delete tokenMap[key];}};app.augment("sugarAuthStore",_keychain);})(SUGAR.App);