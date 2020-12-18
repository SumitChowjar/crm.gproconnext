<?php
// created: 2018-06-06 12:18:31
$dictionary["leads_eciu_crm_training_actuals_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'leads_eciu_crm_training_actuals_1' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_crm_training_actuals',
      'rhs_table' => 'eciu_crm_training_actuals',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_eciu_crm_training_actuals_1_c',
      'join_key_lhs' => 'leads_eciu_crm_training_actuals_1leads_ida',
      'join_key_rhs' => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
    ),
  ),
  'table' => 'leads_eciu_crm_training_actuals_1_c',
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
      'name' => 'leads_eciu_crm_training_actuals_1leads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_eciu_crm_training_actuals_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_eciu_crm_training_actuals_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_eciu_crm_training_actuals_1leads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'leads_eciu_crm_training_actuals_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
      ),
    ),
  ),
);