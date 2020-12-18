<?php
$module_name='ECiu_crm_resources';
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
      'popup_module' => 'ECiu_resources',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'resource_id' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_RESOURCE_ID',
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
    'category' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_CATEGORY',
      'width' => '10%',
      'default' => true,
    ),
    'featured' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_FEATURED',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ECiu_resources',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ECiu_resources',
      'width' => '5%',
      'default' => true,
    ),
  ),
);