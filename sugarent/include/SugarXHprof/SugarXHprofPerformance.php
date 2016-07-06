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

/**
 * Class allows us to use XHprof with additional settings for profiling
 * To enable additional settings you can add next properties to config_override.php
 *
 * @see SugarXHprof::$manager               for $sugar_config['xhprof_config']['manager']
 * @see SugarXHprof::$save_to               for $sugar_config['xhprof_config']['save_to']
 * @see SugarXHprof::$filter_wt             for $sugar_config['xhprof_config']['filter_wt']
 * @see SugarXHprof::$mongodb_uri           for $sugar_config['xhprof_config']['mongodb_uri']
 * @see SugarXHprof::$mongodb_db            for $sugar_config['xhprof_config']['mongodb_db']
 * @see SugarXHprof::$mongodb_collection    for $sugar_config['xhprof_config']['mongodb_collection']
 * @see SugarXHprof::$mongodb_options       for $sugar_config['xhprof_config']['mongodb_options']
 *
 * If you want to save data to the Mongo DB you should add "$sugar_config['xhprof_config']['save_to'] = 'mongodb'" to
 * config_override.php with additional options like $mongodb_uri, $mongodb_db and etc.
 * By default data is stored in the file.
 */
class SugarXHprofPerformance extends SugarXHprof
{

    /**
     * @var string place to save data, if $save_to is 'mongodb' then data are stored in the mongo DB
     */
    protected static $save_to = 'file';

    /**
     * @var string mongo server info
     */
    protected static $mongodb_uri = 'mongodb://localhost:27017';

    /**
     * @var string name of mongo database
     */
    protected static $mongodb_db = 'xhprof';

    /**
     * @var string name of mongo collections
     */
    protected static $mongodb_collection = 'results';

    /**
     * @var array mongo options
     * @see http://php.net/manual/en/mongoclient.construct.php#mongo.mongoclient.construct.parameters
     */
    protected static $mongodb_options = array(
        "username" => '',
        "password" => ''
    );

    /**
     * @var int minimum value for 'wall time' in milliseconds
     */
    protected static $filter_wt = 0;

    /**
     * Tries to collect data from XHprof after call of 'start' method
     */
    public function end()
    {
        if ($this->registered == false || self::$enable == false) {
            return;
        }

        $this->registered = false;

        $data = xhprof_disable();

        if (!empty(self::$filter_wt)) {
            $data = self::getFilteredData($data);
        }

        $namespace = str_replace('.', '-', microtime(1) . self::detectAction());

        require_once 'include/SugarXHprof/xhprof_lib/utils/xhprof_runs.php';
        $xhprof_runs = new XHProfRuns_Default(self::$log_to);

        if (!empty($data)) {
            switch (self::$save_to) {
                case 'mongodb':
                    self::mongoSaveRun($data);
                    break;
                default:
                    $xhprof_runs->save_run($data, $namespace);
                    break;
            }
        }
    }

    /**
     * Add meta data to the results and stores it in the mongo database
     *
     * @param $data
     */
    protected function mongoSaveRun($data)
    {
        if (!extension_loaded('mongo')) {
            error_log('xhprof - extension mongo not loaded');
            return;
        }

        $uri = array_key_exists('REQUEST_URI', $_SERVER)
            ? $_SERVER['REQUEST_URI']
            : null;
        if (empty($uri) && isset($_SERVER['argv'])) {
            $cmd = basename($_SERVER['argv'][0]);
            $uri = $cmd . ' ' . implode(' ', array_slice($_SERVER['argv'], 1));
        }

        $time = array_key_exists('REQUEST_TIME', $_SERVER)
            ? $_SERVER['REQUEST_TIME']
            : time();
        $requestTimeFloat = explode('.', $_SERVER['REQUEST_TIME_FLOAT']);

        $requestTs = new MongoDate($time);
        $requestTsMicro = new MongoDate($requestTimeFloat[0], $requestTimeFloat[1]);

        $mongoData['meta'] = array(
            'url' => $uri,
            'SERVER' => $_SERVER,
            'get' => $_GET,
            'env' => $_ENV,
            'simple_url' => preg_replace('/\=\d+/', '', $uri),
            'request_ts' => $requestTs,
            'request_ts_micro' => $requestTsMicro,
            'request_date' => date('Y-m-d', $time),
        );

        $mongoData['profile'] = $data;
        unset($data);

        try {
            $mongo = new MongoClient(self::$mongodb_uri, self::$mongodb_options);

            $db = self::$mongodb_db;
            $collection = self::$mongodb_collection;
            $mongo->$db->$collection->insert($mongoData);
        } catch (\MongoException $e) {
            error_log($e->getTraceAsString());
        }
    }

    /**
     * Apply filters to the data
     *
     * @param $data
     * @return array or null
     */
    protected function getFilteredData($data)
    {
        if ($data['main()']['wt'] > (self::$filter_wt * 1000)) {
            return $data;
        }
        return null;
    }
}
