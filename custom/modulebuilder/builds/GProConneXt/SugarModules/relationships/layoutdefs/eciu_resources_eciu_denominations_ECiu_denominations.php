<?php
 // created: 2016-10-26 08:14:12
$layout_defs["ECiu_denominations"]["subpanel_setup"]['eciu_resources_eciu_denominations'] = array (
  'order' => 100,
  'module' => 'ECiu_resources',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_RESOURCES_ECIU_DENOMINATIONS_FROM_ECIU_RESOURCES_TITLE',
  'get_subpanel_data' => 'eciu_resources_eciu_denominations',
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
