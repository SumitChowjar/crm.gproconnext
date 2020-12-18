<?php
$module_name = 'ECiu_registered_languages';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'iso_639_2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ISO_639_2',
        'width' => '10%',
        'default' => true,
        'name' => 'iso_639_2',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'iso_639_2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ISO_639_2',
        'width' => '10%',
        'default' => true,
        'name' => 'iso_639_2',
      ),
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_NAME',
        'name' => 'name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
