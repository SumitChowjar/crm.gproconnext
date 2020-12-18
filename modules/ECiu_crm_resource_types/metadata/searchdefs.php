<?php
$module_name = 'ECiu_crm_resource_types';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'category' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'category',
      ),
      'sub_category' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUB_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'sub_category',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'category' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'category',
      ),
      'sub_category' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUB_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'sub_category',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
