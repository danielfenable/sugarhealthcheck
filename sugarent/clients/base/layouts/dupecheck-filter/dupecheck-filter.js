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
({extendsFrom:'FilterLayout',initialFilter:'all_records',initialize:function(options){this._super('initialize',[options]);this.name='filter';this.setLastFilter(this.module,this.layoutType,this.initialFilter);},getRelevantContextList:function(){return[this.context];},getLastFilter:function(){var lastFilter=this._super('getLastFilter',arguments);return(_.isUndefined(lastFilter))?this.initialFilter:lastFilter;}})