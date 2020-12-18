<?php
// created: 2016-10-26 08:14:12
$dictionary["eciu_resources_eciu_denominations"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'eciu_resources_eciu_denominations' => 
    array (
      'lhs_module' => 'ECiu_resources',
      'lhs_table' => 'eciu_resources',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_denominations',
      'rhs_table' => 'eciu_denominations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eciu_resources_eciu_denominations_c',
      'join_key_lhs' => 'eciu_resources_eciu_denominationseciu_resources_ida',
      'join_key_rhs' => 'eciu_resources_eciu_denominationseciu_denominations_idb',
    ),
  ),
  'table' => 'eciu_resources_eciu_denominations_c',
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
      'name' => 'eciu_resources_eciu_denominationseciu_resources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eciu_resources_eciu_denominationseciu_denominations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eciu_resources_eciu_denominationsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eciu_resources_eciu_denominations_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eciu_resources_eciu_denominationseciu_resources_ida',
        1 => 'eciu_resources_eciu_denominationseciu_denominations_idb',
      ),
    ),
  ),
);