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

require_once 'OpportunitySetup.php';

/**
 * Class OpportunityWithRevenueLineItem
 */
class OpportunityWithRevenueLineItem extends OpportunitySetup
{
    /**
     * How should the fields act when using RevenueLineItems
     *
     * @var array
     */
    protected $field_vardef_setup = array(
        'amount' => array(
            'required' => false,
            'audited' => false,
            'calculated' => true,
            'enforced' => true,
            'formula' => 'rollupConditionalSum($revenuelineitems, "likely_case", "sales_stage", forecastSalesStages(true, false))',
            'readonly' => true,
            'massupdate' => false,
            'importable' => true,
        ),
        'best_case' => array(
            'calculated' => true,
            'enforced' => true,
            'formula' => 'rollupConditionalSum($revenuelineitems, "best_case", "sales_stage", forecastSalesStages(true, false))',
            'audited' => false,
            'readonly' => true,
            'massupdate' => false,
        ),
        'worst_case' => array(
            'calculated' => true,
            'enforced' => true,
            'formula' => 'rollupConditionalSum($revenuelineitems, "worst_case", "sales_stage", forecastSalesStages(true, false))',
            'audited' => false,
            'readonly' => true,
            'massupdate' => false,
        ),
        'date_closed' => array(
            'calculated' => true,
            'enforced' => true,
            'formula' => 'maxRelatedDate($revenuelineitems, "date_closed")',
            'audited' => false,
            'importable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'commit_stage' => array(
            'massupdate' => false,
            'studio' => false,
            'reportable' => false,
            'workflow' => false,
        ),
        'sales_stage' => array(
            'audited' => false,
            'required' => false,
            'studio' => false,
            'massupdate' => false,
            'reportable' => false,
            'workflow' => false,
            'importable' => false,
        ),
        'probability' => array(
            'audited' => false,
            'studio' => false,
            'massupdate' => false,
            'reportable' => false,
        ),
        'sales_status' => array(
            'studio' => true,
            'reportable' => true,
            'audited' => true,
            'massupdate' => true,
            'importable' => true,
        ),
        'date_closed_timestamp' => array(
            'formula' => 'rollupMax($revenuelineitems, "date_closed_timestamp")'
        ),
        'total_revenue_line_items' => array(
            'reportable' => true,
            'workflow' => true
        ),
        'closed_revenue_line_items' => array(
            'reportable' => true,
            'workflow' => true
        )
    );

    /**
     * Handle The Metadata Conversion
     *
     * @return mixed|void
     */
    public function doMetadataConvert()
    {
        // always runt he parent first, since we need to fix the vardefs before doing the viewdefs
        parent::doMetadataConvert();

        // fix the view defs now
        $this->fixRecordView(
            array(
                'commit_stage' => false,
                'sales_status' => true,
                'sales_stage' => false,
                'probability' => false
            )
        );

        $this->fixListViews(
            array(
                'sales_stage' => 'sales_status',
                'probability' => false,
                'commit_stage' => false,
            )
        );
    }

    /**
     * Metadata Fixes for the Opportunity Module
     *
     * - Sets the dupe check to use `sales_status` instead of `sales_stage`
     * - Add a dependency extension that turns off the default oob dependencies
     */
    protected function fixOpportunityModule()
    {
        // lets make sure the dir is there
        SugarAutoLoader::ensureDir($this->moduleExtFolder . '/Vardefs');

        $file_contents = <<<EOL
<?php
\$dictionary['Opportunity']['fields']['revenuelineitems']['workflow'] = true;
\$dictionary['Opportunity']['duplicate_check']['FilterDuplicateCheck']['filter_template'][0]['\$and'][1] = array('sales_status' => array('\$not_equals' => 'Closed Lost'));
\$dictionary['Opportunity']['duplicate_check']['FilterDuplicateCheck']['filter_template'][0]['\$and'][2] = array('sales_status' => array('\$not_equals' => 'Closed Won'));
EOL;

        sugar_file_put_contents($this->moduleExtFolder . '/Vardefs/' . $this->dupeCheckExtFile, $file_contents);

        SugarAutoLoader::ensureDir($this->moduleExtFolder . '/Dependencies');

        $file_contents = <<<EOL
<?php
if (isset(\$dependencies['Opportunities'])) {
    foreach(
        array('set_base_rate','commit_stage_readonly_set_value','best_worst_sales_stage_read_only','likely_case_copy_when_closed')
        as \$dep
    ) {
        if (isset(\$dependencies['Opportunities'][\$dep])) {
            unset(\$dependencies['Opportunities'][\$dep]);
        }
    }
}
EOL;

        sugar_file_put_contents(
            $this->moduleExtFolder . '/Dependencies/' . $this->oppModuleDependencyFile,
            $file_contents
        );
    }

    /**
     * Enable and Show the RevenueLine Item Module
     *
     * - Add the file that shows the RLI Module
     * - Adds the `studio.php` file
     * - Puts  RLI module from the menu bar
     * - Adds the ACL Actions
     */
    protected function fixRevenueLineItemModule()
    {
        // lets make sure the dir is there
        SugarAutoLoader::ensureDir($this->rliModuleExtFolder . '/Vardefs');

        $file_contents = <<<EOL
<?php
\$dictionary['RevenueLineItem']['importable'] = true;
\$dictionary['RevenueLineItem']['unified_search'] = true;
EOL;

        sugar_file_put_contents($this->rliModuleExtFolder . '/Vardefs/' . $this->rliModuleExtVardefFile, $file_contents);

        SugarAutoLoader::ensureDir($this->appExtFolder . '/Include');
        
        // we need to run the code we are putting in the custom file
        $GLOBALS['moduleList'][] = 'RevenueLineItems';
        if (isset($GLOBALS['modInvisList']) && is_array($GLOBALS['modInvisList'])) {
            foreach ($GLOBALS['modInvisList'] as $key => $mod) {
                if ($mod === 'RevenueLineItems') {
                    unset($GLOBALS['modInvisList'][$key]);
                }
            }
        }

        $file_contents = <<<EOL
<?php
\$moduleList[] = 'RevenueLineItems';
if (isset(\$modInvisList) && is_array(\$modInvisList)) {
    foreach (\$modInvisList as \$key => \$mod) {
        if (\$mod === 'RevenueLineItems') {
            unset(\$modInvisList[\$key]);
        }
    }
}
EOL;

        sugar_file_put_contents($this->appExtFolder . '/Include/' . $this->rliModuleExtFile, $file_contents);

        // enable the ACLs on RevenueLineItems
        ACLAction::addActions('RevenueLineItems');

        // show the rli module in WorkFlows
        $affected_modules = $this->toggleRevenueLineItemsLinkInWorkFlows(true);

        // show the rli module in the mega menu
        $this->setRevenueLineItemModuleTab(true);

        // handle the parent_type_field
        $this->setRevenueLineItemInParentRelateDropDown(true);

        // enable the item in the quick create
        $this->toggleRevenueLineItemQuickCreate(true);

        // place the studio file
        sugar_touch($this->rliStudioFile);

        $affected_modules[] = 'RevenueLineItems';

        return $affected_modules;
    }


    /**
     * Call this method to convert the data as well, this should be called after `doMetadataConvert`
     */
    public function doDataConvert()
    {
        $this->resetForecastData('RevenueLineItems');

        // fix the reports
        SugarAutoLoader::load('modules/Opportunities/include/OpportunityReports.php');
        $reports = new OpportunityReports();
        $reports->migrateToRevenueLineItems();

        $this->createRevenueLineItems();
    }

    /**
     * Find all the Opportunities and Create RLI's for them, this will process the last 100 modified Opportunities
     * right away, and schedule the rest in chunks of 100 for the Scheduler to Take care of
     *
     * @throws SugarQueryException
     */
    protected function createRevenueLineItems()
    {
        // get the list of opps that are not deleted
        $sq = new SugarQuery();
        $sq->select(array('id'));
        $sq->from($this->bean);
        $sq->orderBy('date_modified', 'DESC');

        $opps = $sq->execute();

        if (empty($opps)) {
            return false;
        }

        $bean_chunks = array_chunk($opps, 100);
        // process the first chunk
        $this->processOpportunityIds($bean_chunks[0]);

        $job_group = md5(microtime());

        // process any remaining in the background
        for ($x = 1; $x < count($bean_chunks); $x++) {
            $this->createRevenueLineItemJob($bean_chunks[$x], $job_group);
        }
    }

    /**
     * Create a job for the Scheduler to create the RLI's for.
     *
     * @param array $data
     * @param string $job_group
     */
    protected function createRevenueLineItemJob(array $data, $job_group)
    {
        /* @var $job SchedulersJob */
        $job = BeanFactory::getBean('SchedulersJobs');
        $job->name = "Create RevenueLineItems for Opportunities";
        $job->target = "class::SugarJobCreateRevenueLineItems";
        $job->data = json_encode(array('data' => $data));
        $job->retry_count = 0;
        $job->assigned_user_id = $GLOBALS['current_user']->id;
        $job->job_group = $job_group;

        require_once('include/SugarQueue/SugarJobQueue.php');
        $jq = new SugarJobQueue();
        $jq->submitJob($job);
    }

    /**
     * Process the chunks of opportunities to create related Revenue Line Items
     *
     * - This always sets commit_stage to empty since forecasts is not setup any more.
     *
     * @param array $data
     */
    public static function processOpportunityIds(array $data)
    {
        Activity::disable();
        // disable the fts index as well
        /* @var $ftsSearch SugarSearchEngineElastic */
        $ftsSearch = SugarSearchEngineFactory::getInstance();
        $ftsSearch->setForceAsyncIndex(true);

        foreach ($data as $db_opp) {
            /* @var $opp Opportunity */
            $opp = BeanFactory::getBean('Opportunities', $db_opp['id']);
            if ($opp->id === $db_opp['id']) {
                /* @var $rli RevenueLineItem */
                $rli = BeanFactory::getBean('RevenueLineItems');
                $rli->update_modified_by = false;
                $rli->set_created_by = false;
                $rli->name = $opp->name;
                $rli->best_case = $opp->best_case;
                $rli->likely_case = $opp->amount;
                $rli->worst_case = $opp->worst_case;
                $rli->cost_price = $opp->amount;
                $rli->quantity = 1;
                $rli->currency_id = $opp->currency_id;
                $rli->base_rate = $opp->base_rate;
                $rli->probability = $opp->probability;
                $rli->date_closed = $opp->date_closed;
                $rli->date_closed_timestamp = $opp->date_closed_timestamp;
                $rli->assigned_user_id = $opp->assigned_user_id;
                $rli->modified_user_id = $opp->modified_user_id;
                $rli->modified_by_name = $opp->modified_by_name;
                $rli->created_by = $opp->created_by;
                $rli->created_by_name = $opp->created_by_name;
                $rli->account_id = $opp->account_id;
                $rli->commit_stage = '';
                $rli->sales_stage = $opp->sales_stage;
                $rli->deleted = $opp->deleted;
                $rli->save();

                // set the relationship up correctly
                $rli->load_relationship('opportunities');
                $rli->opportunities->add($opp->id);
            }
        }
        // set it back to the default value from the config.
        $ftsSearch->setForceAsyncIndex(
            SugarConfig::getInstance()->get('search_engine.force_async_index', false)
        );
        Activity::enable();
    }
}
