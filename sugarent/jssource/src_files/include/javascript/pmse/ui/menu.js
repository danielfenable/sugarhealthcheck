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
 * @class Menu
 * Handles the Menues
 * @extend Container
 *
 * @constructor
 * Creates a new instance of the object
 * @param {Object} options
 */
var Menu = function (options) {
    Container.call(this, options);
    /**
     * Items Arrays
     * @type {Array}
     */
    this.items = [];
    /**
     * Defines the menu name
     * @type {String}
     */
    this.name = null;
    /**
     * Defines the menu's state
     * @type {String}
     */
    this.state = null;
    /**
     * Defines the menu's tooltip
     * @type {String}
     */
    this.toolTip = null;
    /**
     * Defines the parent object
     * @type {Object}
     */
    this.parent = null;

    this.canvas = null;

    this.visible = null;

    this.currentItem = null;

    this.loaded = false;

    Menu.prototype.initObject.call(this, options);
};
Menu.prototype = new Container();

/**
 * Defines the object's type
 * @type {String}
 */
Menu.prototype.type = "Menu";

/**
 * Defines the object's family
 * @type {String}
 */
Menu.prototype.family = "Menu";

/**
 * Initialize the object with default values
 * @param {Object} options
 */
Menu.prototype.initObject = function (options) {
    var defaults = {
        parent: null,
        items: [],
        name: null,
        state: null,
        toolTip: null,
        parentMenu: null,
        canvas: null,
        visible: false,
        currentItem: null
    };
    $.extend(true, defaults, options);
    this.setCanvas(defaults.canvas)
        .setItems(defaults.items)
        .setName(defaults.name)
        .setState(defaults.state)
        .setParent(defaults.parent)
        //.setParentMenu(defaults.parentMenu)
        .setToolTip(defaults.toolTip)
        .setVisible(defaults.visible)
        .setCurrentItem(defaults.currentItem);
};

/**
 * Sets the items of the menu
 * @param {Array} items
 * @return {*}
 */
Menu.prototype.setItems = function (items) {
    var item,
        i;
    for (i = 0; i < items.length; i += 1) {
        switch (items[i].jtype) {
        case 'separator':
            item = new SeparatorItem(items[i], this);
            break;
        case 'checkbox':
            item = new CheckboxItem(items[i], this);
            break;
        default:
            item = new MenuItem(items[i], this);
        }
        this.items.push(item);
    }
    this.calculateDimension();
    return this;
};

/**
 * Sets the name property
 * @param {String} text
 * @return {*}
 */
Menu.prototype.setName = function (text) {
    this.name = text;
    return this;
};

/**
 * Sets the state property
 * @param {String} state
 * @return {*}
 */
Menu.prototype.setState = function (state) {
    this.state = state;
    return this;
};

/**
 * Sets the tool tip property
 * @param {String} text
 * @return {*}
 */
Menu.prototype.setToolTip = function (text) {
    this.toolTip = text;
    return this;
};

/**
 * Sets the parent's menu property
 * @param {Object} obj
 * @return {*}
 */
Menu.prototype.setParent = function (obj) {
    if (typeof obj === 'object') {
        this.parent = obj;
    }
    return this;
};

// Menu.prototype.setParentMenu = function (obj) {
//     if (typeof obj === 'object') {
//         this.parentMenu = obj;
//     }
//     return this;
// };

Menu.prototype.setCanvas = function (obj) {
    this.canvas = obj;
    return this;
};

Menu.prototype.setVisible = function (value) {
    this.visible = value;
    return this;
};

Menu.prototype.setCurrentItem = function (item) {
    if (this.currentItem && this.currentItem.hasMenuActive) {
        this.currentItem.setFocused(false);
        this.currentItem.setHasMenuActive(false);
        this.currentItem.setActiveItem(false);
        this.currentItem.setActiveMenu(false);
    }
    this.currentItem = item;
    return this;
};

Menu.prototype.createHTML = function () {
    Element.prototype.createHTML.call(this);
    this.style.addClasses(['adam-menu']);
    this.setZOrder(1000);
    this.generateMenu();
    return this.html;
};

Menu.prototype.generateMenu = function () {
    var i, ul;
    ul = this.createHTMLElement('ul');
    ul.className = 'adam-list';
    for (i = 0; i < this.items.length; i += 1) {
        ul.appendChild(this.items[i].getHTML());
    }
    this.html.appendChild(ul);
    return this;
};

Menu.prototype.paint = function () {

};

/**
 * Sets the menu's position and show the menu
 * @param {Number} x
 * @param {Number} y
 */
Menu.prototype.show = function (x, y) {
    if (this.canvas) {
        if (!this.loaded) {
            this.setPosition(x, y);
            this.calculateItemCoords();
        }
        this.canvas.html.appendChild(this.getHTML());
        if (!this.loaded) {
            this.attachListeners();
            this.loaded = true;
        }
        this.setVisible(true);
        if (this.parent.type === 'AdamCanvas') {
            this.parent.setCurrentMenu(this);
        } else if (this.parent.type !== 'MenuItem') {
            this.parent.canvas.setCurrentMenu(this);
        }
    }
};

Menu.prototype.calculateDimension = function () {
    var c, h, i, len, label, w;
    h = 4;
    c = 0;
    for (i = 0; i < this.items.length; i += 1) {
        switch (this.items[i].getType()) {
        case 'MenuItem':
        case 'CheckboxItem':
            h += 24;
            break;
        case 'SeparatorItem':
            h += 4;
            break;
        }
        label = this.items[i].label || "";
        if (label !== "") {
            len = this.calculateWidth(label);
            if (len > c) {
                c = len;
            }
        }
    }

    w = 21 + 48 + 2 + c;
    this.setDimension(w, h);
    return this;
};

Menu.prototype.attachListeners = function () {
    var i;
    for (i = 0; i < this.items.length; i += 1) {
        this.items[i].attachListeners();
    }
    return this;
};

Menu.prototype.hide = function () {
    var i;
    if (this.canvas && this.visible) {
        for (i = 0; i < this.items.length; i += 1) {
            if (this.items[i].menu) {
                this.items[i].menu.hide();
            }
        }
        this.canvas.html.removeChild(this.getHTML());
        this.setVisible(false);
        if (this.parent.type === "AdamCanvas") {
            this.parent.setCurrentMenu(null);
        }
    }
};

Menu.prototype.calculateItemCoords = function () {
    var h, ht, i;
    ht = 2;
    for (i = 0; i < this.items.length; i += 1) {
        switch (this.items[i].getType()) {
        case 'CheckboxItem':
        case 'MenuItem':
            this.items[i].setPosition(this.x, this.y + ht);
            this.items[i].setDimension(this.width - 2, 24);
            h = 24;
            ht += h;
            break;
        default:
            this.items[i].setPosition(this.x, ht);
            this.items[i].setDimension(this.width - 2, 4);
            h = 4;
            ht += h;
        }
    }
};
