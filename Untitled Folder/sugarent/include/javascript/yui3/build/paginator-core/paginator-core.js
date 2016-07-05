/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('paginator-core',function(Y,NAME){var PaginatorCore=Y.namespace('Paginator').Core=function(){};PaginatorCore.ATTRS={page:{value:1},totalPages:{readOnly:true,getter:'_getTotalPagesFn'},itemsPerPage:{value:10},totalItems:{value:0}};Y.mix(PaginatorCore.prototype,{prevPage:function(){if(this.hasPrevPage()){this.set('page',this.get('page')-1);}
return this;},nextPage:function(){if(this.hasNextPage()){this.set('page',this.get('page')+1);}
return this;},hasPrevPage:function(){return this.get('page')>1;},hasNextPage:function(){return(!this.get('totalItems')||this.get('page')<this.get('totalPages'));},_getTotalPagesFn:function(){var itemsPerPage=this.get('itemsPerPage');return(itemsPerPage<1)?1:Math.ceil(this.get('totalItems')/ itemsPerPage);}});},'3.15.0',{"requires":["base"]});