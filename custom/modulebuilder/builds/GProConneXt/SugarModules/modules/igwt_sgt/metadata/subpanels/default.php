<?php
$module_name='igwt_sgt';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ECiu_tracks',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'sgt_id' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_SGT_ID',
      'width' => '10%',
      'default' => true,
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
  ),
);