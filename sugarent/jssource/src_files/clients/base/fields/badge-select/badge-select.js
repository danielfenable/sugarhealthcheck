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
 * @class View.Fields.Base.BadgeSelectField
 * @alias SUGAR.App.view.fields.BaseBadgeSelectField
 * @extends View.Fields.Base.EnumField
 */
({
    extendsFrom: 'EnumField',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        if (this.view && this.view.layout) {
            this.view.layout.on('headerpane:adjust_fields', this.repositionDropdown, this);
        }
    },

    /**
     * Resets position of status dropdown if Select2 is active and open
     * and the position of the Select2 container is shifted, which happens
     * when other fields in the headerpane are hidden on status edit
     */
    repositionDropdown: function() {
        var $el = this.$(this.fieldTag).select2('container');

        if ($el.hasClass('select2-dropdown-open')) {
            this.$(this.fieldTag).data('select2').dropdown.css({'left': $el.offset().left});
        }
    },

    /**
     * @inheritdoc
     *
     * This field renders as a badge when not in edit mode and as an enum when
     * in edit mode.
     *
     * @private
     */
    _loadTemplate: function() {
        if (this.action === 'edit') {
            this.type = 'enum';
        }

        this._super('_loadTemplate');
        this.type = 'badge-select';
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        if (this.view && this.view.layout) {
            this.view.layout.off(null, null, this);
        }

        this._super('_dispose');
    }
})
