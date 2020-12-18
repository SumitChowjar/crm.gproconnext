<?php
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
