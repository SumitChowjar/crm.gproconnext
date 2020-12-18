<?php
 // created: 2018-01-22 09:21:56
$layout_defs["gpro_Courses"]["subpanel_setup"]['gpro_courses_eciu_crm_resources'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_resources',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
  'get_subpanel_data' => 'gpro_courses_eciu_crm_resources',
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
