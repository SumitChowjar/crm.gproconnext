<?php
$module_name = 'igwt_sgt';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'sgt_id' => 
      array (
        'type' => 'int',
        'label' => 'LBL_SGT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_id',
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
      'sgt_id' => 
      array (
        'type' => 'int',
        'label' => 'LBL_SGT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_id',
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
