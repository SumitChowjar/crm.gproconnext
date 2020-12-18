<?php
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
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
