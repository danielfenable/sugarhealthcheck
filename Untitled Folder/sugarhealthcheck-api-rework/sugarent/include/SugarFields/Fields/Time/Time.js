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
function Time(timeval,field,timeformat,tabindex){this.timeval=timeval;if(typeof this.timeval=="undefined"){this.datetime="";}
this.fieldname=field;this.hrs=parseInt(timeval.substring(0,2),10);this.mins=parseInt(timeval.substring(3,5),10);if(this.mins>0&&this.mins<15){this.mins=15;}else if(this.mins>15&&this.mins<30){this.mins=30;}else if(this.mins>30&&this.mins<45){this.mins=45;}else if(this.mins>45){this.hrs+=1;this.mins=0;}
this.timeformat=timeformat;this.tabindex=tabindex==null||isNaN(tabindex)?1:tabindex;this.timeseparator=this.timeformat.substring(2,3);this.has12Hours=/^11/.test(this.timeformat);this.hasMeridiem=/am|pm/i.test(this.timeformat);if(this.hasMeridiem){this.pm=/pm/.test(this.timeformat);}
this.meridiem=this.hasMeridiem?trim(this.timeval.substring(5)):'';}
Time.prototype.html=function(callback){var text='<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_hours" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';var h1=this.has12Hours?1:0;var h2=this.has12Hours?12:23;text+='<option></option>';for(i=h1;i<=h2;i++){val=i<10?"0"+i:i;text+='<option value="'+val+'" '+(i==this.hrs?"SELECTED":"")+'>'+val+'</option>';}
text+='\n</select>&nbsp;';text+=this.timeseparator;text+='\n&nbsp;<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_minutes" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';text+='\n<option></option>';text+='\n<option value="00" '+(this.mins==0?"SELECTED":"")+'>00</option>';text+='\n<option value="15" '+(this.mins==15?"SELECTED":"")+'>15</option>';text+='\n<option value="30" '+(this.mins==30?"SELECTED":"")+'>30</option>';text+='\n<option value="45" '+(this.mins==45?"SELECTED":"")+'>45</option>';text+='\n</select>';if(this.hasMeridiem){text+='\n&nbsp;';text+='\n<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_meridiem" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';if(this.allowEmptyHM){text+='\n<option></option>';}
text+='\n<option value="'+(this.pm?"am":"AM")+'" '+(/am/i.test(this.meridiem)?"SELECTED":"")+'>'+(this.pm?"am":"AM")+'</option>';text+='\n<option value="'+(this.pm?"pm":"PM")+'" '+(/pm/i.test(this.meridiem)?"SELECTED":"")+'>'+(this.pm?"pm":"PM")+'</option>';text+='\n</select>';}
return text;};Time.prototype.update=function(){id=this.fieldname+'_hours';h=window.document.getElementById(id).value;id=this.fieldname+'_minutes';m=window.document.getElementById(id).value;if(h==""&&m==""){document.getElementById(this.fieldname).value="";return;}
newdate=h+this.timeseparator+m;if(this.hasMeridiem){ampm=document.getElementById(this.fieldname+"_meridiem").value;newdate+=ampm;}
document.getElementById(this.fieldname).value=newdate;};