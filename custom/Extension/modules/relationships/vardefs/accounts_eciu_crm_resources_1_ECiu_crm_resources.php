<?php
// created: 2018-01-15 12:21:47
$dictionary["ECiu_crm_resources"]["fields"]["accounts_eciu_crm_resources_1"] = array (
  'name' => 'accounts_eciu_crm_resources_1',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_resources_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_RESOURCES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_eciu_crm_resources_1accounts_ida',
);
$dictionary["ECiu_crm_resources"]["fields"]["accounts_eciu_crm_resources_1_name"] = array (
  'name' => 'accounts_eciu_crm_resources_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_RESOURCES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_eciu_crm_resources_1accounts_ida',
  'link' => 'accounts_eciu_crm_resources_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ECiu_crm_resources"]["fields"]["accounts_eciu_crm_resources_1accounts_ida"] = array (
  'name' => 'accounts_eciu_crm_resources_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_resources_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_RESOURCES_1_FROM_ECIU_CRM_RESOURCES_TITLE',
);
