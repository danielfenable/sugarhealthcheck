<?php
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
require_once('include/api/SugarApi.php');

class QuoteConvertApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'convert' => array(
                'reqType' => 'POST',
                'path' => array('Quotes', '?', 'opportunity'),
                'pathVars' => array('module', 'record', 'opportunity'),
                'method' => 'convertQuote',
                'shortHelp' => 'Convert a Quote into another record',
                'longHelp' => 'modules/Quotes/clients/base/api/help/quote_convert.html',
            )
        );
    }

    public function convertQuote(ServiceBase $api, $args)
    {
        $this->requireArgs($args, array('record'));
        /* @var $quote Quote */
        $quote = $this->loadBean($api, $args);

        if (!$quote->ACLAccess('view')) {
            throw new SugarApiExceptionNotAuthorized('EXCEPTION_NOT_AUTHORIZED');
        }

        // first lets load up the bean to make sure we have access to the opportunity save
        /* @var $opportunity Opportunity */
        $opportunity = $this->loadBean($api, array('module' => 'Opportunities', 'record' => ''));
        if (!$opportunity->ACLAccess('save')) {
            // No create access so we construct an error message and throw the exception
            $failed_module_strings = return_module_language($GLOBALS['current_language'], $opportunity->module_dir);
            $moduleName = $failed_module_strings['LBL_MODULE_NAME'];
            $args = null;
            if (!empty($moduleName)) {
                $args = array('moduleName' => $moduleName);
            }
            throw new SugarApiExceptionNotAuthorized('EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED', $args);
        }

        // we made it though all the ACL checks. lets see if this quote already has an an opportunity
        $quote->load_relationship('opportunities');

        if (count($quote->opportunities->getBeans())) {
            // throw an exception here as we already have one.
            throw new SugarApiExceptionEditConflict(
                'EXCEPTION_QUOTE_ALREADY_CONVERTED',
                array(),
                'Quotes',
                0,
                'already_converted'
            );
        }

        // since we are creating a bunch of noise with this, we need to disable Activity Streams
        Activity::disable();

        $this->mapQuoteToOpportunity($quote, $opportunity);
        $this->convertQuoteLineItemsToRevenueLineItems($quote, $opportunity);
        $this->linkQuoteContactsToOpportunity($quote, $opportunity);
        $this->linkQuoteContractsToOpportunity($quote, $opportunity);

        $opportunity->save();

        // re-enable activity streams
        Activity::enable();

        return array(
            'record' => $this->formatBean($api, $args, $opportunity),
            'related_record' => $this->formatBean($api, $args, $quote)
        );
    }

    /**
     * Maps Quote Values to the Opportunity
     *
     * @param Quote $quote
     * @param Opportunity $opp
     */
    protected function mapQuoteToOpportunity(Quote $quote, Opportunity $opp)
    {
        // @codeCoverageIgnoreStart
        global $app_list_strings;
        // @codeCoverageIgnoreEnd
        $forecastConfig = $this->getForecastConfig();

        $opp->id = create_guid();
        $opp->new_with_id = true;
        $opp->assigned_user_id = $quote->assigned_user_id;
        $opp->date_closed = $quote->date_quote_expected_closed;
        $opp->name = $quote->name;
        $opp->assigned_user_name = $quote->assigned_user_name;
        $opp->opportunity_type = isset($app_list_strings['opportunity_type_dom']['New Business']) ?
            $app_list_strings['opportunity_type_dom']['New Business'] : null;
        $opp->team_id = $quote->team_id;

        // TODO: this will need to change when we have the switch for Opportunities,
        // TODO: but since that is not done yet this will use the forecast_by.
        if ($forecastConfig['forecast_by'] == 'Opportunities') {
            // just setting sales_stage will now set probability correctly
            $opp->sales_stage = isset($app_list_strings['sales_stage_dom']['Proposal/Price Quote'])
                ? 'Proposal/Price Quote' : null;
            $opp->amount = $quote->total;
        }
        $opp->quote_id = $quote->id;
        $opp->currency_id = $quote->currency_id;
        $opp->base_rate = $quote->base_rate;
        $opp->account_id = $quote->billing_account_id;

        // save the opp so we can add the products to it.
        $opp->save();
    }

    /**
     * Take any Line Items from the Quote and Convert them into a RevenueLineItem and attach them to the Opportunity
     *
     * @param Quote $quote
     * @param Opportunity $opp
     */
    protected function convertQuoteLineItemsToRevenueLineItems(Quote $quote, Opportunity $opp)
    {

        $forecastConfig = $this->getForecastConfig();

        // TODO: this will need to change when we have the switch for Opportunities,
        // TODO: but since that is not done yet this will use the forecast_by.
        if ($forecastConfig['forecast_by'] !== 'RevenueLineItems') {
            return false;
        }
        // load the revenue line items
        $opp->load_relationship('revenuelineitems');

        $products = $quote->get_linked_beans('products', 'Products');
        /* @var $product Product */
        foreach ($products as $product) {
            $rli = $product->convertToRevenueLineItem();
            $rli->date_closed = $quote->date_quote_expected_closed;
            $rli->sales_stage = isset($app_list_strings['sales_stage_dom']['Proposal/Price Quote']) ? 'Proposal/Price Quote' : null;
            $rli->assigned_user_id = $quote->assigned_user_id;
            $rli->save();

            // save the RLI to the relationship
            $opp->revenuelineitems->add($rli);
        }
    }


    /**
     * Method to link any Contracts from the Quote to the Opportunity
     *
     * @param Quote $quote
     * @param Opportunity $opp
     */
    protected function linkQuoteContractsToOpportunity(Quote $quote, Opportunity $opp)
    {
        $quote->load_relationship('contracts');
        $contracts = $quote->contracts->get();

        if (is_array($contracts)) {
            $opp->load_relationship('contracts');
            foreach ($contracts as $id) {
                $opp->contracts->add($id);
            }
        }
    }

    /**
     * Take any Billing and Shipping Contacts and link the to the Opportunity
     *
     * @param Quote $quote
     * @param Opportunity $opp
     */
    protected function linkQuoteContactsToOpportunity(Quote $quote, Opportunity $opp)
    {
        // @codeCoverageIgnoreStart
        global $app_list_strings;
        // @codeCoverageIgnoreEnd
        //opportunity_relationship_type_dom
        $quote->load_relationship('shipping_contacts');
        $quote->load_relationship('billing_contacts');

        $ids = array_merge($quote->shipping_contacts->get(), $quote->billing_contacts->get());
        $ids = array_unique($ids);

        $default_role = (isset($app_list_strings['opportunity_relationship_type_dom']['Other'])) ? 'Other' : '';

        if (!empty($ids)) {
            $opp->load_relationship('contacts');
            foreach ($ids as $id) {
                $opp->contacts->add($id, array('contact_role' => $default_role));
            }
        }
    }

    /**
     * Get the Forecast Config Values
     *
     * @codeCoverageIgnore
     * @return array
     */
    protected function getForecastConfig()
    {
        return Forecast::getSettings();
    }
}
