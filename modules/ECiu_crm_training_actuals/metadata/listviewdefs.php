<?php
$module_name = 'ECiu_crm_training_actuals';
$listViewDefs [$module_name] = 
array (
  'RECOURD_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RECOURD_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NUMBER_OF_PASTORS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMBER_OF_PASTORS',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_FROM' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_FROM',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_TO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_TO',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
