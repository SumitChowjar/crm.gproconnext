<?php
$module_name = 'res_Reviews';
$listViewDefs [$module_name] = 
array (
  'STAR_RATING_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_STAR_RATING',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ECIU_CRM_RESOURCES_RES_REVIEWS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ECIU_CRM_RESOURCES_RES_REVIEWS_1_FROM_ECIU_CRM_RESOURCES_TITLE',
    'id' => 'ECIU_CRM_RESOURCES_RES_REVIEWS_1ECIU_CRM_RESOURCES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'COMMENTED_BY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COMMENTED_BY',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
