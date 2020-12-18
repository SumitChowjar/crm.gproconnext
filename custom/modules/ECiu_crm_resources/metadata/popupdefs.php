<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_resources',
    'varName' => 'ECiu_resources',
    'orderBy' => 'eciu_resources.name',
    'whereClauses' => array (
  'name' => 'eciu_resources.name',
  'url' => 'eciu_crm_resources.url',
  'access_level_c' => 'eciu_crm_resources_cstm.access_level_c',
  'status_c' => 'eciu_crm_resources_cstm.status_c',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'url',
  6 => 'access_level_c',
  7 => 'status_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'url' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_URL',
    'sortable' => false,
    'width' => '10%',
    'name' => 'url',
  ),
  'access_level_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ACCESS_LEVEL',
    'width' => '10%',
    'name' => 'access_level_c',
  ),
  'status_c' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'URL' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_URL',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'FILE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FILE_NAME',
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
  'HOURS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HOURS',
    'width' => '10%',
  ),
),
);
