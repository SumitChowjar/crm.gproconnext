<?php
$module_name = 'ECiu_crm_resource_types';
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
          1 => 
          array (
            'name' => 'public_upload',
            'label' => 'LBL_PUBLIC_UPLOAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'sub_category',
            'label' => 'LBL_SUB_CATEGORY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'required_information',
            'studio' => 'visible',
            'label' => 'LBL_REQUIRED_INFORMATION',
          ),
          1 => 
          array (
            'name' => 'optional_information',
            'studio' => 'visible',
            'label' => 'LBL_OPTIONAL_INFORMATION',
          ),
        ),
      ),
    ),
  ),
);
?>
