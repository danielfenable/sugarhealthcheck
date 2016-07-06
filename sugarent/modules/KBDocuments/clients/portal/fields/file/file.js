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
({extendsFrom:'FileField',format:function(value){var attachments=[];value=_.isArray(value)?value:[value];_.each(value,function(file,idx){var urlOpts={module:file.module,id:file.id,field:file.field_name},fileObj=this._createFileObj(file.name,urlOpts);attachments.push(fileObj);},this);return attachments;}})