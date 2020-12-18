<?php
$module_name = 'ECiu_crm_training_actuals';
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
            'name' => 'number_of_pastors',
            'label' => 'LBL_NUMBER_OF_PASTORS',
          ),
          1 => 
          array (
            'name' => 'date_from',
            'label' => 'LBL_DATE_FROM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hours',
            'label' => 'LBL_HOURS',
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
            'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_name',
          ),
          1 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_countries_name',
          ),
          1 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_language_list_name',
            'label' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_LANGUAGE_LIST_FROM_ECIU_CRM_LANGUAGE_LIST_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_tracks_name',
          ),
          1 => 
          array (
            'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'providers',
            'studio' => 'visible',
            'label' => 'LBL_PROVIDERS',
          ),
          1 => 
          array (
            'name' => 'trainers',
            'studio' => 'visible',
            'label' => 'LBL_TRAINERS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'resource_provided',
            'studio' => 'visible',
            'label' => 'LBL_RESOURCE_PROVIDED',
          ),
          1 => 
          array (
            'name' => 'eciu_crm_training_actuals_contacts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
