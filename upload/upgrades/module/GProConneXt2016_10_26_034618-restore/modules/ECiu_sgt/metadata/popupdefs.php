<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_ddc',
    'varName' => 'ECiu_ddc',
    'orderBy' => 'eciu_ddc.name',
    'whereClauses' => array (
  'name' => 'eciu_tracks.name',
  'sgt_id' => 'eciu_sgt.sgt_id',
),
    'searchInputs' => array (
  9 => 'name',
  10 => 'sgt_id',
),
    'searchdefs' => array (
  'sgt_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SGT_ID',
    'width' => '10%',
    'name' => 'sgt_id',
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
  'SGT_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SGT_ID',
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
