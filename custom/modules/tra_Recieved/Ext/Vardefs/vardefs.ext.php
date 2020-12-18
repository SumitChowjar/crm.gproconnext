<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary["tra_Recieved"]["fields"]["resources_name"] = array(
   'name' => 'resources_name',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getResourcesList',
   'vname' => 'Resources Offered',
);

$dictionary["tra_Recieved"]["fields"]["contacts"] = array(
   'name' => 'contacts',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getContactsList',
   'vname' => 'Who Administered The Training',
);



// created: 2018-07-30 04:48:42
$dictionary["tra_Recieved"]["fields"]["contacts_tra_recieved_1"] = array (
  'name' => 'contacts_tra_recieved_1',
  'type' => 'link',
  'relationship' => 'contacts_tra_recieved_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_TRA_RECIEVED_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_tra_recieved_1contacts_ida',
);
$dictionary["tra_Recieved"]["fields"]["contacts_tra_recieved_1_name"] = array (
  'name' => 'contacts_tra_recieved_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TRA_RECIEVED_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_tra_recieved_1contacts_ida',
  'link' => 'contacts_tra_recieved_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["tra_Recieved"]["fields"]["contacts_tra_recieved_1contacts_ida"] = array (
  'name' => 'contacts_tra_recieved_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_tra_recieved_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_TRA_RECIEVED_1_FROM_TRA_RECIEVED_TITLE',
);


 // created: 2018-07-30 10:50:44
$dictionary['tra_Recieved']['fields']['language_name']['options']='language_list';

 
?>