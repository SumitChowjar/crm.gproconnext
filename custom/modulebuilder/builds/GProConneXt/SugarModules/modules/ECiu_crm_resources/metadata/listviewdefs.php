<?php
$module_name = 'ECiu_crm_resources';
$listViewDefs [$module_name] = 
array (
  'RESOURCE_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_RESOURCE_ID',
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
  'FEATURED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FEATURED',
    'width' => '10%',
  ),
  'ALLOWED_DOWNLOADS_SET' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ALLOWED_DOWNLOADS_SET',
    'width' => '10%',
  ),
  'ALLOWED_DOWNLOADS_VALUE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ALLOWED_DOWNLOADS_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'VALID_FROM_SET' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_VALID_FROM_SET',
    'width' => '10%',
  ),
  'VALID_FROM_VALUE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VALID_FROM_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'VALID_THROUGH_SET' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_VALID_THROUGH_SET',
    'width' => '10%',
  ),
  'VALID_THROUGH_VALUE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VALID_THROUGH_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'EARNED_POINTS_SET' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_EARNED_POINTS_SET',
    'width' => '10%',
  ),
  'EARNED_POINTS_VALUE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_EARNED_POINTS_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'GOALS_ENTERED_SET' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_GOALS_ENTERED_SET',
    'width' => '10%',
  ),
);
?>
