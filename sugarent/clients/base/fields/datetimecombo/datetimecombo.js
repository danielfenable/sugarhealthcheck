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
({extendsFrom:'DateField',secondaryFieldTag:'input[data-type=time]',_initEvents:function(){this._super('_initEvents');_.extend(this.events,{'click [data-action="show-timepicker"]':'showTimePicker'});return this;},_initDefaultValue:function(){if(!this.model.isNew()||this.model.get(this.name)||!this.def.display_default){return this;}
var value=app.date.parseDisplayDefault(this.def.display_default);if(!value){return this;}
value=this.unformat(app.date(value).format(app.date.convertFormat(this.getUserDateTimeFormat())));this.model.setDefault(this.name,value);return this;},_initPlaceholderAttribute:function(){this._super('_initPlaceholderAttribute');var placeholder=this.getTimePlaceHolder(this.getUserTimeFormat());this.secondaryFieldPlaceholder=this.def.placeholder&&app.lang.get(this.def.placeholder,this.module,{format:placeholder})||placeholder;return this;},showTimePicker:function(){this.$(this.secondaryFieldTag)[0].focus();},getUserTimeFormat:function(){return app.user.getPreference('timepref');},getUserDateTimeFormat:function(){return this.getUserDateFormat()+' '+this.getUserTimeFormat();},getTimePlaceHolder:function(format){var map={'H':'hh','h':'hh','i':'mm','a':'','A':''};return format.replace(/[HhiaA]/g,function(s){return map[s];});},_setupTimePicker:function(){var options;this.def.time||(this.def.time={});options={timeFormat:this.getUserTimeFormat(),scrollDefaultNow:_.isUndefined(this.def.time.scroll_default_now)?true:!!this.def.time.scroll_default_now,step:this.def.time.step||15,disableTextInput:_.isUndefined(this.def.time.disable_text_input)?false:!!this.def.time.disable_text_input,className:this.def.time.css_class||'prevent-mousedown',appendTo:this.view.$el};this._enableDuration(options);this.$(this.secondaryFieldTag).timepicker(options);},_enableDuration:function(options){var self=this;if(this.def.time.duration){options.maxTime=85500;options.durationTime=function(){var dateStartString=self.model.get(self.def.time.duration.relative_to),dateEndString=self.model.get(self.name),startDate,endDate;this.minTime=null;this.showDuration=false;if(!dateStartString||!dateEndString){return;}
startDate=app.date(dateStartString);endDate=app.date(dateEndString);if((startDate.years()===endDate.years())&&(startDate.months()===endDate.months())&&(startDate.days()===endDate.days())){this.minTime=app.date.duration({hours:startDate.hours(),minutes:startDate.minutes()}).asSeconds();this.showDuration=true;}
return this.minTime;};}},handleDateTimeChanges:function(d,t){if(this.model.get(this.name)&&(!d||!t)){return'';}
var now=app.date();d=d||(t&&now.format(app.date.convertFormat(this.getUserDateFormat())));t=t||(d&&now.format(app.date.convertFormat(this.getUserTimeFormat())));return(d+' '+t).trim();},handleHideDatePicker:function(){var $dateField=this.$(this.fieldTag),$timeField=this.$(this.secondaryFieldTag),d=$dateField.val(),t=$timeField.val(),datetime=this.unformat(this.handleDateTimeChanges(d,t));if(!datetime){$dateField.val('');$timeField.val('');}
this.model.set(this.name,datetime);},bindDomChange:function(){this._super('bindDomChange');if(this._inDetailMode()){return;}
var $dateField=this.$(this.fieldTag),$timeField=this.$(this.secondaryFieldTag);$timeField.timepicker().on({showTimepicker:function(){$(this).data('timepickerList').find('li:contains("24:00")').remove();},change:_.bind(function(){var t=$timeField.val().trim(),datetime='';if(t){var d=$dateField.val();datetime=this.unformat(this.handleDateTimeChanges(d,t));if(!datetime){$dateField.val('');$timeField.val('');}}
this.model.set(this.name,datetime);},this)});},unbindDom:function(){this._super('unbindDom');if(this._inDetailMode()){return;}
this.$(this.secondaryFieldTag).off();},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(model,value){if(this.disposed){return;}
if(this._inDetailMode()){this.render();return;}
value=this.format(value)||{'date':'','time':''};this.$(this.fieldTag).val(value['date']);this.$(this.secondaryFieldTag).val(value['time']);},this);},format:function(value){if(!value){return value;}
value=app.date(value);if(!value.isValid()){return;}
if(this.action==='edit'||this.action==='massupdate'){value={'date':value.format(app.date.convertFormat(this.getUserDateFormat())),'time':value.format(app.date.convertFormat(this.getUserTimeFormat()))};}else{value=value.formatUser(false);}
return value;},unformat:function(value){if(!value){return value;}
value=app.date(value,app.date.convertFormat(this.getUserDateTimeFormat()),true);if(!value.isValid()){return;}
return value.format();},decorateError:function(errors){var ftag=this.fieldTag||'',$ftag=this.$(ftag),errorMessages=[],$tooltip;this.$el.closest('.record-cell').addClass('error');this.$el.addClass('error');if(_.isString(errors)){errorMessages.push(errors);}else{_.each(errors,function(errorContext,errorName){errorMessages.push(app.error.getErrorString(errorName,errorContext));});}
$ftag.parent().addClass('error');$tooltip=[$(this.exclamationMarkTemplate(errorMessages)),$(this.exclamationMarkTemplate(errorMessages))];var self=this;$ftag.parent().children('input').each(function(index){$(this).after($tooltip[index]);self.createErrorTooltips($tooltip[index]);});},_render:function(){this._super('_render');if(this._inDetailMode()){return;}
this._setupTimePicker();},_dispose:function(){if(this.$(this.secondaryFieldTag).timepicker){this.$(this.secondaryFieldTag).timepicker('remove');}
this._super('_dispose');}})