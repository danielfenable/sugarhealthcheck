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
({fieldTag:'div',categoryRoot:null,moduleRoot:null,extendsFrom:'BaseField',plugins:['JSTree','NestedSetCollection'],ddEl:'[data-menu=dropdown]',inCreation:false,dropdownCallback:null,events:{'click [data-role=treeinput]':'openDropDown','click':'handleClick','keydown [data-role=secondinput]':'handleKeyDown','click [data-action=full-screen]':'fullScreen','click [data-action=create-new]':'switchCreate','keydown [data-role=add-item]':'handleKeyDown','click [data-action=show-list]':'showList','click [data-action=clear-field]':'clearField'},initialize:function(opts){this._super('initialize',[opts]);var module=this.def.config_provider||this.context.get('module'),config=app.metadata.getModule(module,'config');this.categoryRoot=this.def.category_root||config.category_root||'';this.moduleRoot=this.def.category_provider||this.def.data_provider||module;this.dropdownCallback=_.bind(this.handleGlobalClick,this);this.emptyLabel=app.lang.get('LBL_SEARCH_SELECT_MODULE',this.module,{module:app.lang.get(this.def.label,this.module)});this.before('render',function(){if(this.$(this.ddEl).length!==0&&this._dropdownExists()){this.closeDropDown();}
return true;});},_render:function(){var treeOptions={},$ddEl,self=this;this._super('_render');$ddEl=this.$(this.ddEl);if($ddEl.length!==0&&this._dropdownExists()){$ddEl.dropdown();$ddEl.data('dropdown').opened=false;$ddEl.off('click.bs.dropdown');treeOptions={settings:{category_root:this.categoryRoot,module_root:this.moduleRoot},options:{}};this._renderTree(this.$('[data-place=tree]'),treeOptions,{'onSelect':_.bind(this.selectedNode,this),'onLoad':function(){if(!self.disposed){self.toggleSearchIcon(false);}}});this.toggleSearchIcon(true);this.toggleClearIcon();}},getPlaceholder:function(){if(this.view&&this.view.action==='filter-rows'){return new Handlebars.SafeString('<span sfuuid="'+this.sfId+'" class="nestedset-filter-container"></span>');}
return this._super('getPlaceholder');},openDropDown:function(evt){if(!this._dropdownExists()){return;}
var dropdown=this.$(this.ddEl).data('dropdown');if(dropdown.opened===true){return;}
this.view.trigger('list:scrollLock',true);$('body').on('click.bs.dropdown.data-api',this.dropdownCallback);evt.stopPropagation();evt.preventDefault();_.defer(function(dropdown,self){var treePosition,$input;if(self.disposed){return;}
treePosition=self.$el.find('[data-role=treeinput]').position();$input=self.$('[data-role=secondinput]');self.$(self.ddEl).css({'left':treePosition.left-1+'px','top':treePosition.top+27+'px'});self.$(self.ddEl).dropdown('toggle');$input.val('');dropdown.opened=true;$input.focus();},dropdown,this);},closeDropDown:function(){var dropdown=this.$(this.ddEl).data('dropdown');if(!dropdown){return false;}
if(!dropdown.opened===true){return false;}
this.view.trigger('list:scrollLock',false);this.$(this.ddEl).dropdown('toggle');if(this.inCreation){this.switchCreate();}
dropdown.opened=false;$('body').off('click.bs.dropdown.data-api',this.dropdownCallback);this.clearSelection();return true;},toggleSearchIcon:function(hide){this.$('[data-role=secondinputaddon]').toggleClass('fa-search',!hide).toggleClass('fa-spinner',hide).toggleClass('fa-spin',hide);},toggleClearIcon:function(){if(_.isEmpty(this.model.get(this.def.name))){this.$el.find('[data-action=clear-field]').hide();}else{this.$el.find('[data-action=clear-field]').show();}},handleGlobalClick:function(evt){if(this._dropdownExists()){this.closeDropDown();evt.preventDefault();evt.stopPropagation();}},handleClick:function(evt){evt.preventDefault();evt.stopPropagation();},searchTreeValue:function(){var val=this.$('[data-role=secondinput]').val();this.searchNode(val);},bindKeyDown:function(){},bindDocumentMouseDown:function(){},focus:function(){if(this._dropdownExists()){this.$('[data-role=treeinput]').click();}},handleKeyDown:function(evt){var role=$(evt.currentTarget).data('role');if(evt.keyCode!==13&&evt.keyCode!==27){return;}
evt.preventDefault();evt.stopPropagation();switch(evt.keyCode){case 13:switch(role){case'secondinput':this.searchTreeValue(evt);break;case'add-item':this.addNew(evt);break;}
break;case 27:switch(role){case'secondinput':this.closeDropDown();break;case'add-item':this.switchCreate();break;}
break;}},setValue:function(id,val){this.model.set(this.def.id_name,id);this.model.set(this.def.name,val);},bindDomChange:function(){},bindDataChange:function(){this.model.on("change:"+this.name,this.dataChangeUpdate,this);},dataChangeUpdate:function(){if(this._dropdownExists()){var id=this.model.get(this.def.id_name),name=this.model.get(this.def.name),child=this.collection.getChild(id);if(!name&&child){name=child.get(this.def.rname);}
if(!name){bean=app.data.createBean(this.moduleRoot,{id:id});bean.fetch({success:_.bind(function(data){if(this.model){this.model.set(this.def.name,data.get(this.def.rname));}},this)});}
this.$('[data-role="treevalue"]','[name='+this.def.name+']').text(name);this.$('[name='+this.def.id_name+']').val(id);}
if(!this.disposed){this.render();}},_dispose:function(){if(this._dropdownExists()){$('body').off('click.bs.dropdown.data-api',this.dropdownCallback);}
this._super('_dispose');},fullScreen:function(){var treeOptions={category_root:this.categoryRoot,module_root:this.moduleRoot,plugins:['dnd','contextmenu'],isDrawer:true},treeCallbacks={'onRemove':function(node){if(this.context.parent){this.context.parent.trigger('kbcontents:category:deleted',node);}},'onSelect':function(node){if(!_.isEmpty(node)&&!_.isEmpty(node.id)&&!_.isEmpty(node.name)){return true;}}},context=_.extend({},this.context,{treeoptions:treeOptions,treecallbacks:treeCallbacks});app.drawer.open({layout:'nested-set-list',context:{module:'Categories',parent:context,treeoptions:treeOptions,treecallbacks:treeCallbacks}},_.bind(this.selectedNode,this));},showList:function(){var popDef={},filterOptions;popDef[this.def.id_name]=this.model.get(this.def.id_name);filterOptions=new app.utils.FilterOptions().config(this.def).setFilterPopulate(popDef).format();app.drawer.open({layout:'prefiltered',module:this.module,context:{module:this.module,filterOptions:filterOptions,}});},addNew:function(evt){var name=$(evt.target).val().trim();if(!name){app.alert.show('wrong_node_name',{level:'error',messages:app.error.getErrorString('empty_node_name',this),autoClose:true});}else{this.addNode(name,'last',true,false,true);this.switchCreate();}},switchCreate:function(){var $options=this.$('[data-place=bottom-options]'),$create=this.$('[data-place=bottom-create]'),$input=this.$('[data-role=add-item]'),placeholder=app.lang.get('LBL_CREATE_CATEGORY_PLACEHOLDER',this.module);if(this.inCreation===false){$options.hide();$create.show();$input.tooltip({title:placeholder,container:'body',trigger:'manual',delay:{show:200,hide:100}}).tooltip('show');$input.focus().select();}else{$input.tooltip('destroy');$input.val('');$create.hide();$options.show();}
this.inCreation=!this.inCreation;},clearField:function(event){event.preventDefault();event.stopPropagation();this.setValue('','');this.$('[data-role="treevalue"]','[name='+this.def.name+']').text(this.emptyLabel);this.$('[name='+this.def.id_name+']').val();this.toggleClearIcon();},selectedNode:function(data){if(_.isEmpty(data)||_.isEmpty(data.id)||_.isEmpty(data.name)){return;}
var id=data.id,val=data.name;this.setValue(id,val);this.closeDropDown();this.toggleClearIcon();},_dropdownExists:function(){return this.action==='edit'||(this.meta&&this.meta.view==='edit');},decorateError:function(errors){var $tooltip=$(this.exclamationMarkTemplate()),$ftag=this.$('span.select-arrow');this.$el.closest('.record-cell').addClass('error');this.$el.addClass('error');$ftag.after($tooltip);this.$('[data-role=parent]').addClass('error');},clearErrorDecoration:function(){this.$el.closest('.record-cell').removeClass('error');this.$el.removeClass('error');this.$('[data-role=parent]').removeClass('error');this.$('.add-on.error-tooltip').remove();if(this.view&&this.view.trigger){this.view.trigger('field:error',this,false);}},exclamationMarkTemplate:function(){var extraClass=this.view.tplName==='record'?'top0':'top4';return'<span class="error-tooltip '+extraClass+' add-on" data-contexclamationMarkTemplateainer="body">'+'<i class="fa fa-exclamation-circle">&nbsp;</i>'+'</span>';}})