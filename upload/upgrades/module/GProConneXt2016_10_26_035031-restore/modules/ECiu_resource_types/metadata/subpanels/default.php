<?php
$module_name='ECiu_resource_types';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ECiu_resource_types',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'category' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CATEGORY',
      'width' => '10%',
      'default' => true,
    ),
    'sub_category' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SUB_CATEGORY',
      'width' => '10%',
      'default' => true,
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
  ),
);