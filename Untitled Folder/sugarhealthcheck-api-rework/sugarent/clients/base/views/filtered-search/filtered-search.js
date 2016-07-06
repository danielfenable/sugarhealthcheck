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
({events:{'keyup [data-searchfield]':'searchFired'},bindDataChange:function(){this.context.on('filteredlist:filter:set',this.setFilter,this);},setFilter:function(filter){var label=app.lang.get('LBL_SEARCH_BY')+' '+filter.join(', ')+'...';this.$('[data-searchfield]').attr('placeholder',label);},searchFired:_.debounce(function(evt){var value=$(evt.currentTarget).val();this.context.trigger('filteredlist:search:fired',value);},100)})