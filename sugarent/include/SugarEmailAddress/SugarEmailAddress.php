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

class SugarEmailAddress extends SugarBean
{
    var $table_name = 'email_addresses';
    var $module_name = "EmailAddresses";
    var $module_dir = 'EmailAddresses';
    var $object_name = 'EmailAddress';

    var $disable_custom_fields = true;
    var $db;
    var $smarty;
    public $addresses = array(); // array of emails
    public $hasFetched = false; // Set to true when the emails have been fetched
    var $view = '';
    private $stateBeforeWorkflow;

    public $email_address;
    public $dontLegacySave = false;

    static $count = 0;

    /**
     * Collection of fetched addressed for a record. Originally set to null to 
     * indicate a trip to the database was not yet made.
     * 
     * @var array
     */
    public $fetchedAddresses = null;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function SugarEmailAddress()
    {
        self::__construct();
    }

    public function __construct() {
        parent::__construct();
        $this->index = self::$count;
        self::$count++;
    }

    /**
     * Check if an email address is valid.
     *
     * The best regex we have for validating email addresses is in PHPMailer and we really shouldn't accept email
     * addresses that can't pass the PHPMailer test since we wouldn't be able to send to them.
     *
     * @see PHPMailerProxy::ValidateAddress()
     * @param string $emailAddress
     * @return bool
     */
    public static function isValidEmail($emailAddress)
    {
        require_once 'modules/Mailer/PHPMailerProxy.php';
        return PHPMailerProxy::ValidateAddress($emailAddress);
    }

    /**
     * Gets a hashed string representation of an addresses array. This is used in
     * {@see handleLegacySave} for comparison of various address collections to
     * determine which one needs to be saved.
     * 
     * @param array $addresses An array of addresses
     * @return string
     */
    public function getAddressHash(array $addresses) 
    {
        $indexes = array(
            "email_address" => 1,
            "primary_address" => 1,
            "invalid_email" => 1,
            "opt_out" => 1,
            "reply_to_address" => 1,
        );

        foreach ($addresses as $key => $val) {
            $val = array_intersect_key($val, $indexes);
            foreach (array("primary_address", "invalid_email", "opt_out", "reply_to_address") as $var) {
                $val[$var] = isset($val[$var]) ? (bool) $val[$var] : false;
            }
            ksort($val);
            $addresses[$key] = $val;
        }

        return md5(json_encode($addresses));
    }

    /**
     * Legacy email address handling.  This is to allow support for SOAP or customizations
     * @param string $id
     * @param string $module
     */
    function handleLegacySave($bean, $prefix = "")
    {
        if ($this->dontLegacySave) {
            return;
        }
        if (!isset($_REQUEST) || !isset($_REQUEST['useEmailWidget'])) {
            if (empty($this->addresses) || !isset($_REQUEST['massupdate'])) {
                // When saving a bean with email addresses, it is necessary to 
                // determine if what is being saved is a sugar7 style $bean->email
                // collection or legacy style $bean->emailXX properties as found
                // in the legacy SOAP api. The hashes collected in this block are
                // for that purpose.

                // This is the data that would have been called in retrieve
                $originalAddresses = $this->getAddressesForBean($bean);
                // Hash the original data for comparisons
                $originalHash = $this->getAddressHash($originalAddresses);
                // Reset the addresses array to make it clean for each stage
                $this->addresses = array();

                // Check the collection of emails first if they are there
                $isPrimary = true;
                if (!empty($bean->email) && is_array($bean->email)) {
                    foreach ($bean->email as $emailAddr) {
                        $address = $emailAddr['email_address'];
                        $optO = (isset($emailAddr['opt_out']) && $emailAddr['opt_out'] == "1") ? true : false;
                        $invalidE = (isset($emailAddr['invalid_email']) && $emailAddr['invalid_email'] == "1") ? true : false;
                        $primaryE = (isset($emailAddr['primary_address']) && $emailAddr['primary_address'] == "1") ? true : false;
                        $this->addAddress($address, $primaryE, false, $invalidE, $optO);
                    }
                }
                // Grab the collection addresses and hash them. This will be used
                // to compare against original data to determine if changes were 
                // made.
                $collection = $this->addresses;
                $collectionHash = $this->getAddressHash($collection);
                
                // Now check legacy style emailXX fields to see if any of those 
                // were added.
                $this->addresses = array();
                $isPrimary = true;
                // Special case if not bean->email - removing results in legacy breakage, broken tests, and general sadness.
                for ($i = 1; $i <= 10; $i++) {
                    $email = 'email' . $i;
                    $handleField = true;
                    // When sending a request to modify email1, if there are more
                    // than one email addresses on the record, all emails beyond
                    // the second will be clobbered. email2 will linger because
                    // email1 and email2 are set on legacyRetrieve. To remove
                    // email2 when email1 is edited, uncomment the following two
                    // lines.
                    //$colIndex = $i - 1;
                    //$handleField = (!isset($collection[$colIndex]) || $collection[$colIndex]['email_address'] != $bean->$email);
                    if (isset($bean->$email) && !empty($bean->$email) && $handleField) {
                        $optOut = isset($bean->email[$i-1]['opt_out']) && $bean->email[$i-1]['opt_out'] == "1";
                        $invalid = isset($bean->email[$i-1]['invalid_email']) && $bean->email[$i-1]['invalid_email'] == "1";
                        $opt_out_field = $email . '_opt_out';
                        $invalid_field = $email . '_invalid';
                        $field_optOut = (isset($bean->$opt_out_field)) ? $bean->$opt_out_field : $optOut;
                        $field_invalid = (isset($bean->$invalid_field)) ? $bean->$invalid_field : $invalid;
                        $this->addAddress($bean->$email, $isPrimary, false, $field_invalid, $field_optOut);
                        $isPrimary = false;
                    }
                }
                // Grab the legacy addresses and hash them too
                $legacy = $this->addresses;
                $legacyHash = $this->getAddressHash($legacy);

                // Now check the hashes. If legacy is different than original 
                // and the collection is the same, use legacy addresses, else 
                // use the collection
                if ($legacyHash != $originalHash && $collectionHash == $originalHash) {
                    $this->addresses = $legacy;
                } else {
                    $this->addresses = $collection;
                }
            }
        }
        $this->populateAddresses($bean->id, $bean->module_dir, array(), '');
        if (isset($_REQUEST) && isset($_REQUEST['useEmailWidget'])) {
            $this->populateLegacyFields($bean);
        }
    }

    /**
     * Gets email addresses for a bean
     * 
     * @param SugarBean $bean The bean to get emails for
     * @param boolean $fresh Flag that tells this method whether to get fresh data
     * @return array
     */
    public function getAddressesForBean($bean, $fresh = false)
    {
        if (is_null($this->fetchedAddresses) || $fresh) {
            $module_dir = $this->getCorrectedModule($bean->module_dir);
            $this->fetchedAddresses = $this->getAddressesByGUID($bean->id, $module_dir);
        }
        return $this->fetchedAddresses;
    }

    /**
     * Fills standard email1 legacy fields
     * @param string id
     * @param string module
     * @return object
     */
    function handleLegacyRetrieve(&$bean)
    {
        $this->addresses = $this->getAddressesForBean($bean, true);
        $this->populateLegacyFields($bean);
        if (isset($bean->email1) && !isset($bean->fetched_row['email1'])) {
            $bean->fetched_row['email1'] = $bean->email1;
        }

        // In order for saves to work properly, the email property needs to be set
        // from the emailAddresses addresses array so it maintains state between
        // saves. But we should only write to $bean->email if it is on the bean
        // and empty.
        if (isset($bean->email) && empty($bean->email)) {
            $bean->email = $this->addresses;
        }

        return;
    }

    /**
     * Populates legacy email[1..N] fields of parent bean
     *
     * @param SugarBean $bean
     */
    public function populateLegacyFields(SugarBean $bean)
    {
        $primary = null;
        $alternate = array();
        foreach ($this->addresses as $address) {
            if ($address['primary_address'] && $primary === null) {
                $primary = $address;
            } else {
                $alternate[] = $address;
            }
        }

        // if primary address is not specified explicitly
        // the first address becomes primary
        if ($primary === null && !empty($alternate)) {
            $primary = array_shift($alternate);
        }

        // populate primary address properties
        if ($primary !== null) {
            $bean->email1        = $primary['email_address'];
            $bean->email_opt_out = $primary['opt_out'];
            $bean->invalid_email = $primary['invalid_email'];
        }

        // populate alternate addresses starting from email2
        foreach ($alternate as $i => $address) {
            $property = 'email' . ($i + 2);
            $bean->$property = $address['email_address'];
        }
    }

    /**
     * Saves email addresses for a parent bean
     * @param string $id Parent bean ID
     * @param string $module Parent bean's module
     * @param array $addresses Override of $_REQUEST vars, used to handle non-standard bean saves
     * @param string $primary GUID of primary address
     * @param string $replyTo GUID of reply-to address
     * @param string $invalid GUID of invalid address
     */
    function save($id, $module, $new_addrs = array(), $primary = '', $replyTo = '', $invalid = '', $optOut = '', $in_workflow = false)
    {
        if (empty($this->addresses) || $in_workflow) {
            $this->populateAddresses($id, $module, $new_addrs, $primary);
        }

        //find all email addresses..
        $current_links = array();
        // Need to correct this to handle the Employee/User split
        $module = $this->getCorrectedModule($module);
        $q2="select *  from email_addr_bean_rel eabr WHERE eabr.bean_id = '".$this->db->quote($id)."' AND eabr.bean_module = '".$this->db->quote($module)."' and eabr.deleted=0";
        $r2 = $this->db->query($q2);
        while (($row2 = $this->db->fetchByAssoc($r2)) != null) {
            $current_links[$row2['email_address_id']] = $row2;
        }

        $isConversion = (isset($_REQUEST) && isset($_REQUEST['action']) && $_REQUEST['action'] == 'ConvertLead') ? true : false;

        if (!empty($this->addresses)) {
            // insert new relationships and create email address record, if they don't exist
            foreach ($this->addresses as $address) {
                if (!empty($address['email_address'])) {
                    $guid = create_guid();

                    $emailId = isset($address['email_address_id'])
                        && isset($current_links[$address['email_address_id']])
                        ? $address['email_address_id'] : null;
                    $emailId = $this->AddUpdateEmailAddress($address['email_address'],
                                                            $address['invalid_email'],
                                                            $address['opt_out'],
                                                            $emailId);// this will save the email address if not found

                    //verify linkage and flags.
                    $upd_eabr = "";
                    if (isset($current_links[$emailId])) {
                        if (!$isConversion) { // do not update anything if this is for lead conversion

                        if ($address['primary_address'] != $current_links[$emailId]['primary_address'] or $address['reply_to_address'] != $current_links[$emailId]['reply_to_address'] ) {
                            $upd_eabr="UPDATE email_addr_bean_rel SET primary_address='".$this->db->quote($address['primary_address'])."', reply_to_address='".$this->db->quote($address['reply_to_address'])."' WHERE id='".$this->db->quote($current_links[$emailId]['id'])."'";
                        }

                            unset($current_links[$emailId]);
                        }
                    } else {
                        $primary = $address['primary_address'];
                        if (!empty($current_links) && $isConversion) {
                            foreach ($current_links as $eabr) {
                                if ($eabr['primary_address'] == 1) {
                                    // for lead conversion, if there is already a primary email, do not insert another primary email
                                    $primary = 0;
                                    break;
                                }
                            }
                        }
                        $now = $this->db->now();
                        $upd_eabr = "INSERT INTO email_addr_bean_rel (id, email_address_id,bean_id, bean_module,primary_address,reply_to_address,date_created,date_modified,deleted) VALUES('".$this->db->quote($guid)."', '".$this->db->quote($emailId)."', '".$this->db->quote($id)."', '".$this->db->quote($module)."', ".intval($primary).", ".intval($address['reply_to_address']).", $now, $now, 0)";
                    }

                    if (!empty($upd_eabr)) {
                        $r2 = $this->db->query($upd_eabr);
                    }
                }
            }
        }

        //delete link to dropped email address.
        // for lead conversion, do not delete email addresses
        if (!empty($current_links) && !$isConversion) {

            $delete = "";
            foreach ($current_links as $eabr) {

                $delete.=empty($delete) ? "'".$this->db->quote($eabr['id']) . "' " : ",'" . $this->db->quote($eabr['id']) . "'";
            }

            $eabr_unlink = "update email_addr_bean_rel set deleted=1 where id in ({$delete})";
            $this->db->query($eabr_unlink);
        }
        $this->stateBeforeWorkflow = null;
        return;
    }

    /**
     * returns the number of email addresses found for a specifed bean
     *
     * @param  string $email       Address to match
     * @param  object $bean        Bean to query against
     * @param  string $addresstype Optional, pass a 1 to query against the primary address, 0 for the other addresses
     * @return int                 Count of records found
     */
    function getCountEmailAddressByBean(
        $email,
        $bean,
        $addresstype
    )
    {
        $emailCaps = strtoupper(trim($email));
        if (empty($emailCaps))
            return 0;

        $q = "SELECT *
                FROM email_addr_bean_rel eabl JOIN " . $this->table_name . " ea
                        ON (ea.id = eabl.email_address_id)
                    JOIN {$bean->table_name} bean
                        ON (eabl.bean_id = bean.id)
                WHERE ea.email_address_caps = '".$this->db->quote($emailCaps)."'
                    and eabl.bean_module = '".$this->db->quote($bean->module_dir)."'
                    and eabl.primary_address = '".$this->db->quote($addresstype)."'
                    and eabl.deleted=0 ";

        $r = $this->db->query($q);

        // do it this way to make the count accurate in oracle
        $i = 0;
        while ($this->db->fetchByAssoc($r)) ++$i;

        return $i;
    }

    /**
     * This function returns a contact or user ID if a matching email is found
     * @param   $email      the email address to match
     * @param   $table      which table to query
     */
    function getRelatedId($email, $module) {
        $email = $this->db->quote(trim(strtoupper($email)));
        $module = $this->db->quote(ucfirst($module));

        $q = "SELECT bean_id FROM email_addr_bean_rel eabr
                JOIN " . $this->table_name . " ea ON (eabr.email_address_id = ea.id)
                WHERE bean_module = '$module' AND ea.email_address_caps = '$email' AND eabr.deleted=0";

        $r = $this->db->query($q, true);

        $retArr = array();
        while ($a = $this->db->fetchByAssoc($r)) {
            $retArr[] = $a['bean_id'];
        }
        if (count($retArr) > 0) {
            return $retArr;
        } else {
            return false;
        }
    }

    /**
     * returns a collection of beans matching the email address
     * @param string $email Address to match
     * @return array
     */
    function getBeansByEmailAddress($email)
    {
        global $beanList;
        global $beanFiles;

        $ret = array();

        $email = trim($email);

        if (empty($email)) {
            return array();
        }

        $emailCaps = "'".$this->db->quote(strtoupper($email))."'";
        $q = "SELECT * FROM email_addr_bean_rel eabl JOIN " . $this->table_name . " ea ON (ea.id = eabl.email_address_id)
                WHERE ea.email_address_caps = $emailCaps and eabl.deleted=0 ";
        $r = $this->db->query($q);

        while ($a = $this->db->fetchByAssoc($r)) {
            if(empty($a['bean_module'])) continue;
            $bean = BeanFactory::retrieveBean($a['bean_module'], $a['bean_id']);
            if(empty($bean)) continue;

            $ret[] = $bean;
        }

        return $ret;
    }

    /**
     * Saves email addresses for a parent bean
     * @param string $id Parent bean ID
     * @param string $module Parent bean's module
     * @param array $addresses Override of $_REQUEST vars, used to handle non-standard bean saves
     * @param string $primary GUID of primary address
     * @param string $replyTo GUID of reply-to address
     * @param string $invalid GUID of invalid address
     */
    function populateAddresses($id, $module, $new_addrs = array(), $primary = '', $replyTo = '', $invalid = '', $optOut = '')
    {
        $module = $this->getCorrectedModule($module);
        //One last check for the ConvertLead action in which case we need to change $module to 'Leads'
        $module = (isset($_REQUEST) && isset($_REQUEST['action']) && $_REQUEST['action'] == 'ConvertLead') ? 'Leads' : $module;

        $post_from_email_address_widget = (isset($_REQUEST) && isset($_REQUEST['emailAddressWidget'])) ? true : false;
        $primaryValue = $primary;
        $widgetCount = 0;
        $hasEmailValue = false;
        $email_ids = array();

        if (isset($_REQUEST) && isset($_REQUEST[$module . '_email_widget_id'])) {

            $fromRequest = false;
            // determine which array to process
            foreach ($_REQUEST as $k => $v) {
                if (strpos($k, 'emailAddress') !== false) {
                    $fromRequest = true;
                    break;
                }
                $widget_id = $_REQUEST[$module . '_email_widget_id'];
            }

            //Iterate over the widgets for this module, in case there are multiple email widgets for this module
            while (isset($_REQUEST[$module . $widget_id . "emailAddress" . $widgetCount])) {
                if (empty($_REQUEST[$module . $widget_id . "emailAddress" . $widgetCount])) {
                    $widgetCount++;
                    continue;
                }

                $hasEmailValue = true;

                $eId = $module . $widget_id;
                if (isset($_REQUEST[$eId . 'emailAddressPrimaryFlag'])) {
                    $primaryValue = $_REQUEST[$eId . 'emailAddressPrimaryFlag'];
                } else if (isset($_REQUEST[$module . 'emailAddressPrimaryFlag'])) {
                    $primaryValue = $_REQUEST[$module . 'emailAddressPrimaryFlag'];
                }

                $optOutValues = array();
                if (isset($_REQUEST[$eId . 'emailAddressOptOutFlag'])) {
                    $optOutValues = $_REQUEST[$eId . 'emailAddressOptOutFlag'];
                } else if (isset($_REQUEST[$module . 'emailAddressOptOutFlag'])) {
                    $optOutValues = $_REQUEST[$module . 'emailAddressOptOutFlag'];
                }

                $invalidValues = array();
                if (isset($_REQUEST[$eId . 'emailAddressInvalidFlag'])) {
                    $invalidValues = $_REQUEST[$eId . 'emailAddressInvalidFlag'];
                } else if (isset($_REQUEST[$module . 'emailAddressInvalidFlag'])) {
                    $invalidValues = $_REQUEST[$module . 'emailAddressInvalidFlag'];
                }

                $deleteValues = array();
                if (isset($_REQUEST[$eId . 'emailAddressDeleteFlag'])) {
                    $deleteValues = $_REQUEST[$eId . 'emailAddressDeleteFlag'];
                } else if (isset($_REQUEST[$module . 'emailAddressDeleteFlag'])) {
                    $deleteValues = $_REQUEST[$module . 'emailAddressDeleteFlag'];
                }

                // prep from form save
                $primaryField = $primary;
                $replyToField = '';
                $invalidField = '';
                $optOutField = '';
                if ($fromRequest && empty($primary) && isset($primaryValue)) {
                    $primaryField = $primaryValue;
                }

                if ($fromRequest && empty($replyTo)) {
                    if (isset($_REQUEST[$eId . 'emailAddressReplyToFlag'])) {
                        $replyToField = $_REQUEST[$eId . 'emailAddressReplyToFlag'];
                    } else if (isset($_REQUEST[$module . 'emailAddressReplyToFlag'])) {
                        $replyToField = $_REQUEST[$module . 'emailAddressReplyToFlag'];
                    }
                }
                if ($fromRequest && empty($new_addrs)) {
                    foreach ($_REQUEST as $k => $v) {
                        if (preg_match('/' . $eId . 'emailAddress[0-9]+$/i', $k) && !empty($v)) {
                            $new_addrs[$k] = $v;
                        }
                    }
                }
                if($fromRequest && empty($email_ids)) {
                    foreach($_REQUEST as $k => $v) {
                        if(preg_match('/'.$eId.'emailAddressId[0-9]+$/i', $k) && !empty($v)) {
                            $key = str_replace('emailAddressId', 'emailAddress', $k);
                            $email_ids[$key] = $v;
                        }
                    }
                }

                if ($fromRequest && empty($new_addrs)) {
                    foreach ($_REQUEST as $k => $v) {
                        if (preg_match('/' . $eId . 'emailAddressVerifiedValue[0-9]+$/i', $k) && !empty($v)) {
                            $validateFlag = str_replace("Value", "Flag", $k);
                            if (isset($_REQUEST[$validateFlag]) && $_REQUEST[$validateFlag] == "true")
                                $new_addrs[$k] = $v;
                        }
                    }
                }

                //empty the addresses array if the post happened from email address widget.
                if ($post_from_email_address_widget) {
                    $this->addresses = array(); //this gets populated during retrieve of the contact bean.
                } else {
                    $optOutValues = array();
                    $invalidValues = array();

                    foreach($new_addrs as $k=>$email) {
                       preg_match('/emailAddress([0-9])+$/', $k, $matches);
                       $count = $matches[1];
                       $result = $this->db->query("SELECT opt_out, invalid_email from " . $this->table_name . " where email_address_caps = '" . $this->db->quote(strtoupper($email)) . "'");
                       if(!empty($result)) {
                          $row=$this->db->fetchByAssoc($result);
                          if(!empty($row['opt_out'])) {
                             $optOutValues[$k] = "emailAddress$count";
                          }
                          if(!empty($row['invalid_email'])) {
                             $invalidValues[$k] = "emailAddress$count";
                          }
                       }
                    }
                }
                // Re-populate the addresses class variable if we have new address(es).
                if (!empty($new_addrs)) {
                    foreach ($new_addrs as $k => $reqVar) {
                        //$key = preg_match("/^$eId/s", $k) ? substr($k, strlen($eId)) : $k;
                        $reqVar = trim($reqVar);

                        if(strpos($k, 'emailAddress') !== false) {
                            if(!empty($reqVar) && !in_array($k, $deleteValues)) {
                                $email_id   = (array_key_exists($k, $email_ids)) ? $email_ids[$k] : null;
                                $primary    = ($k == $primaryValue) ? true : false;
                                $replyTo    = ($k == $replyToField) ? true : false;
                                $invalid    = (in_array($k, $invalidValues)) ? true : false;
                                $optOut     = (in_array($k, $optOutValues)) ? true : false;
                                $this->addAddress(trim($new_addrs[$k]), $primary, $replyTo, $invalid, $optOut, $email_id);
                            }
                        }
                    } //foreach
                }

                $widgetCount++;
            }
            //End of Widget for loop
        }

        //If no widgets, set addresses array to empty
        if ($post_from_email_address_widget && !$hasEmailValue) {
            $this->addresses = array();
        }
    }

    /**
     * Preps internal array structure for email addresses
     * @param string $addr Email address
     * @param bool $primary Default false
     * @param bool $replyTo Default false
     */

    function addAddress($addr, $primary=false, $replyTo=false, $invalid=false, $optOut=false, $email_id = null) {
        $addr = trim(html_entity_decode($addr, ENT_QUOTES));
        if (SugarEmailAddress::isValidEmail($addr)) {
            $primaryFlag = ($primary) ? '1' : '0';
            $replyToFlag = ($replyTo) ? '1' : '0';
            $invalidFlag = ($invalid) ? '1' : '0';
            $optOutFlag = ($optOut) ? '1' : '0';

            // If we have such address already, replace it with the new one.
            $key = false;
            foreach ($this->addresses as $k => $address) {
                if ($address['email_address'] == $addr) {
                    $key = $k;
                } elseif ($primary && isset($address['primary_address']) && $address['primary_address'] == '1') {
                    // We should only have one primary. If we are adding a primary but
                    // we find an existing primary, reset this one's primary flag.
                    $address['primary_address'] = '0';
                }
            }

            $attributes = array(
                'email_address' => $addr,
                'primary_address' => $primaryFlag,
                'reply_to_address' => $replyToFlag,
                'invalid_email' => $invalidFlag,
                'opt_out' => $optOutFlag,
                'email_address_id' => $email_id,
            );

            if ($key === false) {
                $this->addresses[] = $attributes;
            } else {
                $this->addresses[$key] = $attributes;
            }
        } else {
            $GLOBALS['log']->fatal("SUGAREMAILADDRESS: address did not validate [ {$addr} ]");
        }
    }

    /**
     * Updates invalid_email and opt_out flags for each address
     */
    function updateFlags() {
        if(!empty($this->addresses)) {
            foreach($this->addresses as $addressMeta) {
                if(isset($addressMeta['email_address']) && !empty($addressMeta['email_address'])) {
                    $address = $this->db->quote($this->_cleanAddress($addressMeta['email_address']));
                    $q = "SELECT * FROM " . $this->table_name . " WHERE email_address = '{$address}'";
                    $r = $this->db->query($q);
                    $a = $this->db->fetchByAssoc($r);

                    if(!empty($a)) {
                        if(isset($a['invalid_email']) && isset($addressMeta['invalid_email']) && isset($addressMeta['opt_out']) && $a['invalid_email'] != $addressMeta['invalid_email'] || $a['opt_out'] != $addressMeta['opt_out']) {
                            $qUpdate = "UPDATE " . $this->table_name . " SET invalid_email = ".intval($addressMeta['invalid_email']).", opt_out = ".intval($addressMeta['opt_out']).", date_modified = '".TimeDate::getInstance()->nowDb()."' WHERE id = '".$this->db->quote($a['id'])."'";
                            $rUpdate = $this->db->query($qUpdate);
                        }
                    }
                }
            }
        }
    }

    public function splitEmailAddress($addr)
    {
        $email = $this->_cleanAddress($addr);
        if (!SugarEmailAddress::isValidEmail($email)) {
            $email = ''; // remove bad email addr
        }
        $name = trim(str_replace(array($email, '<', '>', '"', "'"), '', $addr));
        return array("name" => $name, "email" => strtolower($email));
    }

    /**
     * PRIVATE UTIL
     * Normalizes an RFC-clean email address, returns a string that is the email address only
     * @param string $addr Dirty email address
     * @return string clean email address
     */
    function _cleanAddress($addr)
    {
        $addr = trim(from_html($addr));

        if (strpos($addr, "<") !== false && strpos($addr, ">") !== false) {
            $address = trim(substr($addr, strrpos($addr, "<") + 1, strrpos($addr, ">") - strrpos($addr, "<") - 1));
        } else {
            $address = trim($addr);
        }

        return $address;
    }

    /**
     * preps a passed email address for email address storage
     * @param array $addr Address in focus, must be RFC compliant
     * @return string $id email_addresses ID
     */
    function getEmailGUID($addr)
    {
        $address = $this->db->quote($this->_cleanAddress($addr));
        $addressCaps = strtoupper($address);

        $q = "SELECT id FROM " . $this->table_name . " WHERE email_address_caps = '{$addressCaps}'";
        $r = $this->db->query($q);
        $a = $this->db->fetchByAssoc($r);

        if (!empty($a) && !empty($a['id'])) {
            return $a['id'];
        } else {
            $guid = '';
            if (!empty($address)) {
                $guid = create_guid();
                $now = TimeDate::getInstance()->nowDb();
                $qa = "INSERT INTO " . $this->table_name . " (id, email_address, email_address_caps, date_created, date_modified, deleted)
                        VALUES('{$guid}', '{$address}', '{$addressCaps}', '$now', '$now', 0)";
                $ra = $this->db->query($qa);
            }
            return $guid;
        }
    }

    /**
     * Creates or Updates an entry in the email_addresses table, depending
     * on if the email address submitted matches a previous entry (case-insensitive)
     * @param String $addr - email address
     * @param int $invalid - is the email address marked as Invalid?
     * @param int $opt_out - is the email address marked as Opt-Out?
     * @param String $id - the GUID of the original SugarEmailAddress bean,
     *        in case a "email has changed" WorkFlow has triggered - hack to allow workflow-induced changes
     *        to propagate to the new SugarEmailAddress - see bug 39188
     * @return String GUID of Email Address or '' if cleaned address was empty.
     */
    public function AddUpdateEmailAddress($addr,$invalid=0,$opt_out=0,$id=null)
    {
        // sanity checks to avoid SQL injection.
        $invalid = intval($invalid);
        $opt_out = intval($opt_out);

        // Trim the address
        $addr = trim($addr);

        $address = $this->db->quote($this->_cleanAddress($addr));
        $addressCaps = strtoupper($address);

        // determine if we have a matching email address
        $q = "SELECT * FROM " . $this->table_name . " WHERE email_address_caps = '{$addressCaps}' and deleted=0";
        $r = $this->db->query($q);
        $duplicate_email = $this->db->fetchByAssoc($r);

        // check if we are changing an email address, where workflow might be in play
        if ($id) {
            $r = $this->db->query("SELECT * FROM " . $this->table_name . " WHERE id='".$this->db->quote($id)."'");
            $current_email = $this->db->fetchByAssoc($r);
        }
        else {
            $current_email = null;
        }

        // unless workflow made changes, assume parameters are what to use.
        $new_opt_out = $opt_out;
        $new_invalid = $invalid;
        if (!empty($current_email['id']) && isset($this->stateBeforeWorkflow[$current_email['id']])) {
            if ($current_email['invalid_email'] != $invalid ||
                $current_email['opt_out'] != $opt_out) {

                // workflow could be in play
                $before_email = $this->stateBeforeWorkflow[$current_email['id']];

                // our logic is as follows: choose from parameter, unless workflow made a change to the value, then choose final value
                if (intval($before_email['opt_out']) != intval($current_email['opt_out'])) {
                    $new_opt_out = intval($current_email['opt_out']);
                }
                if (intval($before_email['invalid_email']) != intval($current_email['invalid_email'])) {
                    $new_invalid = intval($current_email['invalid_email']);
                }
            }
        }

        // determine how we are going to put in this address - UPDATE or INSERT
        if (!empty($duplicate_email['id'])) {

            // address_caps matches - see if we're changing fields
            if ($duplicate_email['invalid_email'] != $new_invalid ||
                $duplicate_email['opt_out'] != $new_opt_out ||
                (trim($duplicate_email['email_address']) != $address)) {
                $upd_q = 'UPDATE ' . $this->table_name . ' ' .
                    'SET email_address=\'' . $address . '\', ' .
                    'invalid_email=' . $new_invalid . ', ' .
                    'opt_out=' . $new_opt_out . ', ' .
                    'date_modified=' . $this->db->now() . ' ' .
                    'WHERE id=\'' . $this->db->quote($duplicate_email['id']) . '\'';
                $upd_r = $this->db->query($upd_q);
            }
            return $duplicate_email['id'];
        }
        else {
            // no case-insensitive address match - it's new, or undeleted.
            $guid = '';
            if (!empty($address)) {
                $guid = create_guid();
                $now = TimeDate::getInstance()->nowDb();
                $qa = "INSERT INTO " . $this->table_name . " (id, email_address, email_address_caps, date_created, date_modified, deleted, invalid_email, opt_out)
                        VALUES('{$guid}', '{$address}', '{$addressCaps}', '$now', '$now', 0 , $new_invalid, $new_opt_out)";
                $this->db->query($qa);
            }
            return $guid;
        }
    }

    /**
     * Returns Primary or newest email address
     * @param object $focus Object in focus
     * @return string email
     */
    function getPrimaryAddress($focus, $parent_id = null, $parent_type = null)
    {

        $parent_type = empty($parent_type) ? $focus->module_dir : $parent_type;
        // Bug63114: Email address is not shown in the list view for employees
        $parent_type = $this->getCorrectedModule($parent_type);
        $parent_id = empty($parent_id) ? $focus->id : $parent_id;

        $q = "SELECT ea.email_address FROM " . $this->table_name . " ea
                LEFT JOIN email_addr_bean_rel ear ON ea.id = ear.email_address_id
                WHERE ear.bean_module = '".$this->db->quote($parent_type)."'
                AND ear.bean_id = '".$this->db->quote($parent_id)."'
                AND ear.deleted = 0
                AND ea.invalid_email = 0
                ORDER BY ear.primary_address DESC";
        $r = $this->db->limitQuery($q, 0, 1);
        $a = $this->db->fetchByAssoc($r);

        if (isset($a['email_address'])) {
            return $a['email_address'];
        }
        return '';
    }

    /**
     * As long as this function is used not only to retrieve user's Reply-To
     * address, but also notification address and so on, there were added
     * $replyToOnly optional parameter used to retrieve only address marked as
     * Reply-To (bug #43643).
     *
     * @param SugarBean $focus
     * @param bool $replyToOnly
     * @return string
     */
    function getReplyToAddress($focus, $replyToOnly = false)
    {
        $q = "SELECT ea.email_address FROM " . $this->table_name . " ea
                LEFT JOIN email_addr_bean_rel ear ON ea.id = ear.email_address_id
                WHERE ear.bean_module = '".$this->db->quote($focus->module_dir)."'
                AND ear.bean_id = '".$this->db->quote($focus->id)."'
                AND ear.deleted = 0
                AND ea.invalid_email = 0";

        if (!$replyToOnly) {
            // retrieve reply-to address if it exists or any other address
            // otherwise
            $q .= "
                ORDER BY ear.reply_to_address DESC";
        }
        else {
            // retrieve reply-to address only
            $q .= "
                AND ear.reply_to_address = 1";
        }

        $r = $this->db->query($q);
        $a = $this->db->fetchByAssoc($r);

        if (isset($a['email_address'])) {
            return $a['email_address'];
        }
        return '';
    }

    /**
     * Returns all email addresses by parent's GUID
     * @param string $id Parent's GUID
     * @param string $module Parent's module
     * @return array
     */
    function getAddressesByGUID($id, $module)
    {
        $return = array();
        $module = $this->getCorrectedModule($module);

        $q = "SELECT ea.email_address, ea.email_address_caps, ea.invalid_email, ea.opt_out, ea.date_created, ea.date_modified,
                ear.id, ear.email_address_id, ear.bean_id, ear.bean_module, ear.primary_address, ear.reply_to_address, ear.deleted
                FROM " . $this->table_name . " ea LEFT JOIN email_addr_bean_rel ear ON ea.id = ear.email_address_id
                WHERE ear.bean_module = '".$this->db->quote($module)."'
                AND ear.bean_id = '".$this->db->quote($id)."'
                AND ear.deleted = 0
                ORDER BY ear.reply_to_address, ear.primary_address DESC";
        $r = $this->db->query($q);

        while ($a = $this->db->fetchByAssoc($r, FALSE)) {
            $return[] = $a;
        }

        return $return;
    }

    /**
     * Returns query to ask for email addresses for specific bean type
     * @param string $module
     * @return SugarQuery
     */
    public function getEmailsQuery($module)
    {
        $q = new SugarQuery();
        $q->from($this);
        $q->select(array('email_address', 'opt_out', 'invalid_email', 'ear.primary_address', 'ear.reply_to_address'));
        $q->joinTable("email_addr_bean_rel", array('alias'=>"ear", 'joinType'=>"LEFT", "linkingTable" => true))
            ->on()->equalsField('id', 'ear.email_address_id', $this)->equals('ear.deleted', 0);
        $q->where()->equals('deleted', 0)->equals('ear.bean_module', $this->getCorrectedModule($module));
        $q->orderBy('ear.primary_address', 'DESC');
        return $q;
    }

    /**
     * Returns the HTML/JS for the EmailAddress widget
     * @param string $parent_id ID of parent bean, generally $focus
     * @param string $module $focus' module
     * @param bool asMetadata Default false
     * @return string HTML/JS for widget
     */
    function getEmailAddressWidgetEditView($id, $module, $asMetadata = false, $tpl = '', $tabindex = '0')
    {
        if (!($this->smarty instanceOf Sugar_Smarty))
            $this->smarty = new Sugar_Smarty();

        global $app_strings, $dictionary, $beanList;

        $prefill = 'false';

        $prefillData = 'new Object()';
        $passedModule = $module;
        $module = $this->getCorrectedModule($module);
        $saveModule = $module;
        if (isset($_POST['is_converted']) && $_POST['is_converted'] == true) {
            $id = $_POST['return_id'];
            $module = $_POST['return_module'];
        }
        $prefillDataArr = array();
        if (!empty($id)) {
            $prefillDataArr = $this->getAddressesByGUID($id, $module);
            //When coming from convert leads, sometimes module is Contacts while the id is for a lead.
            if (empty($prefillDataArr) && $module == "Contacts")
                $prefillDataArr = $this->getAddressesByGUID($id, "Leads");
        } else if (isset($_REQUEST['full_form']) && !empty($_REQUEST['emailAddressWidget'])) {
            $widget_id = isset($_REQUEST[$module . '_email_widget_id']) ? $_REQUEST[$module . '_email_widget_id'] : '0';
            $count = 0;
            $key = $module . $widget_id . 'emailAddress' . $count;
            while (isset($_REQUEST[$key])) {
                $email = $_REQUEST[$key];
                $prefillDataArr[] = array('email_address' => $email,
                    'primary_address' => isset($_REQUEST['emailAddressPrimaryFlag']) && $_REQUEST['emailAddressPrimaryFlag'] == $key,
                    'invalid_email' => isset($_REQUEST['emailAddressInvalidFlag']) && in_array($key, $_REQUEST['emailAddressInvalidFlag']),
                    'opt_out' => isset($_REQUEST['emailAddressOptOutFlag']) && in_array($key, $_REQUEST['emailAddressOptOutFlag']),
                    'reply_to_address' => false
                );
                $key = $module . $widget_id . 'emailAddress' . ++$count;
            } //while
        }

        if (!empty($prefillDataArr)) {
            $json = new JSON(JSON_LOOSE_TYPE);
            $prefillData = $json->encode($prefillDataArr);
            $prefill = !empty($prefillDataArr) ? 'true' : 'false';
        }

        $required = false;
        $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
        if (!empty($vardefs['email1']) && isset($vardefs['email1']['required']) && $vardefs['email1']['required'])
            $required = true;
        $this->smarty->assign('required', $required);

        $this->smarty->assign('module', $saveModule);
        $this->smarty->assign('index', $this->index);
        $this->smarty->assign('app_strings', $app_strings);
        $this->smarty->assign('prefillEmailAddresses', $prefill);
        $this->smarty->assign('prefillData', $prefillData);
        $this->smarty->assign('tabindex', $tabindex);
        //Set addDefaultAddress flag (do not add if it's from the Email module)
        $this->smarty->assign('addDefaultAddress', (isset($_REQUEST['module']) && $_REQUEST['module'] == 'Emails') ? 'false' : 'true');
        $form = $this->view;

        //determine if this should be a quickcreate form, or a quick create form under subpanels
        if ($this->view == "QuickCreate") {
            $form = 'form_DC' . $this->view . '_' . $module;
            if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'SubpanelCreates' || $_REQUEST['action'] == 'SubpanelEdits') {
                $form = 'form_Subpanel' . $this->view . '_' . $module;
            }
        }

        $this->smarty->assign('emailView', $form);

        if ($module == 'Users') {
            $this->smarty->assign('useReplyTo', true);
        } else {
            $this->smarty->assign('useOptOut', true);
            $this->smarty->assign('useInvalid', true);
        }

        $template = empty($tpl) ? "include/SugarEmailAddress/templates/forEditView.tpl" : $tpl;
        $newEmail = $this->smarty->fetch($template);


        if ($asMetadata) {
            // used by Email 2.0
            $ret = array();
            $ret['prefillData'] = $prefillDataArr;
            $ret['html'] = $newEmail;

            return $ret;
        }

        return $newEmail;
    }

    /**
     * Returns the HTML/JS for the EmailAddress widget
     * @param string $parent_id ID of parent bean, generally $focus
     * @param string $module $focus' module
     * @param bool asMetadata Default false
     * @return string HTML/JS for widget
     */
    function getEmailAddressWidgetWirelessEdit($id, $module, $asMetadata = false)
    {
        if (!($this->smarty instanceOf Sugar_Smarty))
            $this->smarty = new Sugar_Smarty();

        global $app_strings;

        $prefill = 'false';
        $prefillData = array();

        if (!empty($id)) {
            $prefillData = $this->getAddressesByGUID($id, $module);
        }

        $this->smarty->assign('module', $module);
        $this->smarty->assign('app_strings', $app_strings);
        $this->smarty->assign('prefillData', $prefillData);
        $this->smarty->assign('noemail', empty($prefillData));

        if ($module == 'Users') {
            $this->smarty->assign('useReplyTo', true);
        } else {
            $this->smarty->assign('useOptOut', true);
            $this->smarty->assign('useInvalid', true);
        }

        $newEmail = $this->smarty->fetch("include/SugarEmailAddress/templates/forWirelessEdit.tpl");

        if ($asMetadata) {
            // used by Email 2.0
            $ret = array();
            $ret['prefillData'] = $prefillDataArr;
            $ret['html'] = $newEmail;

            return $ret;
        }

        return $newEmail;
    }


    /**
     * Returns the HTML/JS for the EmailAddress widget
     * @param object $focus Bean in focus
     * @return string HTML/JS for widget
     */
    function getEmailAddressWidgetDetailView($focus, $tpl = '')
    {
        if (!($this->smarty instanceOf Sugar_Smarty))
            $this->smarty = new Sugar_Smarty();

        global $app_strings;
        global $current_user;
        $assign = array();
        if (empty($focus->id)) return '';
        $prefillData = $this->getAddressesByGUID($focus->id, $focus->module_dir);

        foreach ($prefillData as $addressItem) {
            $key = ($addressItem['primary_address'] == 1) ? 'primary' : "";
            $key = ($addressItem['reply_to_address'] == 1) ? 'reply_to' : $key;
            $key = ($addressItem['opt_out'] == 1) ? 'opt_out' : $key;
            $key = ($addressItem['invalid_email'] == 1) ? 'invalid' : $key;
            $key = ($addressItem['opt_out'] == 1) && ($addressItem['invalid_email'] == 1) ? 'opt_out_invalid' : $key;

            $assign[] = array('key' => $key, 'address' => $current_user->getEmailLink2($addressItem['email_address'], $focus) . $addressItem['email_address'] . "</a>");
        }


        $this->smarty->assign('app_strings', $app_strings);
        $this->smarty->assign('emailAddresses', $assign);
        $templateFile = empty($tpl) ? "include/SugarEmailAddress/templates/forDetailView.tpl" : $tpl;
        $return = $this->smarty->fetch($templateFile);
        return $return;
    }


    /**
     * getEmailAddressWidgetDuplicatesView($focus)
     * @param object $focus Bean in focus
     * @return string HTML that contains hidden input values based off of HTML request
     */
    function getEmailAddressWidgetDuplicatesView($focus)
    {
        if (!($this->smarty instanceOf Sugar_Smarty))
            $this->smarty = new Sugar_Smarty();

        $count = 0;
        $emails = array();
        $primary = null;
        $optOut = array();
        $invalid = array();
        $mod = isset($focus) ? $focus->module_dir : "";

        $widget_id = $_POST[$mod . '_email_widget_id'];
        $this->smarty->assign('email_widget_id', $widget_id);
        $this->smarty->assign('emailAddressWidget', $_POST['emailAddressWidget']);

        if (isset($_POST[$mod . $widget_id . 'emailAddressPrimaryFlag'])) {
            $primary = $_POST[$mod . $widget_id . 'emailAddressPrimaryFlag'];
        }

        while (isset($_POST[$mod . $widget_id . "emailAddress" . $count])) {
            $emails[] = $_POST[$mod . $widget_id . 'emailAddress' . $count];
            $count++;
        }

        if ($count == 0) {
            return "";
        }

        if (isset($_POST[$mod . $widget_id . 'emailAddressOptOutFlag'])) {
            foreach ($_POST[$mod . $widget_id . 'emailAddressOptOutFlag'] as $v) {
                $optOut[] = $v;
            }
        }

        if (isset($_POST[$mod . $widget_id . 'emailAddressInvalidFlag'])) {
            foreach ($_POST[$mod . $widget_id . 'emailAddressInvalidFlag'] as $v) {
                $invalid[] = $v;
            }
        }

        if (isset($_POST[$mod . $widget_id . 'emailAddressReplyToFlag'])) {
            foreach ($_POST[$mod . $widget_id . 'emailAddressReplyToFlag'] as $v) {
                $replyTo[] = $v;
            }
        }

        if (isset($_POST[$mod . $widget_id . 'emailAddressDeleteFlag'])) {
            foreach ($_POST[$mod . $widget_id . 'emailAddressDeleteFlag'] as $v) {
                $delete[] = $v;
            }
        }

        while (isset($_POST[$mod . $widget_id . "emailAddressVerifiedValue" . $count])) {
            $verified[] = $_POST[$mod . $widget_id . 'emailAddressVerifiedValue' . $count];
            $count++;
        }

        $this->smarty->assign('emails', $emails);
        $this->smarty->assign('primary', $primary);
        $this->smarty->assign('optOut', $optOut);
        $this->smarty->assign('invalid', $invalid);
        $this->smarty->assign('replyTo', $invalid);
        $this->smarty->assign('delete', $invalid);
        $this->smarty->assign('verified', $invalid);
        $this->smarty->assign('moduleDir', $mod);

        return $this->smarty->fetch("include/SugarEmailAddress/templates/forDuplicatesView.tpl");
    }

    /**
     * getFormBaseURL
     *
     */
    function getFormBaseURL($focus)
    {
        $get = "";
        $count = 0;
        $mod = isset($focus) ? $focus->module_dir : "";

        $widget_id = $_POST[$mod . '_email_widget_id'];
        $get .= '&' . $mod . '_email_widget_id=' . $widget_id;
        $get .= '&emailAddressWidget=' . $_POST['emailAddressWidget'];

        while (isset($_REQUEST[$mod . $widget_id . 'emailAddress' . $count])) {
            $get .= "&" . $mod . $widget_id . "emailAddress" . $count . "=" . urlencode($_REQUEST[$mod . $widget_id . 'emailAddress' . $count]);
            $count++;
        } //while

        while (isset($_REQUEST[$mod . $widget_id . 'emailAddressVerifiedValue' . $count])) {
            $get .= "&" . $mod . $widget_id . "emailAddressVerifiedValue" . $count . "=" . urlencode($_REQUEST[$mod . $widget_id . 'emailAddressVerifiedValue' . $count]);
            $count++;
        } //while

        $options = array('emailAddressPrimaryFlag', 'emailAddressOptOutFlag', 'emailAddressInvalidFlag', 'emailAddressDeleteFlag', 'emailAddressReplyToFlag');

        foreach ($options as $option) {
            $count = 0;
            $optionIdentifier = $mod . $widget_id . $option;
            if (isset($_REQUEST[$optionIdentifier])) {
                if (is_array($_REQUEST[$optionIdentifier])) {
                    foreach ($_REQUEST[$optionIdentifier] as $optOut) {
                        $get .= "&" . $optionIdentifier . "[" . $count . "]=" . $optOut;
                        $count++;
                    } //foreach
                } else {
                    $get .= "&" . $optionIdentifier . "=" . $_REQUEST[$optionIdentifier];
                }
            } //if
        } //foreach
        return $get;

    }

    function setView($view)
    {
        $this->view = $view;
    }

    /**
     * This function is here so the Employees/Users division can be handled cleanly in one place
     * @param object $focus SugarBean
     * @return string The value for the bean_module column in the email_addr_bean_rel table
     */
    function getCorrectedModule(&$module)
    {
        return ($module == "Employees") ? "Users" : $module;
    }

    public function stash($parentBeanId, $moduleName)
    {
        $result = $this->db->query("select email_address_id from email_addr_bean_rel eabr WHERE eabr.bean_id = '".$this->db->quote($parentBeanId)."' AND eabr.bean_module = '".$this->db->quote($moduleName)."' and eabr.deleted=0");
        $this->stateBeforeWorkflow = array();
        $ids = array();
        while ($row = $this->db->fetchByAssoc($result, false))
        {
            $ids[] =$this->db->quote($row['email_address_id']); // avoid 2nd order SQL Injection
        }
        if (!empty($ids))
        {
            $ids = implode("', '", $ids);
            $queryEmailData = "SELECT id, email_address, invalid_email, opt_out FROM {$this->table_name} WHERE id IN ('$ids') AND deleted=0";
            $result = $this->db->query($queryEmailData);
            while ($row = $this->db->fetchByAssoc($result, false))
            {
                $this->stateBeforeWorkflow[$row['id']] = array_diff_key($row, array('id' => null));
            }
        }
    }
} // end class def


/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getEmailAddressWidget($focus, $field, $value, $view, $tabindex = '0')
{
    $sea = BeanFactory::getBean('EmailAddresses');
    $sea->setView($view);

    if ($focus->ACLFieldAccess($field, "edit")) {
        if ($view == 'EditView' || $view == 'QuickCreate' || $view == 'ConvertLead') {
            $module = $focus->module_dir;
            if ($view == 'ConvertLead' && $module == "Contacts") $module = "Leads";

            return $sea->getEmailAddressWidgetEditView($focus->id, $module, false, '', $tabindex);
        }
        elseif ($view == 'wirelessedit') {
            return $sea->getEmailAddressWidgetWirelessEdit($focus->id, $focus->module_dir, false);
        }

    }
    return $sea->getEmailAddressWidgetDetailView($focus);
}
