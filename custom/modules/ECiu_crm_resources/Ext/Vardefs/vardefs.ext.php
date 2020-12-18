<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-11-27 13:07:52
$dictionary['ECiu_crm_resources']['fields']['image_c']['inline_edit']='1';
$dictionary['ECiu_crm_resources']['fields']['image_c']['labelValue']='Image';

 

 // created: 2017-08-29 05:14:48
$dictionary['ECiu_crm_resources']['fields']['language_c']['inline_edit']='1';
$dictionary['ECiu_crm_resources']['fields']['language_c']['labelValue']='Language';

 

 // created: 2018-01-15 07:41:44
$dictionary['ECiu_crm_resources']['fields']['contact_id_c']['inline_edit']=1;

 

// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_sgt"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_sgt',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_sgt',
  'source' => 'non-db',
  'module' => 'ECiu_crm_sgt',
  'bean_name' => 'ECiu_crm_sgt',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_SGT_FROM_ECIU_CRM_SGT_TITLE',
);


 // created: 2018-01-15 09:13:56
$dictionary['ECiu_crm_resources']['fields']['custom_message_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['custom_message_c']['labelValue']='Approval/Rejection Message';

 

 // created: 2018-01-15 07:41:44
$dictionary['ECiu_crm_resources']['fields']['suggested_by_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['suggested_by_c']['labelValue']='Suggested by';

 

 // created: 2017-07-25 04:08:54
$dictionary['ECiu_crm_resources']['fields']['category']['required']=true;

 

// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_denominations"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_denominations',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_denominations',
  'source' => 'non-db',
  'module' => 'ECiu_crm_denominations',
  'bean_name' => 'ECiu_crm_denominations',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_DENOMINATIONS_FROM_ECIU_CRM_DENOMINATIONS_TITLE',
);


 // created: 2018-01-15 07:40:39
$dictionary['ECiu_crm_resources']['fields']['approved_rejected_on_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['approved_rejected_on_c']['labelValue']='Approved/Rejected on';

 

 // created: 2018-01-15 07:34:36
$dictionary['ECiu_crm_resources']['fields']['approved_rejected_by_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['approved_rejected_by_c']['labelValue']='Approved/Rejected by';

 

 // created: 2018-01-15 07:34:36
$dictionary['ECiu_crm_resources']['fields']['user_id_c']['inline_edit']=1;

 

// created: 2018-01-22 10:14:22
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resources"] = array (
  'name' => 'gpro_courses_eciu_crm_resources',
  'type' => 'link',
  'relationship' => 'gpro_courses_eciu_crm_resources',
  'source' => 'non-db',
  'module' => 'gpro_Courses',
  'bean_name' => 'gpro_Courses',
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE',
  'id_name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
);
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resources_name"] = array (
  'name' => 'gpro_courses_eciu_crm_resources_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE',
  'save' => true,
  'id_name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
  'link' => 'gpro_courses_eciu_crm_resources',
  'table' => 'gpro_courses',
  'module' => 'gpro_Courses',
  'rname' => 'name',
);
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resourcesgpro_courses_ida"] = array (
  'name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
  'type' => 'link',
  'relationship' => 'gpro_courses_eciu_crm_resources',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
);


 // created: 2018-01-15 07:03:19
$dictionary['ECiu_crm_resources']['fields']['status_c']['inline_edit']='1';
$dictionary['ECiu_crm_resources']['fields']['status_c']['labelValue']='Status';

 

// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_tracks"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_tracks',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_tracks',
  'source' => 'non-db',
  'module' => 'ECiu_crm_tracks',
  'bean_name' => 'ECiu_crm_tracks',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
);


 // created: 2017-11-27 13:07:04
$dictionary['ECiu_crm_resources']['fields']['access_level_c']['inline_edit']='1';
$dictionary['ECiu_crm_resources']['fields']['access_level_c']['labelValue']='Access Level';

 

// created: 2018-01-15 12:18:40
$dictionary["ECiu_crm_resources"]["fields"]["contacts_eciu_crm_resources_1"] = array (
  'name' => 'contacts_eciu_crm_resources_1',
  'type' => 'link',
  'relationship' => 'contacts_eciu_crm_resources_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_ECIU_CRM_RESOURCES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_eciu_crm_resources_1contacts_ida',
);
$dictionary["ECiu_crm_resources"]["fields"]["contacts_eciu_crm_resources_1_name"] = array (
  'name' => 'contacts_eciu_crm_resources_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ECIU_CRM_RESOURCES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_eciu_crm_resources_1contacts_ida',
  'link' => 'contacts_eciu_crm_resources_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_resources"]["fields"]["contacts_eciu_crm_resources_1contacts_ida"] = array (
  'name' => 'contacts_eciu_crm_resources_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_eciu_crm_resources_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ECIU_CRM_RESOURCES_1_FROM_ECIU_CRM_RESOURCES_TITLE',
);


// created: 2017-12-26 14:17:31
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_res_reviews_1"] = array (
  'name' => 'eciu_crm_resources_res_reviews_1',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_res_reviews_1',
  'source' => 'non-db',
  'module' => 'res_Reviews',
  'bean_name' => 'res_Reviews',
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_RES_REVIEWS_TITLE',
);


// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_ddc"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_ddc',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_ddc',
  'source' => 'non-db',
  'module' => 'ECiu_crm_ddc',
  'bean_name' => 'ECiu_crm_ddc',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_DDC_FROM_ECIU_CRM_DDC_TITLE',
);


 // created: 2018-01-15 07:38:10
$dictionary['ECiu_crm_resources']['fields']['submission_source_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['submission_source_c']['labelValue']='Submission Source';

 

// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_resource_types"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_resource_types',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_resource_types',
  'source' => 'non-db',
  'module' => 'ECiu_crm_resource_types',
  'bean_name' => 'ECiu_crm_resource_types',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_RESOURCE_TYPES_FROM_ECIU_CRM_RESOURCE_TYPES_TITLE',
);


// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_badges"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_badges',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_badges',
  'source' => 'non-db',
  'module' => 'ECiu_crm_badges',
  'bean_name' => 'ECiu_crm_badges',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_BADGES_FROM_ECIU_CRM_BADGES_TITLE',
);


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


// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_user_actions_eciu_crm_resources"] = array (
  'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
  'source' => 'non-db',
  'module' => 'ECiu_crm_resources_user_actions',
  'bean_name' => 'ECiu_crm_resources_user_actions',
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_USER_ACTIONS_TITLE',
);


// created: 2017-01-23 13:33:23
$dictionary["ECiu_crm_resources"]["fields"]["eciu_crm_resources_eciu_crm_languages"] = array (
  'name' => 'eciu_crm_resources_eciu_crm_languages',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_eciu_crm_languages',
  'source' => 'non-db',
  'module' => 'ECiu_crm_languages',
  'bean_name' => false,
  'vname' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_LANGUAGES_FROM_ECIU_CRM_LANGUAGES_TITLE',
);


 // created: 2018-01-22 11:44:36
$dictionary['ECiu_crm_resources']['fields']['hours_c']['inline_edit']='';
$dictionary['ECiu_crm_resources']['fields']['hours_c']['labelValue']='Hours';

 
?>