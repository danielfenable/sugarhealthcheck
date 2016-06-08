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
({plugins:['EllipsisInline'],appendTagInput:'input[name=append_tag]',initialize:function(options){this._super('initialize',[options]);this.filterResults=app.data.createBeanCollection('Tags');if(!this.model.has(this.name)){this.model.setDefault(this.name,[]);}
this.appendTagValue=true;this.model.setDefault('tag_type',this.appendTagValue?'1':'0');},_render:function(){this.setTagList();this._super('_render');this.initializeSelect2();this.$select2.on('change',_.bind(this.storeValues,this));this.$select2.on('select2-selecting',this.handleNewSelection);},setTagList:function(){var self=this;this.value=this.getFormattedValue();this.tagList=[];if(this.value){_.each(this.value,function(tag){if(_.isString(tag)){self.tagList.push(tag);}else{self.tagList.push(tag.name);}})
this.tagList=this.tagList.join(', ');}},format:function(value){return _.map(value,function(tag){return _.extend(tag,{encodedValue:encodeURIComponent(tag.name)});});},_createSearchChoice:function(term,results){if(this.view.action==='filter-rows'){return false;}
term=$.trim(term);if(results&&results.length){if(_.find(results,function(tag){return tag.text.toLowerCase()===term.toLowerCase();})){return false;}}
if(term===''){return false;}
if(this.checkExistingTags(term)){return false;}
return{id:term,text:term+' '+app.lang.get('LBL_TAG_NEW_TAG'),locked:false,newTag:true};},checkExistingTags:function(term){if(this.$select2&&_.isFunction(this.$select2.val)){var currentSelections=this.$select2.val().split(',');}
if(currentSelections&&currentSelections.length){if(_.find(currentSelections,function(tag){return tag.toLowerCase()===term.toLowerCase();})){return true;}}
return false;},_query:function(query){var self=this,shortlist={results:[]};query.term=$.trim(query.term);this.filterResults.filterDef={'filter':[{'name_lower':{'$starts':query.term.toLowerCase()}}]};this.filterResults.module='Tags';this.filterResults.fetch({success:function(data){shortlist.results=self.parseRecords(data.models);shortlist.results=_.reject(shortlist.results,function(result){return self.checkExistingTags(result.text)});query.callback(shortlist);},error:function(){app.alert.show('collections_error',{level:'error',messages:'LBL_TAG_FETCH_ERROR'});}});},handleNewSelection:function(e){if(e.object.newTag){var newTagIdx=e.object.text.lastIndexOf(' '+app.lang.get('LBL_TAG_NEW_TAG'));e.object.text=e.object.text.substr(0,newTagIdx);}},initializeSelect2:function(){var self=this,escapeChars='!\"#$%&\'()*+,./:;<=>?@[\\]^`{|}~';this.$select2=this.$('.select2field').select2({placeholder:'',minimumResultsForSearch:5,minimumInputLength:1,tags:true,multiple:true,closeOnSelect:true,width:'100%',containerCssClass:'select2-choices-pills-close',tokenSeparators:[','],initSelection:function(element,callback){var data=self.parseRecords(self.value);callback(data);},createSearchChoice:_.bind(this._createSearchChoice,this),query:_.debounce(_.bind(this._query,this),300),sortResults:function(results,container,query){results=_.sortBy(results,'text');return results;}});this.setSelect2Records();this.$('.select2-search-field > input.select2-input').on('keyup',function(e){if(e.keyCode===13){var val=self.$('input.select2-input').val();val=$.trim(val);if(val===''){return;}
if(escapeChars.indexOf(val.charAt(0))>=0){val='\\\\'+val;}
var tags=self.$select2.select2('data');var exists=_.find(tags,function(tag){return tag.id.toLowerCase()===val.toLowerCase();});if(exists){self.$select2.select2('close');self.$select2.select2('open');return;}
tags.push({id:val,text:val,locked:false});self.$select2.select2('data',tags,true);e.preventDefault();self.$select2.select2('close');}});},parseRecords:function(list){var results=[];_.each(list,function(item){var record=item;if(_.isFunction(record.toJSON)){record=record.toJSON();}
if(_.isString(record)){results.push({id:record,text:record});}else{results.push({id:record.name,text:record.name});}});return results;},storeValues:function(e){this.value=app.utils.deepCopy(this.value)||[];if(e.added){app.analytics.trackEvent('click','tag_pill_added');if(_.isArray(e.added)){e.added=e.added[0];}
var valFound=_.find(this.value,function(vals){return vals.name===e.added.text;});if(!valFound){this.value.push(e.added.text);}}else if(e.removed){app.analytics.trackEvent('click','tag_pill_removed');this.value=_.reject(this.value,function(record){if(_.isString(record)){return record===e.removed.text;}else{return record.name===e.removed.text;}});}
this.model.set('tag',this.value);},setSelect2Records:function(){var escapeChars='!\"#$%&\'()*+,./:;<=>?@[\\]^`{|}~';var records=_.map(this.value,function(record){if(_.isString(record)){if(escapeChars.indexOf(record.charAt(0))>=0){return'\\\\'+record;}
return record;}
if(escapeChars.indexOf(record.name.charAt(0))>=0){return'\\\\'+record.name;}
return record.name;});this.$select2.select2('val',records);},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(!_.isEmpty(this.$select2.data('select2'))){this.setTagList();this.setSelect2Records();}else{this.render();}},this);}},bindDomChange:function(){var $el=this.$(this.appendTagInput);if($el.length){$el.on('change',_.bind(function(){this.appendTagValue=$el.prop('checked');this.model.set('tag_type',this.appendTagValue?'1':'0');},this));}},unbindDom:function(){this.$(this.appendTagInput).off();this.$('.select2field').select2('destroy');this._super('unbindDom');}})