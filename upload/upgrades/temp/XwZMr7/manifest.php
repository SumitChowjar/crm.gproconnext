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
  'key' => 'gpro',
  'author' => '',
  'description' => 'Modules needed for GPro Learning site.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'GProLearning',
  'published_date' => '2018-01-22 09:21:56',
  'type' => 'module',
  'version' => 1516612916,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'GProLearning',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'gpro_Courses',
      'class' => 'gpro_Courses',
      'path' => 'modules/gpro_Courses/gpro_Courses.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gpro_courses_eciu_crm_resources_gpro_Courses.php',
      'to_module' => 'gpro_Courses',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gpro_courses_eciu_crm_resourcesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/gpro_Courses',
      'to' => 'modules/gpro_Courses',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gpro_Courses.php',
      'to_module' => 'gpro_Courses',
      'language' => 'en_us',
    ),
    2 => 
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
      'from' => '<basepath>/SugarModules/relationships/vardefs/gpro_courses_eciu_crm_resources_ECiu_crm_resources.php',
      'to_module' => 'ECiu_crm_resources',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gpro_courses_eciu_crm_resources_gpro_Courses.php',
      'to_module' => 'gpro_Courses',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'ECiu_crm_resources' => 'gpro_courses_eciu_crm_resources_name',
      ),
    ),
  ),
);