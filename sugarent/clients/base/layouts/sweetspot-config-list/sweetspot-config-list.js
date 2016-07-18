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
({className:'columns',plugins:['Editable'],initialize:function(options){this._super('initialize',[options]);this._initRows();this._bindEvents();},_initRows:function(){var data=app.user.getPreference('sweetspot');data=data&&data.hotkeys;if(_.isEmpty(data)){this.addRow();return;}
_.each(data,function(row){_.each(row.keyword,function(word){this._initRow(row,word);},this);},this);},_initRow:function(row,keyword,action){action=action||row.action;keyword=keyword||row.keyword;var rowComponent=this.addRow();rowComponent.model.set('action',action);rowComponent.model.set('keyword',keyword);},_bindEvents:function(){this.context.on('sweetspot:ask:configs',this.generateConfig,this);this.context.on('sweetspot:config:addRow',this.addRow,this);this.context.on('sweetspot:config:removeRow',this.removeRow,this);},_placeComponent:function(component){this.$('[data-sweetspot=actions]').append(component.el);},addRow:function(component){var def=_.extend({view:'sweetspot-config-list-row'},app.metadata.getView(null,'sweetspot-config-list-row'));var rowComponent=this.createComponentFromDef(def,this.context,this.module);if(component){component.$el.after(rowComponent.el);}else{this.addComponent(rowComponent,def);}
rowComponent.render();return rowComponent;},removeRow:function(component){this.collection.remove(component.model);component.dispose();this.removeComponent(component);if(this.$('[data-sweetspot=actions]').children().length===0){this.addRow();}},generateConfig:function(){var data=this.collection.toJSON();data=this._formatData(data);this.context.trigger('sweetspot:receive:configs',data);},_formatData:function(data){var result=this._sanitizeConfig(data);result=this._joinKeywordConfigs(result);result=this._formatForUserPrefs(result);return result;},_joinKeywordConfigs:function(data){var result={};_.each(data,function(obj){result[obj.action]=result[obj.action]||obj;var keyword=_.isArray(obj.keyword)?obj.keyword:[obj.keyword];result[obj.action].keyword=_.union(result[obj.action].keyword,keyword);});return _.toArray(result);},_sanitizeConfig:function(data){data=_.reject(data,function(row){return!row.keyword||!row.action;});return data;},_formatForUserPrefs:function(data){return{hotkeys:data};},hasUnsavedChanges:function(){var prefs=app.user.getPreference('sweetspot');var oldConfig=prefs&&prefs.hotkeys;var newConfig=this.collection.toJSON();var isChanged=!_.isEqual(oldConfig,newConfig);return isChanged;}})