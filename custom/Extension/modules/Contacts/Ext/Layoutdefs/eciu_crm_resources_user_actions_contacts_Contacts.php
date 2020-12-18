<?php
 // created: 2017-01-23 13:33:23
$layout_defs["Contacts"]["subpanel_setup"]['eciu_crm_resources_user_actions_contacts'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_resources_user_actions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_CRM_RESOURCES_USER_ACTIONS_CONTACTS_FROM_ECIU_CRM_RESOURCES_USER_ACTIONS_TITLE',
  'get_subpanel_data' => 'eciu_crm_resources_user_actions_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
