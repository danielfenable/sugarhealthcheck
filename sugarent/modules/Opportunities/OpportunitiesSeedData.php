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

/**
 * OpportunitiesSeedData.php
 *
 * This is a class used for creating OpportunitiesSeedData.  We moved this code out from install/populateSeedData.php so
 * that we may better control and test creating default Opportunities.
 *
 */

class OpportunitiesSeedData {

    static private $_ranges;
    /**
     * populateSeedData
     *
     * This is a static function to create Opportunities.
     *
     * @static
     * @param $records Integer value indicating the number of Opportunities to create
     * @param $app_list_strings Array of application language strings
     * @param $accounts Array of Account instances to randomly build data against
     * @param $timeperiods Array of Timeperiods to create timeperiod seed data off of
     * @param $users Array of User instances to randomly build data against
     * @return array Array of Opportunities created
     */
    public static function populateSeedData($records, $app_list_strings, $accounts, $users)
    {
        if (empty($accounts) || empty($app_list_strings) || (!is_int($records) || $records < 1) || empty($users)) {
            return array();
        }

        $opp_ids = array();
        $timedate = TimeDate::getInstance();

        // get the additional currencies from the table
        /* @var $currency Currency */
        $currency = SugarCurrency::getCurrencyByISO('EUR');

        while ($records-- > 0) {
            $key = array_rand($accounts);
            $account = $accounts[$key];

            /* @var $opp Opportunity */
            $opp = BeanFactory::getBean('Opportunities');

            //Create new opportunities
            $opp->team_id = $account->team_id;
            $opp->team_set_id = $account->team_set_id;

            $opp->assigned_user_id = $account->assigned_user_id;
            $opp->assigned_user_name = $account->assigned_user_name;

            // figure out which one to use
            $seed = rand(1, 15);
            if ($seed%2 == 0) {
                $currency_id = $currency->id;
                $base_rate = $currency->conversion_rate;
            } else {
                // use the base rate
                $currency_id = '-99';
                $base_rate = '1.0';
            }

            $opp->base_rate = $base_rate;
            $opp->currency_id = $currency_id;

            $opp->name = $account->name;
            $opp->lead_source = array_rand($app_list_strings['lead_source_dom']);
            $opp->sales_stage = array_rand($app_list_strings['sales_stage_dom']);
            $opp->sales_status = 'New';

            // If the deal is already done, make the date closed occur in the past.
            $opp->date_closed = ($opp->sales_stage == Opportunity::STAGE_CLOSED_WON || $opp->sales_stage == Opportunity::STAGE_CLOSED_WON)
                ? self::createPastDate()
                : self::createDate();
            $opp->date_closed_timestamp = $timedate->fromDbDate($opp->date_closed)->getTimestamp();
            $opp->opportunity_type = array_rand($app_list_strings['opportunity_type_dom']);
            $amount = rand(1000, 7500);
            $opp->amount = $amount;
            $opp->probability = $app_list_strings['sales_probability_dom'][$opp->sales_stage];

            //Setup forecast seed data
            $opp->best_case = $opp->amount;
            $opp->worst_case = $opp->amount;
            $opp->commit_stage = $opp->probability >= 70 ? 'include' : 'exclude';

            $opp->id = create_guid();
            $opp->new_with_id = true;
            // set the acccount on the opps, just for saving to the worksheet table
            $opp->account_id = $account->id;
            $opp->account_name = $account->name;

            // save the opp again
            $opp->save();

            // save a draft worksheet for the new forecasts stuff
            /* @var $worksheet ForecastWorksheet */
            $worksheet = BeanFactory::getBean('ForecastWorksheets');
            $worksheet->saveRelatedOpportunity($opp);
            $opp_ids[] = $opp->id;
        }

        return $opp_ids;
    }

    /**
     * @static creates range of probability for the months
     * @param int $total_months - total count of months
     * @return mixed
     */
    private static function getRanges($total_months = 12)
    {
        if (self::$_ranges === null) {
            self::$_ranges = array();
            for ($i = $total_months; $i >= 0; $i--) {
                // define priority for month,
                self::$_ranges[$total_months-$i] = ( $total_months-$i > 6 )
                    ? self::$_ranges[$total_months-$i] = pow(6, 2) + $i
                    :  self::$_ranges[$total_months-$i] = pow($i, 2) + 1;
                // increase probability for current quarters
                self::$_ranges[$total_months-$i] = $total_months-$i == 0 ? self::$_ranges[$total_months-$i]*2.5 : self::$_ranges[$total_months-$i];
                self::$_ranges[$total_months-$i] = $total_months-$i == 1 ? self::$_ranges[$total_months-$i]*2 : self::$_ranges[$total_months-$i];
                self::$_ranges[$total_months-$i] = $total_months-$i == 2 ? self::$_ranges[$total_months-$i]*1.5 : self::$_ranges[$total_months-$i];
            }
        }
        return self::$_ranges;
    }

    /**
     * @static return month delta as random value using range of probability, 0 - current month, 1 next/previos month...
     * @param int $total_months - total count of months
     * @return int
     */
    public static function getMonthDeltaFromRange($total_months = 12)
    {
        $ranges = self::getRanges($total_months);
        asort($ranges, SORT_NUMERIC);
        $x = mt_rand(1, array_sum($ranges));
        foreach ($ranges as $key => $y) {
            $x -= $y;
            if ($x <= 0) {
                break;
            }
        }
        return $key;
    }

    /**
     * @static generates date
     * @param null $monthDelta - offset from current date in months to create date, 0 - current month, 1 - next month
     * @return string
     */
    public static function createDate($monthDelta = null)
    {
        global $timedate;
        $monthDelta = $monthDelta === null ? self::getMonthDeltaFromRange() : $monthDelta;

        $now = $timedate->getNow(true);
        $now->modify("+$monthDelta month");
        // random day from now to end of month
        $now->setTime(0, 0, 0);
        $day = mt_rand($now->day, $now->days_in_month);
        return $timedate->asDbDate($now->get_day_begin($day));
    }

    /**
     * @static generate past date
     * @param null $monthDelta - offset from current date in months to create past date, 0 - current month, 1 - previous month
     * @return string
     */
    public static function createPastDate($monthDelta = null)
    {
        global $timedate;
        $monthDelta = $monthDelta === null ? self::getMonthDeltaFromRange() : $monthDelta;

        $now = $timedate->getNow(true);
        $now->modify("-$monthDelta month");

        if ($monthDelta == 0 && $now->day == 1) {
            $now->modify("-1 day");
            $day = $now->day;
        } else {
            // random day from start of month to now
            $tmpDay = ($now->day-1 != 0) ? $now->day-1 : 1;
            $day =  mt_rand(1, $tmpDay);
        }
        $now->setTime(0, 0, 0); // always default it to midnight
        return $timedate->asDbDate($now->get_day_begin($day));
    }
}
