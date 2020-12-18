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
  'eciu_crm_resources_modified_user' => 
  array (
    'id' => '3c74a633-36fa-99b7-7808-5a4259bdd9ff',
    'relationship_name' => 'eciu_crm_resources_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_created_by' => 
  array (
    'id' => '3d1d7c40-f45d-9d0c-7992-5a4259424887',
    'relationship_name' => 'eciu_crm_resources_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_assigned_user' => 
  array (
    'id' => '3d61ff5d-3571-c30b-4403-5a4259a23f71',
    'relationship_name' => 'eciu_crm_resources_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'securitygroups_eciu_crm_resources' => 
  array (
    'id' => '3d9894ac-c445-128c-6232-5a4259dc0fec',
    'relationship_name' => 'securitygroups_eciu_crm_resources',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_resources',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_user_actions_eciu_crm_resources' => 
  array (
    'id' => '76e6acf9-c1ca-c959-3a24-5a425995de9b',
    'relationship_name' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
    'join_key_lhs' => 'eciu_crm_rf9fdsources_ida',
    'join_key_rhs' => 'eciu_crm_r82bfactions_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_resource_types' => 
  array (
    'id' => '7a37b0de-c3ad-4790-a8f9-5a425926ad7a',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_resource_types',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_resource_types_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_resource_typeseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_re25ae_types_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_denominations' => 
  array (
    'id' => '7aca9a6c-46e6-44bb-ae40-5a42596042d1',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_denominations',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_denominations_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_r19cfnations_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_sgt' => 
  array (
    'id' => '7b0cd2e6-c87b-2361-b291-5a4259fe9bfd',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_sgt',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_sgt_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_sgt_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_badges' => 
  array (
    'id' => '7b9e9f7f-c0bd-9330-0dd3-5a4259c102cd',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_badges',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_badges_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_badges_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_tracks' => 
  array (
    'id' => '7be2a70d-743c-2549-e155-5a425996e32c',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_tracks',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_tracks_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_tracks_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_eciu_crm_ddc' => 
  array (
    'id' => '7cfb31ce-b6c6-9660-7a56-5a4259815b07',
    'relationship_name' => 'eciu_crm_resources_eciu_crm_ddc',
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'id',
    'join_table' => 'eciu_crm_resources_eciu_crm_ddc_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_ddc_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'eciu_crm_resources_res_reviews_1' => 
  array (
    'rhs_label' => 'Reviews',
    'lhs_label' => 'Resources',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'ECiu_crm_resources',
    'rhs_module' => 'res_Reviews',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'eciu_crm_resources_res_reviews_1',
  ),
);