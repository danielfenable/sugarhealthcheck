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
({extendsFrom:'HeaderpaneView',events:{'click a[name=cancel_button]':'cancel','click a[name=merge_duplicates_button]:not(".disabled")':'mergeDuplicatesClicked'},plugins:['MergeDuplicates'],bindDataChange:function(){this._super("bindDataChange");this.on('mergeduplicates:complete',this.mergeComplete,this);this.context.on('change:mass_collection',this.addMassCollectionListener,this);},unbindData:function(){var massCollection=this.context.get('mass_collection');if(massCollection){massCollection.off(null,null,this);}
app.view.View.prototype.unbindData.call(this);},addMassCollectionListener:function(){var massCollection=this.context.get('mass_collection');massCollection.on('add remove reset',this.toggleMergeButton,this);},toggleMergeButton:function(){var disabled;if(this.context.get('mass_collection').length>0){disabled=false;}else{disabled=true;}
this.$("[name='merge_duplicates_button']").toggleClass('disabled',disabled);},cancel:function(){app.drawer.close();},mergeComplete:function(primaryRecord){app.drawer.closeImmediately(true,primaryRecord);},mergeDuplicatesClicked:function(){this.mergeDuplicates(this.context.get('mass_collection'),this.collection.dupeCheckModel);}})