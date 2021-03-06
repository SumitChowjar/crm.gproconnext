<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_ddc',
    'varName' => 'ECiu_ddc',
    'orderBy' => 'eciu_ddc.name',
    'whereClauses' => array (
  'track_id' => 'eciu_tracks.track_id',
  'name' => 'eciu_tracks.name',
),
    'searchInputs' => array (
  8 => 'track_id',
  9 => 'name',
),
    'searchdefs' => array (
  'track_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TRACK_ID',
    'width' => '10%',
    'name' => 'track_id',
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
  'TRACK_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TRACK_ID',
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
