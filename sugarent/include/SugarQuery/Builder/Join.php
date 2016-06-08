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

require_once('include/SugarQuery/Builder/Where.php');
require_once('include/SugarQuery/Builder/Andwhere.php');
require_once('include/SugarQuery/Builder/Orwhere.php');

class SugarQuery_Builder_Join {

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @var null|string
     */
    public $table;

    /**
     * @var array
     */
    protected $on = array();

    /**
     * @var bool|string
     */
    public $raw = false;

    /**
     * @var bool|string
     */
    public $linkName = false;

    /**
     * @var bool|SugarQuery
     */
    public $query = false;

    /**
     * @var bool|SugarBean
     */
    public $bean = false;

    public $relatedJoin = false;

    /**
     * Create the JOIN Object
     * @param string $table
     * @param string $type
     */
    public function __construct($table = null, array $options = array())
    {
        // Set the table to JOIN on
        $this->table = $table;
        $this->bean = !empty($options['bean']) ? $options['bean'] : false;
        unset($options['bean']);
        $this->relatedJoin = !empty($options['relatedJoin']) ? $options['relatedJoin'] : false;
        unset($options['relatedJoin']);
        $this->options = $options;
    }

    /**
     * Set the ON criteria
     * @param string $c1
     * @param string $op
     * @param string $c2
     * @return object this
     */
    public function on()
    {
        if (!isset($this->on['and'])) {
            $this->on['and'] = new SugarQuery_Builder_Andwhere($this->query, $this->bean);
        }

        return $this->on['and'];
    }

    /**
     * Set the ON criteria
     * @param string $c1
     * @param string $op
     * @param string $c2
     * @return object this
     */
    public function onOr()
    {
        if (!isset($this->on['or'])) {
            $this->on['or'] = new SugarQuery_Builder_Orwhere($this->query, $this->bean);
        }

        return $this->on['or'];
    }

    /**
     * Add a string of Raw SQL
     * @param string $sql
     * @return SugarQuery_Builder_Join
     */
    public function addRaw($sql)
    {
        $this->raw = $sql;
        return $this;
    }

    /**
     * Add a string that is a link name from vardefs
     * @param string $linkName
     * @return SugarQuery_Builder_Join
     */
    public function addLinkName($linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }

    /**
     * Return name of the join table
     * @return string
     */
    public function joinName()
    {
        if (!empty($this->options['alias'])) {
            return $this->options['alias'];
        }
        return $this->table;
    }

    public function join($link, $options = array())
    {
        $options['relatedJoin'] = $this->options['alias'];
        return $this->query->join($link, $options);
    }

    public function __get($name)
    {
        return $this->$name;
    }

}