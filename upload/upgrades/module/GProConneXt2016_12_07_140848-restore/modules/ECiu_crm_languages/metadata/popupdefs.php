<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_ddc',
    'varName' => 'ECiu_ddc',
    'orderBy' => 'eciu_ddc.name',
    'whereClauses' => array (
  'name' => 'eciu_tracks.name',
  'language_id' => 'eciu_languages.language_id',
  'iso_639_2' => 'eciu_languages.iso_639_2',
),
    'searchInputs' => array (
  9 => 'name',
  11 => 'language_id',
  12 => 'iso_639_2',
),
    'searchdefs' => array (
  'language_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LANGUAGE_ID',
    'width' => '10%',
    'name' => 'language_id',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'iso_639_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ISO_639_2',
    'width' => '10%',
    'name' => 'iso_639_2',
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
  'ISO_639_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ISO_639_2',
    'width' => '10%',
    'default' => true,
  ),
),
);
