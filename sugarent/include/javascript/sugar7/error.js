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
(function(app){app.error=_.extend(app.error);function backToLogin(bDismiss){if(bDismiss)app.alert.dismissAll();if(app.api.isAuthenticated()){app.api.resetAuth();}
app.router.login();}
function showErrorPage(status,dismiss){if(dismiss){app.alert.dismissAll();}
app.controller.loadView({layout:"error",errorType:status,module:"Error",create:true});}
function alertUser(key,title,msg){app.alert.show(key,{level:'error',messages:app.lang.get(msg),title:app.lang.get(title)});}
app.events.on('app:sync:error',function(error){if(error.status!==0){backToLogin(true);}
alertUser("sync_failure","ERR_SYNC_FAILED",(error&&error.message)||"LBL_INVALID_412_RESPONSE");});app.error.handleNeedLoginError=function(error){backToLogin(true);alertUser("needs_login_error","LBL_INVALID_CREDS_TITLE",error.message);};app.error.handleInvalidGrantError=function(error){backToLogin(true);alertUser("invalid_grant_error","LBL_INVALID_GRANT_TITLE","LBL_INVALID_GRANT");};app.error.handleInvalidClientError=function(error){backToLogin(true);alertUser("invalid_client_error","LBL_AUTH_FAILED_TITLE","LBL_AUTH_FAILED");};app.error.handleInvalidRequestError=function(error){backToLogin(true);alertUser("invalid_request_error","LBL_INVALID_REQUEST_TITLE","LBL_INVALID_REQUEST");};app.error.handleUnspecified400Error=function(error){showErrorPage('400');};app.error.handleTimeoutError=function(error){app.alert.dismissAll();alertUser("timeout_error","LBL_REQUEST_TIMEOUT_TITLE","LBL_REQUEST_TIMEOUT");};app.error.handleUnauthorizedError=function(error){backToLogin(true);alertUser("unauthorized_request_error","LBL_UNAUTHORIZED_TITLE","LBL_UNAUTHORIZED");};app.error.handleForbiddenError=function(error){if(error.code!="not_authorized"){app.alert.dismissAll();}
if(error.code=="portal_not_configured"){backToLogin(true);}
app.logger.error(app.lang.get(error.message?error.message:"LBL_RESOURCE_UNAVAILABLE"));};app.error.handleNotFoundError=function(error,model,options){var layout=app.controller.layout||{};if((options&&options.context!=layout.context)||(model&&layout.context&&layout.context.get("model")&&layout.context.get("model")!=model)){return;}
if(!layout||!_.isObject(layout.error)||!_.isFunction(layout.error.handleNotFoundError)||layout.error.handleNotFoundError(error,model,options)!==false){showErrorPage("404");}};app.error.handleMethodNotAllowedError=function(error){backToLogin(true);alertUser("not_allowed_error","LBL_METHOD_NOT_ALLOWED_TITLE","LBL_METHOD_NOT_ALLOWED");};app.error.handleMethodConflictError=function(error){app.logger.error('Data conflict detected.');};app.error.handleValidationError=function(error){var layout=app.controller.layout;if(!_.isObject(layout.error)||!_.isFunction(layout.error.handleValidationError)||layout.error.handleValidationError(error)!==false){if(error instanceof app.data.beanModel){return;}
alertUser("validation_error","LBL_PRECONDITION_MISSING_TITLE",error.message||"LBL_PRECONDITION_MISSING");error.handled=true;}};app.error.handleHeaderPreconditionFailed=function(error,b,c,d){if(!app.isSynced){return;}
if(!error||error.code!=='metadata_out_of_date'){return;}
var responseText=JSON.parse(error.responseText);var newHash=responseText&&responseText.metadata_hash;var userHash=responseText&&responseText.user_hash;var afterSync=error.request.state&&error.request.state.loadingAfterSync;if(((!newHash&&afterSync)||newHash===app.metadata.getHash())&&((!userHash&&afterSync)||userHash===app.user.get("_hash"))){app.logger.fatal('A request returned the error code "metadata_out_of_date" for no reason.');app.alert.show('invalid_412',{level:'error',messages:['LBL_INVALID_412_RESPONSE']});app.api.resetAuth();app.router.refresh();return;}
app.sync();};app.error.handleMethodFailureError=function(error){error.handled=true;if(error.code=="request_failure"){showErrorPage("422");}else{alertUser("precondtion_failure_error","LBL_PRECONDITION_MISSING_TITLE","LBL_PRECONDITION_MISSING");}};app.error.handleServerError=function(error){if(error.payload&&error.payload.url){if(app.acl.hasAccess('admin','Administration')){app.router.navigate(error.payload.url,{trigger:true,replace:true});return;}}
app.controller.loadView({layout:"error",errorType:error.status||"500",module:"Error",error:error,create:true});};})(SUGAR.App);