<?php
 // created: 2016-10-26 08:14:12
$layout_defs["ECiu_resources"]["subpanel_setup"]['eciu_resources_eciu_languages'] = array (
  'order' => 100,
  'module' => 'ECiu_languages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_RESOURCES_ECIU_LANGUAGES_FROM_ECIU_LANGUAGES_TITLE',
  'get_subpanel_data' => 'eciu_resources_eciu_languages',
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
