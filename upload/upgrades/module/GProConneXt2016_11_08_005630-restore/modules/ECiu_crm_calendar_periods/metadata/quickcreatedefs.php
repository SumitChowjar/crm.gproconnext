<?php
$module_name = 'ECiu_crm_calendar_periods';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
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
            'name' => 'base_year',
            'label' => 'LBL_BASE_YEAR',
          ),
        ),
      ),
    ),
  ),
);
?>
