<?php
// created: 2018-07-30 11:03:30
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'attending_training_number' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ATTENDING_TRAINING_NUMBER',
    'width' => '15%',
    'default' => true,
  ),
  'language_name' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_LANGUAGE_NAME',
    'width' => '15%',
    'default' => true,
  ),
  'from_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FROM_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'to_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_TO_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'resource_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_RESOURCE_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'degree_levels' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_DEGREE_LEVELS',
    'id' => 'ECIU_CRM_DEGREE_LEVELS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ECiu_crm_degree_levels',
    'target_record_key' => 'eciu_crm_degree_levels_id_c',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'tra_Recieved',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'tra_Recieved',
    'width' => '5%',
    'default' => true,
  ),
);