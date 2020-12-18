<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_tracks"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'source' => 'non-db',
  'module' => 'ECiu_crm_tracks',
  'bean_name' => 'ECiu_crm_tracks',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
  'id_name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_tracks_name"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_tracks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRACKS_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
  'link' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'table' => 'eciu_crm_tracks',
  'module' => 'ECiu_crm_tracks',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida"] = array (
  'name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_eciu_crm_tracks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_TRACKS_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
