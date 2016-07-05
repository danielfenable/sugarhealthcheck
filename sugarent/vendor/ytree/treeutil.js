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
function treeinit(tree,treedata,treediv,params){tree=new YAHOO.widget.TreeView(treediv);YAHOO.namespace(treediv).param=params;var root=tree.getRoot();var tmpNode;var data=treedata;for(nodedata in data){for(node in data[nodedata]){addNode(root,data[nodedata][node]);}}
tree.subscribe("clickEvent",function(o){set_selected_node(this.id,null,o.node);});tree.draw();}
function set_selected_node(treeid,nodeid,node){if(typeof(node)=='undefined')
node=YAHOO.widget.TreeView.getNode(treeid,nodeid);if(typeof(node)!='undefined'){YAHOO.namespace(treeid).selectednode=node;}else{YAHOO.namespace(treeid).selectednode=null;}}
function addNode(parentnode,nodedef){var dynamicload=false;var dynamicloadfunction;var childnodes;var expanded=false;if(nodedef['data']!='undefined'){if(typeof(nodedef['custom'])!='undefined'){dynamicload=nodedef['custom']['dynamicload'];dynamicloadfunction=nodedef['custom']['dynamicloadfunction'];expanded=nodedef['custom']['expanded'];}
var tmpNode=new YAHOO.widget.TextNode(nodedef['data'],parentnode,expanded);if(dynamicload){tmpNode.setDynamicLoad(eval(dynamicloadfunction));}
if(typeof(nodedef['nodes'])!='undefined'){for(childnodes in nodedef['nodes']){addNode(tmpNode,nodedef['nodes'][childnodes]);}}}}
function node_click(treeid,target,targettype,functioname){node=YAHOO.namespace(treeid).selectednode;var url=site_url.site_url+"/index.php?entryPoint=TreeData&function="+functioname+construct_url_from_tree_param(node);var callback={success:function(o){var targetdiv=document.getElementById(o.argument[0]);targetdiv.innerHTML=o.responseText;SUGAR.util.evalScript(o.responseText);},failure:function(o){},argument:[target,targettype]}
var trobj=YAHOO.util.Connect.asyncRequest('GET',url,callback,null);}
function construct_url_from_tree_param(node){var treespace=YAHOO.namespace(node.tree.id);url="&PARAMT_depth="+node.depth;if(treespace!='undefined'){for(tparam in treespace.param){url=url+"&PARAMT_"+tparam+'='+treespace.param[tparam];}}
for(i=node.depth;i>=0;i--){var currentnode;if(i==node.depth){currentnode=node;}else{currentnode=node.getAncestor(i);}
url=url+"&PARAMN_id"+'_'+currentnode.depth+'='+currentnode.data.id;if(currentnode.data.param!='undefined'){for(nparam in currentnode.data.param){url=url+"&PARAMN_"+nparam+'_'+currentnode.depth+'='+currentnode.data.param[nparam];}}}
return url;}
function loadDataForNode(node,onCompleteCallback){var id=node.data.id;var params="entryPoint=TreeData&function=get_node_data"+construct_url_from_tree_param(node);var callback={success:function(o){node=o.argument[0];var nodes=YAHOO.lang.JSON.parse(o.responseText);var tmpNode;for(nodedata in nodes){for(node1 in nodes[nodedata]){addNode(node,nodes[nodedata][node1]);}}
o.argument[1]();},failure:function(o){},argument:[node,onCompleteCallback]}
var trobj=YAHOO.util.Connect.asyncRequest('POST','index.php',callback,params);}