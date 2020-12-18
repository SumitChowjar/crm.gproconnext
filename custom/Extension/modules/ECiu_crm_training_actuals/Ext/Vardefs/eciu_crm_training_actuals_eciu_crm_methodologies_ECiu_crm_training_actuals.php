<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_methodologies"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_methodologies',
  'source' => 'non-db',
  'module' => 'ECiu_crm_methodologies',
  'bean_name' => 'ECiu_crm_methodologies',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_METHODOLOGIES_FROM_ECIU_CRM_METHODOLOGIES_TITLE',
  'id_name' => 'eciu_crm_td654ologies_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_methodologies_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_METHODOLOGIES_FROM_ECIU_CRM_METHODOLOGIES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_td654ologies_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_methodologies',
  'table' => 'eciu_crm_methodologies',
  'module' => 'ECiu_crm_methodologies',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_td654ologies_ida"] = array (
  'name' => 'eciu_crm_td654ologies_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_methodologies',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_METHODOLOGIES_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
