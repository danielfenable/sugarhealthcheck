<?php
$clientCache['Audit']['base']['field'] = array (
  'htmleditable_tinymce' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'Htmleditable_tinymceField\',setViewContent:function(value){var editable=this._getHtmlEditableField();if(this.action==\'list\'){value=$(\'<div/>\').html(value).text();}
if(!editable){return;}
if(!_.isUndefined(editable.get(0))&&!_.isEmpty(editable.get(0).contentDocument)){if(editable.contents().find(\'body\').length>0){editable.contents().find(\'body\').html(value);}}else{editable.html(value);}}});',
    ),
    'templates' => 
    array (
      'list' => '
<div
    data-html="true"
    class="htmleditable ellipsis_inline"
    data-placement="bottom"
    title="{{value}}" >
</div>

',
    ),
  ),
  'fieldtype' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({format:function(value){if(this.context&&this.context.parent){var parentModel=this.context.parent.get(\'model\'),field=parentModel.fields[value];if(field){value=app.lang.get(field.label||field.vname,parentModel.module);}}
return value;}})',
    ),
  ),
  'currency' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({initialize:function(options){this._super(\'initialize\',[options]);this.def.is_base_currency=true;}})',
    ),
  ),
  '_hash' => '6fe308449ccade1b4b91529c83de3b74',
);

