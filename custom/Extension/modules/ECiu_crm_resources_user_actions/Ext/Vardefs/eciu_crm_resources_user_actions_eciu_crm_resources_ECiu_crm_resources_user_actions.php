<?php
// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_resources_user_actions_eciu_crm_resources"] = array (
  'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'source' => 'non-db',
  'module' => 'ECiu_crm_resources',
  'bean_name' => 'ECiu_crm_resources',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
  'id_name' => 'eciu_crm_rf9fdsources_ida',
);
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_resources_user_actions_eciu_crm_resources_name"] = array (
  'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_rf9fdsources_ida',
  'link' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'table' => 'eciu_crm_resources',
  'module' => 'ECiu_crm_resources',
  'rname' => 'name',
);
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_rf9fdsources_ida"] = array (
  'name' => 'eciu_crm_rf9fdsources_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_USER_ACTIONS_TITLE',
);
