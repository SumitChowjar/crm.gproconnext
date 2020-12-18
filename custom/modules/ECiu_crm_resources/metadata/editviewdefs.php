<?php
$module_name = 'ECiu_crm_resources';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
            'name' => 'file_name',
            'label' => 'LBL_FILE_NAME',
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
          0 => 
          array (
            'name' => 'featured',
            'label' => 'LBL_FEATURED',
          ),
          1 => 
          array (
            'name' => 'category',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'language_c',
            'studio' => 'visible',
            'label' => 'LBL_LANGUAGE',
          ),
          1 => 
          array (
            'name' => 'image_c',
            'studio' => 'visible',
            'label' => 'LBL_IMAGE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'hours_c',
            'label' => 'LBL_HOURS',
          ),
          1 => 
          array (
            'name' => 'gpro_courses_eciu_crm_resources_name',
            'label' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'suggested_by_c',
            'studio' => 'visible',
            'label' => 'LBL_SUGGESTED_BY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'custom_message_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOM_MESSAGE',
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
            'name' => 'allowed_downloads_set',
            'label' => 'LBL_ALLOWED_DOWNLOADS_SET',
          ),
          1 => 
          array (
            'name' => 'allowed_downloads_value',
            'label' => 'LBL_ALLOWED_DOWNLOADS_VALUE',
          ),
        ),
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'access_level_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCESS_LEVEL',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contacts_eciu_crm_resources_1_name',
          ),
          1 => 
          array (
            'name' => 'accounts_eciu_crm_resources_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
