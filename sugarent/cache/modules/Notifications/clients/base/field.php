<?php
$clientCache['Notifications']['base']['field'] = array (
  'read' => 
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
({events:{\'click [data-action=toggle]\':\'toggleIsRead\',\'mouseover [data-action=toggle]\':\'toggleMouse\',\'mouseout [data-action=toggle]\':\'toggleMouse\'},plugins:[\'Tooltip\'],initialize:function(options){options.def.readonly=true;this._super(\'initialize\',[options]);if(options.def&&options.def.mark_as_read){this.markAs(true);}},toggleMouse:function(event){var $target=this.$(event.currentTarget),isRead=this.model.get(\'is_read\');if(!isRead){return;}
var label=event.type===\'mouseover\'?\'LBL_UNREAD\':\'LBL_READ\';$target.html(app.lang.get(label,this.module));$target.toggleClass(\'label-inverse\',event.type===\'mouseover\');},toggleIsRead:function(){this.markAs(!this.model.get(\'is_read\'));},markAs:function(read){if(read===this.model.get(\'is_read\')){return;}
this.model.save({is_read:!!read},{success:_.bind(function(){if(!this.disposed){this.render();}},this)});}})',
    ),
    'templates' => 
    array (
      'detail' => '
<span data-action="toggle"
      class="label{{#unless this.model.attributes.is_read}} label-inverse{{/unless}}"
        >{{#if this.model.attributes.is_read}}{{str \'LBL_READ\' this.module}}{{else}}{{str \'LBL_UNREAD\' this.module}}{{/if}}</span>
',
    ),
  ),
  'severity' => 
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
({extendsFrom:\'EnumField\',_styleMapping:{\'default\':\'label-unknown\',alert:\'label-important\',information:\'label-info\',other:\'label-inverse\',success:\'label-success\',warning:\'label-warning\'},bindDataChange:function(){this._super(\'bindDataChange\');if(this.model&&this.view.name===\'notifications\'){this.model.on(\'change:is_read\',this.render,this);}},_loadTemplate:function(){this._super(\'_loadTemplate\');var template=app.template.getField(this.type,this.view.name+\'-\'+this.tplName,this.model.module);if(!template&&this.view.meta&&this.view.meta.template){template=app.template.getField(this.type,this.view.meta.template+\'-\'+this.tplName,this.model.module);}
this.template=template||this.template;},_render:function(){var severity=this.model.get(this.name),options=app.lang.getAppListStrings(this.def.options);this.severityCss=this._styleMapping[severity]||this._styleMapping[\'default\'];this.severityLabel=options[severity]||severity;this._super(\'_render\');}})',
    ),
    'templates' => 
    array (
      'detail' => '
<span class="label {{severityCss}} ellipsis_inline">{{severityLabel}}</span>
',
      'notifications-detail' => '
<span class="label{{#unless model.attributes.is_read}} {{../severityCss}}{{/unless}}">{{severityLabel}}</span>
',
    ),
  ),
  '_hash' => 'b5d349897a77a83b25213c255ca376b1',
);

