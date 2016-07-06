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
({extendsFrom:'moduleListLayout',_setActiveModule:function(module){if(_.isEmpty(this._components)){return this;}
var mappedModule=app.metadata.getTabMappedModule(module);this.$('[data-container=module-list]').children('.active').removeClass('active');if(!this._catalog[mappedModule]){return;}
this._catalog[mappedModule].long.addClass('active');this.toggleModule(mappedModule,true);return this;}})