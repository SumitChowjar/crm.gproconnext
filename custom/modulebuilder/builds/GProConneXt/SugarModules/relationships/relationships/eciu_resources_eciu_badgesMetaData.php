<?php
// created: 2016-10-26 08:14:12
$dictionary["eciu_resources_eciu_badges"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'eciu_resources_eciu_badges' => 
    array (
      'lhs_module' => 'ECiu_resources',
      'lhs_table' => 'eciu_resources',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_badges',
      'rhs_table' => 'eciu_badges',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'eciu_resources_eciu_badges_c',
      'join_key_lhs' => 'eciu_resources_eciu_badgeseciu_resources_ida',
      'join_key_rhs' => 'eciu_resources_eciu_badgeseciu_badges_idb',
    ),
  ),
  'table' => 'eciu_resources_eciu_badges_c',
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
      'name' => 'eciu_resources_eciu_badgeseciu_resources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'eciu_resources_eciu_badgeseciu_badges_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'eciu_resources_eciu_badgesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'eciu_resources_eciu_badges_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'eciu_resources_eciu_badgeseciu_resources_ida',
        1 => 'eciu_resources_eciu_badgeseciu_badges_idb',
      ),
    ),
  ),
);