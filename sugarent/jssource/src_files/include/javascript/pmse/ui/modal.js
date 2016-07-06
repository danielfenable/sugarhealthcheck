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
 * @class Modal
 * Handle modal divs
 * @extend Base
 *
 * @constructor
 * Creates a new instance of the object
 * @param {Object} options
 */
var Modal = function (options) {
    Base.call(this, options);
    /**
     * Defines the state of the modal object
     * @type {Boolean}
     */
    this.visible = null;
    /**
     * Defines the property of loading
     * @type {Boolean}
     */
    this.loaded = false;
    /**
     * Defines the HTML Element Pointer
     * @type {HTMLElement}
     */
    this.html = null;
    /**
     * Defines the click handler
     * @type {Function}
     */
    this.clickHander = null;
    Modal.prototype.initObject.call(this, options);
};

Modal.prototype = new Base();

/**
 * Defines the object's type
 * @type {String}
 */
Modal.prototype.type = "Modal";

/**
 * Initializes the object with default values
 * @param {Object} options
 */
Modal.prototype.initObject = function (options) {
    var defaults = {
        visible: false,
        clickHander: function () {}
    };
    $.extend(true, defaults, options);
    this.setVisible(defaults.visible)
        .setClickHandler(defaults.clickHander);
};

/**
 * Sets the visible property
 * @param {Boolean} value
 * @return {*}
 */
Modal.prototype.setVisible = function (value) {
    this.visible = value;
    return this;
};

/**
 * Sets the click handler
 * @param {Function} fn
 * @return {*}
 */
Modal.prototype.setClickHandler = function (fn) {
    this.clickHander = fn;
    return this;
};

/**
 * Shows the modal object
 */
Modal.prototype.show = function (child) {
    var modalDiv;
    if (!this.html) {
        modalDiv = document.createElement('div');
        modalDiv.className = 'adam-modal';
        modalDiv.id = this.id;
        this.html = modalDiv;
    }
    if (child instanceof Element) {
        this.html.appendChild(child.getHTML());
    }
    document.body.appendChild(this.html);
    this.setVisible(true);
    if (!this.loaded) {
        this.attachListeners();
        this.loaded = true;
    }
};

/**
 * Hide the modal object
 */
Modal.prototype.hide = function () {
    if (this.visible) {
        document.body.removeChild(this.html);
        this.setVisible(false);
    }
};

/**
 * Initializes the modal listeners
 */
Modal.prototype.attachListeners = function () {
    var self = this;
    if (this.html) {
        $(this.html)
            .click(function (e) {
                e.stopPropagation();
                if (self.clickHander) {
                    self.clickHander();
                }
            })
            .mouseover(function (e) {
                e.stopPropagation();
            })
            .mouseout(function (e) {
                e.stopPropagation();
            })
            .mousedown(function (e) {
                e.stopPropagation();
            });
    }
};
