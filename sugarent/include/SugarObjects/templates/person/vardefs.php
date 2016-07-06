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
$vardefs =array(
'fields'=> array(
'salutation' =>
		array (
			'name' => 'salutation',
			'vname' => 'LBL_SALUTATION',
			'type' => 'enum',
			'options' => 'salutation_dom',
			'massupdate' => false,
			'len' => '255',
            'duplicate_on_record_copy' => 'always',
			'comment' => 'Contact salutation (e.g., Mr, Ms)'
		),
'first_name' =>
		array (
			'name' => 'first_name',
			'vname' => 'LBL_FIRST_NAME',
			'type' => 'varchar',
			'len' => '100',
			'unified_search' => true,
            'duplicate_on_record_copy' => 'always',
			'full_text_search' => array('enabled' => true, 'boost' => 3),
			'comment' => 'First name of the contact',
            'merge_filter' => 'selected',

		),
	'last_name' =>
		array (
			'name' => 'last_name',
			'vname' => 'LBL_LAST_NAME',
			'type' => 'varchar',
			'len' => '100',
			'unified_search' => true,
            'duplicate_on_record_copy' => 'always',
			'full_text_search' => array('enabled' => true, 'boost' => 3),
			'comment' => 'Last name of the contact',
            'merge_filter' => 'selected',
            'required'=>true,
            'importable' => 'required',
		),
	'name' =>
		array (
			'name' => 'name',
			'rname' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'fullname',
			'link' => true, // bug 39288
			'fields' => array('first_name', 'last_name', 'salutation', 'title'),
			'sort_on' => 'last_name',
			'source' => 'non-db',
			'group'=>'last_name',
			'db_concat_fields'=> array(0=>'first_name', 1=>'last_name'),
            'importable' => 'false',
            'duplicate_on_record_copy' => 'always',
		),
	'full_name' =>
		array (
			'name' => 'full_name',
			'rname' => 'full_name',
			'vname' => 'LBL_NAME',
			'type' => 'fullname',
		    'link' => true, // bug 39288
			'fields' => array('first_name', 'last_name', 'salutation', 'title'),
			'sort_on' => 'last_name',
			'source' => 'non-db',
			'group'=>'last_name',
			'db_concat_fields'=> array(0=>'first_name', 1=>'last_name'),
			'studio' => array('listview' => false),
            'duplicate_on_record_copy' => 'always',
		),
	'title' =>
		array (
			'name' => 'title',
			'vname' => 'LBL_TITLE',
			'type' => 'varchar',
			'len' => '100',
            'duplicate_on_record_copy' => 'always',
			'comment' => 'The title of the contact'
		),
    'facebook' =>
    array (
        'name' => 'facebook',
        'vname' => 'LBL_FACEBOOK',
        'type' => 'varchar',
        'len' => '100',
        'duplicate_on_record_copy' => 'always',
        'comment' => 'The facebook name of the user'
    ),
    'twitter' =>
    array (
        'name' => 'twitter',
        'vname' => 'LBL_TWITTER',
        'type' => 'varchar',
        'len' => '100',
        'duplicate_on_record_copy' => 'always',
        'comment' => 'The twitter name of the user'
    ),
    'googleplus' =>
    array (
        'name' => 'googleplus',
        'vname' => 'LBL_GOOGLEPLUS',
        'type' => 'varchar',
        'len' => '100',
        'duplicate_on_record_copy' => 'always',
        'comment' => 'The google plus id of the user'
    ),
	'department' =>
		array (
			'name' => 'department',
			'vname' => 'LBL_DEPARTMENT',
			'type' => 'varchar',
			'len' => '255',
            'duplicate_on_record_copy' => 'always',
			'comment' => 'The department of the contact',
            'merge_filter' => 'enabled',
		),
		'do_not_call' =>
		array (
			'name' => 'do_not_call',
			'vname' => 'LBL_DO_NOT_CALL',
			'type' => 'bool',
			'default' => '0',
			'audited'=>true,
            'duplicate_on_record_copy' => 'always',
			'comment' => 'An indicator of whether contact can be called'
		),
	'phone_home' =>
		array (
			'name' => 'phone_home',
			'vname' => 'LBL_HOME_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
            'duplicate_on_record_copy' => 'always',
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Home phone number of the contact',
            'merge_filter' => 'enabled',
		),
	'phone_mobile' =>
		array (
			'name' => 'phone_mobile',
			'vname' => 'LBL_MOBILE_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Mobile phone number of the contact',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'phone_work' =>
		array (
			'name' => 'phone_work',
			'vname' => 'LBL_OFFICE_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
			'audited'=>true,
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Work phone number of the contact',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'phone_other' =>
		array (
			'name' => 'phone_other',
			'vname' => 'LBL_OTHER_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Other phone number for the contact',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'phone_fax' =>
		array (
			'name' => 'phone_fax',
			'vname' => 'LBL_FAX_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Contact fax number',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'primary_address_street' =>
		array (
			'name' => 'primary_address_street',
			'vname' => 'LBL_PRIMARY_ADDRESS_STREET',
			'type' => 'text',
			'dbType' => 'varchar',
			'len' => '150',
			'comment' => 'The street address used for primary address',
			'group' => 'primary_address',
			'merge_filter' => 'enabled',
			'duplicate_on_record_copy' => 'always',
		),
	'primary_address_street_2' =>
		array (
			'name' => 'primary_address_street_2',
			'vname' => 'LBL_PRIMARY_ADDRESS_STREET_2',
			'type' => 'varchar',
			'len' => '150',
			'source' => 'non-db',
            'duplicate_on_record_copy' => 'always',
		),
	'primary_address_street_3' =>
		array (
			'name' => 'primary_address_street_3',
			'vname' => 'LBL_PRIMARY_ADDRESS_STREET_3',
			'type' => 'varchar',
			'len' => '150',
			'source' => 'non-db',
            'duplicate_on_record_copy' => 'always',
		),
	'primary_address_city' =>
		array (
			'name' => 'primary_address_city',
			'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
			'type' => 'varchar',
			'len' => '100',
			'group'=>'primary_address',
			'comment' => 'City for primary address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'primary_address_state' =>
		array (
			'name' => 'primary_address_state',
			'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
			'type' => 'varchar',
			'len' => '100',
			'group'=>'primary_address',
			'comment' => 'State for primary address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'primary_address_postalcode' =>
		array (
			'name' => 'primary_address_postalcode',
			'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
			'type' => 'varchar',
			'len' => '20',
			'group'=>'primary_address',
			'comment' => 'Postal code for primary address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',

		),
	'primary_address_country' =>
		array (
			'name' => 'primary_address_country',
			'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
			'type' => 'varchar',
			'group'=>'primary_address',
			'comment' => 'Country for primary address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_street' =>
		array (
			'name' => 'alt_address_street',
			'vname' => 'LBL_ALT_ADDRESS_STREET',
			'type' => 'text',
			'dbType' => 'varchar',
			'len' => '150',
			'group'=>'alt_address',
			'comment' => 'Street address for alternate address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_street_2' =>
		array (
			'name' => 'alt_address_street_2',
			'vname' => 'LBL_ALT_ADDRESS_STREET_2',
			'type' => 'varchar',
			'len' => '150',
			'source' => 'non-db',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_street_3' =>
		array (
			'name' => 'alt_address_street_3',
			'vname' => 'LBL_ALT_ADDRESS_STREET_3',
			'type' => 'varchar',
			'len' => '150',
			'source' => 'non-db',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_city' =>
		array (
			'name' => 'alt_address_city',
			'vname' => 'LBL_ALT_ADDRESS_CITY',
			'type' => 'varchar',
			'len' => '100',
			'group'=>'alt_address',
			'comment' => 'City for alternate address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_state' =>
		array (
			'name' => 'alt_address_state',
			'vname' => 'LBL_ALT_ADDRESS_STATE',
			'type' => 'varchar',
			'len' => '100',
			'group'=>'alt_address',
			'comment' => 'State for alternate address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_postalcode' =>
		array (
			'name' => 'alt_address_postalcode',
			'vname' => 'LBL_ALT_ADDRESS_POSTALCODE',
			'type' => 'varchar',
			'len' => '20',
			'group'=>'alt_address',
			'comment' => 'Postal code for alternate address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'alt_address_country' =>
		array (
			'name' => 'alt_address_country',
			'vname' => 'LBL_ALT_ADDRESS_COUNTRY',
			'type' => 'varchar',
			'group'=>'alt_address',
			'comment' => 'Country for alternate address',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
		'assistant' =>
		array (
			'name' => 'assistant',
			'vname' => 'LBL_ASSISTANT',
			'type' => 'varchar',
			'len' => '75',
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 2),
			'comment' => 'Name of the assistant of the contact',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'assistant_phone' =>
		array (
			'name' => 'assistant_phone',
			'vname' => 'LBL_ASSISTANT_PHONE',
			'type' => 'phone',
			'dbType' => 'varchar',
			'len' => 100,
			'group'=>'assistant',
			'unified_search' => true,
			'full_text_search' => array('enabled' => true, 'boost' => 1),
			'comment' => 'Phone number of the assistant of the contact',
            'merge_filter' => 'enabled',
            'duplicate_on_record_copy' => 'always',
		),
	'picture' =>
		array(
			'name' => 'picture',
			'vname' => 'LBL_PICTURE_FILE',
			'type' => 'image',
			'dbtype' => 'varchar',
		    'massupdate' => false,
		    'reportable' => false,
			'comment' => 'Avatar',
            'len' => '255',
            'width' => '42',
            'height' => '42',
            'border' => '',
            'duplicate_on_record_copy' => 'always',
		),
),
     'name_format_map' => array(
        'f' => 'first_name',
        'l' => 'last_name',
        's' => 'salutation',
        't' => 'title',
    ),
'uses' => array(
    'email_address',
),
'relationships'=>array(
),
'duplicate_check' => array(
    'enabled' => true,
    'FilterDuplicateCheck' => array(
        'filter_template' => array(
            array('$and' => array(
                array('first_name' => array('$starts' => '$first_name')),
                array('last_name' => array('$starts' => '$last_name')),
            )),
        ),
        'ranking_fields' => array(
            array('in_field_name' => 'last_name', 'dupe_field_name' => 'last_name'),
            array('in_field_name' => 'first_name', 'dupe_field_name' => 'first_name'),
        )
    ),
),
);
