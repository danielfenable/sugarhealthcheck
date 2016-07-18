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
({extendsFrom:'DnbBalResultsView',events:{'click .importDNBData':'importDNBData','click a.dnb-company-name':'getCompanyDetails','click .backToList':'backToCompanyList','click [data-action="show-more"]':'invokePagination','click .bulkImport':'bulkImport','change .dnb-bi-chk':'importCheckBox','change [name="dnb-bi-slctall"]':'selectRecords'},selectors:{'load':'#dnb-bal-result-loading','rslt':'#dnb-bal-result','rsltList':'ul#dnb-results-list'},selectAll:true,balAcctDD:null,bulkImportLimit:20,initialize:function(options){this._super('initialize',[options]);this.initDD();this.initDashlet();this.paginationCallback=this.baseAccountsBAL;this.rowTmpl=app.template.getView(this.name+'.dnb-account-row',this.module);this.resultTemplate=app.template.getView(this.name+'.dnb-bal-acct-rslt',this.module);this.resultCountTmpl=app.lang.get('LBL_DNB_BAL_ACCT_HEADER');},initDD:function(){this.balAcctDD={'name':this.searchDD.companyname,'duns_num':this.searchDD.duns_num,'billing_address_street':this.searchDD.streetaddr,'billing_address_city':this.searchDD.town,'billing_address_state':this.searchDD.territory,'billing_address_country':this.searchDD.ctrycd,'recordNum':{'json_path':'DisplaySequence'}};this.balAcctDD.locationtype=this.searchDD.locationtype;this.balAcctDD.isDupe=this.searchDD.isDupe;},loadData:function(options){this.checkConnector('ext_rest_dnb',_.bind(this.loadDataWithValidConnector,this),_.bind(this.handleLoadError,this),['test_passed']);},_render:function(){app.view.View.prototype._renderHtml.call(this);},buildAList:function(balParams){if(this.disposed){return;}
this.template=this.resultTemplate;if(this.listData&&this.listData.count){delete this.listData['count'];}
this.render();this.$(this.selectors.load).removeClass('hide');this.$(this.selectors.rslt).addClass('hide');this.toggleButton(true,'.bulkImport');this.baseAccountsBAL(balParams,this.renderBAL);},renderBAL:function(dnbBalApiRsp){var dnbBalRslt={},appendRecords=false;if(this.resetPaginationFlag){this.initPaginationParams();}
if(dnbBalApiRsp.product){var apiCompanyList=this.getJsonNode(dnbBalApiRsp.product,this.commonJSONPaths.srchRslt);this.formattedRecordSet=this.formatSrchRslt(apiCompanyList,this.balAcctDD);this.recordCount=this.getJsonNode(dnbBalApiRsp.product,this.commonJSONPaths.srchCount);var nextPage=this.paginateRecords();if(_.isNull(this.currentPage)){this.currentPage=nextPage;dnbBalRslt.product=this.currentPage;}else{dnbBalRslt.product=nextPage;appendRecords=true;}
if(this.recordCount){dnbBalRslt.count=this.recordCount;}}else if(dnbBalApiRsp.errmsg){dnbBalRslt.errmsg=dnbBalApiRsp.errmsg;}
this.renderPage(dnbBalRslt,appendRecords);},renderPage:function(pageData,append){var slctRecCnt;if(this.selectAll){if(append){slctRecCnt=this.$('.dnb-bi-chk:checked').length;}else{slctRecCnt=0;}
_.each(pageData.product,function(balRsltObj){if(slctRecCnt>=this.bulkImportLimit){return;}
if(_.isUndefined(balRsltObj.isDupe)&&slctRecCnt<this.bulkImportLimit){balRsltObj.isSelected=true;slctRecCnt++;}else{balRsltObj.isSelected=false;}},this);}else{_.each(pageData.product,function(balRsltObj){balRsltObj.isSelected=false;},this);slctRecCnt=0;}
this._super('renderPage',[pageData,append]);var disableImportBtn=slctRecCnt===0;if(this.selectAll&&disableImportBtn){this.selectAll=false;this.$('[name="dnb-bi-slctall"]').prop('checked',false);}
this.toggleButton(disableImportBtn,'.bulkImport');},getCompanyDetails:function(evt){if(this.disposed){return;}
var duns_num=evt.target.id;if(duns_num){this.template=app.template.getView(this.name+'.dnb-company-details',this.module);this.render();this.$('div#dnb-company-details').hide();this.$('.importDNBData').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.lite,app.lang.get('LBL_DNB_BAL_LIST'),this.renderCompanyDetails);}},renderCompanyDetails:function(companyDetails){if(this.disposed){return;}
var formattedFirmographics,dnbFirmo={};dnbFirmo.backToListLabel=companyDetails.backToListLabel;if(companyDetails.errmsg){dnbFirmo.errmsg=companyDetails.errmsg;}else if(companyDetails.product){formattedFirmographics=this.formatCompanyInfo(companyDetails.product,this.accountsDD);dnbFirmo.product=formattedFirmographics;this.currentCompany=companyDetails.product;}
this.dnbFirmo=dnbFirmo;this.render();this.$('.importDNBData').toggleClass('hide',!_.isUndefined(this.dnbFirmo.errmsg));this.$('div#dnb-company-detail-loading').hide();this.$('div#dnb-company-details').show();},backToCompanyList:function(){if(this.disposed){return;}
if(this.listData&&this.listData.count){delete this.listData['count'];}
this.template=app.template.getView(this.name+'.dnb-bal-acct-rslt',this.module);this.render();this.$(this.selectors.load).removeClass('hide');this.$(this.selectors.rslt).addClass('hide');this.toggleButton(true,'.bulkImport');var dupeCheckParams={'type':'duns','apiResponse':this.currentPage,'module':'dunsPage'};this.baseDuplicateCheck(dupeCheckParams,this.renderPage);},bulkImport:function(){var selectedDuns=this.$('.dnb_checkbox:checked').map(function(){return this.name;});if(!_.isUndefined(selectedDuns)&&selectedDuns.length>0){this.toggleButton(true,'.bulkImport');var recToImport=this.currentPage.filter(function(rsltObj){if(_.contains(selectedDuns,rsltObj.duns_num)){return rsltObj;}}).map(function(rsltObj){return{'name':rsltObj.name,'duns_num':rsltObj.duns_num}});if(!_.isUndefined(recToImport)&&recToImport.length>0){this.invokeBulkImport(recToImport,this.module,this.backToCompanyList);}}else{app.alert.show('dnb-import',{level:'warning',title:app.lang.get('LBL_WARNING')+':',messages:app.lang.get('LBL_DNB_BI_NO_SLCT'),autoClose:true});}},importCheckBox:function(evt){var dnbCheckBoxes=this.$('.dnb-bi-chk:checked');var isChecked=this.$(evt.currentTarget).prop('checked');if(isChecked&&dnbCheckBoxes.length>this.bulkImportLimit){this.$(evt.currentTarget).prop('checked',false);app.alert.show('dnb-import',{level:'warning',title:app.lang.get('LBL_WARNING')+':',messages:app.lang.get('LBL_DNB_BI_REC_LIMIT'),autoClose:true});}
this.toggleButton(dnbCheckBoxes.length===0,'.bulkImport');},selectRecords:function(evt){this.selectAll=this.$(evt.currentTarget).prop('checked');var slctCnt=0;if(this.selectAll){_.each(this.$('.dnb-bi-chk'),function(chkBox){if(!this.$(chkBox).prop('disabled')&&slctCnt<this.bulkImportLimit){this.$(chkBox).prop('checked',true);slctCnt++;}},this);this.toggleButton(slctCnt===0,'.bulkImport');}else{this.$('.dnb-bi-chk').prop('checked',false);this.toggleButton(true,'.bulkImport');}}})