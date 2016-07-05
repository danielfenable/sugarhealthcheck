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
({extendsFrom:'EnumField',_styleMapping:{'default':'label-unknown',alert:'label-important',information:'label-info',other:'label-inverse',success:'label-success',warning:'label-warning'},bindDataChange:function(){this._super('bindDataChange');if(this.model&&this.view.name==='notifications'){this.model.on('change:is_read',this.render,this);}},_loadTemplate:function(){this._super('_loadTemplate');var template=app.template.getField(this.type,this.view.name+'-'+this.tplName,this.model.module);if(!template&&this.view.meta&&this.view.meta.template){template=app.template.getField(this.type,this.view.meta.template+'-'+this.tplName,this.model.module);}
this.template=template||this.template;},_render:function(){var severity=this.model.get(this.name),options=app.lang.getAppListStrings(this.def.options);this.severityCss=this._styleMapping[severity]||this._styleMapping['default'];this.severityLabel=options[severity]||severity;this._super('_render');}})