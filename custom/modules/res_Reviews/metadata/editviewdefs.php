<?php
$module_name = 'res_Reviews';
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
          0 => 
          array (
            'name' => 'star_rating_c',
            'label' => 'LBL_STAR_RATING',
          ),
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'commented_by',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTED_BY',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'eciu_crm_resources_res_reviews_1_name',
            'label' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_ECIU_CRM_RESOURCES_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
