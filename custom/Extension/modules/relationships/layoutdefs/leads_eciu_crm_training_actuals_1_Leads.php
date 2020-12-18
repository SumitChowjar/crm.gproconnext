<?php
 // created: 2018-06-06 12:18:31
$layout_defs["Leads"]["subpanel_setup"]['leads_eciu_crm_training_actuals_1'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_training_actuals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ECIU_CRM_TRAINING_ACTUALS_1_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
  'get_subpanel_data' => 'leads_eciu_crm_training_actuals_1',
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
