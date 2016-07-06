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
({extendsFrom:'CreateActionsView',initialize:function(options){this._super("initialize",[options]);this.context.on('update:account',this.handleKeyup);},handleKeyup:_.throttle(function(){var searchedValue=this.$('input.inherit-width').val();if(searchedValue&&searchedValue.length>=3){this.context.trigger('input:name:keyup',searchedValue);}},1000,{leading:false})})