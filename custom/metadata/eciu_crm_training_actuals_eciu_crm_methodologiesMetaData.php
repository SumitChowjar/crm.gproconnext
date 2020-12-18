<?php
// created: 2017-01-23 13:33:24
$dictionary["eciu_crm_training_actuals_eciu_crm_methodologies"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'eciu_crm_training_actuals_eciu_crm_methodologies' => 
    array (
      'lhs_module' => 'ECiu_crm_methodologies',
      'lhs_table' => 'eciu_crm_methodologies',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_crm_training_actuals',
      'rhs_table' => 'eciu_crm_training_actuals',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eciu_crm_training_actuals_eciu_crm_methodologies_c',
      'join_key_lhs' => 'eciu_crm_td654ologies_ida',
      'join_key_rhs' => 'eciu_crm_t09b8actuals_idb',
    ),
  ),
  'table' => 'eciu_crm_training_actuals_eciu_crm_methodologies_c',
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
      'name' => 'eciu_crm_td654ologies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eciu_crm_t09b8actuals_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eciu_crm_training_actuals_eciu_crm_methodologiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'eciu_crm_td654ologies_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eciu_crm_t09b8actuals_idb',
      ),
    ),
  ),
);