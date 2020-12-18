<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_resources',
    'varName' => 'ECiu_resources',
    'orderBy' => 'eciu_resources.name',
    'whereClauses' => array (
  'name' => 'eciu_resources.name',
  'resource_id' => 'eciu_resources.resource_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'resource_id',
),
    'searchdefs' => array (
  'resource_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_RESOURCE_ID',
    'width' => '10%',
    'name' => 'resource_id',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'RESOURCE_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_RESOURCE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
