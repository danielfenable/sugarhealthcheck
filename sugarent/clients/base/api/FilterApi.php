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

require_once 'include/api/SugarApi.php';
require_once 'include/SugarQuery/SugarQuery.php';
require_once 'data/Relationships/RelationshipFactory.php';
require_once 'include/SugarFields/SugarFieldHandler.php';

class FilterApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'filterModuleGet' => array(
                'reqType' => 'GET',
                'path' => array('<module>', 'filter'),
                'pathVars' => array('module', ''),
                'method' => 'filterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in filterList
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModuleAll' => array(
                'reqType' => 'GET',
                'path' => array('<module>'),
                'pathVars' => array('module'),
                'method' => 'filterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in filterList
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModuleAllCount' => array(
                'reqType' => 'GET',
                'path' => array('<module>', 'count'),
                'pathVars' => array('module', ''),
                'jsonParams' => array('filter'),
                'method' => 'filterListCount',
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in filterListSetup
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModulePost' => array(
                'reqType' => 'POST',
                'path' => array('<module>', 'filter'),
                'pathVars' => array('module', ''),
                'method' => 'filterList',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => array(
                    // Thrown in filterList
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModulePostCount' => array(
                'reqType' => 'POST',
                'path' => array('<module>', 'filter', 'count'),
                'pathVars' => array('module', '', ''),
                'method' => 'filterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => array(
                    // Thrown in filterListSetup
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModuleById' => array(
                'reqType' => 'GET',
                'path' => array('<module>', 'filter', '?'),
                'pathVars' => array('module', '', 'record'),
                'method' => 'filterById',
                'shortHelp' => 'Filter records for a module by a predefined filter id.',
                'longHelp' => 'include/api/help/module_filter_record_get_help.html',
                'exceptions' => array(
                    // Thrown in filterById
                    'SugarApiExceptionNotFound',
                    // Thrown in filterList
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
        );
    }

    protected static $isFavorite = false;

    protected $defaultLimit = 20; // How many records should we show if they don't pass up a limit
    protected $defaultOrderBy = array(
        array('date_modified', 'DESC'),
    );

    protected static $current_user;

    // id and date_modified should always be in the response
    // user fields are needed for ACLs since they check owners
    protected static $mandatory_fields = array(
        'id',
        'date_modified',
        'assigned_user_id',
        'created_by'
    );

    public function __construct()
    {
        global $current_user;
        self::$current_user = $current_user;
    }

    public function filterById(ServiceBase $api, array $args)
    {
        $filter = BeanFactory::getBean('Filters', $args['record']);

        // Bad filter ID in request
        if (empty($filter->id)) {
            throw new SugarApiExceptionNotFound("Could not find filter: {$args['record']}");
        }

        // Rather than using a retardly long ternary...
        if (empty($filter->filter_definition)) {
            $filter_definition = array();
        } else {
            $filter_definition = json_decode($filter->filter_definition, true);
        }

        $args = array_merge($args, $filter_definition);
        unset($args['record']);
        return $this->filterList($api, $args);
    }

    protected function parseArguments(ServiceBase $api, array $args, SugarBean $seed = null)
    {
        $options = array();

        // Set up the defaults
        $options['limit'] = $this->defaultLimit;
        $options['offset'] = 0;
        $options['add_deleted'] = true;

        if (!empty($args['max_num'])) {
            $options['limit'] = (int) $args['max_num'];
        }

        $options['limit'] = $this->checkMaxListLimit($options['limit']);

        if (!empty($args['deleted'])) {
            $options['add_deleted'] = false;
        }

        if (!empty($args['offset'])) {
            if ($args['offset'] == 'end') {
                $options['offset'] = 'end';
            } else {
                $options['offset'] = (int) $args['offset'];
            }
        }

        $orderBy = $this->getOrderByFromArgs($args, $seed);
        if ($orderBy) {
            $options['order_by'] = $orderBy;
        } else {
            $options['order_by'] = $this->defaultOrderBy;
        }

        // Set $options['module'] so that runQuery can create beans of the right
        // type.
        if (!empty($seed)) {
            $options['module'] = $seed->module_name;
        }

        //Set the list of fields to be used in the select.
        $options['select'] = $this->getFieldsFromArgs($api, $args, $seed, 'view', $options['display_params']);

        //Force id and date_modified into the select
        $options['select'] = array_unique(
            array_merge($options['select'], self::$mandatory_fields)
        );

        // Some modules have fields that are composed of or require other fields
        // Add those in now so that they can be selected and set onto the bean
        // so formatting can use them. This is necessary for file type fields.
        if (!empty($seed)) {
            foreach ($seed->field_defs as $field => $def) {
                if (isset($def['name']) && in_array($def['name'], $options['select']) && isset($def['fields'])) {
                    foreach ($def['fields'] as $field) {
                        if (!in_array($field, $options['select'])) {
                            $options['select'][] = $field;
                        }
                    }
                }
            }
        }

        return $options;
    }

    /**
     * Creates internal representation of ORDER BY expression from API arguments
     *
     * Overrides parent implementation in order to convert the value to the structure
     * which is currently used in Filter API
     *
     * {@inheritDoc}
     */
    protected function getOrderByFromArgs(array $args, SugarBean $seed = null)
    {
        $orderBy = parent::getOrderByFromArgs($args, $seed);
        $converted = array();
        foreach ($orderBy as $field => $direction) {
            $converted[] = array($field, $direction ? 'ASC' : 'DESC');
        }

        return $converted;
    }

    public function filterListSetup(ServiceBase $api, array $args, $acl = 'list')
    {
        $seed = BeanFactory::newBean($args['module']);

        if (!$seed->ACLAccess($acl)) {
            throw new SugarApiExceptionNotAuthorized('No access to view records for module: ' . $args['module']);
        }

        $options = $this->parseArguments($api, $args, $seed);

        // In case the view parameter is set, reflect those fields in the
        // fields argument as well so formatBean only takes those fields
        // into account instead of every bean property.
        if (!empty($args['view'])) {
            $args['fields'] = $options['select'];
        }

        $q = self::getQueryObject($seed, $options);

        // return $args['filter'];
        if (!isset($args['filter']) || !is_array($args['filter'])) {
            $args['filter'] = array();
        }
        static::addFilters($args['filter'], $q->where(), $q);

        if (!empty($args['my_items'])) {
            static::addOwnerFilter($q, $q->where(), '_this');
        }

        if (!empty($args['favorites'])) {
            self::$isFavorite = true;
            static::addFavoriteFilter($q, $q->where(), '_this', 'INNER');
        }


        return array($args, $q, $options, $seed);
    }

    public function filterList(ServiceBase $api, array $args, $acl = 'list')
    {
        if (!empty($args['q'])) {
            if (!empty($args['filter'])||!empty($args['deleted'])) {
                // These flags can be used with the filter API, but not with the search API
                throw new SugarApiExceptionInvalidParameter();
            }
            // We need to use unified search for this for compatibilty with Nomad
            require_once('clients/base/api/UnifiedSearchApi.php');
            $search = new UnifiedSearchApi();
            $args['module_list'] = $args['module'];
            return $search->globalSearch($api, $args);
        }

        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args, $acl);
        $api->action = 'list';

        return $this->runQuery($api, $args, $q, $options, $seed);
    }


    public function filterListCount(ServiceBase $api, array $args)
    {
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args);
        $api->action = 'list';

        $q->select->selectReset()->setCountQuery();
        $q->order_by = null;
        $q->limit = null;

        return reset($q->execute());
    }




    protected static function getQueryObject(SugarBean $seed, array $options)
    {
        if (empty($options['select'])) {
            $options['select'] = self::$mandatory_fields;
        }
        $queryOptions = array('add_deleted' => (!isset($options['add_deleted'])||$options['add_deleted'])?true:false);
        if ($queryOptions['add_deleted'] == false) {
            $options['select'][] = 'deleted';
        }

        $q = new SugarQuery(DBManagerFactory::getInstance('listviews'));
        $q->from($seed,$queryOptions);
        $q->distinct(false);
        $fields = array();
        foreach ($options['select'] as $field) {
            // FIXME: convert this to vardefs too?
            if ($field == 'my_favorite') {
                if (self::$isFavorite) {
                    $joinType = 'INNER';
                } else {
                    $joinType = 'LEFT';
                }
                $fjoin = $q->join("favorites", array('joinType' => $joinType));
                $fields[] = array($fjoin->joinName() . ".id", 'my_favorite');
                continue;
            }

            // fields that aren't in field defs are removed, since we don't know
            // what to do with them
            if (isset($seed->field_defs[$field]['type'])) {
                $sf = SugarFieldHandler::getSugarField($seed->field_defs[$field]['type']);
                $sf->addFieldToQuery($field, $fields);
            }
        }
        $q->select($fields);

        foreach ($options['order_by'] as $orderBy) {
            // ID and date_modified are used to give some order to the system
            if ( $orderBy[0] != 'date_modified' && $orderBy[0] != 'id' ) {
                self::verifyField($q, $orderBy[0]);
            }
            $q->orderBy($orderBy[0], $orderBy[1]);
        }
        // Add an extra record to the limit so we can detect if there are more records to be found
        $q->limit($options['limit'] + 1);
        $q->offset($options['offset']);

        return $q;
    }


    /**
     * Populate related beans from data array.
     *
     * @param SugarBean $bean
     * @param array $data
     */
    protected function populateRelatedFields($bean, $data)
    {
        $relates = array();
        // fill in related rows data by field
        foreach ($data as $key => $value) {
            if (($split = strpos($key, "__")) > 0) {
                $relates[substr($key, 0, $split)][] = substr($key, $split + 2);
            }
        }

        foreach ($bean->field_defs as $field => $fieldDef) {
            if ($fieldDef['type'] == 'relate' && (!empty($fieldDef['link']) || !empty($fieldDef['module']))) {
                if (empty($data[$field]) && empty($relates[$field])) {
                    continue;
                }

                if (!empty($fieldDef['link'])) {
                    $rbean = $bean->getRelatedBean($fieldDef['link']);
                } else {
                    $rbean = BeanFactory::getBean($fieldDef['module']);
                }

                if (empty($rbean)) {
                    continue;
                }

                if (!empty($data[$field])) {
                    if (empty($fieldDef['rname'])) {
                        $GLOBALS['log']->fatal("Field $field has invalid metadata, has source of relate but is missing rname");
                        continue;
                    }
                    // we have direct data - populate it
                    $rbean->populateFromRow(
                        array($fieldDef['rname'] => $data[$field]),
                        true
                    );
                } else {
                    if (empty($relates[$field])) {
                        continue;
                    }

                    $reldata = array();
                    foreach ($relates[$field] as $relfield) {
                        $reldata[$relfield] = $data["{$field}__{$relfield}"];
                    }
                    if (!empty($reldata)) {
                        $rbean->populateFromRow($reldata, true);
                    }
                    if (empty($fieldDef['link'])) {
                        $bean->related_beans[$fieldDef['name']] = $rbean;
                    }

                }

                if (empty($rbean->id) && !empty($fieldDef['id_name']) && !empty($data[$fieldDef['id_name']])) {
                    $rbean->id = $data[$fieldDef['id_name']];
                }

            }
        }
        // Call some data fillings for the bean
        foreach ($bean->related_beans as $rbean) {
            if (empty($rbean->id)) {
                continue;
            }

            $rbean->check_date_relationships_load();
            // $rbean->fill_in_additional_list_fields();
            if ($rbean->hasCustomFields()
            ) {
                $rbean->custom_fields->fill_relationships();
            }
            $rbean->call_custom_logic("process_record");
        }
        //
    }

    protected function runQuery(ServiceBase $api, array $args, SugarQuery $q, array $options, SugarBean $seed) {
        $seed->call_custom_logic("before_filter", array($q, $options));
        
        if (empty($args['fields'])) {
            $fields = array();
        } else {
            $fields = $options['select'];
        }

        $queryOptions = array(
            'returnRawRows' => true,
            'compensateDistinct' => true,
        );
        $fetched = $seed->fetchFromQuery($q, $fields, $queryOptions);

        list($beans, $rows, $distinctCompensation) = $this->parseQueryResults($fetched);

        $data = array();
        $data['next_offset'] = -1;

        $i = $distinctCompensation;
        foreach ($beans as $bean_id => $bean) {
            if ($i == $options['limit']) {
                if (count($beans) > $options['limit']) {
                    unset($beans[$bean_id]);
                }
                $data['next_offset'] = (int) ($options['limit'] + $options['offset']);
                continue;
            }
            $i++;

            $this->populateRelatedFields($bean, $rows[$bean_id]);

        }

        $data['records'] = $this->formatBeans($api, $args, $beans);

        return $data;
    }

    /**
     *
     * Parse fetched result set as returned by SugarBean::fetchFromQuery.
     * Besides an array of beans some additional parameters are passed
     * which we want to abstract from it and cleanup the actually array.
     *
     * @param array $fetched Result set from SugarBean::fetchFromQuery
     * @return array
     */
    protected function parseQueryResults(array $fetched)
    {
        $rows = array();
        $distinctCompensation = 0;

        if (isset($fetched['_rows'])) {
            $rows = $fetched['_rows'];
            unset($fetched['_rows']);
        }

        if (isset($fetched['_distinctCompensation'])) {
            $distinctCompensation = $fetched['_distinctCompensation'];
            unset($fetched['_distinctCompensation']);
        }

        return array($fetched, $rows, $distinctCompensation);
    }

    /**
     * Verify that the passed field is correct
     * @param SugarQuery $q
     * @param string $field
     * @return bool
     * @throws SugarApiExceptionInvalidParameter
     */
    protected static function verifyField(SugarQuery $q, $field)
    {
        $ret = array();
        if (strpos($field, '.')) {
            // It looks like it's a related field that it's searching by
            list($linkName, $field) = explode('.', $field);

            $q->from->load_relationship($linkName);
            if(empty($q->from->$linkName)) {
                throw new SugarApiExceptionInvalidParameter("Invalid link $relatedTable for field $field");
            }

            if($q->from->$linkName->getType() == "many") {
                // FIXME: we have a problem here: we should allow 'many' links for related to match against parent object
                // but allowing 'many' in  other links may lead to duplicates. So for now we allow 'many'
                // but we should figure out how to find if 'many' is permittable or not.
                // throw new SugarApiExceptionInvalidParameter("Cannot use condition against multi-link $relatedTable");
            }

            $join = $q->join($linkName, array('joinType' => 'LEFT'));
            $table = $join->joinName();
            $ret['field'] = "$table.$field";

            $bean = $q->getTableBean($table);
            if (empty($bean))
                $bean = $q->getTableBean($linkName);
            if (empty($bean) && $q->getFromBean() && $q->getFromBean()->$linkName)
                $bean = BeanFactory::getBean($q->getFromBean()->$linkName->getRelatedModuleName());
            if(empty($bean)) {
                throw new SugarApiExceptionInvalidParameter("Cannot use condition against $linkName - unknown module");
            }

        } else {
            $bean = $q->from;
        }
        $defs = $bean->field_defs;

        if(empty($defs[$field])) {
            throw new SugarApiExceptionInvalidParameter("Unknown field $field");
        }

        if(!$bean->ACLFieldAccess($field)) {
            throw new SugarApiExceptionNotAuthorized("Access for field $field is not allowed");
        }

        $field_def = $defs[$field];

        if(!empty($field_def['source']) && $field_def['source'] == 'relate') {
            if (empty($field_def['rname']) || empty($field_def['link'])) {
                throw new SugarApiExceptionInvalidParameter("Field $field has invalid metadata, has source of relate but is missing rname or link");
            }
            $relfield = $field_def['rname'];
            $link = $field_def['link'];
            return self::verifyField($q, "$link.$relfield");
        }

        $ret['bean'] = $bean;
        $ret['def'] = $field_def;

        return $ret;
    }

    /**
     * Add filters to the query
     * @param array $filterDefs
     * @param SugarQuery_Builder_Where $where
     * @param SugarQuery $q
     * @throws SugarApiExceptionInvalidParameter
     */
    protected static function addFilters(array $filterDefs, SugarQuery_Builder_Where $where, SugarQuery $q) {
        static $sfh;
        if (!isset($sfh)) {
            $sfh = new SugarFieldHandler();
        }

        foreach ($filterDefs as $filterDef) {
            if (!is_array($filterDef)) {
                throw new SugarApiExceptionInvalidParameter(
                    sprintf(
                        'Did not recognize the definition: %s',
                        print_r($filterDef, true)
                    )
                );
            }
            foreach ($filterDef as $field => $filter) {
                if ($field == '$or') {
                    static::addFilters($filter, $where->queryOr(), $q);
                } elseif ($field == '$and') {
                    static::addFilters($filter, $where->queryAnd(), $q);
                } elseif ($field == '$favorite') {
                    static::addFavoriteFilter($q, $where, $filter);
                } elseif ($field == '$owner') {
                    static::addOwnerFilter($q, $where, $filter);
                } elseif ($field == '$creator') {
                    static::addCreatorFilter($q, $where, $filter);
                } elseif ($field == '$tracker') {
                    static::addTrackerFilter($q, $where, $filter);
                } elseif ($field == '$following') {
                    static::addFollowFilter($q, $where, $filter);
                } else {
                    // Looks like just a normal field, parse it's options
                    $fieldInfo = self::verifyField($q, $field);

                    //If the field was a related field and we added a join, we need to adjust the table name used
                    //to get the right join table alias
                    if (!empty($fieldInfo['field'])) {
                        $field = $fieldInfo['field'];
                    }
                    $fieldType = !empty($fieldInfo['def']['custom_type']) ? $fieldInfo['def']['custom_type'] : $fieldInfo['def']['type'];
                    $sugarField = $sfh->getSugarField($fieldType);
                    if (!is_array($filter)) {
                        $value = $filter;
                        $filter = array();
                        $filter['$equals'] = $value;
                    }
                    foreach ($filter as $op => $value) {
                        /*
                         * occasionally fields may need to be fixed up for the Filter, for instance if you are
                         * doing an operation on a datetime field and only send in a date, we need to fix that field to
                         * be a dateTime then unFormat it so that its in GMT ready for DB use
                         */
                        if ($sugarField->fixForFilter($value, $field, $fieldInfo['bean'], $q, $where, $op) == false) {
                            continue;
                        }

                        if (is_array($value)) {
                            foreach ($value as $i => $val) {
                                // TODO: apiUnformat() is deprecated, this will change to apiUnformatField() in next API version
                                $value[$i] = $sugarField->apiUnformat($val);
                            }
                        } else {
                            // TODO: apiUnformat() is deprecated, this will change to apiUnformatField() in next API version
                            $value = $sugarField->apiUnformat($value);
                        }

                        switch ($op) {
                            case '$equals':
                                $where->equals($field, $value);
                                break;
                            case '$not_equals':
                                $where->notEquals($field, $value);
                                break;
                            case '$starts':
                                $where->starts($field, $value);
                                break;
                            case '$ends':
                                $where->ends($field, $value);
                                break;
                            case '$contains':
                                $where->contains($field, $value);
                                break;
                            case '$not_contains':
                                $where->notContains($field, $value);
                                break;
                            case '$in':
                                if (!is_array($value)) {
                                    throw new SugarApiExceptionInvalidParameter('$in requires an array');
                                }
                                $where->in($field, $value);
                                break;
                            case '$not_in':
                                if (!is_array($value)) {
                                    throw new SugarApiExceptionInvalidParameter('$not_in requires an array');
                                }
                                $where->notIn($field, $value);
                                break;
                            case '$dateBetween':
                            case '$between':
                                if (!is_array($value) || count($value) != 2) {
                                    throw new SugarApiExceptionInvalidParameter(
                                        '$between requires an array with two values.'
                                    );
                                }
                                $where->between($field, $value[0], $value[1]);
                                break;
                            case '$is_null':
                                $where->isNull($field);
                                break;
                            case '$not_null':
                                $where->notNull($field);
                                break;
                            case '$empty':
                                $where->isEmpty($field);
                                break;
                            case '$not_empty':
                                $where->isNotEmpty($field);
                                break;
                            case '$lt':
                                $where->lt($field, $value);
                                break;
                            case '$lte':
                                $where->lte($field, $value);
                                break;
                            case '$gt':
                                $where->gt($field, $value);
                                break;
                            case '$gte':
                                $where->gte($field, $value);
                                break;
                            case '$dateRange':
                                $where->dateRange($field, $value, $fieldInfo['bean']);
                                break;
                            default:
                                throw new SugarApiExceptionInvalidParameter("Did not recognize the operand: " . $op);
                        }
                    }
                }
            }
        }
    }

    /**
     * This function adds an owner filter to the sugar query
     *
     * @param SugarQuery $q The whole SugarQuery object
     * @param SugarQuery_Builder_Where $where The Where part of the SugarQuery object
     * @param string $link Which module are you adding the owner filter to.
     */
    protected static function addOwnerFilter(
        SugarQuery $q,
        SugarQuery_Builder_Where $where,
        $link
    ) {
        if ($link == '' || $link == '_this') {
            $linkPart = '';
        } else {
            $join = $q->join($link, array('joinType' => 'LEFT'));
            $linkPart = $join->joinName() . '.';
        }

        $where->equals($linkPart . 'assigned_user_id', self::$current_user->id);
    }

    /**
     * Add a Following Filter
     * @param SugarQuery $q
     * @param SugarQuery_Builder_Where $where
     * @param $filter
     */
    protected static function addFollowFilter(SugarQuery $q, SugarQuery_Builder_Where $where, $filter, $joinType = 'LEFT')
    {
        $field = 'following';
        $q->select($field);
        if (isset($q->from->field_defs[$field]['link'])) {
            $link = $q->from->field_defs[$field]['link'];
            if (isset($q->joinLinkToKey[$link])) {
                $alias = $q->joinLinkToKey[$link];
                $where->addRaw("$alias.id IS NOT NULL");
            }
        }
    }

    /**
     * This function adds a creator filter to the sugar query
     *
     * @param SugarQuery $q The whole SugarQuery object
     * @param SugarQuery_Builder_Where $where The Where part of the SugarQuery object
     * @param string $link Which module are you adding the owner filter to.
     */
    protected static function addCreatorFilter(
        SugarQuery $q,
        SugarQuery_Builder_Where $where,
        $link
    ) {
        if ($link == '' || $link == '_this') {
            $linkPart = '';
        } else {
            $q->join($link, array('joinType' => 'LEFT'));
            $linkPart = $link . '.';
        }

        $where->equals($linkPart . 'created_by', self::$current_user->id);
    }

    /**
     * This function adds a favorite filter to the sugar query
     *
     * @param SugarQuery $q The whole SugarQuery object
     * @param SugarQuery_Builder_Where $where The Where part of the SugarQuery object
     * @param string $link Which module are you adding the favorite filter to.
     */
    protected static function addFavoriteFilter(
        SugarQuery $q,
        SugarQuery_Builder_Where $where,
        $link,
        $joinType = 'LEFT'
    ) {
        $sfOptions = array('joinType' => $joinType, 'favorites' => true);
        if ($link == '' || $link == '_this') {
            $link_name = 'favorites';
        } else {
            $joinTo = $q->join($link, array('joinType' => 'LEFT'));
            $sfOptions['joinTo'] = $joinTo;
            $sfOptions['joinModule'] = $q->getFromBean()->module_name;
            $link_name = "sf_".$link;
        }

        $fjoin = $q->join($link_name, $sfOptions);

        $where->notNull($fjoin->joinName() . '.id');
    }

    protected static function addTrackerFilter(SugarQuery $q, SugarQuery_Builder_Where $where, $interval) {
        global $db;

        $td = new SugarDateTime();
        $td->modify($interval);
        $min_date = $td->asDb();

        // Have to do a subselect because MAX() and GROUP BY don't get along with
        // databases other than MySQL
        $q->joinRaw(
            " INNER JOIN ( SELECT t.item_id item_id, MAX(t.date_modified) track_max ".
            " FROM tracker t ".
            " WHERE t.module_name = '".$db->quote($q->from->module_name)."' ".
            " AND t.user_id = '".$db->quote($GLOBALS['current_user']->id)."' ".
            " AND t.date_modified >= ".$db->convert("'".$min_date."'", 'datetime')." ".
            " AND t.deleted = 0 ".
            " GROUP BY t.item_id ".
            " ) tracker ON tracker.item_id = ".$q->from->getTableName().".id ",
            array('alias' => 'tracker')
        );

        // Now, if they want tracker records, so let's order it by the tracker date_modified
        $q->order_by = array();
        $q->orderByRaw('tracker.track_max', 'DESC');
        $q->distinct(false);
    }

    /**
     * Returns default limit of returned records
     */
    public function getDefaultLimit()
    {
        return $this->defaultLimit;
    }

    /**
     * Returns default record order
     */
    public function getDefaultOrderBy()
    {
        return $this->defaultOrderBy;
    }
}
