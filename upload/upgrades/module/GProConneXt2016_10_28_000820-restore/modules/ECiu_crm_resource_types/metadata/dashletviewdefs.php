<?php
$dashletData['ECiu_crm_resource_typesDashlet']['searchFields'] = array (
  'category' => 
  array (
    'default' => '',
  ),
  'sub_category' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
);
$dashletData['ECiu_crm_resource_typesDashlet']['columns'] = array (
  'category' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'sub_category' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUB_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
