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
({extendsFrom:'HeaderpaneView',events:{'click [name=save_button]:not(".disabled")':'initiateSave','click [name=cancel_button]':'initiateCancel'},initialize:function(options){this._super("initialize",[options]);this.context.on('lead:convert-save:toggle',this.toggleSaveButton,this);},_formatTitle:function(title){var leadsModel=this.context.get('leadsModel'),name=!_.isUndefined(leadsModel.get('name'))?leadsModel.get('name'):leadsModel.get('first_name')+' '+leadsModel.get('last_name');return app.lang.get(title,this.module)+': '+name;},initiateSave:function(){this.context.trigger('lead:convert:save');},initiateCancel:function(){app.drawer.close();},toggleSaveButton:function(enable){this.$('[name=save_button]').toggleClass('disabled',!enable);}})