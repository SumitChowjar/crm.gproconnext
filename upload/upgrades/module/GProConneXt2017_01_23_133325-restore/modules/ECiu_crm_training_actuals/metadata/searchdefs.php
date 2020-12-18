<?php
$module_name = 'ECiu_crm_training_actuals';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_from' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_FROM',
        'width' => '10%',
        'default' => true,
        'name' => 'date_from',
      ),
      'date_to' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'date_to',
      ),
      'hours' => 
      array (
        'type' => 'int',
        'label' => 'LBL_HOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'hours',
      ),
      'number_of_pastors' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMBER_OF_PASTORS',
        'width' => '10%',
        'default' => true,
        'name' => 'number_of_pastors',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_from' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_FROM',
        'width' => '10%',
        'default' => true,
        'name' => 'date_from',
      ),
      'date_to' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'date_to',
      ),
      'hours' => 
      array (
        'type' => 'int',
        'label' => 'LBL_HOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'hours',
      ),
      'number_of_pastors' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMBER_OF_PASTORS',
        'width' => '10%',
        'default' => true,
        'name' => 'number_of_pastors',
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
