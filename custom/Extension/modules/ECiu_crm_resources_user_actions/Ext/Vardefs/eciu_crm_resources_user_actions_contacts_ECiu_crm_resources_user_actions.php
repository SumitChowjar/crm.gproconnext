<?php
// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_resources_user_actions_contacts"] = array (
  'name' => 'eciu_crm_resources_user_actions_contacts',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_user_actions_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
);
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_resources_user_actions_contacts_name"] = array (
  'name' => 'eciu_crm_resources_user_actions_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
  'link' => 'eciu_crm_resources_user_actions_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_resources_user_actions"]["fields"]["eciu_crm_resources_user_actions_contactscontacts_ida"] = array (
  'name' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_user_actions_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_ECIU_CRM_RESOURCES_USER_ACTIONS_TITLE',
);
