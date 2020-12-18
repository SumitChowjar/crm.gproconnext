<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-01-23 13:33:24
$layout_defs["Contacts"]["subpanel_setup"]['eciu_crm_training_actuals_contacts'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_training_actuals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_CONTACTS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
  'get_subpanel_data' => 'eciu_crm_training_actuals_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-07-30 04:48:42
$layout_defs["Contacts"]["subpanel_setup"]['contacts_tra_recieved_1'] = array (
  'order' => 100,
  'module' => 'tra_Recieved',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_TRA_RECIEVED_1_FROM_TRA_RECIEVED_TITLE',
  'get_subpanel_data' => 'contacts_tra_recieved_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-01-15 12:18:40
$layout_defs["Contacts"]["subpanel_setup"]['contacts_eciu_crm_resources_1'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_resources',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_ECIU_CRM_RESOURCES_1_FROM_ECIU_CRM_RESOURCES_TITLE',
  'get_subpanel_data' => 'contacts_eciu_crm_resources_1',
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


/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 27/10/17
 * Time: 9:34 AM
 */
$layout_defs["Contacts"]["subpanel_setup"]["eciu_crm_training_actuals_contacts"]["top_buttons"] = array(
	array(
		'widget_class' => 'SubPanelTopCreateButton',
	),
	array(
		'widget_class' => 'SubPanelTopSelectButton',
		'mode' => 'MultiSelect',
	),
);


$layout_defs["Contacts"]["subpanel_setup"]["tra_Recieved"]["top_buttons"] = array(
	array(
		'widget_class' => 'SubPanelTopCreateButton',
	),
	array(
		'widget_class' => 'SubPanelTopSelectButton',
		'mode' => 'MultiSelect',
	),
);


 // created: 2017-01-23 13:33:25
$layout_defs["Contacts"]["subpanel_setup"]['eciu_crm_training_goals_contacts'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_training_goals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_CRM_TRAINING_GOALS_CONTACTS_FROM_ECIU_CRM_TRAINING_GOALS_TITLE',
  'get_subpanel_data' => 'eciu_crm_training_goals_contacts',
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


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['eciu_crm_training_goals_contacts']['override_subpanel_name'] = 'Contact_subpanel_eciu_crm_training_goals_contacts';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['eciu_crm_training_actuals_contacts']['override_subpanel_name'] = 'Contact_subpanel_eciu_crm_training_actuals_contacts';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_tra_recieved_1']['override_subpanel_name'] = 'Contact_subpanel_contacts_tra_recieved_1';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_eciu_crm_resources_1']['override_subpanel_name'] = 'Contact_subpanel_contacts_eciu_crm_resources_1';

?>