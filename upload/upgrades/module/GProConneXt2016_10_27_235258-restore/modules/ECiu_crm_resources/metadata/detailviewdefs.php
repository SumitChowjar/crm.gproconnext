<?php
$module_name = 'ECiu_crm_resources';
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'resource_id',
            'label' => 'LBL_RESOURCE_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'url',
            'studio' => 'visible',
            'label' => 'LBL_URL',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          1 => 
          array (
            'name' => 'file_name',
            'label' => 'LBL_FILE_NAME',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_incentive',
            'label' => 'LBL_IS_INCENTIVE',
          ),
          1 => 
          array (
            'name' => 'goals_entered_set',
            'label' => 'LBL_GOALS_ENTERED_SET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valid_from_set',
            'label' => 'LBL_VALID_FROM_SET',
          ),
          1 => 
          array (
            'name' => 'valid_from_value',
            'label' => 'LBL_VALID_FROM_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'valid_through_set',
            'label' => 'LBL_VALID_THROUGH_SET',
          ),
          1 => 
          array (
            'name' => 'valid_through_value',
            'label' => 'LBL_VALID_THROUGH_VALUE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'allowed_downloads_set',
            'label' => 'LBL_ALLOWED_DOWNLOADS_SET',
          ),
          1 => 
          array (
            'name' => 'allowed_downloads_value',
            'label' => 'LBL_ALLOWED_DOWNLOADS_VALUE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'earned_points_set',
            'label' => 'LBL_EARNED_POINTS_SET',
          ),
          1 => 
          array (
            'name' => 'earned_points_value',
            'label' => 'LBL_EARNED_POINTS_VALUE',
          ),
        ),
      ),
    ),
  ),
);
?>
