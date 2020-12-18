<?php
// created: 2018-01-22 10:14:22
$dictionary["gpro_courses_eciu_crm_resources"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gpro_courses_eciu_crm_resources' => 
    array (
      'lhs_module' => 'gpro_Courses',
      'lhs_table' => 'gpro_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'ECiu_crm_resources',
      'rhs_table' => 'eciu_crm_resources',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gpro_courses_eciu_crm_resources_c',
      'join_key_lhs' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
      'join_key_rhs' => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
    ),
  ),
  'table' => 'gpro_courses_eciu_crm_resources_c',
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
      'name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gpro_courses_eciu_crm_resourcesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gpro_courses_eciu_crm_resources_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gpro_courses_eciu_crm_resources_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
      ),
    ),
  ),
);