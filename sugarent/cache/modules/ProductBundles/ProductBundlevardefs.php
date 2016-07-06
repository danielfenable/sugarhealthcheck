<?php 
 $GLOBALS["dictionary"]["ProductBundle"]=array (
  'table' => 'product_bundles',
  'comment' => 'Quote groups',
  'fields' => 
  array (
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
      ),
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => true,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
      'exportable' => true,
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'productbundles_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'productbundles_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'productbundles_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_NAME',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => false,
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
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
      'comment' => 'Date record last modified',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'comment' => 'User who created record',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '255',
      'comment' => 'Name of the group',
    ),
    'bundle_stage' => 
    array (
      'name' => 'bundle_stage',
      'vname' => 'LBL_BUNDLE_STAGE',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'Processing stage of the group (ex: Draft)',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Group description',
    ),
    'taxrate_id' => 
    array (
      'name' => 'taxrate_id',
      'vname' => 'LBL_TAXRATE_ID',
      'type' => 'id',
    ),
    'tax' => 
    array (
      'name' => 'tax',
      'vname' => 'LBL_TAX',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Tax rate applied to items in the group',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
        2 => 'taxrate_id',
        3 => 'new_sub',
      ),
      'formula' => 'ifElse(and(isNumeric(related($taxrate, "value")), equal(related($taxrate, "status"), "Active")),
                    currencyMultiply(
                        rollupConditionalSum($products, "total_amount", "tax_class", "Taxable"),
                        currencyDivide(related($taxrate, "value"), 100)
                    ),
                    0
                )',
      'calculated' => true,
      'enforced' => true,
    ),
    'tax_usdollar' => 
    array (
      'name' => 'tax_usdollar',
      'vname' => 'LBL_TAX_USDOLLAR',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Total tax for all items in group in USD',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(and(isNumeric($tax), not(equal($tax, 0))), currencyDivide($tax, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'total' => 
    array (
      'name' => 'total',
      'vname' => 'LBL_TOTAL',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Total amount for all items in the group',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
        2 => 'new_sub',
        3 => 'tax',
        4 => 'shipping',
      ),
      'formula' => 'currencyAdd($new_sub, $tax, $shipping)',
      'calculated' => true,
      'enforced' => true,
    ),
    'total_usdollar' => 
    array (
      'name' => 'total_usdollar',
      'vname' => 'LBL_TOTAL_USDOLLAR',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Total amount for all items in the group in USD',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'subtotal_usdollar' => 
    array (
      'name' => 'subtotal_usdollar',
      'vname' => 'LBL_SUBTOTAL_USDOLLAR',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Group total minus tax and shipping in USD',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'shipping_usdollar' => 
    array (
      'name' => 'shipping_usdollar',
      'vname' => 'LBL_SHIPPING',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Shipping charge for group in USD',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'deal_tot' => 
    array (
      'name' => 'deal_tot',
      'vname' => 'LBL_DEAL_TOT',
      'type' => 'currency',
      'len' => '26,2',
      'disable_num_format' => true,
      'comment' => 'discount amount',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'rollupCurrencySum($products, "deal_calc")',
      'calculated' => true,
      'enforced' => true,
    ),
    'deal_tot_usdollar' => 
    array (
      'name' => 'deal_tot_usdollar',
      'vname' => 'LBL_DEAL_TOT',
      'type' => 'currency',
      'len' => '26,2',
      'disable_num_format' => true,
      'comment' => 'discount amount',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'new_sub' => 
    array (
      'name' => 'new_sub',
      'vname' => 'LBL_NEW_SUB',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Group total minus discount and tax and shipping',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'currencySubtract($subtotal, $deal_tot)',
      'enforced' => true,
      'calculated' => true,
    ),
    'new_sub_usdollar' => 
    array (
      'name' => 'new_sub_usdollar',
      'vname' => 'LBL_NEW_SUB',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Group total minus discount and tax and shipping',
      'studio' => 
      array (
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
      'calculated' => true,
      'enforced' => true,
    ),
    'subtotal' => 
    array (
      'name' => 'subtotal',
      'vname' => 'LBL_SUBTOTAL',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Group total minus tax and shipping',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => 'rollupCurrencySum($products, "subtotal")',
      'calculated' => true,
      'enforced' => true,
    ),
    'shipping' => 
    array (
      'name' => 'shipping',
      'vname' => 'LBL_SHIPPING',
      'type' => 'currency',
      'len' => '26,6',
      'disable_num_format' => true,
      'comment' => 'Shipping charge for group',
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'type' => 'currency_id',
      'dbType' => 'id',
      'required' => false,
      'reportable' => false,
      'default' => '-99',
      'comment' => 'Currency used',
      'function' => 'getCurrencies',
      'function_bean' => 'Currencies',
    ),
    'base_rate' => 
    array (
      'name' => 'base_rate',
      'vname' => 'LBL_CURRENCY_RATE',
      'type' => 'decimal',
      'len' => '26,6',
      'studio' => false,
    ),
    'taxrate' => 
    array (
      'name' => 'taxrate',
      'type' => 'link',
      'relationship' => 'product_bundle_taxrate',
      'module' => 'TaxRates',
      'bean_name' => 'TaxRate',
      'source' => 'non-db',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'product_bundle_product',
      'module' => 'Products',
      'bean_name' => 'Product',
      'source' => 'non-db',
      'rel_fields' => 
      array (
        'product_index' => 
        array (
          'type' => 'integer',
        ),
      ),
      'vname' => 'LBL_PRODUCTS',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'product_bundle_quote',
      'module' => 'Quotes',
      'bean_name' => 'Quote',
      'source' => 'non-db',
      'rel_fields' => 
      array (
        'bundle_index' => 
        array (
          'type' => 'integer',
        ),
      ),
      'relationship_fields' => 
      array (
        'bundle_index' => 'bundle_index',
      ),
      'vname' => 'LBL_QUOTES',
    ),
    'product_bundle_notes' => 
    array (
      'name' => 'product_bundle_notes',
      'type' => 'link',
      'relationship' => 'product_bundle_note',
      'module' => 'ProductBundleNotes',
      'bean_name' => 'ProductBundleNote',
      'source' => 'non-db',
      'rel_fields' => 
      array (
        'note_index' => 
        array (
          'type' => 'integer',
        ),
      ),
      'vname' => 'LBL_NOTES',
    ),
    'position' => 
    array (
      'massupdate' => false,
      'name' => 'position',
      'type' => 'integer',
      'studio' => false,
      'source' => 'non-db',
      'vname' => 'LBL_QUOTE_BUNDLE_POSITION',
      'importable' => false,
      'link' => 'quotes',
      'rname_link' => 'bundle_index',
    ),
  ),
  'indices' => 
  array (
    'team_set_product_bundles' => 
    array (
      'name' => 'idx_product_bundles_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'procuct_bundlespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_products_bundles',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'productbundles_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'ProductBundles',
      'rhs_table' => 'product_bundles',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'productbundles_teams' => 
    array (
      'lhs_module' => 'ProductBundles',
      'lhs_table' => 'product_bundles',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'productbundles_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'ProductBundles',
      'rhs_table' => 'product_bundles',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'product_bundle_taxrate' => 
    array (
      'rhs_module' => 'ProductBundles',
      'rhs_table' => 'product_bundles',
      'rhs_key' => 'taxrate_id',
      'lhs_module' => 'TaxRates',
      'lhs_table' => 'taxrates',
      'lhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'acls' => 
  array (
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
  ),
  'related_calc_fields' => 
  array (
    0 => 'quotes',
  ),
  'custom_fields' => false,
);