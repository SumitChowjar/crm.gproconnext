<?php
// created: 2017-01-23 13:33:23
$dictionary["eciu_crm_resources_user_actions_eciu_crm_resources"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'eciu_crm_resources_user_actions_eciu_crm_resources' => 
    array (
      'lhs_module' => 'ECiu_crm_resources',
      'lhs_table' => 'eciu_crm_resources',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_crm_resources_user_actions',
      'rhs_table' => 'eciu_crm_resources_user_actions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
      'join_key_lhs' => 'eciu_crm_rf9fdsources_ida',
      'join_key_rhs' => 'eciu_crm_r82bfactions_idb',
    ),
  ),
  'table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
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
      'name' => 'eciu_crm_rf9fdsources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eciu_crm_r82bfactions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eciu_crm_resources_user_actions_eciu_crm_resourcesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'eciu_crm_rf9fdsources_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eciu_crm_r82bfactions_idb',
      ),
    ),
  ),
);