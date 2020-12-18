<?php
$popupMeta = array (
    'moduleMain' => 'ECiu_crm_calendar_periods',
    'varName' => 'ECiu_crm_calendar_periods',
    'orderBy' => 'eciu_crm_calendar_periods.name',
    'whereClauses' => array (
  'name' => 'eciu_crm_calendar_periods.name',
  'base_weeknum' => 'eciu_crm_calendar_periods.base_weeknum',
  'base_month' => 'eciu_crm_calendar_periods.base_month',
  'base_quarter' => 'eciu_crm_calendar_periods.base_quarter',
  'base_year' => 'eciu_crm_calendar_periods.base_year',
  'base_semester' => 'eciu_crm_calendar_periods.base_semester',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'base_weeknum',
  5 => 'base_month',
  6 => 'base_quarter',
  7 => 'base_year',
  8 => 'base_semester',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'base_weeknum' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_WEEKNUM',
    'width' => '10%',
    'name' => 'base_weeknum',
  ),
  'base_month' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_MONTH',
    'width' => '10%',
    'name' => 'base_month',
  ),
  'base_quarter' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_QUARTER',
    'width' => '10%',
    'name' => 'base_quarter',
  ),
  'base_year' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_YEAR',
    'width' => '10%',
    'name' => 'base_year',
  ),
  'base_semester' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_SEMESTER',
    'width' => '10%',
    'name' => 'base_semester',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'BASE_WEEKNUM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_WEEKNUM',
    'width' => '10%',
    'default' => true,
    'name' => 'base_weeknum',
  ),
  'BASE_MONTH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_MONTH',
    'width' => '10%',
    'default' => true,
    'name' => 'base_month',
  ),
  'BASE_QUARTER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_QUARTER',
    'width' => '10%',
    'default' => true,
    'name' => 'base_quarter',
  ),
  'BASE_SEMESTER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BASE_SEMESTER',
    'width' => '10%',
    'default' => true,
  ),
),
);
