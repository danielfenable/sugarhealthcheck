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
({extendsFrom:'HeaderpaneView',events:{'click a[name=cancel_button]':'cancel','click a[name=save_button]':'save'},_formatTitle:function(title){var records=this.context.get('selectedDuplicates');return app.lang.get(title,this.module,{mergeCount:records.length});},cancel:function(){app.drawer.close();},save:function(){this.layout.trigger('mergeduplicates:save:fire');}})