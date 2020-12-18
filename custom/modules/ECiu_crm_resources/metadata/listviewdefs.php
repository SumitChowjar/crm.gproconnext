<?php
$module_name = 'ECiu_crm_resources';
$listViewDefs [$module_name] = 
array (
  'IMAGE_C' => 
  array (
    'type' => 'image',
    'default' => true,
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CATEGORY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'ACCESS_LEVEL_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCESS_LEVEL',
    'width' => '10%',
  ),
  'FEATURED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FEATURED',
    'width' => '10%',
  ),
  'VIEWED_TIMES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_VIEWED_TIMES',
    'width' => '10%',
    'default' => true,
  ),
  'SUBMISSION_SOURCE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SUBMISSION_SOURCE',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DOWNLOADED_TIMES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DOWNLOADED_TIMES',
    'width' => '10%',
    'default' => true,
  ),
  'ALLOWED_DOWNLOADS_VALUE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ALLOWED_DOWNLOADS_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'VALID_FROM_VALUE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VALID_FROM_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'VALID_THROUGH_VALUE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VALID_THROUGH_VALUE',
    'width' => '10%',
    'default' => true,
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
