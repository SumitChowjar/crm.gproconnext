<?php
$module_name = 'ECiu_ddc';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'key_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_KEY_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'key_id',
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
      'code1' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE1',
        'width' => '10%',
        'default' => true,
        'name' => 'code1',
      ),
      'code2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE2',
        'width' => '10%',
        'default' => true,
        'name' => 'code2',
      ),
      'code3' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE3',
        'width' => '10%',
        'default' => true,
        'name' => 'code3',
      ),
      'name1' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NAME1',
        'width' => '10%',
        'default' => true,
        'name' => 'name1',
      ),
      'name2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NAME2',
        'width' => '10%',
        'default' => true,
        'name' => 'name2',
      ),
      'name3' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NAME3',
        'width' => '10%',
        'default' => true,
        'name' => 'name3',
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
