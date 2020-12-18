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

$relationships = array (
  'eciu_crm_resources_eciu_crm_languages' => 
  array (
    'rhs_label' => 'Languages',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_languages',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_languages',
  ),
  'eciu_crm_resources_eciu_crm_tracks' => 
  array (
    'rhs_label' => 'Parallel Tracks',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_tracks',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_tracks',
  ),
  'eciu_crm_resources_eciu_crm_denominations' => 
  array (
    'rhs_label' => 'Denominations',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_denominations',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_denominations',
  ),
  'eciu_crm_resources_eciu_crm_sgt' => 
  array (
    'rhs_label' => 'Sponsor Governance Type',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_sgt',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_sgt',
  ),
  'eciu_crm_resources_eciu_crm_ddc' => 
  array (
    'rhs_label' => 'Dewey Decimal Classification',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_ddc',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_ddc',
  ),
  'eciu_crm_resources_eciu_crm_badges' => 
  array (
    'rhs_label' => 'Badges',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_badges',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_badges',
  ),
  'eciu_crm_resources_eciu_crm_resource_types' => 
  array (
    'rhs_label' => 'Resource Types',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'ECiu_crm_resource_types',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_eciu_crm_resource_types',
  ),
  'eciu_crm_resources_contacts' => 
  array (
    'rhs_label' => 'Contacts',
    'lhs_label' => 'Resources',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'Contacts',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_contacts',
  ),
);