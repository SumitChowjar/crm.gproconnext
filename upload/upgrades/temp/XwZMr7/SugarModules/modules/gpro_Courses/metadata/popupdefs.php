<?php
$popupMeta = array (
    'moduleMain' => 'gpro_Courses',
    'varName' => 'gpro_Courses',
    'orderBy' => 'gpro_courses.name',
    'whereClauses' => array (
  'name' => 'gpro_courses.name',
  'access_level' => 'gpro_courses.access_level',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'access_level',
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
  'access_level' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ACCESS_LEVEL',
    'width' => '10%',
    'name' => 'access_level',
  ),
),
    'listviewdefs' => array (
  'IMAGE' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
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
  'HOURS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_HOURS',
    'width' => '10%',
    'default' => true,
  ),
  'ACCESS_LEVEL' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ACCESS_LEVEL',
    'width' => '10%',
    'default' => true,
  ),
),
);
