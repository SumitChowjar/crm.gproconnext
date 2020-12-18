<?php
// created: 2017-01-23 13:33:23
$dictionary["eciu_crm_resources_eciu_crm_denominations"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'eciu_crm_resources_eciu_crm_denominations' => 
    array (
      'lhs_module' => 'ECiu_crm_resources',
      'lhs_table' => 'eciu_crm_resources',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_crm_denominations',
      'rhs_table' => 'eciu_crm_denominations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eciu_crm_resources_eciu_crm_denominations_c',
      'join_key_lhs' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
      'join_key_rhs' => 'eciu_crm_r19cfnations_idb',
    ),
  ),
  'table' => 'eciu_crm_resources_eciu_crm_denominations_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eciu_crm_r19cfnations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eciu_crm_resources_eciu_crm_denominationsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eciu_crm_resources_eciu_crm_denominations_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
        1 => 'eciu_crm_r19cfnations_idb',
      ),
    ),
  ),
);