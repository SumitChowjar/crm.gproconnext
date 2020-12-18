<?php
$module_name = 'ECiu_crm_resources_user_actions';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
  ),
  'ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
    'id' => 'ECIU_CRM_RF9FDSOURCES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RESOURCE_ACTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RESOURCE_ACTION',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
