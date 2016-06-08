<?php
$clientCache['KBContents']['base']['field'] = array (
  'htmleditable_tinymce' => 
  array (
    'templates' => 
    array (
      'create-article' => '
{{#if model.attributes.case_number}}
    <p>{{model.module}} {{str "LBL_NUMBER" model.module}}: {{model.attributes.case_number}}</p>
{{/if}}
{{#if model.attributes.bug_number}}
    <p>{{model.module}} {{str "LBL_NUMBER" model.module}}: {{model.attributes.bug_number}}</p>
{{/if}}
{{model.attributes.number}}
<p>{{str "LBL_SUBJECT" model.module}}: {{model.attributes.name}}</p>
{{#notEq model.attributes.description ""}}
    <p>{{str "LBL_DESCRIPTION" model.module}}: {{model.attributes.description}}</p>
{{/notEq}}
{{#notEq model.attributes.resolution ""}}
    <p>{{str "LBL_RESOLUTION" model.module}}: {{model.attributes.resolution}}</p>
{{/notEq}}
',
      'detail' => '
<div data-htmleditable="{{def.fieldSelector}}"
     class="kbdocument-body{{#if def.span}} span{{def.span}}{{/if}}">
</div>
',
      'filter-rows-edit' => '
<input type="text" name="{{name}}" value="{{value}}" class="inherit-width">
',
      'list' => '
<div
    data-html="true"
    class="htmleditable ellipsis_inline"
    data-placement="bottom"
    title="{{value}}" >
</div>
',
      'disabled' => '
<div
    data-html="true"
    class="htmleditable ellipsis_inline"
    data-placement="bottom"
    title="{{value}}" >
</div>
',
      'default' => '
<iframe data-htmleditable="{{def.fieldSelector}}"
        class="htmleditable{{#if def.span}} span{{def.span}}{{/if}}"
        frameborder="0">
</iframe>

',
      'edit' => '
<textarea data-htmleditable="{{def.fieldSelector}}"
          class="htmleditable"
    {{#if def.tabindex}} tabindex="{{this.def.tabindex}}"{{/if}}>
</textarea>

',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'Htmleditable_tinymceField\',shouldDisable:null,initialize:function(opts){if(opts.view.action===\'filter-rows\'){opts.viewName=\'filter-rows-edit\';}
this._super(\'initialize\',[opts]);this.shouldDisable=false;if(!_.isUndefined(this.def.fieldSelector)){this.fieldSelector=\'[data-htmleditable=\'+this.def.fieldSelector+\']\';}
this.before(\'render\',function(){if(this.shouldDisable!=this.isDisabled()){this.setDisabled(this.shouldDisable);return false;}},this);},getTinyMCEConfig:function(){var config=this._super(\'getTinyMCEConfig\'),content_css=[];_.each(document.styleSheets,function(style){if(style.href){content_css.push(style.href);}});config.content_css=content_css;config.body_class=\'kbdocument-body\';config.file_browser_callback=_.bind(this.tinyMCEFileBrowseCallback,this);return config;},format:function(value){var result;switch(this.view.tplName){case\'audit\':case\'list\':case\'activitystream\':result=this.stripTags(value);break;default:result=this._super(\'format\',[value]);break;}
return result;},stripTags:function(value){var $el=$(\'<div/>\').html(value),texts=$el.contents().map(function(){if(this.nodeType===1&&this.nodeName!=\'STYLE\'&&this.nodeName!=\'SCRIPT\'){return this.textContent.replace(/ +?\\r?\\n/g,\' \').trim();}
if(this.nodeType===3){return this.textContent.replace(/ +?\\r?\\n/g,\' \').trim();}});return _.filter(texts,function(value){return(value.length>0);}).join(\' \');},setMode:function(mode){this.shouldDisable=(mode===\'edit\'&&(this.view.tplName===\'list\'||(this.view.tplName==\'\'&&(this.tplName==\'subpanel-list\'||this.tplName==\'list\'))));this._super(\'setMode\',[mode]);},getEditorContent:function(){var text=this._htmleditor.getContent({format:\'html\'});if(text!==\'\'){text=this._super(\'getEditorContent\');}
return text;},setViewName:function()
{this.destroyTinyMCEEditor();this._super(\'setViewName\',arguments);}})',
    ),
  ),
  'languages' => 
  array (
    'templates' => 
    array (
      'edit' => '
{{#each value}}
    <div class="control-group" data-name="languages_{{name}}">
        <div class="controls controls-three btn-fit row{{#if @first}} first-row{{/if}}">
            {{#eachOptions items}}
                <div class="span3">
                    {{#if @first}}<label class="control-label">{{str "LBL_CONFIG_LANGUAGES_LABEL_KEY" ../../../module}}</label>{{/if}}
                    <input type="text" name="key_{{../name}}" class="inherit-width span12" value="{{key}}" data-id="{{../id}}" data-index="{{@index}}" maxlength="2">
                </div>
                <div class="span3">
                    {{#if @first}}<label class="control-label">{{str "LBL_CONFIG_LANGUAGES_LABEL_NAME" ../../../module}}</label>{{/if}}
                    <input type="text" name="value_{{../name}}" class="inherit-width span12" value="{{value}}" data-id="{{../id}}" data-index="{{@index}}">
                </div>
            {{/eachOptions}}
            <div class="span6">
                {{#if @first}}<label>&nbsp;</label>{{/if}}
                <div class="span12">
                    <button type="button" class="btn third {{#if primary}}active{{/if}}" name="primary" data-action="set-primary-field" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_SET_ITEM_PRIMARY" ../module}}"><i class="fa fa-star"></i></button>
                    {{#if remove_button}}
                        <button type="button" class="btn second" name="remove" data-action="remove-field" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_ITEM_REMOVE" ../../module}}"><i class="fa fa-minus"></i></button>
                    {{/if}}
                    {{#if add_button}}
                        <button type="button" class="btn first" name="add" data-action="add-field" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_ITEM_ADD" ../../module}}"><i class="fa fa-plus"></i></button>
                    {{/if}}
                </div>
            </div>
        </div>
    </div>
{{/each}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'FieldSet\',events:{\'click .btn[data-action=add-field]\':\'addItem\',\'click .btn[data-action=remove-field]\':\'removeItem\',\'click .btn[data-action=set-primary-field]\':\'setPrimaryItem\'},intKey:null,deletedLanguages:[],plugins:[\'Tooltip\'],initialize:function(options){this._super(\'initialize\',[options]);this._currentIndex=0;this.model.unset(\'deleted_languages\',{silent:true});},format:function(value){var result=[],numItems=0;value=app.utils.deepCopy(value);if(_.isString(value)){value=[{\'\':value,primary:false}];}
if(_.isArray(value)&&value.length>0){_.each(value,function(item,ind){delete item.remove_button;delete item.add_button;result[ind]={name:this.name,primary:item.primary||false};delete item.primary;result[ind].items=item;},this);if(!result[this._currentIndex]){result[this._currentIndex]={};}
result[value.length-1].add_button=true;numItems=_.filter(result,function(item){return _.isUndefined(item.items[\'\']);}).length;_.each(result,function(item){if(!_.isUndefined(item.items[\'\'])||numItems>1){item.remove_button=true;}});}
return result;},unformat:function(value){var result=[];_.each(value,function(item){result.push(_.extend({},item.items,{primary:item.primary}));},this);return result;},setPrimary:function(index){var value=this.unformat(this.value);_.each(value,function(item){item.primary=false;},this);value[index].primary=true;this.model.set(this.name,value);return(this.value[index])?this.value[index].primary:false;},bindDomChange:function(){var self=this,el=null;if(this.model){el=this.$el.find(\'div[data-name=languages_\'+this.name+\'] input[type=text]\');el.on(\'change\',function(){var value=self.unformatValue();self.model.set(self.name,value,{silent:true});self.value=self.format(value);});}},bindDataChange:function(){if(this.model){this.model.on(\'change\',function(){if(this.disposed){return;}
this.render();},this);}},unformatValue:function(){var container=$(this.$(\'div[data-name=languages_\'+this.name+\']\')),input=container.find(\'input[type=text]\'),value=[],val,k,v,pr,i;for(i=0;i<input.length / 2;i=i+1){val={};k=container.find(\'input[data-index=\'+i+\'][name=key_\'+this.name+\']\').val();v=container.find(\'input[data-index=\'+i+\'][name=value_\'+this.name+\']\').val();pr=container.find(\'button[data-index=\'+i+\'][name=primary]\').hasClass(\'active\');val[k]=v;val.primary=pr;value.push(val);}
return value;},addItem:function(evt){var index=$(evt.currentTarget).data(\'index\'),value=this.unformat(this.value);if(!index||_.isUndefined(this.value[this.value.length-1].items[\'\'])){value.push({\'\':\'\'});this._currentIndex+=1;this.model.set(this.name,value);}},removeItem:function(evt){this._currentTarget=evt.currentTarget;this.warnDelete();},warnDelete:function(){app.alert.show(\'delete_confirmation\',{level:\'confirmation\',messages:app.lang.get(\'LBL_DELETE_CONFIRMATION_LANGUAGE\',this.module),onConfirm:_.bind(this.confirmDelete,this),onCancel:_.bind(this.cancelDelete,this)});},confirmDelete:function(){var index=$(this._currentTarget).data(\'index\'),value=null,removed=null;if(_.isNumber(index)){if(index===0&&this.value.length===1){return;}
if(this._currentIndex===this.value.length-1){this._currentIndex-=1;}
value=this.unformat(this.value);removed=value.splice(index,1);if(removed&&removed.length>0&&removed[0].primary){value[0].primary=this.setPrimary(0);}
for(var key in removed[0]){if(key!==\'primary\'&&2==key.length){if(-1===this.deletedLanguages.indexOf(key)){this.deletedLanguages.push(key);}}}
if(value){this.model.set(this.name,value);}
if(_.size(this.deletedLanguages)>0){this.model.set({\'deleted_languages\':this.deletedLanguages},{silent:true});}}},cancelDelete:function(evt){},setPrimaryItem:function(evt){var index=$(evt.currentTarget).data(\'index\');if(!this.value[index]||!_.isUndefined(this.value[index].items[\'\'])||$(evt.currentTarget).hasClass(\'active\')){return;}
this.$(\'.btn[name=primary]\').removeClass(\'active\');if(this.setPrimary(index)){this.$(\'.btn[name=primary][data-index=\'+index+\']\').addClass(\'active\');}},_dispose:function(){this.$el.off();this.model.off(\'change\');this._super(\'_dispose\');},handleValidationError:function(errors){this.clearErrorDecoration();var err=errors.errors||errors;_.each(err,function(value){var inpName=value.type+\'_\'+this.name,$inp=this.$(\'input[data-index=\'+value.ind+\'][name=\'+inpName+\']\');$inp.wrap(\'<div class="input-append input error \'+this.name+\'">\');errorMessages=[value.message];$tooltip=$(this.exclamationMarkTemplate(errorMessages));$inp.after($tooltip);this.createErrorTooltips($tooltip);},this);},clearErrorDecoration:function(){this.destroyAllErrorTooltips();this.$(\'.add-on.error-tooltip\').remove();_.each(this.$(\'input[type=text]\'),function(inp){var $inp=this.$(inp);if($inp.parent().hasClass(\'input-append\')&&$inp.parent().hasClass(\'error\')){$inp.unwrap();}});if(this.view&&this.view.trigger){this.view.trigger(\'field:error\',this,false);}}})',
    ),
  ),
  'rowaction' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'RowactionField\',initialize:function(options){this._super(\'initialize\',[options]);if((this.options.def.name===\'create_localization_button\'||this.options.def.name===\'create_revision_button\')&&!app.acl.hasAccessToModel(\'view\',this.model)){this.hide();}}})',
    ),
  ),
  'template-button' => 
  array (
    'templates' => 
    array (
      'edit' => '

<a
    class="btn{{#if def.primary}} btn-primary{{/if}}"
    href="
        {{#if fullRoute}}
            #{{fullRoute}}
        {{else}}
            {{#if def.route}}
                #{{buildRoute context=context model=model action=def.route.action}}
            {{else}}
                javascript:void(0);
            {{/if}}
        {{/if}}
    "
    name="{{name}}"
    {{#if def.tabindex}}
    tabindex="{{def.tabindex}}"
    {{/if}}
>
    {{#if def.icon}}
        <i class="fa {{def.icon}}"></i>
    {{/if}}{{label}}
</a>
',
    ),
  ),
  'nestedset' => 
  array (
    'templates' => 
    array (
      'edit' => '
<div data-role="parent" class="parenttree">
    <input type="hidden" data-toggle="dropdown" data-role="toggle" name="{{def.id_name}}"/>
    <div name="{{name}}" {{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} data-role="treeinput" class="divinput">
        <span data-role="treevalue">{{#if value}}{{value}}{{/if}}{{#unless value}}{{emptyLabel}}{{/unless}}</span>
        <abbr class="clear-field"><i class="fa fa-times" data-action="clear-field"></i></abbr>
        <span class="select-arrow">
            <b class="fa fa-caret-down" role="presentation"></b>
        </span>
    </div>
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    <ul data-menu="dropdown" class="dropdown-menu" role="menu">
        <li class="st">
            <div class="input-append">
                <input type="text" data-role="secondinput"/>
                <span class="add-on fa" data-role="secondinputaddon"></span>
            </div>
        </li>
        <li class="tree">
            <div class="list" data-place="tree">
            </div>
        </li>
         <li class="st">
            <div class="row-fluid" data-place="bottom-options">
                <div class="span10" data-action="create-label-cover">{{{str "LBL_CREATE_CATEGORY"}}}</div>
                <div class="span2">
                    <button class="btn btn-invisible pull-right" data-action="full-screen"><i class="fa fa-expand"></i></button>
                </div>
            </div>
            <div class="row-fluid hide" data-place="bottom-create">
                <div class="span2">
                    <button class="btn btn-invisible pull-left" data-role="pseudo"><i class="fa fa-folder-open"></i></button>
                </div>
                <div class="span10">
                    <input data-role="add-item" type="text" placeholder="{{str \'LBL_CREATE_CATEGORY_PLACEHOLDER\' this.module}}"/>
                </div>
            </div>
        </li>
    </ul>
<div>
',
      'list' => '
<div>
    <a href="javascript:void(0);" data-action="show-list" data-placement="bottom" class="ellipsis_inline">{{value}}</a>
</div>
',
      'detail' => '
<div>
    <a href="javascript:void(0);" data-action="show-list" data-placement="bottom" class="ellipsis_inline">{{value}}</a>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({fieldTag:\'div\',categoryRoot:null,moduleRoot:null,extendsFrom:\'BaseField\',plugins:[\'JSTree\',\'NestedSetCollection\'],ddEl:\'[data-menu=dropdown]\',inCreation:false,dropdownCallback:null,events:{\'click [data-role=treeinput]\':\'openDropDown\',\'click\':\'handleClick\',\'keydown [data-role=secondinput]\':\'handleKeyDown\',\'click [data-action=full-screen]\':\'fullScreen\',\'click [data-action=create-new]\':\'switchCreate\',\'keydown [data-role=add-item]\':\'handleKeyDown\',\'click [data-action=show-list]\':\'showList\',\'click [data-action=clear-field]\':\'clearField\'},initialize:function(opts){this._super(\'initialize\',[opts]);var module=this.def.config_provider||this.context.get(\'module\'),config=app.metadata.getModule(module,\'config\');this.categoryRoot=this.def.category_root||config.category_root||\'\';this.moduleRoot=this.def.category_provider||this.def.data_provider||module;this.dropdownCallback=_.bind(this.handleGlobalClick,this);this.emptyLabel=app.lang.get(\'LBL_SEARCH_SELECT_MODULE\',this.module,{module:app.lang.get(this.def.label,this.module)});this.before(\'render\',function(){if(this.$(this.ddEl).length!==0&&this._dropdownExists()){this.closeDropDown();}
return true;});},_render:function(){var treeOptions={},$ddEl,self=this;this._super(\'_render\');$ddEl=this.$(this.ddEl);if($ddEl.length!==0&&this._dropdownExists()){$ddEl.dropdown();$ddEl.data(\'dropdown\').opened=false;$ddEl.off(\'click.bs.dropdown\');treeOptions={settings:{category_root:this.categoryRoot,module_root:this.moduleRoot},options:{}};this._renderTree(this.$(\'[data-place=tree]\'),treeOptions,{\'onSelect\':_.bind(this.selectedNode,this),\'onLoad\':function(){if(!self.disposed){self.toggleSearchIcon(false);}}});this.toggleSearchIcon(true);this.toggleClearIcon();}},getPlaceholder:function(){if(this.view&&this.view.action===\'filter-rows\'){return new Handlebars.SafeString(\'<span sfuuid="\'+this.sfId+\'" class="nestedset-filter-container"></span>\');}
return this._super(\'getPlaceholder\');},openDropDown:function(evt){if(!this._dropdownExists()){return;}
var dropdown=this.$(this.ddEl).data(\'dropdown\');if(dropdown.opened===true){return;}
this.view.trigger(\'list:scrollLock\',true);$(\'body\').on(\'click.bs.dropdown.data-api\',this.dropdownCallback);evt.stopPropagation();evt.preventDefault();_.defer(function(dropdown,self){var treePosition,$input;if(self.disposed){return;}
treePosition=self.$el.find(\'[data-role=treeinput]\').position();$input=self.$(\'[data-role=secondinput]\');self.$(self.ddEl).css({\'left\':treePosition.left-1+\'px\',\'top\':treePosition.top+27+\'px\'});self.$(self.ddEl).dropdown(\'toggle\');$input.val(\'\');dropdown.opened=true;$input.focus();},dropdown,this);},closeDropDown:function(){var dropdown=this.$(this.ddEl).data(\'dropdown\');if(!dropdown){return false;}
if(!dropdown.opened===true){return false;}
this.view.trigger(\'list:scrollLock\',false);this.$(this.ddEl).dropdown(\'toggle\');if(this.inCreation){this.switchCreate();}
dropdown.opened=false;$(\'body\').off(\'click.bs.dropdown.data-api\',this.dropdownCallback);this.clearSelection();return true;},toggleSearchIcon:function(hide){this.$(\'[data-role=secondinputaddon]\').toggleClass(\'fa-search\',!hide).toggleClass(\'fa-spinner\',hide).toggleClass(\'fa-spin\',hide);},toggleClearIcon:function(){if(_.isEmpty(this.model.get(this.def.name))){this.$el.find(\'[data-action=clear-field]\').hide();}else{this.$el.find(\'[data-action=clear-field]\').show();}},handleGlobalClick:function(evt){if(this._dropdownExists()){this.closeDropDown();evt.preventDefault();evt.stopPropagation();}},handleClick:function(evt){evt.preventDefault();evt.stopPropagation();},searchTreeValue:function(){var val=this.$(\'[data-role=secondinput]\').val();this.searchNode(val);},bindKeyDown:function(){},bindDocumentMouseDown:function(){},focus:function(){if(this._dropdownExists()){this.$(\'[data-role=treeinput]\').click();}},handleKeyDown:function(evt){var role=$(evt.currentTarget).data(\'role\');if(evt.keyCode!==13&&evt.keyCode!==27){return;}
evt.preventDefault();evt.stopPropagation();switch(evt.keyCode){case 13:switch(role){case\'secondinput\':this.searchTreeValue(evt);break;case\'add-item\':this.addNew(evt);break;}
break;case 27:switch(role){case\'secondinput\':this.closeDropDown();break;case\'add-item\':this.switchCreate();break;}
break;}},setValue:function(id,val){this.model.set(this.def.id_name,id);this.model.set(this.def.name,val);},bindDomChange:function(){},bindDataChange:function(){this.model.on("change:"+this.name,this.dataChangeUpdate,this);},dataChangeUpdate:function(){if(this._dropdownExists()){var id=this.model.get(this.def.id_name),name=this.model.get(this.def.name),child=this.collection.getChild(id);if(!name&&child){name=child.get(this.def.rname);}
if(!name){bean=app.data.createBean(this.moduleRoot,{id:id});bean.fetch({success:_.bind(function(data){if(this.model){this.model.set(this.def.name,data.get(this.def.rname));}},this)});}
this.$(\'[data-role="treevalue"]\',\'[name=\'+this.def.name+\']\').text(name);this.$(\'[name=\'+this.def.id_name+\']\').val(id);}
if(!this.disposed){this.render();}},_dispose:function(){if(this._dropdownExists()){$(\'body\').off(\'click.bs.dropdown.data-api\',this.dropdownCallback);}
this._super(\'_dispose\');},fullScreen:function(){var treeOptions={category_root:this.categoryRoot,module_root:this.moduleRoot,plugins:[\'dnd\',\'contextmenu\'],isDrawer:true},treeCallbacks={\'onRemove\':function(node){if(this.context.parent){this.context.parent.trigger(\'kbcontents:category:deleted\',node);}},\'onSelect\':function(node){if(!_.isEmpty(node)&&!_.isEmpty(node.id)&&!_.isEmpty(node.name)){return true;}}},context=_.extend({},this.context,{treeoptions:treeOptions,treecallbacks:treeCallbacks});app.drawer.open({layout:\'nested-set-list\',context:{module:\'Categories\',parent:context,treeoptions:treeOptions,treecallbacks:treeCallbacks}},_.bind(this.selectedNode,this));},showList:function(){var popDef={},filterOptions;popDef[this.def.id_name]=this.model.get(this.def.id_name);filterOptions=new app.utils.FilterOptions().config(this.def).setFilterPopulate(popDef).format();app.drawer.open({layout:\'prefiltered\',module:this.module,context:{module:this.module,filterOptions:filterOptions,}});},addNew:function(evt){var name=$(evt.target).val().trim();if(!name){app.alert.show(\'wrong_node_name\',{level:\'error\',messages:app.error.getErrorString(\'empty_node_name\',this),autoClose:true});}else{this.addNode(name,\'last\',true,false,true);this.switchCreate();}},switchCreate:function(){var $options=this.$(\'[data-place=bottom-options]\'),$create=this.$(\'[data-place=bottom-create]\'),$input=this.$(\'[data-role=add-item]\'),placeholder=app.lang.get(\'LBL_CREATE_CATEGORY_PLACEHOLDER\',this.module);if(this.inCreation===false){$options.hide();$create.show();$input.tooltip({title:placeholder,container:\'body\',trigger:\'manual\',delay:{show:200,hide:100}}).tooltip(\'show\');$input.focus().select();}else{$input.tooltip(\'destroy\');$input.val(\'\');$create.hide();$options.show();}
this.inCreation=!this.inCreation;},clearField:function(event){event.preventDefault();event.stopPropagation();this.setValue(\'\',\'\');this.$(\'[data-role="treevalue"]\',\'[name=\'+this.def.name+\']\').text(this.emptyLabel);this.$(\'[name=\'+this.def.id_name+\']\').val();this.toggleClearIcon();},selectedNode:function(data){if(_.isEmpty(data)||_.isEmpty(data.id)||_.isEmpty(data.name)){return;}
var id=data.id,val=data.name;this.setValue(id,val);this.closeDropDown();this.toggleClearIcon();},_dropdownExists:function(){return this.action===\'edit\'||(this.meta&&this.meta.view===\'edit\');},decorateError:function(errors){var $tooltip=$(this.exclamationMarkTemplate()),$ftag=this.$(\'span.select-arrow\');this.$el.closest(\'.record-cell\').addClass(\'error\');this.$el.addClass(\'error\');$ftag.after($tooltip);this.$(\'[data-role=parent]\').addClass(\'error\');},clearErrorDecoration:function(){this.$el.closest(\'.record-cell\').removeClass(\'error\');this.$el.removeClass(\'error\');this.$(\'[data-role=parent]\').removeClass(\'error\');this.$(\'.add-on.error-tooltip\').remove();if(this.view&&this.view.trigger){this.view.trigger(\'field:error\',this,false);}},exclamationMarkTemplate:function(){var extraClass=this.view.tplName===\'record\'?\'top0\':\'top4\';return\'<span class="error-tooltip \'+extraClass+\' add-on" data-contexclamationMarkTemplateainer="body">\'+\'<i class="fa fa-exclamation-circle">&nbsp;</i>\'+\'</span>\';}})',
    ),
  ),
  'attachments' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({events:{\'click [data-action=download-all]\':\'startDownloadArchive\'},plugins:[\'DragdropAttachments\'],$node:null,fieldSelector:\'\',cid:null,fileInputSelector:\'\',_select2formatSelectionTemplate:null,download_label:\'\',initialize:function(opts){var evt={},relate,self=this;evt[\'change \'+this.getFileNode().selector]=\'uploadFile\';this.events=_.extend({},this.events,opts.def.events,evt);this.fileInputSelector=opts.def.fileinput||\'\';this.fieldSelector=opts.def.field||\'\';this.cid=_.uniqueId(\'attachment\');this._super(\'initialize\',[opts]);this._select2formatSelectionTemplate=app.template.get(\'f.attachments.KBContents.selection-partial\');if(this.model.id){relate=this.model.getRelatedCollection(this.def.link);relate.fetch({relate:true,success:function(){if(self.disposed===true){return;}
self.render();}});}
this.before(\'attachments:drop\',this._onAttachmentDrop,this);},format:function(value){return _.map(value,function(item){var forceDownload=!item.isImage,mimeType=item.isImage?\'image\':\'application/octet-stream\',fileName=item.name.substring(0,item.name.lastIndexOf(".")),fileExt=item.name.substring(item.name.lastIndexOf(".")+1).toLowerCase(),urlOpts={module:this.def.module,id:item.id,field:this.def.modulefield};fileExt=!_.isEmpty(fileExt)?\'.\'+fileExt:fileExt;return _.extend({},{mimeType:mimeType,fileName:fileName,fileExt:fileExt,url:app.api.buildFileURL(urlOpts,{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:forceDownload})},item);},this);},_render:function(){if(this.action==\'noaccess\'){return;}
this.download_label=(this.value&&this.value.length>1)?\'LBL_DOWNLOAD_ALL\':\'LBL_DOWNLOAD_ONE\';this._super(\'_render\',[]);this.$node=this.$(this.fieldSelector+\'[data-type=attachments]\');this.setSelect2Node();if(this.$node.length>0){this.$node.select2({allowClear:true,multiple:true,containerCssClass:\'select2-choices-pills-close span12 with-padding kb-attachmentlist-details-view\',tags:[],formatSelection:_.bind(this.formatSelection,this),width:\'off\',escapeMarkup:function(m){return m;}});$(this.$node.data(\'select2\').container).attr(\'data-attachable\',true);this.refreshFromModel();}},refreshFromModel:function(){var attachments=[];if(this.model.has(this.name)){attachments=this.model.get(this.name);}
this.$node.select2(\'data\',this.format(attachments));},setSelect2Node:function(){var self=this;if(!this.$node||this.$node.length==0){return;}
this.$node.off(\'select2-removed\');this.$node.off(\'select2-opening\');this.$node.on(\'select2-removed\',function(evt){var note=app.data.createBean(\'Notes\',{id:evt.val});note.fetch({success:function(model){if(!self.model.id&&model.get(\'parent_id\')){return;}
model.destroy();}});self.model.set(self.name,_.filter(self.model.get(self.name),function(file){return(file.id!==evt.val);}));self.render();});this.$node.on(\'select2-opening\',function(evt){evt.preventDefault();});},getFileNode:function(){return this.$(this.fileInputSelector+\'[data-type=fileinput]\');},bindDomChange:function(){this.setSelect2Node();},uploadFile:function(){var self=this,$input=this.getFileNode(),note=app.data.createBean(\'Notes\'),fieldName=\'filename\';note.save({name:$input[0].files[0].name,portal_flag:true},{success:function(model){var $cloneInput=_.clone($input);$cloneInput.attr(\'name\',fieldName);model.uploadFile(fieldName,$input,{success:function(rsp){var att={};att.id=rsp.record.id;att.isImage=(rsp[fieldName][\'content-type\'].indexOf(\'image\')!==-1);att.name=rsp[fieldName].name;self.model.set(self.name,_.union([],self.model.get(self.name)||[],[att]));$input.val(\'\');self.render();},error:function(error){app.alert.show(\'delete_confirmation\',{level:\'error\',title:\'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED\',messages:[error.error_message]});}});}});},_onAttachmentDrop:function(event){event.preventDefault();var self=this,data=new FormData(),fieldName=\'filename\';_.each(event.dataTransfer.files,function(file){data.append(this.name,file);var note=app.data.createBean(\'Notes\');note.save({name:file.name},{success:function(model){var url=app.api.buildFileURL({module:model.module,id:model.id,field:\'filename\'},{htmlJsonFormat:false});data.append(\'filename\',file);data.append(\'OAuth-Token\',app.api.getOAuthToken());$.ajax({url:url,type:\'POST\',data:data,processData:false,contentType:false,success:function(rsp){var att={};att.id=rsp.record.id;att.isImage=(rsp[fieldName][\'content-type\'].indexOf(\'image\')!==-1);att.name=rsp[fieldName].name;self.model.set(self.name,_.union([],self.model.get(self.name)||[],[att]));self.render();}});}});},this);return false;},formatSelection:function(attachment){return this._select2formatSelectionTemplate(attachment);},startDownloadArchive:function(){var params={format:\'sugar-html-json\',link_name:this.def.link,platform:app.config.platform};params[(new Date()).getTime()]=1;var uri=app.api.buildURL(this.model.module,\'file\',{module:this.model.module,id:this.model.id,field:this.def.modulefield},params);app.api.fileDownload(uri,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},dispose:function(){this.$node.off(\'select2-removed\');this.$node.off(\'select2-opening\');this._super(\'dispose\');},_loadTemplate:function(){this._super(\'_loadTemplate\');if(this.view.name===\'preview\'){this.template=app.template.getField(\'attachments\',\'detail\',this.model.module);}}})',
    ),
    'templates' => 
    array (
      'selection-partial' => '
<span class="select2-choice-type" data-id={{id}}>
    <a class="ellipsis_inline kb-attachment-link"
       data-placement="bottom"
       title="{{name}}"
       href="{{url}}"
       data-url="{{url}}"
       data-action="download">{{fileName}}
    </a>
    <a class="kb-attachment-link-type"
       href="{{url}}"
       data-url="{{url}}"
       data-action="download">{{fileExt}}</a>
</span>
',
      'detail' => '
<div class="select2-container select2-container-multi select2-choices-pills-close
    select2 span12 kb-attachmentlist-details-view">
    <ul class="select2-choices">
        {{#each value}}
        <li class="select2-search-choice">
            <div>
                <span class="select2-choice-type">
                    <a class="ellipsis_inline kb-attachment-link"
                       data-placement="bottom"
                       title="{{name}}"
                       href="{{url}}"
                       data-url="{{url}}"
                       data-action="download">{{fileName}}
                    </a>
                    <a class="kb-attachment-link-type"
                       href="{{url}}"
                       data-url="{{url}}"
                       data-action="download">{{fileExt}}</a>
                </span>
            </div>
        </li>
        {{/each}}
        {{#if value}}
        <li>
            <button class="btn-link btn-invisible btn-kb-download-all" data-action="download-all">
                <i class="fa fa-download"></i>{{str this.download_label this.module}}
            </button>
        </li>
        {{/if}}
    </ul>
</div>
',
      'edit' => '
<label class="btn kb-attach-btn" for="{{cid}}">
    {{#if def.bIcon}}<i class="{{def.bIcon}}"></i>{{/if}}
    {{#if def.bLabel}}{{str def.bLabel this.module}}{{/if}}
</label>
<input type="hidden" class="select2 select2-choices-pills-close" value="" data-type="attachments">
<input type="file" name="attachment_list"
       class="hidden" data-type="fileinput"
       id="{{cid}}"
    {{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
',
    ),
  ),
  'usefulness' => 
  array (
    'templates' => 
    array (
      'edit' => '
',
      'detail' => '
<div class="btn-group pull-right">
	<a class="btn{{#if voted}} disabled{{/if}}{{#if votedNotUseful}} voted active{{/if}}"
	   data-action="notuseful"><i class="fa fa-thumbs-o-down"></i> {{str "LBL_NOT_USEFUL" this.module}}</a>
	<a class="btn{{#if voted}} disabled{{/if}}{{#if votedUseful}} voted active{{/if}}"
	   data-action="useful"><i class="fa fa-thumbs-o-up"></i> {{str "LBL_USEFUL" this.module}}</a>
</div>',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({events:{\'click [data-action=useful]\':\'usefulClicked\',\'click [data-action=notuseful]\':\'notusefulClicked\'},showNoData:false,plugins:[],KEY_USEFUL:\'1\',KEY_NOT_USEFUL:\'-1\',voted:false,votedUseful:false,votedNotUseful:false,initialize:function(options){this._super(\'initialize\',[options]);if(!this.model.has(\'useful\')){this.model.set(\'useful\',0);}
if(!this.model.has(\'notuseful\')){this.model.set(\'notuseful\',0);}
this.checkVotes();},checkVotes:function(){var vote=this.model.get(\'usefulness_user_vote\');this.votedUseful=(vote==this.KEY_USEFUL);this.votedNotUseful=(vote==this.KEY_NOT_USEFUL);},vote:function(isUseful){if((isUseful&&this.model.get(\'usefulness_user_vote\')==this.KEY_USEFUL)||(!isUseful&&this.model.get(\'usefulness_user_vote\')==this.KEY_NOT_USEFUL)){return;}
var action=isUseful?\'useful\':\'notuseful\';var url=app.api.buildURL(this.model.module,action,{id:this.model.id});var callbacks={success:_.bind(function(data){this.model.set({\'usefulness_user_vote\':data.usefulness_user_vote,\'useful\':data.useful,\'notuseful\':data.notuseful,\'date_modified\':data.date_modified});if(!this.disposed){this.render();}},this),error:function(){}};app.api.call(\'update\',url,null,callbacks);},usefulClicked:function(){this.vote(true);},notusefulClicked:function(){this.vote(false);},_render:function(){this.checkVotes();this._super(\'_render\');return this;}})',
    ),
  ),
  'sticky-rowaction' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'StickyRowactionField\',isDisabled:function(){var parentLayout=this.context.parent.get(\'layout\');var parentModel=this.context.parent.get(\'model\');if(this.def.name===\'create_button\'&&parentLayout===\'record\'&&!app.acl.hasAccessToModel(\'edit\',parentModel)){return true;}
return this._super(\'isDisabled\');}})',
    ),
  ),
  'enum-config' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'EnumField\',initialize:function(opts){this._super(\'initialize\',[opts]);if(this.model.isNew()&&this.view.action===\'detail\'){this.def.readonly=false;}else{this.def.readonly=true;}},loadEnumOptions:function(fetch,callback){var module=this.def.module||this.module,optKey=this.def.key||this.name,config=app.metadata.getModule(module,\'config\')||{};this._setItems(config[optKey]);fetch=fetch||false;if(fetch||!this.items){var url=app.api.buildURL(module,\'config\',null,{});app.api.call(\'read\',url,null,{success:_.bind(function(data){this._setItems(data[optKey]);callback.call(this);},this)});}},_loadTemplate:function(){this.type=\'enum\';this._super(\'_loadTemplate\');this.type=this.def.type;},_setItems:function(values){var result={},def=null;_.each(values,function(val){var tmp=_.omit(val,\'primary\');_.extend(result,tmp);if(val.primary){def=_.first(_.keys(tmp));}});this.items=result;if(def&&_.isUndefined(this.model.get(this.name))){this.defaultOnUndefined=false;this.model.set(this.name,def,{silent:true});if(_.isFunction(this.model.setDefault)){this.model.setDefault(this.name,def);}}},setMode:function(mode){if(mode==\'edit\'){if(this.model.has(\'id\')){this.setDisabled(true);}else if(this.model.has(\'related_languages\')){if(this.model.has(\'kbarticle_id\')){this.setDisabled(true);}else{_.each(this.model.get(\'related_languages\'),function(lang){delete this.items[lang];},this);this.model.set(this.name,_.first(_.keys(this.items)),{silent:true});}}}
this._super(\'setMode\',[mode]);}})',
    ),
  ),
  'status' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'BadgeSelectField\',initialize:function(options){this._super(\'initialize\',[options]);this.statusClasses={\'draft\':\'label-pending\',\'in-review\':\'label-warning\',\'approved\':\'label-info\',\'published\':\'label-success\',\'expired\':\'label\'};this.type=\'badge-select\';},format:function(value){if(this.action===\'edit\'){var def=this.def.default?this.def.default:value;value=(this.items[value]?value:false)||(this.items[def]?def:false)||value;}
return this._super(\'format\',[value]);}})',
    ),
  ),
  '_hash' => 'ec6f13a21fae703471721805425c1d4d',
);

