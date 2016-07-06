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

require_once('modules/Forecasts/AbstractForecastHooks.php');
class OpportunityHooks extends AbstractForecastHooks
{
    /**
     * @return array
     */
    protected static function useRevenueLineItems()
    {
        // get the OpportunitySettings
        $settings = Opportunity::getSettings();
        return (isset($settings['opps_view_by']) && $settings['opps_view_by'] === 'RevenueLineItems');
    }

    /**
     * This is a general hook that takes the Opportunity and saves it to the forecast worksheet record.
     *
     * @param Opportunity $bean The bean we are working with
     * @param string $event Which event was fired
     * @param array $args Any additional Arguments
     * @return bool
     */
    public static function saveWorksheet(Opportunity $bean, $event, $args)
    {
        if (static::isForecastSetup() && !static::useRevenueLineItems()) {
            /* @var $worksheet ForecastWorksheet */
            $worksheet = BeanFactory::getBean('ForecastWorksheets');
            $worksheet->saveRelatedOpportunity($bean);
            return true;
        }

        return false;
    }

    /**
     * Mark all related RLI's on a given opportunity to be deleted
     *
     * @param Opportunity $bean
     * @param $event
     * @param $args
     */
    public static function deleteOpportunityRevenueLineItems(Opportunity $bean, $event, $args)
    {
        if (static::useRevenueLineItems()) {
            $rlis = $bean->get_linked_beans('revenuelineitems', 'RevenueLineItems');
            foreach ($rlis as $rli) {
                $rli->mark_deleted($rli->id);
            }
        }
    }

    /**
     * Set the Sales Status based on the associated RLI's sales_stage
     *
     * @param Opportunity $bean
     * @param string $event
     * @param array $args
     */
    public static function setSalesStatus(Opportunity $bean, $event, $args)
    {
        if (static::useRevenueLineItems() && $bean->ACLFieldAccess('sales_status', 'write')) {
            // Load forecast config so we have the sales_stage data.
            static::loadForecastSettings();

            // we don't have a new row, so figure out what we need to set it to
            $closed_won = static::$settings['sales_stage_won'];
            $closed_lost = static::$settings['sales_stage_lost'];

            $won_rlis = count(
                $bean->get_linked_beans(
                    'revenuelineitems',
                    'RevenueLineItems',
                    array(),
                    0,
                    -1,
                    0,
                    "sales_stage in ('" . join("', '", $closed_won) . "')"
                )
            );

            $lost_rlis = count(
                $bean->get_linked_beans(
                    'revenuelineitems',
                    'RevenueLineItems',
                    array(),
                    0,
                    -1,
                    0,
                    "sales_stage in ('" . join("', '", $closed_lost) . "')"
                )
            );

            $total_rlis = count($bean->get_linked_beans('revenuelineitems', 'RevenueLineItems'));

            if ($total_rlis > ($won_rlis + $lost_rlis)) {
                // still in progress
                $bean->sales_status = Opportunity::STATUS_IN_PROGRESS;
            } else if($total_rlis === 0) {
                $bean->sales_status = Opportunity::STATUS_NEW;
            } else {
                // they are equal so if the total lost == total rlis then it's closed lost,
                // otherwise it's always closed won
                if ($lost_rlis == $total_rlis) {
                    $bean->sales_status = Opportunity::STATUS_CLOSED_LOST;
                } else {
                    $bean->sales_status = Opportunity::STATUS_CLOSED_WON;
                }
            }
        }
    }
}
