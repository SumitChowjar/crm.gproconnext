<?php
// created: 2017-01-23 13:33:24
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_am_projecttemplates"] = array (
  'name' => 'eciu_crm_training_actuals_am_projecttemplates',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_am_projecttemplates',
  'source' => 'non-db',
  'module' => 'AM_ProjectTemplates',
  'bean_name' => 'AM_ProjectTemplates',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE',
  'id_name' => 'eciu_crm_tdbc8mplates_ida',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_training_actuals_am_projecttemplates_name"] = array (
  'name' => 'eciu_crm_training_actuals_am_projecttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_tdbc8mplates_ida',
  'link' => 'eciu_crm_training_actuals_am_projecttemplates',
  'table' => 'am_projecttemplates',
  'module' => 'AM_ProjectTemplates',
  'rname' => 'name',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["eciu_crm_tdbc8mplates_ida"] = array (
  'name' => 'eciu_crm_tdbc8mplates_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_training_actuals_am_projecttemplates',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_TRAINING_ACTUALS_AM_PROJECTTEMPLATES_FROM_ECIU_CRM_TRAINING_ACTUALS_TITLE',
);
