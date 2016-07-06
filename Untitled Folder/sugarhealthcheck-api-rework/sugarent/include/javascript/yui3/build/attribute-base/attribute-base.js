/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('attribute-base',function(Y,NAME){function Attribute(){Y.AttributeCore.apply(this,arguments);Y.AttributeObservable.apply(this,arguments);Y.AttributeExtras.apply(this,arguments);}
Y.mix(Attribute,Y.AttributeCore,false,null,1);Y.mix(Attribute,Y.AttributeExtras,false,null,1);Y.mix(Attribute,Y.AttributeObservable,true,null,1);Attribute.INVALID_VALUE=Y.AttributeCore.INVALID_VALUE;Attribute._ATTR_CFG=Y.AttributeCore._ATTR_CFG.concat(Y.AttributeObservable._ATTR_CFG);Attribute.protectAttrs=Y.AttributeCore.protectAttrs;Y.Attribute=Attribute;},'3.15.0',{"requires":["attribute-core","attribute-observable","attribute-extras"]});