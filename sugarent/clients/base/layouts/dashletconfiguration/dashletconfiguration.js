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
({plugins:['ShortcutSession'],shortcuts:['Dashlet:Config:Cancel','Dashlet:Config:Save'],initialize:function(options){var meta=app.metadata.getLayout(options.module,options.name),main_panel;_.each(meta.components,function(component){main_panel=_.find(component.layout.components,function(childComponent){return childComponent.layout&&childComponent.layout.name==='main-pane';},this);},this);if(main_panel){main_panel.layout.components=_.union(main_panel.layout.components,options.meta.components);}
options.meta=meta;app.view.Layout.prototype.initialize.call(this,options);}})