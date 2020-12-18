<?php
$module_name = 'gpro_Courses';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'hours',
            'label' => 'LBL_HOURS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'access_level',
            'studio' => 'visible',
            'label' => 'LBL_ACCESS_LEVEL',
          ),
          1 => 
          array (
            'name' => 'image',
            'studio' => 'visible',
            'label' => 'LBL_IMAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'key1',
            'studio' => 'visible',
            'label' => 'LBL_KEY1',
          ),
          1 => 
          array (
            'name' => 'key2',
            'studio' => 'visible',
            'label' => 'LBL_KEY2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'key3',
            'studio' => 'visible',
            'label' => 'LBL_KEY3',
          ),
          1 => 
          array (
            'name' => 'sequence_c',
            'label' => 'LBL_SEQUENCE',
          ),
        ),
      ),
    ),
  ),
);
?>
