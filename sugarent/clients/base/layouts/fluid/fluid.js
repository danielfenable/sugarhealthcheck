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
({_placeComponent:function(comp,def){var compdef=def.layout||def.view,size=compdef.span||4;if(!this.$el.children()[0]){this.$el.addClass("container-fluid").append('<div class="row-fluid"></div>');}
$().add("<div></div>").addClass("span"+size).append(comp.el).appendTo(this.$el.find("div.row-fluid")[0]);}})