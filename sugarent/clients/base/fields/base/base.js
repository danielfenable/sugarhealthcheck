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
({plugins:['EllipsisInline','Tooltip','MetadataEventDriven'],initialize:function(options){this.events=_.extend({},this.events,options.def.events);this._super('initialize',arguments);},_render:function(){var action='view';if(this.def.link&&this.def.route){action=this.def.route.action;}
if(!app.acl.hasAccessToModel(action,this.model)){this.def.link=false;}
if(this.def.link){this.href=this.buildHref();}
app.view.Field.prototype._render.call(this);},buildHref:function(){var defRoute=this.def.route?this.def.route:{},module=this.model.module||this.context.get('module');return'#'+app.router.buildRoute(module,this.model.id,defRoute.action,this.def.bwcLink);},unformat:function(value){return _.isString(value)?value.trim():value;}})