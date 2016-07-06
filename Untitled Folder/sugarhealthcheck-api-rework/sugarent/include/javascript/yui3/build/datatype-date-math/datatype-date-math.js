/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datatype-date-math',function(Y,NAME){var LANG=Y.Lang;Y.mix(Y.namespace("Date"),{isValidDate:function(oDate){if(LANG.isDate(oDate)&&(isFinite(oDate))&&(oDate!="Invalid Date")&&!isNaN(oDate)&&(oDate!=null)){return true;}
else{return false;}},areEqual:function(aDate,bDate){return(this.isValidDate(aDate)&&this.isValidDate(bDate)&&(aDate.getTime()==bDate.getTime()));},isGreater:function(aDate,bDate){return(this.isValidDate(aDate)&&this.isValidDate(bDate)&&(aDate.getTime()>bDate.getTime()));},isGreaterOrEqual:function(aDate,bDate){return(this.isValidDate(aDate)&&this.isValidDate(bDate)&&(aDate.getTime()>=bDate.getTime()));},isInRange:function(aDate,bDate,cDate){return(this.isGreaterOrEqual(aDate,bDate)&&this.isGreaterOrEqual(cDate,aDate));},addDays:function(oDate,numDays){return new Date(oDate.getTime()+86400000*numDays);},addMonths:function(oDate,numMonths){var newYear=oDate.getFullYear();var newMonth=oDate.getMonth()+numMonths;newYear=Math.floor(newYear+newMonth / 12);newMonth=(newMonth%12+12)%12;var newDate=new Date(oDate.getTime());newDate.setFullYear(newYear);newDate.setMonth(newMonth);return newDate;},addYears:function(oDate,numYears){var newYear=oDate.getFullYear()+numYears;var newDate=new Date(oDate.getTime());newDate.setFullYear(newYear);return newDate;},listOfDatesInMonth:function(oDate){if(!this.isValidDate(oDate)){return[];}
var daysInMonth=this.daysInMonth(oDate),year=oDate.getFullYear(),month=oDate.getMonth(),output=[];for(var day=1;day<=daysInMonth;day++){output.push(new Date(year,month,day,12,0,0));}
return output;},daysInMonth:function(oDate){if(!this.isValidDate(oDate)){return 0;}
var mon=oDate.getMonth();var lengths=[31,28,31,30,31,30,31,31,30,31,30,31];if(mon!=1){return lengths[mon];}
else{var year=oDate.getFullYear();if(year%400===0){return 29;}
else if(year%100===0){return 28;}
else if(year%4===0){return 29;}
else{return 28;}}}});Y.namespace("DataType");Y.DataType.Date=Y.Date;},'3.15.0',{"requires":["yui-base"]});