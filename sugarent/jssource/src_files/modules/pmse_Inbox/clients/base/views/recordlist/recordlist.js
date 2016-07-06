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
({
    extendsFrom: 'RecordlistView',

    contextEvents: {
        "list:process:fire": "showCase"
    },

    showCase: function (model) {
        //var url = model.module + '/' + model.id + '/layout/show-case/' + model.get('flow_id');
        var ShowCaseUrl = app.router.buildRoute(model.module, model.get('id2'), 'layout/show-case/' + model.get('flow_id'));
        var ShowCaseUrlBwc = app.bwc.buildRoute(model.module, '', 'showCase', {id:model.get('flow_id')});
        var SugarModule = model.get('cas_sugar_module');
        if (app.metadata.getModule(SugarModule).isBwcEnabled) {
            app.router.navigate(ShowCaseUrlBwc , {trigger: true, replace: true });
        } else {
            app.router.navigate(ShowCaseUrl , {trigger: true, replace: true });
        }
    }
})