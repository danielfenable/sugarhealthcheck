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
({events:{"click [name=login_button]":"login","click [name=login_form_button]":"login_form"},_render:function(){this.logoUrl=app.metadata.getLogoUrl();app.view.View.prototype._render.call(this);this.refreshAddtionalComponents();return this;},refreshAddtionalComponents:function(){_.each(app.additionalComponents,function(component){component.render();});},login:function(){app.router.login();},login_form:function(){app.controller.loadView({module:"Login",layout:"login",create:true});}})