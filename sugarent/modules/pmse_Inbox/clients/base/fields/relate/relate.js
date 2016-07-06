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
({extendsFrom:'RelateField',getSizeOBJ:function(obj){var size=0,key;for(key in obj){if(obj.hasOwnProperty(key))size++;}
return size;},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(!_.isEmpty(this.$(this.fieldTag).data('select2'))){this.$(this.fieldTag).select2('val',this.model.get(this.name));}
if(!this.disposed){if(this.model.get(this.name).length>0){var cbObject=new Object();var cbData,count=0;if(this.getSizeOBJ(window.globalObjectUser)>0){cbData=window.globalObjectUser;}
else
{cbData={};}
cbObject.cas_id=this.model.get('cas_id');cbObject.cas_index=this.model.get('cas_index');cbObject.user_id=this.model.changed['id'];for(var cnKey in cbData){var newData=cbData[cnKey];for(var aux in newData){if(newData.cas_id===cbObject.cas_id&&newData.cas_index===cbObject.cas_index){newData.user_id=cbObject.user_id;count++;}}}
if(count===0){cbData[this.getSizeOBJ(cbData)]=cbObject;}
window.globalObjectUser=cbData;}
this.render();}},this);}}})