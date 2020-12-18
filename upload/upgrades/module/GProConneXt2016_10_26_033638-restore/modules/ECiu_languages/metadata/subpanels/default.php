<?php
$module_name='ECiu_languages';
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
    'iso_639_2' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ISO_639_2',
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