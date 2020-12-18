<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_language_list"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_language_list',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_language_list',
  'source' => 'non-db',
  'module' => 'ECiu_crm_language_list',
  'bean_name' => 'ECiu_crm_language_list',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_LANGUAGE_LIST_FROM_ECIU_CRM_LANGUAGE_LIST_TITLE',
  'id_name' => 'eciu_crm_te07cge_list_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_language_list_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_language_list_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_LANGUAGE_LIST_FROM_ECIU_CRM_LANGUAGE_LIST_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_te07cge_list_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_language_list',
  'table' => 'eciu_crm_language_list',
  'module' => 'ECiu_crm_language_list',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_te07cge_list_ida"] = array (
  'name' => 'eciu_crm_te07cge_list_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_language_list',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_LANGUAGE_LIST_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
