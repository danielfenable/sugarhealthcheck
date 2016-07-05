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
(function(app){app.events.on('app:init',function(){app.plugins.register('Prettify',['layout','view'],{_scriptReady:false,_pageReady:false,onAttach:function(component,plugin){this.on('init',function(){var self=this;if(window.prettyPrint){this._scriptReady=true;return;}
$.getScript('styleguide/content/js/google-code-prettify/prettify.js',function(){self._scriptReady=true;if(self._pageReady){prettyPrint();}});},null,component);this.on('render',function(){this._pageReady=true;if(this._scriptReady){prettyPrint();}},null,component);}});});})(SUGAR.App);