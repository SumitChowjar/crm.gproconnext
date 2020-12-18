<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_health_indicators"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_health_indicators',
  'source' => 'non-db',
  'module' => 'ECiu_crm_health_indicators',
  'bean_name' => 'ECiu_crm_health_indicators',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_HEALTH_INDICATORS_FROM_ECIU_CRM_HEALTH_INDICATORS_TITLE',
  'id_name' => 'eciu_crm_t0682icators_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_health_indicators_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_HEALTH_INDICATORS_FROM_ECIU_CRM_HEALTH_INDICATORS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_t0682icators_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_health_indicators',
  'table' => 'eciu_crm_health_indicators',
  'module' => 'ECiu_crm_health_indicators',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_t0682icators_ida"] = array (
  'name' => 'eciu_crm_t0682icators_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_health_indicators',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_HEALTH_INDICATORS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
