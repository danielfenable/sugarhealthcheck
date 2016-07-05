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
var _inputFocused=null;if(Modernizr.touch){$(document).on('blur','input, textarea',function(){_inputFocused=setTimeout(function(){window.scrollTo(document.body.scrollLeft,document.body.scrollTop);},0);});$(document).on('focus','input, textarea',function(){clearTimeout(_inputFocused);});}