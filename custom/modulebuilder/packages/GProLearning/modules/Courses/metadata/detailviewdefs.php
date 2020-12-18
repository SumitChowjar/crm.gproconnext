<?php
$module_name = 'gpro_Courses';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'hours',
            'label' => 'LBL_HOURS',
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
            'name' => 'access_level',
            'studio' => 'visible',
            'label' => 'LBL_ACCESS_LEVEL',
          ),
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
