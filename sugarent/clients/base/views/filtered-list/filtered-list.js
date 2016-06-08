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
({extendsFrom:'ListView',filteredCollection:[],searchTerm:'',_patternToReg:{startsWith:'^(term)',endsWith:'(term)$',contains:'(term)'},_initFilter:function(){var filter=this._filter||_.chain(this.getFields()).filter(function(field){return field.filter;}).map(function(field){return{name:field.name,label:app.lang.get(field.label,this.module),filter:field.filter};},this).value();this.context.trigger('filteredlist:filter:set',_.pluck(filter,'label'));if(_.isEmpty(filter)){return;}
this._filter=filter;},filterCollection:function(){var term=this.searchTerm,filter=this._filter;if(!_.isEmpty(term)&&_.isString(term)){this.filteredCollection=this.collection.filter(function(model){return _.some(filter,function(params){var pattern=this._patternToReg[params.filter].replace('term',term),tester=new RegExp(pattern,'i');return tester.test(model.get(params.name));},this);},this);}},setSearchTerm:function(term){this.searchTerm=term;this._renderData();},setOrderBy:function(event){this._super('setOrderBy',[event]);this.collection.comparator=function(model){return model.get(this.orderBy.field);};if(this.orderBy.direction==='desc'){this.collection.sort({silent:true});this.collection.models.reverse();this.collection.trigger('sort',this.collection);}else{this.collection.sort();}},bindDataChange:function(){this.on('render',this._initFilter,this);if(this.collection){this.collection.on('reset sort',this._renderData,this);}
this.context.on('filteredlist:search:fired',this.setSearchTerm,this);},_renderData:function(){this.filteredCollection=this.collection.models;this.filterCollection();this.render();}})