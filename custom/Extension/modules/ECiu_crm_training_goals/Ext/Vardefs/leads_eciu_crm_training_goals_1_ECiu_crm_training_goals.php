<?php
// created: 2018-06-06 12:17:19
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1"] = array (
  'name' => 'leads_eciu_crm_training_goals_1',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_eciu_crm_training_goals_1leads_ida',
);
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1_name"] = array (
  'name' => 'leads_eciu_crm_training_goals_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_eciu_crm_training_goals_1leads_ida',
  'link' => 'leads_eciu_crm_training_goals_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ECiu_crm_training_goals"]["fields"]["leads_eciu_crm_training_goals_1leads_ida"] = array (
  'name' => 'leads_eciu_crm_training_goals_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_eciu_crm_training_goals_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_ECIU_CRM_TRAINING_GOALS_TITLE',
);
