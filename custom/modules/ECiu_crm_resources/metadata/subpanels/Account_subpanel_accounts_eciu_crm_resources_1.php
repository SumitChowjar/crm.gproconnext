<?php
// created: 2018-01-15 12:41:51
$subpanel_layout['list_fields'] = array (
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
  'submission_source_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SUBMISSION_SOURCE',
    'width' => '10%',
  ),
  'status_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
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