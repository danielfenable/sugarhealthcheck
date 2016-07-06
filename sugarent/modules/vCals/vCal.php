<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

require_once('modules/Calendar/Calendar.php');

class vCal extends SugarBean {

    private static $cacheUpdate_enabled = true;

    private static $backtrace_log_enabled = 'none';  // 'none', 'cache', 'freebusy', 'all'

    // Stored fields
	var $id;
	var $date_modified;
	var $user_id;
	var $content;
	var $deleted;
	var $type;
	var $source;
	var $module_dir = "vCals";
	var $table_name = "vcals";

	var $object_name = "vCal";

	var $new_schema = true;

	var $field_defs = array(
	);

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array();

	const UTC_FORMAT = 'Ymd\THi00\Z';

    /**
     * This is a deprecated method, please start using __construct() as this
     * method will be removed in a future version.
     *
     * @deprecated since 7.0.0. Use __construct() instead.
     */
    public function vCal()
    {
        $GLOBALS['log']->deprecated('Calls to vCal::vCal() are deprecated.');
        self::__construct();
    }

	public function __construct()
	{

		parent::__construct();
		$this->disable_row_level_security = true;
	}

    /**
     * Enable or Disable Cache Updates
     * @param bool - CacheUpdate status - true if enabled else false
     * @return bool - Previous cache setting returned so it can be later restored.
     */
    public static function setCacheUpdateEnabled($enabled)
    {
        $previousValue = static::$cacheUpdate_enabled;
        static::$cacheUpdate_enabled = $enabled;
        return $previousValue;
    }

	function get_summary_text()
	{
		return "";
	}


	function fill_in_additional_list_fields()
	{
	}

	function fill_in_additional_detail_fields()
	{
	}

	function get_list_view_data()
	{
	}

        // combines all freebusy vcals and returns just the FREEBUSY lines as a string
	function get_freebusy_lines_cache(&$user_bean)
	{
		$str = '';
		// First, get the list of IDs.
		$query = "SELECT id from vcals where user_id='{$user_bean->id}' AND type='vfb' AND deleted=0";
		$vcal_arr = $this->build_related_list($query, BeanFactory::getBean('vCals'));

		foreach ($vcal_arr as $focus)
		{
			if (empty($focus->content))
			{
				return '';
			}

			$lines = explode("\n",$focus->content);

			foreach ($lines as $line)
			{
				if ( preg_match('/^FREEBUSY[;:]/i',$line))
				{
					$str .= "$line\n";
				}
			}
		}

		return $str;
	}

	// query and create the FREEBUSY lines for SugarCRM Meetings and Calls and
        // return the string
	function create_sugar_freebusy($user_bean, $start_date_time, $end_date_time)
	{
		$str = '';
		global $DO_USER_TIME_OFFSET,$timedate;

        $DO_USER_TIME_OFFSET = true;
		if(empty($GLOBALS['current_user']) || empty($GLOBALS['current_user']->id)) {
		    $GLOBALS['current_user'] = $user_bean;
		}
		// get activities.. queries Meetings and Calls
		$acts_arr =
		CalendarActivity::get_activities($user_bean->id,
            false,
			$start_date_time,
			$end_date_time,
			'freebusy');

		// loop thru each activity, get start/end time in UTC, and return FREEBUSY strings
		foreach($acts_arr as $act)
		{
            if(empty($act->start_time) || empty($act->end_time)){
                //create error message
                $errMSG = "ERROR in Vcal::create_sugar_freebusy.  Calendar Activity was not created because of missing start or end time";
                if(!empty($act->sugar_bean->id)){
                    $errMSG .= ", id is ".$act->sugar_bean->id;
                }
                if(!empty($act->sugar_bean->name)){
                    $errMSG .= ", name is: ".$act->sugar_bean->name;
                }
                //log message and continue
                $GLOBALS['log']->fatal($errMSG);
                continue;
            }
			$startTimeUTC = $act->start_time->format(self::UTC_FORMAT);
			$endTimeUTC = $act->end_time->format(self::UTC_FORMAT);

			$str .= "FREEBUSY:". $startTimeUTC ."/". $endTimeUTC."\n";
		}
		return $str;

	}

    /**
     * @param $user_focus
     * @param bool  $cached
     * @param SugarDateTime $startDate  optional: if Not cached
     * @param SugarDateTime $endDate    optional: if Not cached
     * @return string freebusy vcal string
     */
    // return a freebusy vcal string
    function get_vcal_freebusy($user_focus, $cached = true, SugarDateTime $startDate = null, SugarDateTime $endDate = null)
    {
        global $locale, $timedate;

        if (static::$backtrace_log_enabled == 'freebusy' || static::$backtrace_log_enabled == 'all') {
            $trace = $this->getBackTrace("VCAL:FREEBUSY - ");
            $GLOBALS['log']->fatal("VCAL:FREEBUSY - get_vcal_freebusy()\n" . $trace);
        }

        $str = "BEGIN:VCALENDAR\n";
        $str .= "VERSION:2.0\n";
        $str .= "PRODID:-//SugarCRM//SugarCRM Calendar//EN\n";
        $str .= "BEGIN:VFREEBUSY\n";

        $name = $locale->formatName($user_focus);
        $email = $user_focus->email1;
        // get current date for the user
        $now_date_time = $timedate->getNow(true);
        $timeOffset = 2;

        $realTimeSearch = false;
        if (!$cached && !empty($startDate) && !empty($endDate)) {
            $realTimeSearch = true;

            // Use Start and End Dates provided
            $start_date_time = $startDate;
            $end_date_time = $endDate;
        } else {
            // get start date ( 1 day ago )
            $start_date_time = $now_date_time->get("yesterday");

            // get date 2 months from start date
            global $sugar_config;
            if (isset($sugar_config['vcal_time']) && $sugar_config['vcal_time'] != 0 && $sugar_config['vcal_time'] < 13)
            {
                $timeOffset = $sugar_config['vcal_time'];
            }
            $end_date_time = $start_date_time->get("+$timeOffset months");
        }

        // get UTC time format
        $utc_start_time = $start_date_time->asDb();
        $utc_end_time = $end_date_time->asDb();
        $utc_now_time = $now_date_time->asDb();

        $str .= "ORGANIZER;CN=$name:$email\n";
        $str .= "DTSTART:$utc_start_time\n";
        $str .= "DTEND:$utc_end_time\n";

        if ($realTimeSearch || (!$cached && $timeOffset != 0)) {
            // insert the freebusy lines
            $str .= $this->create_sugar_freebusy($user_focus, $start_date_time, $end_date_time);
        } else {
            // retrieve cached freebusy lines from vcals
            $str .= $this->get_freebusy_lines_cache($user_focus);
        }

        // UID:20030724T213406Z-10358-1000-1-12@phoenix
        $str .= "DTSTAMP:$utc_now_time\n";
        $str .= "END:VFREEBUSY\n";
        $str .= "END:VCALENDAR\n";
        return $str;

    }

	// static function:
        // cache vcals
        public static function cache_sugar_vcal(&$user_focus)
        {
            vCal::cache_sugar_vcal_freebusy($user_focus);
        }

	// static function:
        // caches vcal for Activities in Sugar database
        public static function cache_sugar_vcal_freebusy(&$user_focus)
        {
            if (!static::$cacheUpdate_enabled) {
                return;
            }

            $focus = BeanFactory::getBean('vCals');

            if (static::$backtrace_log_enabled == 'cache' || static::$backtrace_log_enabled == 'all') {
                $trace = $focus->getBackTrace("VCAL:CACHE - ");
                $GLOBALS['log']->fatal("VCAL:CACHE - cache_sugar_vcal_freebusy()\n" . $trace);
            }

            // set freebusy members and save
            $arr = array('user_id'=>$user_focus->id,'type'=>'vfb','source'=>'sugar');
            $focus->retrieve_by_string_fields($arr);


            $focus->content = $focus->get_vcal_freebusy($user_focus,false);
            $focus->type = 'vfb';
            $focus->date_modified = null;
            $focus->source = 'sugar';
            $focus->user_id = $user_focus->id;
            $focus->save();
        }

	/**
	 * get ics file content for meeting invite email
	 */
	public static function get_ical_event(SugarBean $bean, User $user){
		$str = "";

		$str .= "BEGIN:VCALENDAR\n";
		$str .= "VERSION:2.0\n";
		$str .= "PRODID:-//SugarCRM//SugarCRM Calendar//EN\n";
		$str .= "BEGIN:VEVENT\n";
		$str .= "UID:".$bean->id."\n";
		$str .= "ORGANIZER;CN=".$user->full_name.":".$user->email1."\n";
		$str .= "DTSTART:".SugarDateTime::createFromFormat($GLOBALS['timedate']->get_db_date_time_format(),$bean->date_start)->format(self::UTC_FORMAT)."\n";
		$str .= "DTEND:".SugarDateTime::createFromFormat($GLOBALS['timedate']->get_db_date_time_format(),$bean->date_end)->format(self::UTC_FORMAT)."\n";
		$str .= "DTSTAMP:". $GLOBALS['timedate']->getNow(false)->format(self::UTC_FORMAT) ."\n";
		$str .= "SUMMARY:" . $bean->name . "\n";
		$str .= "DESCRIPTION:" . $bean->description . "\n";
		$str .= "END:VEVENT\n";
		$str .= "END:VCALENDAR\n";

		return $str;
    }

    private function getBacktrace($prepend = "", $ignore = 2)
    {
        $trace = '';
        foreach (debug_backtrace() as $k => $v) {
            if ($k < $ignore) {
                continue;
            }
            $trace .= $prepend . '#' . ($k - $ignore) . ' ' . $v['file'] . '(' . $v['line'] . '): ' . (isset($v['class']) ? $v['class'] . '->' : '') . $v['function'] . "()\n";
        }
        return $trace;
	}

}

?>
