<?php
$module_name = 'ECiu_crm_ddc';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'code1',
            'label' => 'LBL_CODE1',
          ),
          1 => 
          array (
            'name' => 'name1',
            'label' => 'LBL_NAME1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'code2',
            'label' => 'LBL_CODE2',
          ),
          1 => 
          array (
            'name' => 'name2',
            'label' => 'LBL_NAME2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'code3',
            'label' => 'LBL_CODE3',
          ),
          1 => 
          array (
            'name' => 'name3',
            'label' => 'LBL_NAME3',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'code4',
            'label' => 'LBL_CODE4',
          ),
          1 => 
          array (
            'name' => 'name4',
            'label' => 'LBL_NAME4',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'key_id',
            'label' => 'LBL_KEY_ID',
          ),
          1 => 'name',
        ),
      ),
    ),
  ),
);
?>
