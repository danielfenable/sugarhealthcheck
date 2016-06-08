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
({className:'container-fluid',_renderHtml:function(){this._super('_renderHtml');this.$('#mm001demo *').on('click.styleguide',function(){return false;});this.$('*').on('click.styleguide',function(){setTimeout(function(){this.$('#mm001demo').find('li.open .btn-group').addClass('open');},0.1);});},_dispose:function(){this.$('#mm001demo *').off('click.styleguide');this._super('_dispose');}})