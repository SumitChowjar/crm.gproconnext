<?php
$module_name = 'ECiu_crm_training_actuals';
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
          0 => 
          array (
            'name' => 'number_of_pastors',
            'label' => 'LBL_NUMBER_OF_PASTORS',
          ),
          1 => 
          array (
            'name' => 'recourd_type',
            'studio' => 'visible',
            'label' => 'LBL_RECOURD_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_from',
            'label' => 'LBL_DATE_FROM',
          ),
          1 => 
          array (
            'name' => 'date_to',
            'label' => 'LBL_DATE_TO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'language_c',
            'studio' => 'visible',
            'label' => 'LBL_LANGUAGE',
          ),
          1 => 
          array (
            'name' => 'paralleltracks',
            'label' => 'Parallel Tracks',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'resources',
            'label' => 'Resource Provided',
          ),
          1 => 
          array (
            'name' => 'contacts',
            'label' => 'Other Pastoral Trainers',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'providers',
            'studio' => 'visible',
            'label' => 'LBL_PROVIDERS',
          ),
          1 => 
          array (
            'name' => 'additional_notes_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_name',
            'label' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
