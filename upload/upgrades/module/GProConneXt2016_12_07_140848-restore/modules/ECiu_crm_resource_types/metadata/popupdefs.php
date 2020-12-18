<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_resource_types',
    'varName' => 'ECiu_resource_types',
    'orderBy' => 'eciu_resource_types.name',
    'whereClauses' => array (
  'name' => 'eciu_resource_types.name',
  'category' => 'eciu_resource_types.category',
  'sub_category' => 'eciu_resource_types.sub_category',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'category',
  5 => 'sub_category',
),
    'searchdefs' => array (
  'category' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'name' => 'category',
  ),
  'sub_category' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUB_CATEGORY',
    'width' => '10%',
    'name' => 'sub_category',
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
  'CATEGORY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'SUB_CATEGORY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUB_CATEGORY',
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
