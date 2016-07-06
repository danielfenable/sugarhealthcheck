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
 * @class View.Layouts.Base.SubpanelWithMassupdateLayout
 * @alias SUGAR.App.view.layouts.BaseSubpanelWithMassupdateLayout
 * @extends View.Layouts.Base.SubpanelLayout
 */
({
    extendsFrom:"SubpanelLayout",

    /**
     * Overriding to just check the items in a subpanel-with-massupdate
     * @inheritdoc
     * @override
     */
    _stopComponentToggle: function(component) {
        return component.name === "panel-top" || component.name === 'massupdate';
    }
})
