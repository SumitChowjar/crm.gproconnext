<?php
// created: 2018-05-07 14:03:14
$subpanel_layout['list_fields'] = array (
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
  'hours_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_HOURS',
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
);