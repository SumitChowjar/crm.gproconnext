<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'ECiu',
  'author' => 'Leiver Espinoza',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'GProConneXt',
  'published_date' => '2017-01-23 19:33:23',
  'type' => 'module',
  'version' => 1485200003,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'GProConneXt',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ECiu_crm_badges',
      'class' => 'ECiu_crm_badges',
      'path' => 'modules/ECiu_crm_badges/ECiu_crm_badges.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ECiu_crm_calendar_periods',
      'class' => 'ECiu_crm_calendar_periods',
      'path' => 'modules/ECiu_crm_calendar_periods/ECiu_crm_calendar_periods.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ECiu_crm_countries',
      'class' => 'ECiu_crm_countries',
      'path' => 'modules/ECiu_crm_countries/ECiu_crm_countries.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ECiu_crm_ddc',
      'class' => 'ECiu_crm_ddc',
      'path' => 'modules/ECiu_crm_ddc/ECiu_crm_ddc.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'ECiu_crm_degree_levels',
      'class' => 'ECiu_crm_degree_levels',
      'path' => 'modules/ECiu_crm_degree_levels/ECiu_crm_degree_levels.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'ECiu_crm_denominations',
      'class' => 'ECiu_crm_denominations',
      'path' => 'modules/ECiu_crm_denominations/ECiu_crm_denominations.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'ECiu_crm_health_indicators',
      'class' => 'ECiu_crm_health_indicators',
      'path' => 'modules/ECiu_crm_health_indicators/ECiu_crm_health_indicators.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'ECiu_crm_language_list',
      'class' => 'ECiu_crm_language_list',
      'path' => 'modules/ECiu_crm_language_list/ECiu_crm_language_list.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'ECiu_crm_methodologies',
      'class' => 'ECiu_crm_methodologies',
      'path' => 'modules/ECiu_crm_methodologies/ECiu_crm_methodologies.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'ECiu_crm_resource_types',
      'class' => 'ECiu_crm_resource_types',
      'path' => 'modules/ECiu_crm_resource_types/ECiu_crm_resource_types.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'ECiu_crm_resources',
      'class' => 'ECiu_crm_resources',
      'path' => 'modules/ECiu_crm_resources/ECiu_crm_resources.php',
      'tab' => true,
    ),
    11 => 
    array (
      'module' => 'ECiu_crm_resources_user_actions',
      'class' => 'ECiu_crm_resources_user_actions',
      'path' => 'modules/ECiu_crm_resources_user_actions/ECiu_crm_resources_user_actions.php',
      'tab' => true,
    ),
    12 => 
    array (
      'module' => 'ECiu_crm_sgt',
      'class' => 'ECiu_crm_sgt',
      'path' => 'modules/ECiu_crm_sgt/ECiu_crm_sgt.php',
      'tab' => true,
    ),
    13 => 
    array (
      'module' => 'ECiu_crm_tracks',
      'class' => 'ECiu_crm_tracks',
      'path' => 'modules/ECiu_crm_tracks/ECiu_crm_tracks.php',
      'tab' => true,
    ),
    14 => 
    array (
      'module' => 'ECiu_crm_training_actuals',
      'class' => 'ECiu_crm_training_actuals',
      'path' => 'modules/ECiu_crm_training_actuals/ECiu_crm_training_actuals.php',
      'tab' => true,
    ),
    15 => 
    array (
      'module' => 'ECiu_crm_training_goals',
      'class' => 'ECiu_crm_training_goals',
      'path' => 'modules/ECiu_crm_training_goals/ECiu_crm_training_goals.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_languages_ECiu_crm_languages.php',
      'to_module' => 'ECiu_crm_languages',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_languages_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_tracks_ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_tracks_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_denominations_ECiu_crm_denominations.php',
      'to_module' => 'ECiu_crm_denominations',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_denominations_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_sgt_ECiu_crm_sgt.php',
      'to_module' => 'ECiu_crm_sgt',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_sgt_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_ddc_ECiu_crm_ddc.php',
      'to_module' => 'ECiu_crm_ddc',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_ddc_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_badges_ECiu_crm_badges.php',
      'to_module' => 'ECiu_crm_badges',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_badges_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_resource_types_ECiu_crm_resource_types.php',
      'to_module' => 'ECiu_crm_resource_types',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_eciu_crm_resource_types_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_user_actions_eciu_crm_resources_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_resources_user_actions_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_countries_ECiu_crm_countries.php',
      'to_module' => 'ECiu_crm_countries',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_am_projecttemplates_AM_ProjectTemplates.php',
      'to_module' => 'AM_ProjectTemplates',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_tracks_ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_methodologies_ECiu_crm_methodologies.php',
      'to_module' => 'ECiu_crm_methodologies',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_language_list_ECiu_crm_language_list.php',
      'to_module' => 'ECiu_crm_language_list',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_health_indicators_ECiu_crm_health_indicators.php',
      'to_module' => 'ECiu_crm_health_indicators',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_actuals_eciu_crm_degree_levels_ECiu_crm_degree_levels.php',
      'to_module' => 'ECiu_crm_degree_levels',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/eciu_crm_training_goals_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_languagesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_tracksMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_denominationsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_sgtMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_ddcMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_badgesMetaData.php',
    ),
    6 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_eciu_crm_resource_typesMetaData.php',
    ),
    7 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_user_actions_eciu_crm_resourcesMetaData.php',
    ),
    8 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_resources_user_actions_contactsMetaData.php',
    ),
    9 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_contactsMetaData.php',
    ),
    10 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_countriesMetaData.php',
    ),
    11 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_am_projecttemplatesMetaData.php',
    ),
    12 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_tracksMetaData.php',
    ),
    13 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_methodologiesMetaData.php',
    ),
    14 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_language_listMetaData.php',
    ),
    15 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_health_indicatorsMetaData.php',
    ),
    16 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_actuals_eciu_crm_degree_levelsMetaData.php',
    ),
    17 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/eciu_crm_training_goals_contactsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_badges',
      'to' => 'modules/ECiu_crm_badges',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_calendar_periods',
      'to' => 'modules/ECiu_crm_calendar_periods',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_countries',
      'to' => 'modules/ECiu_crm_countries',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_ddc',
      'to' => 'modules/ECiu_crm_ddc',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_degree_levels',
      'to' => 'modules/ECiu_crm_degree_levels',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_denominations',
      'to' => 'modules/ECiu_crm_denominations',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_health_indicators',
      'to' => 'modules/ECiu_crm_health_indicators',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_language_list',
      'to' => 'modules/ECiu_crm_language_list',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_methodologies',
      'to' => 'modules/ECiu_crm_methodologies',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_resource_types',
      'to' => 'modules/ECiu_crm_resource_types',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_resources',
      'to' => 'modules/ECiu_crm_resources',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_resources_user_actions',
      'to' => 'modules/ECiu_crm_resources_user_actions',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_sgt',
      'to' => 'modules/ECiu_crm_sgt',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_tracks',
      'to' => 'modules/ECiu_crm_tracks',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_training_actuals',
      'to' => 'modules/ECiu_crm_training_actuals',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ECiu_crm_training_goals',
      'to' => 'modules/ECiu_crm_training_goals',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_languages.php',
      'to_module' => 'ECiu_crm_languages',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_denominations.php',
      'to_module' => 'ECiu_crm_denominations',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_sgt.php',
      'to_module' => 'ECiu_crm_sgt',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_ddc.php',
      'to_module' => 'ECiu_crm_ddc',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_badges.php',
      'to_module' => 'ECiu_crm_badges',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resource_types.php',
      'to_module' => 'ECiu_crm_resource_types',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources_user_actions.php',
      'to_module' => 'ECiu_crm_resources_user_actions',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources_user_actions.php',
      'to_module' => 'ECiu_crm_resources_user_actions',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_countries.php',
      'to_module' => 'ECiu_crm_countries',
      'language' => 'en_us',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AM_ProjectTemplates.php',
      'to_module' => 'AM_ProjectTemplates',
      'language' => 'en_us',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
      'language' => 'en_us',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_methodologies.php',
      'to_module' => 'ECiu_crm_methodologies',
      'language' => 'en_us',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_language_list.php',
      'to_module' => 'ECiu_crm_language_list',
      'language' => 'en_us',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_health_indicators.php',
      'to_module' => 'ECiu_crm_health_indicators',
      'language' => 'en_us',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
      'language' => 'en_us',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_degree_levels.php',
      'to_module' => 'ECiu_crm_degree_levels',
      'language' => 'en_us',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_training_goals.php',
      'to_module' => 'ECiu_crm_training_goals',
      'language' => 'en_us',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_languages_ECiu_crm_languages.php',
      'to_module' => 'ECiu_crm_languages',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_languages_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_tracks_ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_tracks_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_denominations_ECiu_crm_denominations.php',
      'to_module' => 'ECiu_crm_denominations',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_denominations_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_sgt_ECiu_crm_sgt.php',
      'to_module' => 'ECiu_crm_sgt',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_sgt_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_ddc_ECiu_crm_ddc.php',
      'to_module' => 'ECiu_crm_ddc',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_ddc_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_badges_ECiu_crm_badges.php',
      'to_module' => 'ECiu_crm_badges',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_badges_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_resource_types_ECiu_crm_resource_types.php',
      'to_module' => 'ECiu_crm_resource_types',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_eciu_crm_resource_types_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_user_actions_eciu_crm_resources_ECiu_crm_resources_user_actions.php',
      'to_module' => 'ECiu_crm_resources_user_actions',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_user_actions_eciu_crm_resources_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_user_actions_contacts_ECiu_crm_resources_user_actions.php',
      'to_module' => 'ECiu_crm_resources_user_actions',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_resources_user_actions_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_contacts_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_countries_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_countries_ECiu_crm_countries.php',
      'to_module' => 'ECiu_crm_countries',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_am_projecttemplates_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_am_projecttemplates_AM_ProjectTemplates.php',
      'to_module' => 'AM_ProjectTemplates',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_tracks_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_tracks_ECiu_crm_tracks.php',
      'to_module' => 'ECiu_crm_tracks',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_methodologies_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_methodologies_ECiu_crm_methodologies.php',
      'to_module' => 'ECiu_crm_methodologies',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_language_list_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_language_list_ECiu_crm_language_list.php',
      'to_module' => 'ECiu_crm_language_list',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_health_indicators_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_health_indicators_ECiu_crm_health_indicators.php',
      'to_module' => 'ECiu_crm_health_indicators',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_degree_levels_ECiu_crm_training_actuals.php',
      'to_module' => 'ECiu_crm_training_actuals',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_actuals_eciu_crm_degree_levels_ECiu_crm_degree_levels.php',
      'to_module' => 'ECiu_crm_degree_levels',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_goals_contacts_ECiu_crm_training_goals.php',
      'to_module' => 'ECiu_crm_training_goals',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/eciu_crm_training_goals_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    6 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    7 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    8 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    9 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    10 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);