<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-07-18 09:17:23

 

// created: 2018-03-12 06:43:18
$dictionary["ECiu_crm_training_goals"]["fields"]["accounts_eciu_crm_training_goals_1"] = array (
  'name' => 'accounts_eciu_crm_training_goals_1',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_GOALS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_eciu_crm_training_goals_1accounts_ida',
);
$dictionary["ECiu_crm_training_goals"]["fields"]["accounts_eciu_crm_training_goals_1_name"] = array (
  'name' => 'accounts_eciu_crm_training_goals_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_GOALS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_eciu_crm_training_goals_1accounts_ida',
  'link' => 'accounts_eciu_crm_training_goals_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_goals"]["fields"]["accounts_eciu_crm_training_goals_1accounts_ida"] = array (
  'name' => 'accounts_eciu_crm_training_goals_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ECIU_CRM_TRAINING_GOALS_1_FROM_ECIU_CRM_TRAINING_GOALS_TITLE',
);


// created: 2018-06-06 12:17:19
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1"] = array (
  'name' => 'leads_eciu_crm_training_goals_1',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_eciu_crm_training_goals_1leads_ida',
);
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1_name"] = array (
  'name' => 'leads_eciu_crm_training_goals_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_eciu_crm_training_goals_1leads_ida',
  'link' => 'leads_eciu_crm_training_goals_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1leads_ida"] = array (
  'name' => 'leads_eciu_crm_training_goals_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_ECIU_CRM_TRAINING_GOALS_TITLE',
);


// created: 2017-01-23 13:33:25
$dictionary["ECiu_crm_training_goals"]["fields"]["eciu_crm_training_goals_contacts"] = array (
  'name' => 'eciu_crm_training_goals_contacts',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_goals_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_ECIU_CRM_TRAINING_GOALS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'eciu_crm_training_goals_contactscontacts_ida',
);
$dictionary["ECiu_crm_training_goals"]["fields"]["eciu_crm_training_goals_contacts_name"] = array (
  'name' => 'eciu_crm_training_goals_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_GOALS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_training_goals_contactscontacts_ida',
  'link' => 'eciu_crm_training_goals_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_training_goals"]["fields"]["eciu_crm_training_goals_contactscontacts_ida"] = array (
  'name' => 'eciu_crm_training_goals_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_goals_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_GOALS_CONTACTS_FROM_ECIU_CRM_TRAINING_GOALS_TITLE',
);

?>