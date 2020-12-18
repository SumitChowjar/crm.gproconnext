<?php
$module_name = 'tra_Recieved';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'country_name' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'country_name',
      ),
      'attending_training_number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_ATTENDING_TRAINING_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'attending_training_number',
      ),
      'from_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FROM_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'from_date',
      ),
      'to_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TO_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'to_date',
      ),
      'contacts' => 
      array (
        'type' => 'multienum',
        'label' => 'Who Administered The Training',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
