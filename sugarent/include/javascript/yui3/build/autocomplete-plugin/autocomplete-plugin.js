/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('autocomplete-plugin',function(Y,NAME){var Plugin=Y.Plugin;function ACListPlugin(config){config.inputNode=config.host;if(!config.render&&config.render!==false){config.render=true;}
ACListPlugin.superclass.constructor.apply(this,arguments);}
Y.extend(ACListPlugin,Y.AutoCompleteList,{},{NAME:'autocompleteListPlugin',NS:'ac',CSS_PREFIX:Y.ClassNameManager.getClassName('aclist')});Plugin.AutoComplete=ACListPlugin;Plugin.AutoCompleteList=ACListPlugin;},'3.15.0',{"requires":["autocomplete-list","node-pluginhost"]});