<?php
// created: 2017-11-15 12:24:34
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'default' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'number_of_pastors' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NUMBER_OF_PASTORS',
    'width' => '10%',
    'default' => true,
  ),
  'language_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_LANGUAGE',
    'width' => '10%',
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
  'hours' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_HOURS',
    'width' => '10%',
    'default' => true,
  ),
  'recourd_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_RECOURD_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'eciu_crm_training_actuals_eciu_crm_degree_levels_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
    'id' => 'ECIU_CRM_T341A_LEVELS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ECiu_crm_degree_levels',
    'target_record_key' => 'eciu_crm_t341a_levels_ida',
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
);