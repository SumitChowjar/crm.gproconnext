<?php
$module_name = 'ECiu_crm_calendar_periods';
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
      'base_weeknum' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_WEEKNUM',
        'width' => '10%',
        'default' => true,
        'name' => 'base_weeknum',
      ),
      'base_month' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_MONTH',
        'width' => '10%',
        'default' => true,
        'name' => 'base_month',
      ),
      'base_quarter' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_QUARTER',
        'width' => '10%',
        'default' => true,
        'name' => 'base_quarter',
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
      'base_weeknum' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_WEEKNUM',
        'width' => '10%',
        'default' => true,
        'name' => 'base_weeknum',
      ),
      'base_month' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_MONTH',
        'width' => '10%',
        'default' => true,
        'name' => 'base_month',
      ),
      'base_quarter' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BASE_QUARTER',
        'width' => '10%',
        'default' => true,
        'name' => 'base_quarter',
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
