<?php
$module_name = 'ECiu_crm_resources_user_actions';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'eciu_crm_resources_user_actions_eciu_crm_resources_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
        'id' => 'ECIU_CRM_RF9FDSOURCES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_name',
      ),
      'eciu_crm_resources_user_actions_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'eciu_crm_resources_user_actions_contacts_name',
      ),
      'resource_action' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RESOURCE_ACTION',
        'width' => '10%',
        'default' => true,
        'name' => 'resource_action',
      ),
    ),
    'advanced_search' => 
    array (
      'eciu_crm_resources_user_actions_eciu_crm_resources_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ECIU_CRM_RF9FDSOURCES_IDA',
        'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_name',
      ),
      'eciu_crm_resources_user_actions_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTSCONTACTS_IDA',
        'name' => 'eciu_crm_resources_user_actions_contacts_name',
      ),
      'resource_action' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RESOURCE_ACTION',
        'width' => '10%',
        'default' => true,
        'name' => 'resource_action',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
