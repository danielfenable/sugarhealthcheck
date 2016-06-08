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
({className:'headerpane',pageData:{},section:{},page:{},section_page:false,parent_link:'',file:'',keys:[],$find:[],initialize:function(options){var self=this;this._super('initialize',[options]);this.pageData=app.metadata.getLayout(this.module,'docs').page_data;this.file=this.context.get('page_name');if(!_.isUndefined(this.file)&&!_.isEmpty(this.file)){this.keys=this.file.split('-');}
if(this.keys.length){if(this.keys[0]==='index'){if(this.keys.length>1){this.section=this.pageData[this.keys[1]];}else{this.section=this.pageData[this.keys[0]];}
this.section_page=true;this.file='index';}else if(this.keys.length>1){this.section=this.pageData[this.keys[0]];this.page=this.section.pages[this.keys[1]];this.parent_link='-'+this.keys[0];}else{this.section=this.pageData[this.keys[0]];}}},_render:function(){var self=this,$optgroup={};this._super('_render');this.$find=$('#find_patterns');if(this.$find.length){$.each(this.pageData,function(k,v){if(!v.index){return;}
$optgroup=$('<optgroup>').appendTo(self.$find).attr('label',v.title);$.each(v.pages,function(i,d){renderSearchOption(k,i,d,$optgroup);});});this.$find.on('change',function(e){window.location.href=$(this).val();});this.$find.select2();}
function renderSearchOption(section,page,d,optgroup){$('<option>').appendTo(optgroup).attr('value',(d.url?d.url:fmtLink(section,page))).text(d.label);}
function fmtLink(section,page){return'#Styleguide/docs/'+
(page?'':'index-')+section.replace(/[\s\,]+/g,'-').toLowerCase()+(page?'-'+page:'');}},_dispose:function(){this.$find.off('change');this._super('_dispose');}})