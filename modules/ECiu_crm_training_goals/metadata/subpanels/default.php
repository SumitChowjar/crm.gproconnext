<?php
$module_name='ECiu_crm_training_goals';
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
      'popup_module' => 'ECiu_crm_training_goals',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'type' => 'name',
      'link' => true,
      'width' => '45%',
      'vname' => 'LBL_NAME',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => NULL,
      'target_record_key' => NULL,
    ),
    'y2016' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_Y2016',
      'width' => '10%',
      'default' => true,
    ),
    'y2017' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_Y2017',
      'width' => '10%',
      'default' => true,
    ),
    'y2018' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_Y2018',
      'width' => '10%',
      'default' => true,
    ),
    'y2019' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_Y2019',
      'width' => '10%',
      'default' => true,
    ),
    'y2020' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_Y2020',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ECiu_crm_training_goals',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ECiu_crm_training_goals',
      'width' => '5%',
      'default' => true,
    ),
  ),
);