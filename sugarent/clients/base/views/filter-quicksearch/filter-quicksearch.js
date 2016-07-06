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
({events:{'keyup':'throttledSearch','paste':'throttledSearch'},plugins:['QuickSearchFilter'],className:'table-cell full-width',initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);this.listenTo(this.layout,'filter:clear:quicksearch',this.clearInput);this.listenTo(this.layout,'filter:change:module',this.updatePlaceholder);app.shortcuts.register('Filter:Search',['f i','ctrl+alt+9'],function(){if(this.$el.is(':visible')){this.$el.focus();}},this);},_renderHtml:function(){this._super('_renderHtml');this.setElement(this.$('input'));},throttledSearch:_.debounce(function(event){this.applyQuickSearch();},400),getFieldLabels:function(moduleName,fields){var moduleMeta=app.metadata.getModule(moduleName);var labels=[];_.each(_.flatten(fields),function(fieldName){var fieldMeta=moduleMeta.fields[fieldName];if(fieldMeta){labels.push(app.lang.get(fieldMeta.vname,moduleName).toLowerCase());}});return labels;},updatePlaceholder:function(linkModuleName,linkModule){var label;this.toggleInput();if(!this.$el.hasClass('hide')&&linkModule!=='all_modules'){var fields=this.getModuleQuickSearchFields(linkModuleName),fieldLabels=this.getFieldLabels(linkModuleName,fields);label=app.lang.get('LBL_SEARCH_BY')+' '+fieldLabels.join(', ')+'...';}else{label=app.lang.get('LBL_BASIC_QUICK_SEARCH');}
var input=this.$el.attr('placeholder',label);if(_.isFunction(input.placeholder)){input.placeholder();}},toggleInput:function(){this.$el.toggleClass('hide',!!this.layout.showingActivities);},clearInput:function(){this.toggleInput();var input=this.$el.val('');if(_.isFunction(input.placeholder)){input.placeholder();}
this.applyQuickSearch(true);},applyQuickSearch:function(force){force=!_.isUndefined(force)?force:false;var newSearch=this.$el.val();if(force||this.currentSearch!==newSearch){this.currentSearch=newSearch;this.layout.trigger('filter:apply',newSearch);}}})