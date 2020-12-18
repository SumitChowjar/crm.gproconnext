<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_countries"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_countries',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_countries',
  'source' => 'non-db',
  'module' => 'ECiu_crm_countries',
  'bean_name' => 'ECiu_crm_countries',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_COUNTRIES_FROM_ECIU_CRM_COUNTRIES_TITLE',
  'id_name' => 'eciu_crm_t61eauntries_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_countries_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_countries_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_COUNTRIES_FROM_ECIU_CRM_COUNTRIES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_t61eauntries_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_countries',
  'table' => 'eciu_crm_countries',
  'module' => 'ECiu_crm_countries',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_t61eauntries_ida"] = array (
  'name' => 'eciu_crm_t61eauntries_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_countries',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_COUNTRIES_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
