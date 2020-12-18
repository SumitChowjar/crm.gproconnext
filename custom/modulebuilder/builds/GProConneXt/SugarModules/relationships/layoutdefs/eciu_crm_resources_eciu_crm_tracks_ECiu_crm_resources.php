<?php
 // created: 2016-11-08 02:27:39
$layout_defs["ECiu_crm_resources"]["subpanel_setup"]['eciu_crm_resources_eciu_crm_tracks'] = array (
  'order' => 100,
  'module' => 'ECiu_crm_tracks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ECIU_CRM_RESOURCES_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
  'get_subpanel_data' => 'eciu_crm_resources_eciu_crm_tracks',
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
