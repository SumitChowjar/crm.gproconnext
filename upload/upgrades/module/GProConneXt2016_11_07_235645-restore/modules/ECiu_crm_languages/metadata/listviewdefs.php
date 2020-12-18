<?php
$module_name = 'ECiu_crm_languages';
$listViewDefs [$module_name] = 
array (
  'LANGUAGE_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LANGUAGE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '80%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ISO_639_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ISO_639_2',
    'width' => '10%',
    'default' => true,
  ),
);
?>
