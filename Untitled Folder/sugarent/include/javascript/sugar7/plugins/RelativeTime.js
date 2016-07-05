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
(function(app){if(!$.fn.liverelativedate){return;}
app.events.on('app:init',function(){app.plugins.register('RelativeTime',['view','field'],{onAttach:function(component){component.on('render',function(){component.$('[datetime]').liverelativedate();});},_render:function(){this.$('[datetime]').liverelativedate('destroy');Object.getPrototypeOf(this)._render.call(this);},onDetach:function(component){component.$('[datetime]').liverelativedate('destroy');}});});})(SUGAR.App);