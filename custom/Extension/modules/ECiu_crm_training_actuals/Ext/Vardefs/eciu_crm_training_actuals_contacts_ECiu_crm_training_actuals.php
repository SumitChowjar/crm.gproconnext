<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_contacts"] = array (
  'name' => 'eciu_crm_training_actuals_contacts',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'eciu_crm_training_actuals_contactscontacts_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_contacts_name"] = array (
  'name' => 'eciu_crm_training_actuals_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_training_actuals_contactscontacts_ida',
  'link' => 'eciu_crm_training_actuals_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_contactscontacts_ida"] = array (
  'name' => 'eciu_crm_training_actuals_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_CONTACTS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
