<?php
$module_name = 'ECiu_crm_badges';
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
            'name' => 'how_to_obtain',
            'studio' => 'visible',
            'label' => 'LBL_HOW_TO_OBTAIN',
          ),
          1 => 
          array (
            'name' => 'logo_address',
            'studio' => 'visible',
            'label' => 'LBL_LOGO_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'badge_id',
            'label' => 'LBL_BADGE_ID',
          ),
          1 => 
          array (
            'name' => 'table_ref',
            'label' => 'LBL_TABLE_REF',
          ),
        ),
      ),
    ),
  ),
);
?>
