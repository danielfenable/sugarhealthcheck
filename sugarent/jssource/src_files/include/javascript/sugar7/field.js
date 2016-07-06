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

(function (app) {

    /**
     * Field widgets to use Required labels with because they don't use select or input fields
     * @private
     */
    var _useRequiredLabels = {
        /**
         * It's nonsensical to make a bool field required since it is always has a value (TRUE or FALSE),
         * but it's possible to define it as required in vardefs.
         */
        "bool": true,
        /**
         * Only really needed on edit template where we use radio buttons.
         * For list-edit template, we don't use radio buttons but select2 widget.
         */
        "radioenum": 'edit'
    };

    app.events.on("app:init", function () {

        var _fieldProto = _.clone(app.view.Field.prototype);
        _.extend(app.view.Field.prototype, {

            /**
             * Hides help information (`def.help`) on edit views if set to
             * `true`. This is metadata driven.
             */
            hideHelp: false,

            /**
             * Template for the exclamation mark icon added when decorating errors
             */
            exclamationMarkTemplate: Handlebars.compile(
                '<span class="error-tooltip add-on" data-container="body" rel="tooltip" title="{{arrayJoin this ", "}}"><i class="fa fa-exclamation-circle"></i></span>'
            ),

            /**
             * Handle validation errors
             * Set to edit mode and decorates the field
             * @param {Object} errors The validation error(s) affecting this field
             */
            handleValidationError: function (errors) {
                this.clearErrorDecoration();
                _.defer(function (field) {
                    field._errors = errors;
                    field.parent ? field.parent.setMode('edit') : field.setMode('edit');

                    // As we're now "post form submission", if `no_required_placeholder`, we need to
                    // manually decorateRequired (as we only omit required on form's initial render)
                    if (!field._shouldRenderRequiredPlaceholder()) {
                        field.decorateRequired();
                    }

                    // handle view specific validation error considerations
                    if (field.view && field.view.trigger) {
                        field.view.trigger('field:error', field, true);
                    }
                }, this);

                this.$el.off("keydown.record");
                $(document).off("mousedown.record" + this.name);
            },

            /**
             * Resets the properties that are put on the field by
             * {@link #handleValidationError}.
             */
            removeValidationErrors: function() {
                this._errors = {};
            },

            /**
             * Remove the old view's css class (e.g. detail, edit)
             * currently maps the action directly to the css class name
             * but may be overridden in the future.
             *
             * @param {String} action the name of the action to remove
             * @protected
             */
            _removeViewClass: function (action) {
                // in case our getFieldElement has been overridden, use this.$el directly
                this.$el.removeClass(action);
            },

            /**
             * Add the new view's css class (e.g. detail, edit)
             * currently maps the action directly to the css class name
             * but may be overridden in the future.
             *
             * @param {String} action the name of the action to remove
             * @protected
             */
            _addViewClass: function (action) {
                // in case our getFieldElement has been overridden, use this.$el directly
                this.$el.addClass(action);
            },

            /**
             * Returns true if it's readonly, had access to read the field and has no data.
             *
             * Override this function for special logic or property to
             * determine nodata property.
             *
             * You can also specify that a certain field doesn't support
             * `showNoData` or always return either `true` or `false`.
             * Example for controller with `showNoData` always set to false:
             * <pre><code>
             * ({
             *     showNoData: false,
             *     // ...
             *     initialize: function(options) {
             *     // ...
             * })
             * </code></pre>
             *
             * @return {Boolean} `true` if it is readonly and it has no data
             * otherwise `false`.
             */
            showNoData: function() {
                return this.def.readonly && app.acl.hasAccessToModel('readonly', this.model, this.name) && this.name && !this.model.has(this.name);
            },

            /**
             * {@inheritDoc}
             * Checks fallback actions first and then follows ACLs checking
             * after that.
             *
             * First, check whether the action belongs to the fallback actions
             * and no more chaining fallback map.
             * Second, the field should fallback to 'nodata' if current field
             * requires to display nodata.
             * Finally, checks ACLs to see if the current user has access to
             * action.
             *
             * @param {String} action name.
             * @return {Boolean} true if accessable otherwise false.
             */
            _checkAccessToAction: function(action) {

                if (_.contains(this.fallbackActions, action) && _.isUndefined(this.viewFallbackMap[action])) {
                    return true;
                }

                if (_.result(this, 'showNoData') === true) {
                    return action === 'nodata';
                }

                return app.acl.hasAccessToModel(action, this.model, this.name);
            },

            /**
             * Defines fallback rules for ACL checking.
             */
            viewFallbackMap: {
                'list': 'detail',
                'edit': 'detail',
                'detail': 'noaccess',
                'noaccess' : 'nodata'
            },
            /**
             * List of view names that directly fallback to base template
             * instead of 'detail'.
             */
            fallbackActions: [
                'noaccess', 'nodata'
            ],

            /**
             * {@inheritdoc}
             */
            _getFallbackTemplate: function(viewName) {
                if (_.contains(this.fallbackActions, viewName)) {
                    return viewName;
                }
                return (this.isDisabled() && viewName === 'disabled') ? 'edit' :
                    (this.view.fallbackFieldTemplate || 'detail');
            },
            /**
             * Override _render to redecorate fields if field is on error state
             * and to add view action CSS class.
             */
            _render: function () {
                this.clearErrorDecoration();
                this._processHelp();

                _fieldProto._render.call(this);

                // handle rendering the action class if disabled
                if (this._previousAction) {
                    this._addViewClass(this._previousAction);
                }
                this._addViewClass(this.action);
                if (!_.isEmpty(this._errors)) {
                    if (this.action === 'edit') {
                        this.decorateError(this._errors);
                    }
                }
                if (this.def.required) {
                    this.clearRequiredLabel();
                    if ((this.action === 'edit' || -1 !== _.indexOf(['edit', 'list-edit'], this.tplName)) && this._shouldRenderRequiredPlaceholder()) {
                        this.decorateRequired();
                    }
                }
                if (this.def.help) {
                    this.clearHelper();
                    if (this.action === 'edit' || -1 !== _.indexOf(['edit', 'list-edit'], this.tplName)) {
                        this.decorateHelper();
                    }
                }

                /**
                 * Fix placeholder on global search on IE and old browsers
                 */
                if ($.fn.placeholder) {
                    var $input = this.$('input');
                    _.each($input, function(element) {
                        var $element = $(element);
                        $element.attr('placeholder') && $element.placeholder();
                    });
                }
            },

            /**
             * Help information block visibility is metadata driven
             * (`hide_help`).
             *
             * By default (if no metadata is defined) we show help block on
             * edit templates except on list views (will be hidden).
             * Currently there is no templates using this help block on detail
             * templates, but we make sure we only affect the edit view.
             *
             * @protected
             */
            _processHelp: function() {

                if (this.meta && !_.isUndefined(this.meta['hide_help'])) {
                    this.hideHelp = !!this.meta['hide_help'];
                    return;
                }

                if (this.view.action === 'list' && this.action === 'edit') {
                    this.hideHelp = true;
                }
            },

            /**
             * Remove helper tooltip
             */
            clearHelper: function() {
                this.$el.closest('.record-cell').attr({
                    'rel': ''
                });
            },
            /**
             * Default implementation for field helper
             */
            decorateHelper: function() {
                this.$el.closest('.record-cell').attr({
                    'rel': 'tooltip',
                    'data-title': this.def['help'],
                    'data-placement': 'bottom'
                });
            },
            /**
             * Helper to determine if we should call decorateRequired. Primarily for pages like Login
             * where we don't want to have (Required) in the placeholder on initial render. This gets
             * called on `this._render`. Since we DO want required in placeholder "post submission" we
             * check this again in `this.handleValidationError` and manually add back (Required) if set.
             *
             * @return {Boolean} Whether we should attempt to render required placeholder or not
             */
            _shouldRenderRequiredPlaceholder: function () {
                return !this.def.no_required_placeholder;
            },

            /**
             * Default implementation of Required decoration
             */
            decorateRequired: function () {
                var useLabels = _useRequiredLabels[this.type];
                useLabels = _.isString(useLabels) ? (useLabels === this.tplName) : useLabels;
                if (useLabels) {
                    this.setRequiredLabel();
                } else {
                    // Most fields use Placeholder
                    this.setRequiredPlaceholder();
                }

            },

            /**
             * Sets the required placeholder on field tag.
             *
             * If no element is provided, sets it on the first existing
             * `this.fieldTag`.
             * The required placeholder text is defined by `LBL_REQUIRED_FIELD`
             * label.
             * If an existing placeholder exists, prefixes with
             * `(LBL_REQUIRED_FIELD) ` and leaves the rest untouched.
             *
             * @param {HTMLElement} [elem] Element to attach the placeholder
             *   which defaults to first `this.fieldTag` available in this
             *   field.
             */
            setRequiredPlaceholder: function(el) {
                var label = app.lang.get('LBL_REQUIRED_FIELD', this.module),
                    placeholder;

                el = el || this.$(this.fieldTag).first();
                placeholder = el.attr('placeholder');
                placeholder = (placeholder) ? '(' + label + ') ' + placeholder : label;
                el.attr('placeholder', placeholder.trim()).addClass('required');
            },

            /**
             * Add Required label to field's label for fields that don't support placeholders
             * @param element (Optional) any element that is enclosed by field's record-cell
             */
            setRequiredLabel: function (element) {
                var ele = element || this.$el;
                var $label = ele.closest('.record-cell').find(".record-label");
                $label.append(' <span data-required="required">(' + app.lang.get("LBL_REQUIRED_FIELD", this.module) + ')</span>');
            },

            /**
             * Remove default Required label from field labels
             * @param element (Optional) any element that is enclosed by field's record-cell
             */
            clearRequiredLabel: function (element) {
                var ele = element || this.$el;
                var $label = ele.closest('.record-cell').find('span[data-required]');
                $label.remove();
            },

            /**
             * {@inheritdoc}
             *
             * Override setMode to remove any stale view action CSS classes.
             * @override
             */
            setMode: function (name) {
                // if we are disabled, we want to remove the previous view action, not the disabled class
                var oldAction = this._previousAction || this.action;
                this._removeViewClass(oldAction);

                _fieldProto.setMode.call(this, name);
            },

            /**
             * {@inheritdoc}
             *
             * Override setMode to remove the stale disabled CSS class.
             * @override
             */
            setDisabled: function (disable) {

                if (!this._checkAccessToAction('disabled')) {
                    return;
                }

                disable = _.isUndefined(disable) ? true : disable;

                // remove the stale disabled CSS class (this.action === 'disabled')
                if (disable === false && this.isDisabled()) {
                    this._removeViewClass(this.action);
                }
                _fieldProto.setDisabled.call(this, disable);
            },
            /**
             * Decorate error gets called when this Field has a validation error.  This function applies custom error
             * styling appropriate for this field.
             * The field is put into 'edit' mode prior to this this being called.
             *
             * Fields should override/implement this when they need to provide custom error styling for different field
             * types (like e-mail, etc).  You can also override clearErrorDecoration.
             *
             * @param {Object} errors The validation error(s) affecting this field
             */
            decorateError: function (errors) {
                var ftag = this.fieldTag || '',
                    $ftag = this.$(ftag),
                    errorMessages = [],
                    $tooltip;

                // Add error styling
                this.$el.closest('.record-cell').addClass('error');
                this.$el.addClass('error');
                if(_.isString(errors)){
                    // A custom validation error was triggered for this field
                    errorMessages.push(errors);
                } else {
                    // For each error add to error help block
                    _.each(errors, function (errorContext, errorName) {
                        errorMessages.push(app.error.getErrorString(errorName, errorContext));
                    });
                }

                // FIXME: un-needed extra div wrapping the field should be
                // removed when SC-2568 gets in, for the time being it is only
                // used on non datetime fields
                var isWrapped = $ftag.parent().hasClass('input-append');
                if (!isWrapped) {
                    $ftag.wrap('<div class="input-append error ' + ftag + '">');
                } else {
                    $ftag.parent().addClass('error');
                }

                $tooltip = $(this.exclamationMarkTemplate(errorMessages));
                $ftag.after($tooltip);
                this.createErrorTooltips($tooltip);
            },

            /**
             * Create error tooltips.
             * @param {jQuery} $element
             */
            createErrorTooltips: function($element) {
                this._errorTooltips = this._errorTooltips || [];
                this._errorTooltips.push(app.utils.tooltip.initialize($element));
            },

            /**
             * Destroy all error tooltips.
             */
            destroyAllErrorTooltips: function() {
                app.utils.tooltip.destroy(this._errorTooltips);
                this._errorTooltips = null;
            },

            /**
             * Destroy all error tooltips before disposing the field.
             * @private
             */
            _dispose: function() {
                this.destroyAllErrorTooltips();
                _fieldProto._dispose.call(this);
            },

            /**
             * Remove error decoration from field if it exists.
             */
            clearErrorDecoration: function () {
                var ftag = this.fieldTag || '',
                    $ftag = this.$(ftag);

                // Remove previous exclamation then add back.
                this.destroyAllErrorTooltips();
                this.$('.add-on.error-tooltip').remove();
                var isWrapped = $ftag.parent().hasClass('input-append');

                // FIXME: this check for datetime should be made generic (when
                // SC-2568 gets in) based on use of normal addon
                var isDateField = $ftag.parent().hasClass('date'),
                    isCurrencyField = $ftag.parent().hasClass('currency');
                if (isDateField || isCurrencyField) {
                    $ftag.parent().removeClass('error');
                } else if (isWrapped) {
                    $ftag.unwrap();
                }

                this.$el.removeClass(ftag);
                this.$el.removeClass("error");
                this.$el.closest('.record-cell').removeClass("error");

                if (this.view && this.view.trigger) {
                    this.view.trigger('field:error', this, false);
                }
            },

            /**
             * Adding additional events for links with bad `href` attribute
             * @param {Array} events Events for the field
             */
            delegateEvents: function(events) {
                events = events || this.events || (this.def ? this.def.events : null);
                if (!events) {
                    return;
                }
                events['click a[href="javascript:void(0)"]'] = '_handleBadLinkHref';
                events['click a[href="javascript:void(0);"]'] = '_handleBadLinkHref';
                _fieldProto.delegateEvents.call(this, events);
            },

            /**
             * {@inheritDoc}
             * Attach focus handler in order to pass the current element's location.
             */
            bindDomChange: function() {
                this.$(this.fieldTag).on('focus', _.bind(this.handleFocus, this));
                _fieldProto.bindDomChange.call(this);
            },

            /**
             * {@inheritDoc}
             * Calculate current offset location and pass it to the parent's view.
             */
            handleFocus: function(evt) {
                if (this.disposed) {
                    return;
                }
                var left = this.$el.offset().left,
                    right = this.$el.outerWidth() + left,
                    top = this.$el.offset().top,
                    bottom = this.$el.outerHeight() + top;
                this.view.trigger('field:focus:location', {
                    left: left,
                    right: right,
                    top: top,
                    bottom: bottom
                });
            },

            /**
             * Handle click event for bad links
             * @param {Object} evt Click event
             * @private
             */
            _handleBadLinkHref: function(evt) {
                evt.preventDefault();
            }
        });
    });

})(SUGAR.App);
