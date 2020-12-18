<?php
// created: 2018-03-12 06:40:26
$dictionary["ECiu_crm_training_actuals"]["fields"]["accounts_eciu_crm_training_actuals_1"] = array (
  'name' => 'accounts_eciu_crm_training_actuals_1',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_training_actuals_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["accounts_eciu_crm_training_actuals_1_name"] = array (
  'name' => 'accounts_eciu_crm_training_actuals_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
  'link' => 'accounts_eciu_crm_training_actuals_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["accounts_eciu_crm_training_actuals_1accounts_ida"] = array (
  'name' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_training_actuals_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
