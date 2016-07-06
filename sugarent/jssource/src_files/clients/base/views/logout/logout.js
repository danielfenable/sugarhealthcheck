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
/**
 * @class View.Views.Base.LogoutView
 * @alias SUGAR.App.view.views.BaseLogoutView
 * @extends View.View
 */
({
    events: {
        "click [name=login_button]": "login",
        "click [name=login_form_button]": "login_form"
    },

    /**
     * @override
     * @private
     */
    _render: function() {
        this.logoUrl = app.metadata.getLogoUrl();
        app.view.View.prototype._render.call(this);
        this.refreshAddtionalComponents();
        return this;
    },

    /**
     * Refresh additional components
     */
    refreshAddtionalComponents: function() {
        _.each(app.additionalComponents, function(component) {
            component.render();
        });
    },

    /**
     * Process Login
     */
    login: function() {
    	app.router.login();
    },
    
    /**
     * Show Login form
     */
    login_form: function() {
        app.controller.loadView({
            module: "Login",
            layout: "login",
            create: true
        });
    }
})
