<?php 
 $GLOBALS["dictionary"]["Forecast"]=array (
  'table' => 'forecasts',
  'acl_fields' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_FORECAST_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'timeperiod_id' => 
    array (
      'name' => 'timeperiod_id',
      'vname' => 'LBL_FORECAST_TIME_ID',
      'type' => 'enum',
      'dbType' => 'id',
      'reportable' => true,
      'function' => 'getTimePeriodsDropDownForForecasts',
      'comment' => 'ID of the associated time period for this forecast',
    ),
    'commit_type' => 
    array (
      'name' => 'commit_type',
      'type' => 'string',
      'source' => 'non-db',
      'comment' => 'This is used by the commit code to figure out what type of worksheet we are committing',
    ),
    'forecast_type' => 
    array (
      'name' => 'forecast_type',
      'vname' => 'LBL_FORECAST_TYPE',
      'type' => 'enum',
      'len' => 100,
      'massupdate' => false,
      'options' => 'forecast_type_dom',
      'comment' => 'Indicator of whether forecast is direct or rollup',
      'reportable' => false,
    ),
    'opp_count' => 
    array (
      'name' => 'opp_count',
      'vname' => 'LBL_FORECAST_OPP_COUNT',
      'type' => 'int',
      'len' => '5',
      'comment' => 'Number of opportunities represented by this forecast',
    ),
    'pipeline_opp_count' => 
    array (
      'name' => 'pipeline_opp_count',
      'vname' => 'LBL_FORECAST_PIPELINE_OPP_COUNT',
      'type' => 'int',
      'len' => '5',
      'studio' => false,
      'default' => '0',
      'comment' => 'Number of opportunities minus closed won/closed lost represented by this forecast',
    ),
    'pipeline_amount' => 
    array (
      'name' => 'pipeline_amount',
      'vname' => 'LBL_PIPELINE_REVENUE',
      'type' => 'currency',
      'studio' => false,
      'default' => '0',
      'comment' => 'Total of opportunities minus closed won/closed lost represented by this forecast',
    ),
    'closed_amount' => 
    array (
      'name' => 'closed_amount',
      'vname' => 'LBL_CLOSED',
      'type' => 'currency',
      'studio' => false,
      'default' => '0',
      'comment' => 'Total of closed won items in the forecast',
    ),
    'opp_weigh_value' => 
    array (
      'name' => 'opp_weigh_value',
      'vname' => 'LBL_FORECAST_OPP_WEIGH',
      'type' => 'int',
      'comment' => 'Weighted amount of all opportunities represented by this forecast',
      'reportable' => false,
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'dbType' => 'id',
      'default' => '-99',
      'required' => true,
      'function' => 'getCurrencies',
      'function_bean' => 'Currencies',
    ),
    'base_rate' => 
    array (
      'name' => 'base_rate',
      'vname' => 'LBL_BASE_RATE',
      'type' => 'decimal',
      'len' => '26,6',
      'reportable' => false,
    ),
    'best_case' => 
    array (
      'name' => 'best_case',
      'vname' => 'LBL_BEST',
      'type' => 'currency',
      'comment' => 'Best case forecast amount',
    ),
    'likely_case' => 
    array (
      'name' => 'likely_case',
      'vname' => 'LBL_FORECAST_OPP_COMMIT',
      'type' => 'currency',
      'comment' => 'Likely case forecast amount',
    ),
    'worst_case' => 
    array (
      'name' => 'worst_case',
      'vname' => 'LBL_WORST',
      'type' => 'currency',
      'comment' => 'Worst case likely amount',
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'vname' => 'LBL_FORECAST_USER',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'User to which this forecast pertains',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
      'comment' => 'Date record created',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
      'comment' => 'Date record modified',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'user_name' => 
    array (
      'name' => 'user_name',
      'rname' => 'user_name',
      'id_name' => 'user_id',
      'vname' => 'LBL_USER_NAME',
      'type' => 'relate',
      'table' => 'users',
      'isnull' => 'true',
      'module' => 'Users',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'reports_to_user_name' => 
    array (
      'name' => 'reports_to_user_name',
      'rname' => 'user_name',
      'id_name' => 'reports_to_user_name',
      'vname' => 'LBL_REPORTS_TO_USER_NAME',
      'type' => 'relate',
      'table' => 'reports_to',
      'isnull' => 'true',
      'module' => 'Users',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'type' => 'date',
      'source' => 'non-db',
      'table' => 'timeperiods',
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'type' => 'date',
      'source' => 'non-db',
      'table' => 'timeperiods',
    ),
    'name' => 
    array (
      'name' => 'name',
      'type' => 'varchar',
      'source' => 'non-db',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'forecasts_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'closed_count' => 
    array (
      'name' => 'closed_count',
      'type' => 'int',
      'source' => 'non-db',
      'comment' => 'This is used by the commit code to determine how many closed opps exist for the pipeline calc',
    ),
  ),
  'relationships' => 
  array (
    'forecasts_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Forecasts',
      'rhs_table' => 'forecasts',
      'rhs_key' => 'user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'forecastspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_forecast_user_tp',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'user_id',
        1 => 'timeperiod_id',
        2 => 'date_modified',
      ),
    ),
  ),
  'acls' => 
  array (
    'SugarACLStatic' => true,
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);