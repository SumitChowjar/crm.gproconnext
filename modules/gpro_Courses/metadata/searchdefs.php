<?php
$module_name = 'gpro_Courses';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'access_level' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ACCESS_LEVEL',
        'width' => '10%',
        'default' => true,
        'name' => 'access_level',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'access_level' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ACCESS_LEVEL',
        'width' => '10%',
        'default' => true,
        'name' => 'access_level',
      ),
      'hours' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_HOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'hours',
      ),
      'key1' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_KEY1',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'key1',
      ),
      'key2' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_KEY2',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'key2',
      ),
      'key3' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_KEY3',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'key3',
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
