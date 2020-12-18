<?php
$module_name='ECiu_crm_calendar_periods';
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
      'popup_module' => 'ECiu_crm_calendar_periods',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'base_weeknum' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_BASE_WEEKNUM',
      'width' => '10%',
      'default' => true,
    ),
    'base_month' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_BASE_MONTH',
      'width' => '10%',
      'default' => true,
    ),
    'base_quarter' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_BASE_QUARTER',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ECiu_crm_calendar_periods',
      'width' => '5%',
      'default' => true,
    ),
  ),
);