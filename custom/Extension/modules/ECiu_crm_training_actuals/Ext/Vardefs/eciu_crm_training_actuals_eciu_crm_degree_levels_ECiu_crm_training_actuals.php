<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_degree_levels"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'source' => 'non-db',
  'module' => 'ECiu_crm_degree_levels',
  'bean_name' => 'ECiu_crm_degree_levels',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
  'id_name' => 'eciu_crm_t341a_levels_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_degree_levels_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_t341a_levels_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'table' => 'eciu_crm_degree_levels',
  'module' => 'ECiu_crm_degree_levels',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_t341a_levels_ida"] = array (
  'name' => 'eciu_crm_t341a_levels_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
