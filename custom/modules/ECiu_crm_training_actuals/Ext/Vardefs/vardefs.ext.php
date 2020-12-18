<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-09-01 04:46:48
$dictionary['ECiu_crm_training_actuals']['fields']['language_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['language_c']['labelValue']='Language';

 

 // created: 2017-09-01 04:17:49
$dictionary['ECiu_crm_training_actuals']['fields']['contact_id_c']['inline_edit']=1;

 

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


 // created: 2017-09-01 04:22:12
$dictionary['ECiu_crm_training_actuals']['fields']['resource_pro_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['resource_pro_c']['labelValue']='Resource Provided';

 

 // created: 2017-09-01 04:17:49
$dictionary['ECiu_crm_training_actuals']['fields']['other_pastoral_trainers_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['other_pastoral_trainers_c']['labelValue']='Other Pastoral Trainers';

 

// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_am_projecttemplates"] = array (
  'name' => 'eciu_crm_training_actuals_am_projecttemplates',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_am_projecttemplates',
  'source' => 'non-db',
  'module' => 'AM_ProjectTemplates',
  'bean_name' => 'AM_ProjectTemplates',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE',
  'id_name' => 'eciu_crm_tdbc8mplates_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_am_projecttemplates_name"] = array (
  'name' => 'eciu_crm_training_actuals_am_projecttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_tdbc8mplates_ida',
  'link' => 'eciu_crm_training_actuals_am_projecttemplates',
  'table' => 'am_projecttemplates',
  'module' => 'AM_ProjectTemplates',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_tdbc8mplates_ida"] = array (
  'name' => 'eciu_crm_tdbc8mplates_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_am_projecttemplates',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);


// created: 2018-06-06 12:18:31
$dictionary["ECiu_crm_training_actuals"]["fields"]["leads_eciu_crm_training_actuals_1"] = array (
  'name' => 'leads_eciu_crm_training_actuals_1',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_actuals_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_eciu_crm_training_actuals_1leads_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["leads_eciu_crm_training_actuals_1_name"] = array (
  'name' => 'leads_eciu_crm_training_actuals_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_eciu_crm_training_actuals_1leads_ida',
  'link' => 'leads_eciu_crm_training_actuals_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["leads_eciu_crm_training_actuals_1leads_ida"] = array (
  'name' => 'leads_eciu_crm_training_actuals_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_actuals_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);


$dictionary['ECiu_crm_training_actuals']['fields']['date_from']['type'] = 'datetimecombo';
$dictionary['ECiu_crm_training_actuals']['fields']['date_to']['type'] = 'datetimecombo';



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


 // created: 2017-09-01 04:43:48
$dictionary['ECiu_crm_training_actuals']['fields']['additional_notes_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['additional_notes_c']['labelValue']='Additional Notes';

 

 // created: 2018-01-23 06:35:39

 

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


// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_tracks"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'source' => 'non-db',
  'module' => 'ECiu_crm_tracks',
  'bean_name' => 'ECiu_crm_tracks',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
  'id_name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_tracks_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_tracks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'table' => 'eciu_crm_tracks',
  'module' => 'ECiu_crm_tracks',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);


 // created: 2017-09-01 04:22:12
$dictionary['ECiu_crm_training_actuals']['fields']['eciu_crm_resources_id_c']['inline_edit']=1;

 

 // created: 2018-06-07 05:04:44
$dictionary['ECiu_crm_training_actuals']['fields']['training_completed_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['training_completed_c']['labelValue']='How many trainings have you done?';

 
 
$dictionary["ECiu_crm_training_actuals"]["fields"]["contacts"] = array(
   'name' => 'contacts',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getContactsList',
   'vname' => 'Other Pastoral Trainers',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["resources"] = array(
   'name' => 'resources',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getResourcesList',
   'vname' => 'Resource Provided',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["paralleltracks"] = array(
   'name' => 'paralleltracks',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getParallelTracksList',
   'vname' => 'Parallel Tracks',
);



 // created: 2018-03-09 10:37:58
$dictionary['ECiu_crm_training_actuals']['fields']['country_c']['inline_edit']='1';
$dictionary['ECiu_crm_training_actuals']['fields']['country_c']['labelValue']='Country';

 

// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_degree_levels"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'source' => 'non-db',
  'module' => 'ECiu_crm_degree_levels',
  'bean_name' => 'ECiu_crm_degree_levels',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
  'id_name' => 'eciu_crm_t341a_levels_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_degree_levels_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_t341a_levels_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'table' => 'eciu_crm_degree_levels',
  'module' => 'ECiu_crm_degree_levels',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_t341a_levels_ida"] = array (
  'name' => 'eciu_crm_t341a_levels_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);


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

?>