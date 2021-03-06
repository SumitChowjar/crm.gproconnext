<?php
$module_name='ECiu_crm_training_actuals';
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
      'popup_module' => 'ECiu_crm_training_actuals',
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
    'date_from' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_DATE_FROM',
      'width' => '10%',
      'default' => true,
    ),
    'date_to' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_DATE_TO',
      'width' => '10%',
      'default' => true,
    ),
    'number_of_pastors' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_NUMBER_OF_PASTORS',
      'width' => '10%',
      'default' => true,
    ),
    'hours' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_HOURS',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ECiu_crm_training_actuals',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ECiu_crm_training_actuals',
      'width' => '5%',
      'default' => true,
    ),
  ),
);