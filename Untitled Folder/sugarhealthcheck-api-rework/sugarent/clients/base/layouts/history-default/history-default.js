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
({extendsFrom:'DefaultLayout',isSidePaneVisible:function(){if(this._isSidePaneVisibleCalledOnce!==true){this._isSidePaneVisibleCalledOnce=true;app.user.lastState.set(this._hideLastStateKey,1);return false;}
return this._super('isSidePaneVisible');},_dispose:function(){app.user.lastState.remove(this._hideLastStateKey);this._super('_dispose');}})