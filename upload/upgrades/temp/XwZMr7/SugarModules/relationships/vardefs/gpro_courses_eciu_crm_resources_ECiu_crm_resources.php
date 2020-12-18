<?php
// created: 2018-01-22 09:21:56
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resources"] = array (
  'name' => 'gpro_courses_eciu_crm_resources',
  'type' => 'link',
  'relationship' => 'gpro_courses_eciu_crm_resources',
  'source' => 'non-db',
  'module' => 'gpro_Courses',
  'bean_name' => false,
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE',
  'id_name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
);
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resources_name"] = array (
  'name' => 'gpro_courses_eciu_crm_resources_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE',
  'save' => true,
  'id_name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
  'link' => 'gpro_courses_eciu_crm_resources',
  'table' => 'gpro_courses',
  'module' => 'gpro_Courses',
  'rname' => 'name',
);
$dictionary["ECiu_crm_resources"]["fields"]["gpro_courses_eciu_crm_resourcesgpro_courses_ida"] = array (
  'name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
  'type' => 'link',
  'relationship' => 'gpro_courses_eciu_crm_resources',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_ECIU_CRM_RESOURCES_TITLE',
);
