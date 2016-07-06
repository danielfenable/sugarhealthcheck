/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('arraylist-filter',function(Y,NAME){Y.mix(Y.ArrayList.prototype,{filter:function(validator){var items=[];Y.Array.each(this._items,function(item,i){item=this.item(i);if(validator(item)){items.push(item);}},this);return new this.constructor(items);}});},'3.15.0',{"requires":["arraylist"]});