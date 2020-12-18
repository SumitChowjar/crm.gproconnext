<?php
// created: 2017-12-26 14:17:31
$dictionary["res_Reviews"]["fields"]["eciu_crm_resources_res_reviews_1"] = array (
  'name' => 'eciu_crm_resources_res_reviews_1',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_res_reviews_1',
  'source' => 'non-db',
  'module' => 'ECiu_crm_resources',
  'bean_name' => 'ECiu_crm_resources',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_ECIU_CRM_RESOURCES_TITLE',
  'id_name' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
);
$dictionary["res_Reviews"]["fields"]["eciu_crm_resources_res_reviews_1_name"] = array (
  'name' => 'eciu_crm_resources_res_reviews_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_ECIU_CRM_RESOURCES_TITLE',
  'save' => true,
  'id_name' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
  'link' => 'eciu_crm_resources_res_reviews_1',
  'table' => 'eciu_crm_resources',
  'module' => 'ECiu_crm_resources',
  'rname' => 'name',
);
$dictionary["res_Reviews"]["fields"]["eciu_crm_resources_res_reviews_1eciu_crm_resources_ida"] = array (
  'name' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
  'type' => 'link',
  'relationship' => 'eciu_crm_resources_res_reviews_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_RES_REVIEWS_TITLE',
);
