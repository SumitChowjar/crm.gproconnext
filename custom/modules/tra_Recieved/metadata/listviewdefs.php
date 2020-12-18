<?php
$module_name = 'tra_Recieved';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ATTENDING_TRAINING_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ATTENDING_TRAINING_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRY_NAME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'LANGUAGE_NAME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LANGUAGE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'FROM_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FROM_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'TO_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_TO_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'DEGREE_LEVELS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DEGREE_LEVELS',
    'id' => 'ECIU_CRM_DEGREE_LEVELS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
?>
