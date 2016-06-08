/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('template-base',function(Y,NAME){function Template(engine,defaults){this.defaults=defaults;this.engine=engine||Y.Template.Micro;if(!this.engine){Y.error('No template engine loaded.');}}
Template._registry={};Template.register=function(templateName,template){Template._registry[templateName]=template;return template;};Template.get=function(templateName){return Template._registry[templateName];}
Template.render=function(templateName,data,options){var template=Template._registry[templateName],result='';if(template){result=template(data,options);}else{Y.error('Unregistered template: "'+templateName+'"');}
return result;};Template.prototype={compile:function(text,options){options=options?Y.merge(this.defaults,options):this.defaults;return this.engine.compile(text,options);},precompile:function(text,options){options=options?Y.merge(this.defaults,options):this.defaults;return this.engine.precompile(text,options);},render:function(text,data,options){options=options?Y.merge(this.defaults,options):this.defaults;if(this.engine.render){return this.engine.render(text,data,options);}
return this.engine.compile(text,options)(data,options);},revive:function(precompiled,options){options=options?Y.merge(this.defaults,options):this.defaults;return this.engine.revive?this.engine.revive(precompiled,options):precompiled;}};Y.Template=Y.Template?Y.mix(Template,Y.Template):Template;},'3.15.0',{"requires":["yui-base"]});