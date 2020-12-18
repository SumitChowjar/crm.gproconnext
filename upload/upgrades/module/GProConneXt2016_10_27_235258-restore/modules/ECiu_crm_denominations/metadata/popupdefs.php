<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_ddc',
    'varName' => 'ECiu_ddc',
    'orderBy' => 'eciu_ddc.name',
    'whereClauses' => array (
  'name' => 'eciu_tracks.name',
  'denomination_id' => 'eciu_denominations.denomination_id',
),
    'searchInputs' => array (
  9 => 'name',
  10 => 'denomination_id',
),
    'searchdefs' => array (
  'denomination_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DENOMINATION_ID',
    'width' => '10%',
    'name' => 'denomination_id',
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
  'DENOMINATION_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DENOMINATION_ID',
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
    'name' => 'name',
  ),
),
);
