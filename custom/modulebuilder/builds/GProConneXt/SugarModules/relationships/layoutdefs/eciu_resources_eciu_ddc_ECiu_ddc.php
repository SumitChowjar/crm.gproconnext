<?php
 // created: 2016-10-26 08:14:12
$layout_defs["ECiu_ddc"]["subpanel_setup"]['eciu_resources_eciu_ddc'] = array (
  'order' => 100,
  'module' => 'ECiu_resources',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_RESOURCES_ECIU_DDC_FROM_ECIU_RESOURCES_TITLE',
  'get_subpanel_data' => 'eciu_resources_eciu_ddc',
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
