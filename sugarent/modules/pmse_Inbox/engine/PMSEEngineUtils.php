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
 * Get the logger class for handling the log
 */
require_once 'modules/pmse_Inbox/engine/PMSELogger.php';

/**
 * Class contains utilities as encoder and decoders for codes url, remove bound fields,
 * generates random unique id code, get entity dictionary and checks if a field required, visible and editField
 */
class PMSEEngineUtils
{

    public static $uploadObject;

    /**
     * List of fields across all modules that should always be blacklisted
     * @var array
     */
    protected static $blacklistedFields = array(
        'ALL' => array(
            'deleted',
            'system_id',
            'mkto_sync',
            'mkto_id',
            'mkto_lead_score',
            'parent_type',
            'user_name',
            'user_hash',
            'portal_app',
            'portal_active',
            'portal_name',
            'password',
            'is_admin',
        ),
        'BR' => array(
            'duration_hours',
            'duration_minutes',
            'repeat_type',
            'created_by',
            'modified_user_id',
            'date_entered',
            'date_modified',
        ),
        // Add related record activity panel
        'AC' => array(),
        // Change field action... this used to be the same as Add Related Record
        // but we needed different things from this
        'CF' => array(
            'created_by',
            'modified_user_id',
            'date_entered',
            'date_modified',
        ),
    );

    /**
     * PA target blacklisted modules
     * @var array
     */
    public static $targetBlacklistedModules = array(
        'Users',
        'Employees',
    );

    /**
     * PA related blacklisted modules
     * @var array
     */
    public static $relatedBlacklistedModules = array();

    /**
     * PA related blacklisted links
     * @var array
     */
    public static $relatedBlacklistedLinks = array(
        'contact',
        'following_link',
        'favorite_link',
        'user_sync',
    );

    /**
     * PA special fields
     * @var array
     */
    public static $specialFields = array(
        'All' => array('created_by', 'modified_user_id'),
        'BR' => array('assigned_user_id', 'email1'),
        'ET' => array('email1'),
        'AC' => array('assigned_user_id'),
        'CF' => array('assigned_user_id'),
        'RR' => array(),
    );

    /**
     * Process Author does not handle the below field types currently. So skip
     * displaying them.
     * @var array
     */
    public static $blacklistedFieldTypes = array('image','password','file');

    /**
     * PMSE Logger object
     * @var PMSELogger
     */
    protected $logger;

    /**
     * Gets an instance of the PMSELogger object
     * @return PMSELogger
     */
    public function getLogger()
    {
        if (!isset($this->logger)) {
            $this->logger = PMSELogger::getInstance();
        }

        return $this->logger;
    }

    /**
     * Method get key fields
     * @param type $pattern
     * @param type $array
     * @return type
     */
    public static function getKeyFields($pattern, $array)
    {
        $keys = array_keys($array);
        return preg_grep($pattern, $keys);
    }

    /**
     * Method to remove bound fields
     * @param string $row
     * @return string
     */
    public static function sanitizeKeyFields($row)
    {
        $keyFields = PMSEEngineUtils::getKeyFields('/_id$/', $row);
        foreach ($keyFields as $key) {
            unset($row[$key]);
        }
        return $row;
    }

    /**
     * Method to remove bound fields
     * @param type $row
     * @return type
     */
    public static function sanitizeBoundFields($row)
    {
        $fields = array('bou_element', 'bou_element_type', 'bou_rel_position', 'bou_size_identical', 'bou_uid');
        foreach ($fields as $key) {
            unset($row[$key]);
        }
        return $row;
    }

    /**
     * Method to remove fields
     * @param string $row
     * @return string
     */
    public static function sanitizeFields($row)
    {
        $row = PMSEEngineUtils::sanitizeKeyFields($row);
        $row = PMSEEngineUtils::sanitizeBoundFields($row);
        return $row;
    }

    /**
     * Generates random unique id code
     * @return string
     */
    public static function generateUniqueID()
    {
        do {
            $sUID = str_replace('.', '0', uniqid(rand(0, 999999999), true));
        } while (strlen($sUID) != 32);
        return $sUID;
    }

    /**
     * Encode converting numbers to text
     * @param string $str
     * @return string
     */
    public static function simpleEncode($str)
    {
        $key1 = '1234567890-.';
        $key2 = 'zwcqpfkbvmxy';
        return strtr($str, $key1, $key2);
    }

    /**
     * Decodes converting numbers to text
     * @param string $str
     * @return string
     */
    public static function simpleDecode($str)
    {
        $key2 = '1234567890-.';
        $key1 = 'zwcqpfkbvmxy';

        return strtr($str, $key1, $key2);
    }

    /**
     * @deprecated since version 1.612
     * @codeCoverageIgnore
     */
    public static function uploadFile($file, $path, $nameToSave, $permission = 0666)
    {
    }

    /**
     * Method that extracts contents of a file and upload
     * @param string $fileName
     * @param boolean $getFileContents
     * @return type
     * @throws Exception
     * @codeCoverageIgnore
     */
    public static function uploadPublicFile($fileName, $getFileContents = true)
    {
        try {
            $sugarUploader = new UploadFile($fileName);
            if ($getFileContents) {
                return $sugarUploader->get_file_contents();
            } else {
                $sugarUploader->confirm_upload();
                $sugarUploader->final_move($fileName . '_' . create_guid());

                return array();
            }
        } catch (Exception $oException) {
            throw $oException;
        }
    }

    /**
     * Method that reserved words SQL
     * @return array
     * @codeCoverageIgnore
     */
    public static function reservedWordsSql()
    {
        //Reserved words SQL
        $reservedWordsSql = array(
            "ACCESSIBLE",
            "ACTION",
            "ADD",
            "ALL",
            "ALTER",
            "ANALYZE",
            "AND",
            "ANY",
            "AS",
            "ASC",
            "ASENSITIVE",
            "AUTHORIZATION",
            "BACKUP",
            "BEFORE",
            "BEGIN",
            "BETWEEN",
            "BIGINT",
            "BINARY",
            "BIT",
            "BLOB",
            "BOTH",
            "BREAK",
            "BROWSE",
            "BULK",
            "BY",
            "CALL",
            "CASCADE",
            "CASE",
            "CHANGE",
            "CHAR",
            "CHARACTER",
            "CHECK",
            "CHECKPOINT",
            "CLOSE",
            "CLUSTERED",
            "COALESCE",
            "COLLATE",
            "COLUMN",
            "COMMIT",
            "COMPUTE",
            "CONDITION",
            "CONSTRAINT",
            "CONTAINS",
            "CONTAINSTABLE",
            "CONTINUE",
            "CONVERT",
            "CREATE",
            "CROSS",
            "CURRENT",
            "CURRENT_DATE",
            "CURRENT_TIME",
            "CURRENT_TIMESTAMP",
            "CURRENT_USER",
            "CURSOR",
            "DATABASE",
            "DATABASES",
            "DATE",
            "DAY_HOUR",
            "DAY_MICROSECOND",
            "DAY_MINUTE",
            "DAY_SECOND",
            "DBCC",
            "DEALLOCATE",
            "DEC",
            "DECIMAL",
            "DECLARE",
            "DEFAULT",
            "DELAYED",
            "DELETE",
            "DENY",
            "DESC",
            "DESCRIBE",
            "DETERMINISTIC",
            "DISK",
            "DISTINCT",
            "DISTINCTROW",
            "DISTRIBUTED",
            "DIV",
            "DOUBLE",
            "DROP",
            "DUAL",
            "DUMMY",
            "DUMP",
            "EACH",
            "ELSE",
            "ELSEIF",
            "ENCLOSED",
            "END",
            "ENUM",
            "ERRLVL",
            "ESCAPE",
            "ESCAPED",
            "EXCEPT",
            "EXEC",
            "EXECUTE",
            "EXISTS",
            "EXIT",
            "EXPLAIN",
            "FALSE",
            "FETCH",
            "FILE",
            "FILLFACTOR",
            "FLOAT",
            "FLOAT4",
            "FLOAT8",
            "FOR",
            "FORCE",
            "FOREIGN",
            "FREETEXT",
            "FREETEXTTABLE",
            "FROM",
            "FULL",
            "FULLTEXT",
            "FUNCTION",
            "GENERAL",
            "GOTO",
            "GRANT",
            "GROUP",
            "HAVING",
            "HIGH_PRIORITY",
            "HOLDLOCK",
            "HOUR_MICROSECOND",
            "HOUR_MINUTE",
            "HOUR_SECOND",
            "IDENTITY",
            "IDENTITYCOL",
            "IDENTITY_INSERT",
            "IF",
            "IGNORE",
            "IGNORE_SERVER_IDS",
            "IN",
            "INDEX",
            "INFILE",
            "INNER",
            "INOUT",
            "INSENSITIVE",
            "INSERT",
            "INT",
            "INT1",
            "INT2",
            "INT3",
            "INT4",
            "INT8",
            "INTEGER",
            "INTERSECT",
            "INTERVAL",
            "INTO",
            "IS",
            "ITERATE",
            "JOIN",
            "KEY",
            "KEYS",
            "KILL",
            "LEADING",
            "LEAVE",
            "LEFT",
            "LIKE",
            "LIMIT",
            "LINEAR",
            "LINENO",
            "LINES",
            "LOAD",
            "LOCALTIME",
            "LOCALTIMESTAMP",
            "LOCK",
            "LONG",
            "LONGBLOB",
            "LONGTEXT",
            "LOOP",
            "LOW_PRIORITY",
            "MASTER_HEARTBEAT_PERIOD",
            "MASTER_SSL_VERIFY_SERVER_CERT",
            "MATCH",
            "MAXVALUE",
            "MEDIUMBLOB",
            "MEDIUMINT",
            "MEDIUMTEXT",
            "MIDDLEINT",
            "MINUTE_MICROSECOND",
            "MINUTE_SECOND",
            "MOD",
            "MODIFIES",
            "NATIONAL",
            "NATURAL",
            "NO",
            "NOCHECK",
            "NONCLUSTERED",
            "NOT",
            "NO_WRITE_TO_BINLOG",
            "NULL",
            "NULLIF",
            "NUMERIC",
            "OF",
            "OFF",
            "OFFSETS",
            "ON",
            "OPEN",
            "OPENDATASOURCE",
            "OPENQUERY",
            "OPENROWSET",
            "OPENXML",
            "OPTIMIZE",
            "OPTION",
            "OPTIONALLY",
            "OR",
            "ORDER",
            "OUT",
            "OUTER",
            "OUTFILE",
            "OVER",
            "PERCENT",
            "PLAN",
            "PRECISION",
            "PRIMARY",
            "PRINT",
            "PROC",
            "PROCEDURE",
            "PUBLIC",
            "PURGE",
            "RAISERROR",
            "RANGE",
            "READ",
            "READS",
            "READTEXT",
            "READ_WRITE",
            "REAL",
            "RECONFIGURE",
            "REFERENCES",
            "REGEXP",
            "RELEASE",
            "RENAME",
            "REPEAT",
            "REPLACE",
            "REPLICATION",
            "REQUIRE",
            "RESIGNAL",
            "RESTORE",
            "RESTRICT",
            "RETURN",
            "REVOKE",
            "RIGHT",
            "RLIKE",
            "ROLLBACK",
            "ROWCOUNT",
            "ROWGUIDCOL",
            "RULE",
            "SAVE",
            "SCHEMA",
            "SCHEMAS",
            "SECOND_MICROSECOND",
            "SELECT",
            "SENSITIVE",
            "SEPARATOR",
            "SESSION_USER",
            "SET",
            "SETUSER",
            "SHOW",
            "SHUTDOWN",
            "SIGNAL",
            "SLOW",
            "SMALLINT",
            "SOME",
            "SPATIAL",
            "SPECIFIC",
            "SQL",
            "SQLEXCEPTION",
            "SQLSTATE",
            "SQLWARNING",
            "SQL_BIG_RESULT",
            "SQL_CALC_FOUND_ROWS",
            "SQL_SMALL_RESULT",
            "SSL",
            "STARTING",
            "STATISTICS",
            "STRAIGHT_JOIN",
            "SYSTEM_USER",
            "TABLE",
            "TERMINATED",
            "TEXT",
            "TEXTSIZE",
            "THEN",
            "TIME",
            "TIMESTAMP",
            "TINYBLOB",
            "TINYINT",
            "TINYTEXT",
            "TO",
            "TOP",
            "TRAILING",
            "TRAN",
            "TRANSACTION",
            "TRIGGER",
            "TRUE",
            "TRUNCATE",
            "TSEQUAL",
            "UNDO",
            "UNION",
            "UNIQUE",
            "UNLOCK",
            "UNSIGNED",
            "UPDATE",
            "UPDATETEXT",
            "USAGE",
            "USE",
            "USER",
            "USING",
            "UTC_DATE",
            "UTC_TIME",
            "UTC_TIMESTAMP",
            "VALUES",
            "VARBINARY",
            "VARCHAR",
            "VARCHARACTER",
            "VARYING",
            "VIEW",
            "WAITFOR",
            "WHEN",
            "WHERE",
            "WHILE",
            "WITH",
            "WRITE",
            "WRITETEXT",
            "XOR",
            "YEAR_MONTH",
            "ZEROFILL"
        );
        return $reservedWordsSql;
    }

    /**
     *
     * @param type $type
     * @param type $entity
     * @return string
     */
    public static function transformEntity($type, $entity)
    {
        $entityDictionary = self::getEntityDictionary($type);
        $newEntity = array();
        if (strtoupper($type) == 'ROUTES') {
            if (isset($entity['GAT_UID']) && $entity['GAT_UID'] != '') {
                unset($entity['ROU_NEXT_TASK']);
                unset($entity['ROU_EVN_UID']);
                $entity['flo_element_dest_type'] = 'bpmnGateway';
            } elseif (isset($entity['ROU_EVN_UID']) && $entity['ROU_NEXT_TASK'] != '') {
                unset($entity['GAT_UID']);
                unset($entity['ROU_NEXT_TASK']);
                $entity['flo_element_dest_type'] = 'bpmnEvent';
            } else {
                unset($entity['ROU_EVN_UID']);
                unset($entity['GAT_UID']);
                $entity['flo_element_dest_type'] = 'bpmnActivity';
            }
            $entity['flo_element_origin_type'] = 'bpmnActivity';
        }
        foreach ($entity as $key => $value) {
            $tmpIndex = $entityDictionary[$key];
            if ($tmpIndex != null) {
                $newEntity [$tmpIndex] = $value;
            }
        }
        if (isset($newEntity['act_type']) && strtoupper($newEntity['act_type']) == 'NORMAL') {
            $newEntity['act_type'] = 'TASK';
            $newEntity['act_task_type'] = 'USERTASK';
        }
        if (strtoupper($type) == 'GATEWAYS') {
            $newEntity['gat_type'] = 'PARALLEL';
        }
        return $newEntity;
    }

    /**
     * Method that get entity dictionary as PROCESS, TASKS, GATEWAYS and ROUTES
     * @param string $type
     * @return string
     */
    public static function getEntityDictionary($type)
    {
        $entityDictionary = array();
        $type = strtoupper($type);
        switch ($type) {
            case 'PROCESS':
                $entityDictionary = array(
                    "PRO_UID" => "prj_uid",
                    "PRO_TITLE" => "prj_name",
                    "PRO_UPDATE_DATE" => "prj_update_date",
                    "PRO_CREATE_DATE" => "prj_create_date",
                    "PRO_CREATE_USER" => "prj_author",
                    "PRO_DESCRIPTION" => "prj_description",
                );
                break;
            case 'TASKS':
                $entityDictionary = array(
                    'PRO_UID' => 'prj_uid',
                    'TAS_UID' => 'act_uid',
                    'TAS_TITLE' => 'act_name',
                    'TAS_TYPE' => 'act_type',
                    'TAS_DURATION' => 'act_duration',
                    'TAS_DURATION_TYPE' => 'act_duration_type',
                    'TAS_POSX' => 'bou_x',
                    'TAS_POSY' => 'bou_y',
                    'TAS_WIDTH' => 'bou_width',
                    'TAS_HEIGHT' => 'bou_height'
                );
                break;
            case 'GATEWAYS':
                $entityDictionary = array(
                    "GAT_UID" => "gat_uid",
                    "PRO_UID" => "prj_uid",
                    "GAT_X" => "bou_x",
                    "GAT_Y" => "bou_y",
                    "GAT_TYPE" => "gat_type"
                );
                break;
            case 'ROUTES':
                $entityDictionary = array(
                    "ROU_UID" => "flo_uid",
                    "PRO_UID" => "prj_uid",
                    "TAS_UID" => "flo_element_origin",
                    "ROU_NEXT_TASK" => "flo_element_dest",
                    "ROU_TO_PORT" => "flo_element_dest_port",
                    "ROU_FROM_PORT" => "flo_element_origin_port",
                    "ROU_EVN_UID" => "flo_element_dest",
                    "GAT_UID" => "flo_element_dest",
                    "flo_element_dest_type" => "flo_element_dest_type",
                    "flo_element_origin_type" => "flo_element_origin_type"
                );
                break;
            default:
                break;
        }
        return $entityDictionary;
    }

    /**
     * Method verifying invisible fields should always be hidden
     * @deprecated deprecated since version 7.6.1
     * @param array $def
     * @param string $view
     * @return boolean
     */
    public static function isValidDefinitionField($def, $view = "")
    {
        //Studio invisible fields should always be hidden
        if (isset($def['studio'])) {
            if (is_array($def ['studio'])) {
                if (!empty($view) && isset($def ['studio'][$view])) {
                    return $def ['studio'][$view] !== false && $def ['studio'][$view] !== 'false' && $def ['studio'][$view] !== 'hidden';
                }
                if (isset($def ['studio']['visible'])) {
                    return $def ['studio']['visible'];
                }
            } else {
                return ($def ['studio'] != 'false' && $def ['studio'] != 'hidden' && $def ['studio'] !== false);
            }
        }

        // bug 19656: this test changed after 5.0.0b - we now remove all ID type fields - whether set as type, or dbtype, from the fielddefs
        return
            (
                (
                    (empty($def ['source']) || $def ['source'] == 'db' || $def ['source'] == 'custom_fields') && isset($def ['type']) && $def ['type'] != 'id' && $def ['type'] != 'parent_type' && (empty($def ['dbType']) || $def ['dbType'] != 'id') && (isset($def ['name']) && strcmp($def ['name'],
                            'deleted') != 0)
                ) ||
                // exclude fields named *_name regardless of their type...just convention
                (isset($def ['name']) && substr($def ['name'], -5) === '_name'));
    }

    /**
     * method that gets the id that was used in an bpm*
     * @param string $key
     * @return string
     */
    public static function getEntityUid($key)
    {
        $data = array();
        switch ($key) {
            case 'bpmnActivity':
                $data = 'act_uid';
                break;
            case 'bpmnGateway':
                $data = 'gat_uid';
                break;
            case 'bpmnEvent':
                $data = 'evn_uid';
                break;
            case 'bpmnFlow':
                $data = 'flo_uid';
                break;
            case 'bpmnLaneset':
                $data = 'lns_uid';
                break;
            case 'bpmnLane':
                $data = 'lan_uid';
                break;
            case 'bpmnData':
                $data = 'dat_uid';
                break;
            case 'bpmnParticipant':
                $data = 'par_uid';
                break;
            case 'bpmnArtifact':
                $data = 'art_uid';
                break;
        }
        return $data;
    }

    /**
     * method to get the element of a class instantiated in the ADAMBeanFactory
     * @param string $id
     * @param string $elementEntity
     * @param string $uidField
     * @return string
     * @codeCoverageIgnore
     */
    public static function getElementUid($id, $elementEntity, $uidField)
    {
        //$beanFactory = new ADAMBeanFactory();
        $elementEntity = ucfirst($elementEntity);
//        $bean = new $elementEntity();
        //$bean = $beanFactory->getBean($elementEntity);
        $bean = BeanFactory::getBean('pmse_' . $elementEntity);
        $bean->retrieve_by_string_fields(array('id' => $id));
        return $bean->$uidField;
    }

    /**
     * Method that returns the first character of a case
     * @param type $string
     * @return type
     */
    public static function lowerFirstCharCase($string)
    {
        return substr_replace($string, strtolower(substr($string, 0, 1)), 0, 1);
    }

    /**
     * method get primary email key from REQUEST
     * @param object $bean
     * @return string
     * @deprecated since version pmse2
     * @codeCoverageIgnore
     */
    public static function getPrimaryEmailKeyFromREQUEST($bean)
    {
        $module = $bean->module_dir;
        $widgetCount = 0;
        $moduleItem = '0';

        foreach ($_REQUEST as $key => $value) {
            if (strpos($key, 'emailAddress') !== false) {
                break;
            }
            $widget_id = $_REQUEST[$module . '_email_widget_id'];
        }

        while (isset($_REQUEST[$module . $widget_id . "emailAddress" . $widgetCount])) {
            if (empty($_REQUEST[$module . $widget_id . "emailAddress" . $widgetCount])) {
                $widgetCount++;
                continue;
            }

            $eId = $module . $widget_id;
            if (isset($_REQUEST[$eId . 'emailAddressPrimaryFlag'])) {
                $primaryValue = $_REQUEST[$eId . 'emailAddressPrimaryFlag'];
            } else {
                if (isset($_REQUEST[$module . 'emailAddressPrimaryFlag'])) {
                    $primaryValue = $_REQUEST[$module . 'emailAddressPrimaryFlag'];
                }
            }

            if ($primaryValue) {
                return $eId . 'emailAddress' . $widgetCount;
            }
            $widgetCount++;
        }
        $_REQUEST[$bean->module_dir . '_email_widget_id'] = 0;
        $_REQUEST['emailAddressWidget'] = 1;
        $_REQUEST['useEmailWidget'] = true;
        $emailId = $bean->module_dir . $moduleItem . 'emailAddress';
        $_REQUEST[$emailId . 'PrimaryFlag'] = $emailId . $moduleItem;
        $_REQUEST[$emailId . 'VerifiedFlag' . $moduleItem] = true;

        return $emailId . $moduleItem;
    }

    /*private function getPrimaryEmailIdFromDB($bean)
     {
        global $db;
        $query = "select email_address_id from email_addr_bean_rel eabr WHERE eabr.bean_id = '".$bean->id."' AND eabr.bean_module = '".$bean->module_dir."' and eabr.deleted=0 and primary_address=1";
        $res = $db->Query($query);
        $row = $db->fetchByAssoc($res);
        if($row == null || empty($row)) {
        return null;
        }
        $this->bpmLog('INFO',  $query . ' Primary Email Id: ' . print_r($row, true));
        return $row['email_address_id'];
    }*/

    /**
     * Method amending email
     * @param object $bean
     * @param string $newEmailAddress
     */
    static public function updateEmails($bean, $newEmailAddress)
    {
        //Note.- in the future will be an 'array' of change fields emails
        $moduleItem = '0';
        $addresses = $bean->emailAddress->getAddressesByGUID($bean->id, $bean->module_dir);
        if (sizeof($addresses) > 0) {
            $_REQUEST[$bean->module_dir . '_email_widget_id'] = 0;
            $_REQUEST['emailAddressWidget'] = 1;
            $_REQUEST['useEmailWidget'] = true;
        }
        foreach ($addresses as $item => $data) {
            if (!isset($data['email_address_id']) || !isset($data['primary_address'])) {
                //$this->bpmLog('ERROR', ' The Email address Id or the primary address flag does not exist in DB');
                continue;
            }
            $emailAddressId = $data['email_address_id'];
            $emailId = $bean->module_dir . $moduleItem . 'emailAddress';
            if (!empty($emailAddressId) && $data['primary_address'] == 1) {
                $_REQUEST[$emailId . 'PrimaryFlag'] = $emailId . $item;
                $_REQUEST[$emailId . $item] = $newEmailAddress;
            } else {
                $_REQUEST[$emailId . $item] = $data['email_address'];
            }
            $_REQUEST[$emailId . 'Id' . $item] = $emailAddressId;
            $_REQUEST[$emailId . 'VerifiedFlag' . $item] = true;
            $_REQUEST[$emailId . 'VerifiedValue' . $item] = $data['email_address'];
            //$upd_query = "UPDATE email_addresses SET email_address='" . $emailAddress . "', email_address_caps='" . mb_strtoupper($emailAddress) . "', date_modified=" . $db->now() . " WHERE id='" . $row['email_address_id'] . "'";
            //$upd_res = $db->Query($upd_query);
            //$this->bpmLog('INFO',  $upd_query . ' result :  ' . print_r($upd_res,true));
        }
    }

    /**
     * Method that calculates the day, hour and minute of a case
     * @param object $expectedTimeObject
     * @param array $caseData
     * @return string
     */
    public static function processExpectedTime($expectedTimeObject, $caseData)
    {
        $dateToProcess = (!empty($caseData->cas_task_start_date) && $caseData->cas_task_start_date != '0000-00-00 00:00:00') ? $caseData->cas_task_start_date : $caseData->cas_delegate_date;
        $expectedTime = new DateTime($dateToProcess);
        if (!empty($expectedTimeObject) && !empty($expectedTimeObject->time)) {
            self::addDateInterval($expectedTime, $expectedTimeObject->time, $expectedTimeObject->unit);
        }
        //echo '<br>DELEGATE DATE  :' . $caseData['cas_delegate_date'] . '  UNIX: ' . $unixTime;
        //echo '<br>EXPECTED DATE  :' . date("Y-m-d H:i:s", $expectedTime) . '  UNIX: ' . $expectedTime;
        //echo '<br>GLOBAL   DATE  :' . date("Y-m-d H:i:s", $time_data->getNow()->ts) . '  UNIX: ' . $time_data->getNow()->ts;
        return $expectedTime;
    }

    public static function addDateInterval($dateTime, $interval, $unit)
    {
        switch($unit) {
            case 'day':
                $dateTime->add(new DateInterval('P' . $interval . 'D'));
                break;
            case 'hour':
                $dateTime->add(new DateInterval('PT' . $interval . 'H'));
                break;
            case 'minute':
                $dateTime->add(new DateInterval('PT' . $interval . 'M'));
                break;
        }
        return $dateTime;
    }

    public static function getExpectedTimeLabel ($expectedTime) {
        $value = '';
        $number = 0;
        if (!empty($expectedTime) && !empty($expectedTime->time)) {
            $number = (int) $expectedTime->time;
            switch($expectedTime->unit) {
                case 'day':
                    $value = ($number === 1) ? translate('LBL_DURATION_DAY') : translate('LBL_DURATION_DAYS') ;
                    break;
                case 'hour':
                    $value = ($number === 1) ? translate('LBL_DURATION_HOUR') : translate('LBL_DURATION_HOURS') ;
                    break;
                case 'minute':
                    $value = ($number === 1) ? translate('LBL_DURATION_MINUTE') : translate('LBL_DURATION_MINUTES') ;
                    break;
            }
            $value = $number . ' ' . $value;
        }
        return $value;
    }
    /**
     * @param $id
     * @return bool
     */
    public static function getBPMInboxStatus($id)
    {
        $result = false;
        $bean = BeanFactory::getBean('pmse_Inbox', $id);
        //$bean = $bpmInbox->retrieve_by_string_fields(array('cas_id' => $cas_id));
        if (!empty($bean)) {
            if ($bean->cas_status == 'IN PROGRESS') {
                $result = true;
            }
        }
        return $result;
    }

    public static function validateUniqueUid(&$bean, $field_uid = '')
    {
        $replaced = false;
        if ($field_uid != '') {
            $beanAux = BeanFactory::getBean($bean->object_name);
            $rows = $beanAux->retrieve_by_string_fields(array($field_uid => $bean->{$field_uid}));
            if ($rows) {
                $bean->{$field_uid} = self::generateUniqueID();
                $replaced = true;
            }
        }
        return $replaced;
    }

    /**
     * Unset common fields for project data
     * @param $projectData
     * @param $except
     * @param $showValue
     * @return $projectData
     */
    public static function unsetCommonFields($projectData, $except = array(), $showValue = false)
    {
        $special_fields = array(
            'id',
            'name',
            'date_entered',
            'date_modified',
            'modified_user_id',
            'modified_by_name',
            'created_by',
            'created_by_name',
            'doc_owner',
            'user_favorites',
            'description',
            'deleted',
            'created_by_link',
            'modified_user_link',
            'activities',
            'team_id',
            'team_set_id',
            'au_first_name',
            'au_last_name',
            'cbu_first_name',
            'cbu_last_name',
            'mbu_first_name',
            'mbu_last_name',
            'my_favorite',
            'favorite_link',
            'following',
            'following_link',
            'assigned_user_name',
            'assigned_user_link',
            'rel_modified_by_name_first_name',
            'rel_modified_by_name_last_name',
            'modified_by_name',
            'modified_by_name_owner',
            'modified_by_name_mod',
            'rel_created_by_name_first_name',
            'rel_created_by_name_last_name',
            'created_by_name',
            'created_by_name_owner',
            'created_by_name_mod',
            'rel_assigned_user_name_first_name',
            'rel_assigned_user_name_last_name',
            'assigned_user_id',
            'assigned_user_name',
            'assigned_user_name_owner',
            'assigned_user_name_mod',
            'tags',
            'tag',
            'tag_lower',
            'tn_name',
            'tn_name_2',
        );
        //UNSET common fields
        foreach ($projectData as $key => $value) {
            $search = $showValue ? $value : $key;
            if (in_array($search, $special_fields) && !in_array($search, $except)) {
                unset($projectData[$key]);
            }
        }
        return $projectData;
    }

    public static function getAllFieldsBean($module)
    {
        $bean = BeanFactory::newBean($module);
        if (!empty($bean)) {
            return $bean->column_fields;
        }
    }

    /**
     * Checks to see if the currently logged in user is an admin or an admin of
     * the users module. Originally added to handle the case of User module
     * specific fields when used as a related module.
     *
     * @return boolean True if the current user is an admin
     */
    public static function isCurrentUserAdmin()
    {
        global $current_user;
        return $current_user->isAdmin() || $current_user->isAdminForModule('Users');
    }

    public static function isValidField($def, $type = '')
    {
        // First things first... if we are explicitly directed to do something
        // based on the vardefs, do that thing first
        if (isset($def['processes'])) {
            // If a field is explicitly marked for processes, handle it
            if (is_bool($def['processes'])) {
                return $def['processes'];
            }

            // If the marker is a string or an array, it is mapped to a method
            if (is_string($def['processes'])) {
                $def['processes'] = array($def['processes']);
            }

            // For a field validation list, run through until you hit a false,
            // otherwise let the rest of the validation processes run
            foreach ($def['processes'] as $method) {
                if (method_exists(__CLASS__, $method)) {
                    if (self::$method() === false) {
                        return false;
                    }
                }
            }
        }

        // If the field is to blacklisted, handle that now
        if (!self::blackListFields($def, $type)) {
            return false;
        }

        // If the field is whitelisted, handle THAT now
        if (self::specialFields($def, $type)) {
            return true;
        }

        // Now carry on the rest of the special case madness until we need to
        // check studio validity
        if (isset($def['source']) && $def['source'] == 'non-db') {
            return false;
        }

        // Process Author does not handle some field types like image, password, file, etc currently
        if (isset($def['type']) && in_array($def['type'], self::$blacklistedFieldTypes)) {
            return false;
        }

        // For action type, do not allow formula fields
        if ($type == 'AC' && isset($def['formula'])) {
            return false;
        }

        // For action types or relate record types, if the field is readonly,
        // don't allow it
        if (($type == 'RR' || $type == 'AC') && !empty($def['readonly'])) {
            return false;
        }

        // At this point all we are left with is checking if it is studio valid
        return self::isValidStudioField($def);
    }

    /**
     * Validation method that checks if a field is blacklisted.
     * @param array $def A vardef entry for a field
     * @param string $type The type of list to use
     * @return boolean True if the field is not blacklisted, false if it is
     */
    public static function blackListFields($def, $type = '')
    {
        $blacklist = self::$blacklistedFields['ALL'];
        if (!empty($type) && $type !== 'ALL' && isset(self::$blacklistedFields[$type])) {
            $blacklist = array_merge($blacklist, self::$blacklistedFields[$type]);
        }
        return !in_array($def['name'], $blacklist);
    }

    /**
     * Checks to see if a field name is deemed special based on the PMSE module
     * type
     * @param array $def The field def to check
     * @param string $type The PMSE module type to check this field for
     * @return boolean
     */
    public static function specialFields($def, $type= 'All')
    {
        // Without a name there is nothing to do
        if (!isset($def['name'])) {
            return false;
        }

        // Default the type if it was empty
        if (empty($type)) {
            $type = 'All';
        }

        // Get the special fields list for this type if it exists
        $sf = empty(self::$specialFields[$type]) ? array() : self::$specialFields[$type];

        // Now merge the type special fields with special fields for all types
        if ($type !== 'All') {
            $sf = array_merge($sf, self::$specialFields['All']);
        }

        // Now check to see if the field is in this type
        return in_array($def['name'], $sf);
    }

    /**
     * @codeCoverageIgnore
     */
    public static function isValidStudioField($def)
    {
        if (isset($def['studio'])) {
            if (is_array($def ['studio'])) {
                if (isset($def['studio']['editField']) && $def['studio']['editField'] == true) {
                    return true;
                }
                if (isset($def['studio']['required']) && $def['studio']['required']) {
                    return true;
                }
            } else {
                if ($def['studio'] == 'visible') {
                    return true;
                }
                if ($def['studio'] == 'hidden' || $def['studio'] == 'false' || !$def['studio']) {
                    return false;
                }
            }
        }
        if (empty($def ['source']) || $def ['source'] == 'db' || $def ['source'] == 'custom_fields') {
            if ($def ['type'] != 'id' && (empty($def ['dbType']) || $def ['dbType'] != 'id')) {
                return true;
            }
        }
        return false;
    }

    public static function getDateToFE($theDate, $type, $bean = null)
    {
        global $timedate, $db;

        $theDate = $db->fromConvert($theDate, $type);

        $date = $timedate->fromDbType($theDate, $type);

        if ( $date == null && $bean instanceof SugarBean) {
            // Could not parse date... try User format
            $date = $timedate->fromUserType($bean->$fieldName, $type);
            if ($date == null) {
                return;
            }
        }

        if ( $type == 'date' ) {
            // It's just a date, not a datetime
            $data = $timedate->asIsoDate($date);
        } else if ( $type== 'time' ) {
            $data = $timedate->asIsoTime($date);
        } else {
            $data = $timedate->asIso($date);
        }

        return $data;
    }

    public static function getStudioModules($type = '') {
        include 'modules/pmse_Inbox/engine/PMSEModules.php';
        $studioBrowser = new StudioBrowser();
        if ($type == 'related') {
            $studioBrowser->loadRelatableModules();
        } else {
            $studioBrowser->loadModules();
        }
        $moduleList = $studioBrowser->modules;

        $blacklisted = $type === '' ? self::$targetBlacklistedModules : self::$relatedBlacklistedModules;
        $removed = array_merge($pmseModulesList, $blacklisted);

        foreach ($moduleList as $key => $module) {
            if (in_array($module->module, $removed)) {
                unset($moduleList[$key]);
            }
        }

        return $moduleList;
    }

    public static function getSupportedModules ($type = '') {
        $out = array();
        $moduleList = self::getStudioModules($type);
        foreach ($moduleList as $key => $module) {
            $out[] = $module->module;
        }
        return $out;
    }

    /**
     * Santizies imported activity fields, since some fields may have been exported
     * in a version when they were still acceptable valid fields
     * @param array $element An activity element from an import
     * @param string $module The module to get fields to validate from
     * @param string $type The type of field validation to apply
     * @return string
     */
    public static function sanitizeImportActivityFields(array $element, $module, $type = '')
    {
        if (!empty($element['act_field_module'])) {
            // We will need these for validations
            $targetBean = BeanFactory::getBean($module);
            if (isset($targetBean->field_defs[$element['act_field_module']]['module'])) {
                // We need the related module bean to get field defs for validation
                $relBeanName = $targetBean->field_defs[$element['act_field_module']]['module'];
                $relBean = BeanFactory::getBean($relBeanName);

                $newData = array();
                $fieldData = json_decode(html_entity_decode($element['act_fields']), true);
                // In some cases $fieldData comes back null, so we need to check
                // if it is actually an array before trying to use it as one
                if (is_array($fieldData)) {
                    foreach ($fieldData as $fieldDef) {
                        $field = $fieldDef['field'];
                        if (isset($relBean->field_defs[$field])) {
                            if (self::isValidField($relBean->field_defs[$field], $type)) {
                                $newData[] = $fieldDef;
                            } else {
                                $typeMark = empty($type) ? '(EMPTY)' : $type;
                                $this->getLogger()->warning("sanitizeImportActivityFields: $field field on $relBeanName module did not pass validation for $typeMark");
                            }
                        } else {
                            $this->getLogger()->warning("sanitizeImportActivityFields: $field $field not found in $relBeanName module");
                        }
                    }
                }
                $element['act_fields'] = json_encode($newData);
            }
        }

        return $element['act_fields'];
    }

    /**
     * Get LinkName from a bean using module name and relationship name
     * @param $flowData
     * @return mixed
     * @throws Exception
     */
    public static function getRelatedLinkName($flowData)
    {
        $bean = BeanFactory::getBean($flowData['rel_process_module']);
        $relName = $flowData['rel_element_relationship'];
        $bean->load_relationship($relName);
        if ($bean->$relName) {
            return $bean->$relName->getRelatedModuleLinkName();
        }

        throw new \Exception("Related module link name not found for {$flowData['evn_module']}->{$relName}");
    }

    /**
     * @param $flowData
     * @return bool
     */
    public static function isTargetModuleNotProcessModule($flowData)
    {
        return isset($flowData['rel_process_module'], $flowData['rel_element_relationship'], $flowData['rel_element_module'])
        && $flowData['rel_element_module'] !== $flowData['rel_process_module'];
    }

    /**
     * @param $flowData
     * @param $bean
     * @return bool
     */
    public static function isTargetModule($flowData, $bean)
    {
        return !(self::isTargetModuleNotProcessModule($flowData) && $bean->module_dir !== $flowData['rel_process_module']);
    }

    /**
     * @param $flowData
     * @param $bean
     * @return mixed|null
     * @throws Exception
     */
    public static function getParentBean($flowData, $bean) {
        $linkName = self::getRelatedLinkName($flowData);
        $parentBean = $bean->$linkName->getBeans(array('limit' => 1));
        if (empty($parentBean)) {
            //Parent Bean not found
            return null;
        }
        return current($parentBean);
    }
}
