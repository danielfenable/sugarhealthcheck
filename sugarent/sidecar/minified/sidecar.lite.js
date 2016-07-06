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
(function() {
    var he = document.getElementsByTagName('head')[0];
    
    // We need a good URL to figure out where to get this stuff in the browser.
    var sidecarUrl = 'sidecar/';
    var indexOfSugarCrm = location.pathname.indexOf("/sugarcrm");
    if ( indexOfSugarCrm > -1 ) {
        sidecarUrl = location.pathname.slice(0, indexOfSugarCrm) + "/sugarcrm/" + sidecarUrl;
    }
    
    function include(file) {
        // Use docment.write to make sure files are loaded and parsed
        // before any other scripts on the page.  We're not worried about
        // performance for dev or for the config file.
        document.write('<scr' + 'ipt src="' + file + '" type="text/javascript"></scr' + 'ipt>');
    }
    
    
    include(sidecarUrl + 'lib/sugarapi/sugarapi.js');
    include(sidecarUrl + 'src/app.js');
    include(sidecarUrl + 'src/utils/utils.js');
    include(sidecarUrl + 'src/utils/date.js');
    include(sidecarUrl + 'src/utils/file.js');
    include(sidecarUrl + 'src/utils/math.js');
    include(sidecarUrl + 'src/utils/currency.js');
    include(sidecarUrl + 'src/core/before-event.js');
    include(sidecarUrl + 'src/core/cache.js');
    include(sidecarUrl + 'src/core/events.js');
    include(sidecarUrl + 'src/core/error.js');
    include(sidecarUrl + 'src/view/template.js');
    include(sidecarUrl + 'src/core/context.js');
    include(sidecarUrl + 'src/core/controller.js');
    include(sidecarUrl + 'src/core/router.js');
    include(sidecarUrl + 'src/core/language.js');
    include(sidecarUrl + 'src/core/metadata-manager.js');
    include(sidecarUrl + 'src/core/acl.js');
    include(sidecarUrl + 'src/core/user.js');
    include(sidecarUrl + 'src/core/plugin-manager.js');
    include(sidecarUrl + 'src/utils/logger.js');
    include(sidecarUrl + 'src/data/bean.js');
    include(sidecarUrl + 'src/data/bean-collection.js');
    include(sidecarUrl + 'src/data/mixed-bean-collection.js');
    include(sidecarUrl + 'src/data/data-manager.js');
    include(sidecarUrl + 'src/data/validation.js');
    include(sidecarUrl + 'src/view/hbs-helpers.js');
    include(sidecarUrl + 'src/view/view-manager.js');
    include(sidecarUrl + 'src/view/component.js');
    include(sidecarUrl + 'src/view/view.js');
    include(sidecarUrl + 'src/view/field.js');
    include(sidecarUrl + 'src/view/layout.js');
    include(sidecarUrl + 'src/view/alert.js');
    include(sidecarUrl + 'src/view/tutorial.js');
    include(sidecarUrl + 'lib/sugaranalytics/sugaranalytics.js');
    include(sidecarUrl + 'lib/sugaranalytics/googleanalyticsconnector.js');
    include(sidecarUrl + 'lib/sugar/sugar.searchahead.js');
    include(sidecarUrl + 'lib/sugar/sugar.liverelativedate.js');
    include(sidecarUrl + 'lib/sugar/sugar.ajaxcallInprogress.js');
    include(sidecarUrl + 'lib/sugaraccessibility/sugaraccessibility.js');
    include(sidecarUrl + 'lib/sugaraccessibility/click.js');
    include(sidecarUrl + 'lib/sugaraccessibility/label.js');
    include(sidecarUrl + 'lib/mousetrap/mousetrap.min.js');
    include(sidecarUrl + 'src/utils/shortcuts.js');
}());
