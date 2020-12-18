<?php
$module_name = 'ECiu_crm_training_goals';
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'y2016',
            'label' => 'LBL_Y2016',
          ),
          1 => 
          array (
            'name' => 'y2017',
            'label' => 'LBL_Y2017',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'y2018',
            'label' => 'LBL_Y2018',
          ),
          1 => 
          array (
            'name' => 'y2019',
            'label' => 'LBL_Y2019',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'y2020',
            'label' => 'LBL_Y2020',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
