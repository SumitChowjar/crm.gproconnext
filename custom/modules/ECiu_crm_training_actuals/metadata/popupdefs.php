<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_crm_training_actuals',
    'varName' => 'ECiu_crm_training_actuals',
    'orderBy' => 'eciu_crm_training_actuals.name',
    'whereClauses' => array (
  'name' => 'eciu_crm_training_actuals.name',
),
    'searchInputs' => array (
  0 => 'eciu_crm_training_actuals_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'RECOURD_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RECOURD_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'recourd_type',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'NUMBER_OF_PASTORS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMBER_OF_PASTORS',
    'width' => '10%',
    'default' => true,
    'name' => 'number_of_pastors',
  ),
  'DATE_FROM' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_FROM',
    'width' => '10%',
    'default' => true,
    'name' => 'date_from',
  ),
  'DATE_TO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_TO',
    'width' => '10%',
    'default' => true,
    'name' => 'date_to',
  ),
  'ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
    'id' => 'ECIU_CRM_T341A_LEVELS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
