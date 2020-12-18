<?php
$module_name = 'ECiu_crm_calendar_periods';
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
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'base_weeknum',
            'label' => 'LBL_BASE_WEEKNUM',
          ),
          1 => 
          array (
            'name' => 'base_month',
            'label' => 'LBL_BASE_MONTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'base_quarter',
            'label' => 'LBL_BASE_QUARTER',
          ),
          1 => 
          array (
            'name' => 'base_semester',
            'label' => 'LBL_BASE_SEMESTER',
          ),
        ),
      ),
    ),
  ),
);
?>
