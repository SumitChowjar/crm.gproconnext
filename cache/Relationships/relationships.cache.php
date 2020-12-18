<?php 
 $relationships = array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'user_id',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_project_task_rel' => 
  array (
    'name' => 'emails_project_task_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_projects_rel' => 
  array (
    'name' => 'emails_projects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'campaign_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'projects_bugs' => 
  array (
    'name' => 'projects_bugs',
    'table' => 'projects_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_bugs_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_bug_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_bugs_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_bugs' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_bugs',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_bugs',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'bug_id',
  ),
  'projects_cases' => 
  array (
    'name' => 'projects_cases',
    'table' => 'projects_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_case_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_cases' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_cases',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_cases',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'case_id',
  ),
  'projects_products' => 
  array (
    'name' => 'projects_products',
    'table' => 'projects_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_products_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_prod_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_prod_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_products_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_products' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
  ),
  'projects_contacts' => 
  array (
    'name' => 'projects_contacts',
    'table' => 'projects_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_con_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_con_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_contacts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_contacts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_contacts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'contact_id',
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'leads_documents' => 
  array (
    'name' => 'leads_documents',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'aok_knowledgebase_categories' => 
  array (
    'name' => 'aok_knowledgebase_categories',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aok_knowledgebase_categories' => 
      array (
        'lhs_module' => 'AOK_KnowledgeBase',
        'lhs_table' => 'aok_knowledgebase',
        'lhs_key' => 'id',
        'rhs_module' => 'AOK_Knowledge_Base_Categories',
        'rhs_table' => 'aok_knowledge_base_categories',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aok_knowledgebase_categories',
        'join_key_lhs' => 'aok_knowledgebase_id',
        'join_key_rhs' => 'aok_knowledge_base_categories_id',
      ),
    ),
    'table' => 'aok_knowledgebase_categories',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aok_knowledgebase_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aok_knowledge_base_categories_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aok_knowledgebase_categoriesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aok_knowledgebase_categories_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aok_knowledgebase_id',
          1 => 'aok_knowledge_base_categories_id',
        ),
      ),
    ),
    'lhs_module' => 'AOK_KnowledgeBase',
    'lhs_table' => 'aok_knowledgebase',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aok_knowledgebase_categories',
    'join_key_lhs' => 'aok_knowledgebase_id',
    'join_key_rhs' => 'aok_knowledge_base_categories_id',
  ),
  'am_projecttemplates_project_1' => 
  array (
    'name' => 'am_projecttemplates_project_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_project_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Project',
        'rhs_table' => 'project',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_project_1_c',
        'join_key_lhs' => 'am_projecttemplates_project_1am_projecttemplates_ida',
        'join_key_rhs' => 'am_projecttemplates_project_1project_idb',
      ),
    ),
    'table' => 'am_projecttemplates_project_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'am_projecttemplates_project_1project_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_project_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_project_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'am_projecttemplates_project_1am_projecttemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'am_projecttemplates_project_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_project_1project_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_project_1_c',
    'join_key_lhs' => 'am_projecttemplates_project_1am_projecttemplates_ida',
    'join_key_rhs' => 'am_projecttemplates_project_1project_idb',
  ),
  'am_projecttemplates_contacts_1' => 
  array (
    'name' => 'am_projecttemplates_contacts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_contacts_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_contacts_1_c',
        'join_key_lhs' => 'am_projecttemplates_ida',
        'join_key_rhs' => 'contacts_idb',
      ),
    ),
    'table' => 'am_projecttemplates_contacts_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_contacts_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_contacts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_ida',
          1 => 'contacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_contacts_1_c',
    'join_key_lhs' => 'am_projecttemplates_ida',
    'join_key_rhs' => 'contacts_idb',
  ),
  'am_projecttemplates_users_1' => 
  array (
    'name' => 'am_projecttemplates_users_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_users_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_users_1_c',
        'join_key_lhs' => 'am_projecttemplates_ida',
        'join_key_rhs' => 'users_idb',
      ),
    ),
    'table' => 'am_projecttemplates_users_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'users_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_users_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_users_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_ida',
          1 => 'users_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_users_1_c',
    'join_key_lhs' => 'am_projecttemplates_ida',
    'join_key_rhs' => 'users_idb',
  ),
  'am_tasktemplates_am_projecttemplates' => 
  array (
    'name' => 'am_tasktemplates_am_projecttemplates',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'am_tasktemplates_am_projecttemplates' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'AM_TaskTemplates',
        'rhs_table' => 'am_tasktemplates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_tasktemplates_am_projecttemplates_c',
        'join_key_lhs' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        'join_key_rhs' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
      ),
    ),
    'table' => 'am_tasktemplates_am_projecttemplates_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplates_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplates_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_tasktemplates_am_projecttemplates_c',
    'join_key_lhs' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
    'join_key_rhs' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
  ),
  'aos_contracts_documents' => 
  array (
    'name' => 'aos_contracts_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_contracts_documents' => 
      array (
        'lhs_module' => 'AOS_Contracts',
        'lhs_table' => 'aos_contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_contracts_documents',
        'join_key_lhs' => 'aos_contracts_id',
        'join_key_rhs' => 'documents_id',
      ),
    ),
    'table' => 'aos_contracts_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_contracts_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'documents_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_contracts_documentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_contracts_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_contracts_id',
          1 => 'documents_id',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_contracts_documents',
    'join_key_lhs' => 'aos_contracts_id',
    'join_key_rhs' => 'documents_id',
  ),
  'aos_quotes_aos_contracts' => 
  array (
    'name' => 'aos_quotes_aos_contracts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_aos_contracts' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'AOS_Contracts',
        'rhs_table' => 'aos_contracts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_os_contracts_c',
        'join_key_lhs' => 'aos_quotese81e_quotes_ida',
        'join_key_rhs' => 'aos_quotes4dc0ntracts_idb',
      ),
    ),
    'table' => 'aos_quotes_os_contracts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotese81e_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes4dc0ntracts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_aos_contractsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_aos_contracts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotese81e_quotes_ida',
          1 => 'aos_quotes4dc0ntracts_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_os_contracts_c',
    'join_key_lhs' => 'aos_quotese81e_quotes_ida',
    'join_key_rhs' => 'aos_quotes4dc0ntracts_idb',
  ),
  'aos_quotes_aos_invoices' => 
  array (
    'name' => 'aos_quotes_aos_invoices',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_aos_invoices' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'AOS_Invoices',
        'rhs_table' => 'aos_invoices',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_aos_invoices_c',
        'join_key_lhs' => 'aos_quotes77d9_quotes_ida',
        'join_key_rhs' => 'aos_quotes6b83nvoices_idb',
      ),
    ),
    'table' => 'aos_quotes_aos_invoices_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotes77d9_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes6b83nvoices_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_aos_invoicesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_aos_invoices_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotes77d9_quotes_ida',
          1 => 'aos_quotes6b83nvoices_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_aos_invoices_c',
    'join_key_lhs' => 'aos_quotes77d9_quotes_ida',
    'join_key_rhs' => 'aos_quotes6b83nvoices_idb',
  ),
  'aos_quotes_project' => 
  array (
    'name' => 'aos_quotes_project',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_project' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'Project',
        'rhs_table' => 'project',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_project_c',
        'join_key_lhs' => 'aos_quotes1112_quotes_ida',
        'join_key_rhs' => 'aos_quotes7207project_idb',
      ),
    ),
    'table' => 'aos_quotes_project_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotes1112_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes7207project_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_projectspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_project_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotes1112_quotes_ida',
          1 => 'aos_quotes7207project_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_project_c',
    'join_key_lhs' => 'aos_quotes1112_quotes_ida',
    'join_key_rhs' => 'aos_quotes7207project_idb',
  ),
  'aow_processed_aow_actions' => 
  array (
    'name' => 'aow_processed_aow_actions',
    'table' => 'aow_processed_aow_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'aow_processed_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'aow_action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'status',
        'type' => 'varchar',
        'len' => '36',
        'default' => 'Pending',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aow_processed_aow_actionsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aow_processed_aow_actions',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aow_processed_id',
          1 => 'aow_action_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_actid_del_freid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'aow_action_id',
          1 => 'deleted',
          2 => 'aow_processed_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'aow_processed_aow_actions' => 
      array (
        'lhs_module' => 'AOW_Processed',
        'lhs_table' => 'aow_processed',
        'lhs_key' => 'id',
        'rhs_module' => 'AOW_Actions',
        'rhs_table' => 'aow_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aow_processed_aow_actions',
        'join_key_lhs' => 'aow_processed_id',
        'join_key_rhs' => 'aow_action_id',
      ),
    ),
    'lhs_module' => 'AOW_Processed',
    'lhs_table' => 'aow_processed',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aow_processed_aow_actions',
    'join_key_lhs' => 'aow_processed_id',
    'join_key_rhs' => 'aow_action_id',
  ),
  'fp_event_locations_fp_events_1' => 
  array (
    'name' => 'fp_event_locations_fp_events_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_event_locations_fp_events_1' => 
      array (
        'lhs_module' => 'FP_Event_Locations',
        'lhs_table' => 'fp_event_locations',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_events',
        'rhs_table' => 'fp_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_event_locations_fp_events_1_c',
        'join_key_lhs' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        'join_key_rhs' => 'fp_event_locations_fp_events_1fp_events_idb',
      ),
    ),
    'table' => 'fp_event_locations_fp_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_event_locations_fp_events_1fp_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_event_locations_fp_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_event_locations_fp_events_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'fp_event_locations_fp_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_event_locations_fp_events_1fp_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_Event_Locations',
    'lhs_table' => 'fp_event_locations',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_event_locations_fp_events_1_c',
    'join_key_lhs' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
    'join_key_rhs' => 'fp_event_locations_fp_events_1fp_events_idb',
  ),
  'fp_events_contacts' => 
  array (
    'name' => 'fp_events_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'fp_events_contacts' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_contacts_c',
        'join_key_lhs' => 'fp_events_contactsfp_events_ida',
        'join_key_rhs' => 'fp_events_contactscontacts_idb',
      ),
    ),
    'table' => 'fp_events_contacts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_contactsfp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_contactscontacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_contactsfp_events_ida',
          1 => 'fp_events_contactscontacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_contacts_c',
    'join_key_lhs' => 'fp_events_contactsfp_events_ida',
    'join_key_rhs' => 'fp_events_contactscontacts_idb',
  ),
  'fp_events_fp_event_delegates_1' => 
  array (
    'name' => 'fp_events_fp_event_delegates_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_fp_event_delegates_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_Event_delegates',
        'rhs_table' => 'fp_event_delegates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_fp_event_delegates_1_c',
        'join_key_lhs' => 'fp_events_fp_event_delegates_1fp_events_ida',
        'join_key_rhs' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
      ),
    ),
    'table' => 'fp_events_fp_event_delegates_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_delegates_1fp_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_delegates',
    'rhs_table' => 'fp_event_delegates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_fp_event_delegates_1_c',
    'join_key_lhs' => 'fp_events_fp_event_delegates_1fp_events_ida',
    'join_key_rhs' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
  ),
  'fp_events_fp_event_locations_1' => 
  array (
    'name' => 'fp_events_fp_event_locations_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_fp_event_locations_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_Event_Locations',
        'rhs_table' => 'fp_event_locations',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_fp_event_locations_1_c',
        'join_key_lhs' => 'fp_events_fp_event_locations_1fp_events_ida',
        'join_key_rhs' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
      ),
    ),
    'table' => 'fp_events_fp_event_locations_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_fp_event_locations_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_fp_event_locations_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_fp_event_locations_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_locations_1fp_events_ida',
          1 => 'fp_events_fp_event_locations_1fp_event_locations_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_fp_event_locations_1_c',
    'join_key_lhs' => 'fp_events_fp_event_locations_1fp_events_ida',
    'join_key_rhs' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
  ),
  'fp_events_leads_1' => 
  array (
    'name' => 'fp_events_leads_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_leads_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_leads_1_c',
        'join_key_lhs' => 'fp_events_leads_1fp_events_ida',
        'join_key_rhs' => 'fp_events_leads_1leads_idb',
      ),
    ),
    'table' => 'fp_events_leads_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_leads_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_leads_1leads_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_leads_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_leads_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_leads_1fp_events_ida',
          1 => 'fp_events_leads_1leads_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_leads_1_c',
    'join_key_lhs' => 'fp_events_leads_1fp_events_ida',
    'join_key_rhs' => 'fp_events_leads_1leads_idb',
  ),
  'fp_events_prospects_1' => 
  array (
    'name' => 'fp_events_prospects_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_prospects_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Prospects',
        'rhs_table' => 'prospects',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_prospects_1_c',
        'join_key_lhs' => 'fp_events_prospects_1fp_events_ida',
        'join_key_rhs' => 'fp_events_prospects_1prospects_idb',
      ),
    ),
    'table' => 'fp_events_prospects_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_prospects_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_prospects_1prospects_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_prospects_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_prospects_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_prospects_1fp_events_ida',
          1 => 'fp_events_prospects_1prospects_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_prospects_1_c',
    'join_key_lhs' => 'fp_events_prospects_1fp_events_ida',
    'join_key_rhs' => 'fp_events_prospects_1prospects_idb',
  ),
  'jjwg_maps_jjwg_areas' => 
  array (
    'name' => 'jjwg_maps_jjwg_areas',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'jjwg_maps_jjwg_areas' => 
      array (
        'lhs_module' => 'jjwg_Maps',
        'lhs_table' => 'jjwg_maps',
        'lhs_key' => 'id',
        'rhs_module' => 'jjwg_Areas',
        'rhs_table' => 'jjwg_areas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jjwg_maps_jjwg_areas_c',
        'join_key_lhs' => 'jjwg_maps_5304wg_maps_ida',
        'join_key_rhs' => 'jjwg_maps_41f2g_areas_idb',
      ),
    ),
    'table' => 'jjwg_maps_jjwg_areas_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'jjwg_maps_5304wg_maps_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'jjwg_maps_41f2g_areas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jjwg_maps_jjwg_areasspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jjwg_maps_jjwg_areas_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jjwg_maps_5304wg_maps_ida',
          1 => 'jjwg_maps_41f2g_areas_idb',
        ),
      ),
    ),
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_maps',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jjwg_maps_jjwg_areas_c',
    'join_key_lhs' => 'jjwg_maps_5304wg_maps_ida',
    'join_key_rhs' => 'jjwg_maps_41f2g_areas_idb',
  ),
  'jjwg_maps_jjwg_markers' => 
  array (
    'name' => 'jjwg_maps_jjwg_markers',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'jjwg_maps_jjwg_markers' => 
      array (
        'lhs_module' => 'jjwg_Maps',
        'lhs_table' => 'jjwg_maps',
        'lhs_key' => 'id',
        'rhs_module' => 'jjwg_Markers',
        'rhs_table' => 'jjwg_markers',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jjwg_maps_jjwg_markers_c',
        'join_key_lhs' => 'jjwg_maps_b229wg_maps_ida',
        'join_key_rhs' => 'jjwg_maps_2e31markers_idb',
      ),
    ),
    'table' => 'jjwg_maps_jjwg_markers_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'jjwg_maps_b229wg_maps_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'jjwg_maps_2e31markers_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jjwg_maps_jjwg_markersspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jjwg_maps_jjwg_markers_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jjwg_maps_b229wg_maps_ida',
          1 => 'jjwg_maps_2e31markers_idb',
        ),
      ),
    ),
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_maps',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jjwg_maps_jjwg_markers_c',
    'join_key_lhs' => 'jjwg_maps_b229wg_maps_ida',
    'join_key_rhs' => 'jjwg_maps_2e31markers_idb',
  ),
  'project_contacts_1' => 
  array (
    'name' => 'project_contacts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'project_contacts_1' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'project_contacts_1_c',
        'join_key_lhs' => 'project_contacts_1project_ida',
        'join_key_rhs' => 'project_contacts_1contacts_idb',
      ),
    ),
    'table' => 'project_contacts_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'project_contacts_1project_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'project_contacts_1contacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'project_contacts_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'project_contacts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_contacts_1project_ida',
          1 => 'project_contacts_1contacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_contacts_1_c',
    'join_key_lhs' => 'project_contacts_1project_ida',
    'join_key_rhs' => 'project_contacts_1contacts_idb',
  ),
  'project_users_1' => 
  array (
    'name' => 'project_users_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'project_users_1' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'project_users_1_c',
        'join_key_lhs' => 'project_users_1project_ida',
        'join_key_rhs' => 'project_users_1users_idb',
      ),
    ),
    'table' => 'project_users_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'project_users_1project_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'project_users_1users_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'project_users_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'project_users_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_users_1project_ida',
          1 => 'project_users_1users_idb',
        ),
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_users_1_c',
    'join_key_lhs' => 'project_users_1project_ida',
    'join_key_rhs' => 'project_users_1users_idb',
  ),
  'securitygroups_acl_roles' => 
  array (
    'name' => 'securitygroups_acl_roles',
    'table' => 'securitygroups_acl_roles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'role_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'securitygroups_acl_rolespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'securitygroups_acl_roles' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLRoles',
        'rhs_table' => 'acl_roles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_acl_roles',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'role_id',
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoles',
    'rhs_table' => 'acl_roles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_acl_roles',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'role_id',
  ),
  'securitygroups_accounts' => 
  array (
    'name' => 'securitygroups_accounts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_bugs' => 
  array (
    'name' => 'securitygroups_bugs',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_calls' => 
  array (
    'name' => 'securitygroups_calls',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Calls',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_campaigns' => 
  array (
    'name' => 'securitygroups_campaigns',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_cases' => 
  array (
    'name' => 'securitygroups_cases',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_contacts' => 
  array (
    'name' => 'securitygroups_contacts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_documents' => 
  array (
    'name' => 'securitygroups_documents',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_emails' => 
  array (
    'name' => 'securitygroups_emails',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Emails',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_emailtemplates' => 
  array (
    'name' => 'securitygroups_emailtemplates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EmailTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_leads' => 
  array (
    'name' => 'securitygroups_leads',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_meetings' => 
  array (
    'name' => 'securitygroups_meetings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Meetings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_notes' => 
  array (
    'name' => 'securitygroups_notes',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_opportunities' => 
  array (
    'name' => 'securitygroups_opportunities',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_project' => 
  array (
    'name' => 'securitygroups_project',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_project_task' => 
  array (
    'name' => 'securitygroups_project_task',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_prospect_lists' => 
  array (
    'name' => 'securitygroups_prospect_lists',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProspectLists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_prospects' => 
  array (
    'name' => 'securitygroups_prospects',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_tasks' => 
  array (
    'name' => 'securitygroups_tasks',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_users' => 
  array (
    'name' => 'securitygroups_users',
    'table' => 'securitygroups_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'primary_group',
        'vname' => 'LBL_PRIMARY_GROUP',
        'type' => 'bool',
        'reportable' => false,
        'comment' => 'Drives which custom layout to show if a user is a member of more than 1 group',
      ),
      6 => 
      array (
        'name' => 'noninheritable',
        'vname' => 'LBL_NONINHERITABLE',
        'type' => 'bool',
        'reportable' => false,
        'default' => '0',
        'comment' => 'Indicator for whether a group can be inherited by a record',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'securitygroups_usersspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'securitygroups_users_idxa',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'securitygroup_id',
        ),
      ),
      2 => 
      array (
        'name' => 'securitygroups_users_idxb',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'securitygroups_users_idxc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'deleted',
          2 => 'securitygroup_id',
          3 => 'id',
        ),
      ),
      4 => 
      array (
        'name' => 'securitygroups_users_idxd',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'deleted',
          2 => 'securitygroup_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'securitygroups_users' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_users',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_users',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'user_id',
  ),
  'eciu_crm_training_actuals_eciu_crm_language_list' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_language_list',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_language_list' => 
      array (
        'lhs_module' => 'ECiu_crm_language_list',
        'lhs_table' => 'eciu_crm_language_list',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_language_list_c',
        'join_key_lhs' => 'eciu_crm_te07cge_list_ida',
        'join_key_rhs' => 'eciu_crm_t3c02actuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_language_list_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_te07cge_list_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t3c02actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_language_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_language_list_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_te07cge_list_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_language_list_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t3c02actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_language_list',
    'lhs_table' => 'eciu_crm_language_list',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_language_list_c',
    'join_key_lhs' => 'eciu_crm_te07cge_list_ida',
    'join_key_rhs' => 'eciu_crm_t3c02actuals_idb',
  ),
  'accounts_eciu_crm_training_actuals_1' => 
  array (
    'name' => 'accounts_eciu_crm_training_actuals_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'accounts_eciu_crm_training_actuals_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_eciu_crm_training_actuals_1_c',
        'join_key_lhs' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
        'join_key_rhs' => 'accounts_e9979actuals_idb',
      ),
    ),
    'table' => 'accounts_eciu_crm_training_actuals_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_e9979actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_eciu_crm_training_actuals_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_eciu_crm_training_actuals_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_eciu_crm_training_actuals_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_eciu_crm_training_actuals_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_e9979actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_eciu_crm_training_actuals_1_c',
    'join_key_lhs' => 'accounts_eciu_crm_training_actuals_1accounts_ida',
    'join_key_rhs' => 'accounts_e9979actuals_idb',
  ),
  'eciu_crm_training_actuals_eciu_crm_methodologies' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_methodologies' => 
      array (
        'lhs_module' => 'ECiu_crm_methodologies',
        'lhs_table' => 'eciu_crm_methodologies',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_methodologies_c',
        'join_key_lhs' => 'eciu_crm_td654ologies_ida',
        'join_key_rhs' => 'eciu_crm_t09b8actuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_methodologies_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_td654ologies_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t09b8actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_methodologiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_td654ologies_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_methodologies_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t09b8actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_methodologies',
    'lhs_table' => 'eciu_crm_methodologies',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_methodologies_c',
    'join_key_lhs' => 'eciu_crm_td654ologies_ida',
    'join_key_rhs' => 'eciu_crm_t09b8actuals_idb',
  ),
  'leads_eciu_crm_training_goals_1' => 
  array (
    'name' => 'leads_eciu_crm_training_goals_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'leads_eciu_crm_training_goals_1' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_goals',
        'rhs_table' => 'eciu_crm_training_goals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_eciu_crm_training_goals_1_c',
        'join_key_lhs' => 'leads_eciu_crm_training_goals_1leads_ida',
        'join_key_rhs' => 'leads_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
      ),
    ),
    'table' => 'leads_eciu_crm_training_goals_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'leads_eciu_crm_training_goals_1leads_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'leads_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_eciu_crm_training_goals_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'leads_eciu_crm_training_goals_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'leads_eciu_crm_training_goals_1leads_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'leads_eciu_crm_training_goals_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'leads_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_eciu_crm_training_goals_1_c',
    'join_key_lhs' => 'leads_eciu_crm_training_goals_1leads_ida',
    'join_key_rhs' => 'leads_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
  ),
  'eciu_crm_resources_eciu_crm_tracks' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_tracks',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_tracks' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_tracks',
        'rhs_table' => 'eciu_crm_tracks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_tracks_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_tracks_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_tracks_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_tracks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_tracksspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_tracks_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_trackseciu_crm_resources_ida',
          1 => 'eciu_crm_resources_eciu_crm_trackseciu_crm_tracks_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_tracks_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_trackseciu_crm_tracks_idb',
  ),
  'eciu_crm_resources_eciu_crm_sgt' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_sgt',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_sgt' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_sgt',
        'rhs_table' => 'eciu_crm_sgt',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_sgt_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_sgt_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_sgt_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_sgt_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_sgtspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_sgt_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_sgteciu_crm_resources_ida',
          1 => 'eciu_crm_resources_eciu_crm_sgteciu_crm_sgt_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_sgt_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_sgteciu_crm_sgt_idb',
  ),
  'leads_eciu_crm_training_actuals_1' => 
  array (
    'name' => 'leads_eciu_crm_training_actuals_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'leads_eciu_crm_training_actuals_1' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_eciu_crm_training_actuals_1_c',
        'join_key_lhs' => 'leads_eciu_crm_training_actuals_1leads_ida',
        'join_key_rhs' => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
      ),
    ),
    'table' => 'leads_eciu_crm_training_actuals_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'leads_eciu_crm_training_actuals_1leads_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_eciu_crm_training_actuals_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'leads_eciu_crm_training_actuals_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'leads_eciu_crm_training_actuals_1leads_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'leads_eciu_crm_training_actuals_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_eciu_crm_training_actuals_1_c',
    'join_key_lhs' => 'leads_eciu_crm_training_actuals_1leads_ida',
    'join_key_rhs' => 'leads_eciu_crm_training_actuals_1eciu_crm_training_actuals_idb',
  ),
  'eciu_crm_training_actuals_eciu_crm_countries' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_countries',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_countries' => 
      array (
        'lhs_module' => 'ECiu_crm_countries',
        'lhs_table' => 'eciu_crm_countries',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_countries_c',
        'join_key_lhs' => 'eciu_crm_t61eauntries_ida',
        'join_key_rhs' => 'eciu_crm_t3e23actuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_countries_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_t61eauntries_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t3e23actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_countriesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_countries_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_t61eauntries_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_countries_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t3e23actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_countries',
    'lhs_table' => 'eciu_crm_countries',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_countries_c',
    'join_key_lhs' => 'eciu_crm_t61eauntries_ida',
    'join_key_rhs' => 'eciu_crm_t3e23actuals_idb',
  ),
  'eciu_crm_training_actuals_eciu_crm_degree_levels' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_degree_levels' => 
      array (
        'lhs_module' => 'ECiu_crm_degree_levels',
        'lhs_table' => 'eciu_crm_degree_levels',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_c',
        'join_key_lhs' => 'eciu_crm_t341a_levels_ida',
        'join_key_rhs' => 'eciu_crm_t5c0cactuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_t341a_levels_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t5c0cactuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levelsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_t341a_levels_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t5c0cactuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_degree_levels',
    'lhs_table' => 'eciu_crm_degree_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_degree_levels_c',
    'join_key_lhs' => 'eciu_crm_t341a_levels_ida',
    'join_key_rhs' => 'eciu_crm_t5c0cactuals_idb',
  ),
  'contacts_tra_recieved_1' => 
  array (
    'name' => 'contacts_tra_recieved_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_tra_recieved_1' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'tra_Recieved',
        'rhs_table' => 'tra_recieved',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_tra_recieved_1_c',
        'join_key_lhs' => 'contacts_tra_recieved_1contacts_ida',
        'join_key_rhs' => 'contacts_tra_recieved_1tra_recieved_idb',
      ),
    ),
    'table' => 'contacts_tra_recieved_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'contacts_tra_recieved_1contacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_tra_recieved_1tra_recieved_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_tra_recieved_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contacts_tra_recieved_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_tra_recieved_1contacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'contacts_tra_recieved_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_tra_recieved_1tra_recieved_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'tra_Recieved',
    'rhs_table' => 'tra_recieved',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_tra_recieved_1_c',
    'join_key_lhs' => 'contacts_tra_recieved_1contacts_ida',
    'join_key_rhs' => 'contacts_tra_recieved_1tra_recieved_idb',
  ),
  'contacts_eciu_crm_resources_1' => 
  array (
    'name' => 'contacts_eciu_crm_resources_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_eciu_crm_resources_1' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resources',
        'rhs_table' => 'eciu_crm_resources',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_eciu_crm_resources_1_c',
        'join_key_lhs' => 'contacts_eciu_crm_resources_1contacts_ida',
        'join_key_rhs' => 'contacts_eciu_crm_resources_1eciu_crm_resources_idb',
      ),
    ),
    'table' => 'contacts_eciu_crm_resources_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'contacts_eciu_crm_resources_1contacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_eciu_crm_resources_1eciu_crm_resources_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_eciu_crm_resources_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contacts_eciu_crm_resources_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_eciu_crm_resources_1contacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'contacts_eciu_crm_resources_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_eciu_crm_resources_1eciu_crm_resources_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_eciu_crm_resources_1_c',
    'join_key_lhs' => 'contacts_eciu_crm_resources_1contacts_ida',
    'join_key_rhs' => 'contacts_eciu_crm_resources_1eciu_crm_resources_idb',
  ),
  'accounts_eciu_crm_resources_1' => 
  array (
    'name' => 'accounts_eciu_crm_resources_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_eciu_crm_resources_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resources',
        'rhs_table' => 'eciu_crm_resources',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_eciu_crm_resources_1_c',
        'join_key_lhs' => 'accounts_eciu_crm_resources_1accounts_ida',
        'join_key_rhs' => 'accounts_eciu_crm_resources_1eciu_crm_resources_idb',
      ),
    ),
    'table' => 'accounts_eciu_crm_resources_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_eciu_crm_resources_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_eciu_crm_resources_1eciu_crm_resources_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_eciu_crm_resources_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_eciu_crm_resources_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_eciu_crm_resources_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_eciu_crm_resources_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_eciu_crm_resources_1eciu_crm_resources_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_eciu_crm_resources_1_c',
    'join_key_lhs' => 'accounts_eciu_crm_resources_1accounts_ida',
    'join_key_rhs' => 'accounts_eciu_crm_resources_1eciu_crm_resources_idb',
  ),
  'eciu_crm_resources_eciu_crm_denominations' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_denominations',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_denominations' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_denominations',
        'rhs_table' => 'eciu_crm_denominations',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_denominations_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_r19cfnations_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_denominations_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_r19cfnations_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_denominationsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_denominations_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
          1 => 'eciu_crm_r19cfnations_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_denominations_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_denominationseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_r19cfnations_idb',
  ),
  'eciu_crm_resources_res_reviews_1' => 
  array (
    'name' => 'eciu_crm_resources_res_reviews_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'eciu_crm_resources_res_reviews_1' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'res_Reviews',
        'rhs_table' => 'res_reviews',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_res_reviews_1_c',
        'join_key_lhs' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_res_reviews_1res_reviews_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_res_reviews_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_res_reviews_1res_reviews_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_res_reviews_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_res_reviews_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_resources_res_reviews_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_res_reviews_1res_reviews_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'res_Reviews',
    'rhs_table' => 'res_reviews',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_res_reviews_1_c',
    'join_key_lhs' => 'eciu_crm_resources_res_reviews_1eciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_res_reviews_1res_reviews_idb',
  ),
  'gpro_courses_eciu_crm_resources' => 
  array (
    'name' => 'gpro_courses_eciu_crm_resources',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'gpro_courses_eciu_crm_resources' => 
      array (
        'lhs_module' => 'gpro_Courses',
        'lhs_table' => 'gpro_courses',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resources',
        'rhs_table' => 'eciu_crm_resources',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gpro_courses_eciu_crm_resources_c',
        'join_key_lhs' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
        'join_key_rhs' => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
      ),
    ),
    'table' => 'gpro_courses_eciu_crm_resources_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'order_no',
        'type' => 'int',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gpro_courses_eciu_crm_resourcesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gpro_courses_eciu_crm_resources_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gpro_courses_eciu_crm_resources_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
        ),
      ),
    ),
    'lhs_module' => 'gpro_Courses',
    'lhs_table' => 'gpro_courses',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gpro_courses_eciu_crm_resources_c',
    'join_key_lhs' => 'gpro_courses_eciu_crm_resourcesgpro_courses_ida',
    'join_key_rhs' => 'gpro_courses_eciu_crm_resourceseciu_crm_resources_idb',
  ),
  'eciu_crm_training_goals_contacts' => 
  array (
    'name' => 'eciu_crm_training_goals_contacts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_goals_contacts' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_goals',
        'rhs_table' => 'eciu_crm_training_goals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_goals_contacts_c',
        'join_key_lhs' => 'eciu_crm_training_goals_contactscontacts_ida',
        'join_key_rhs' => 'eciu_crm_training_goals_contactseciu_crm_training_goals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_goals_contacts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_training_goals_contactscontacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_training_goals_contactseciu_crm_training_goals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_goals_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_goals_contacts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_training_goals_contactscontacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_goals_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_training_goals_contactseciu_crm_training_goals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_goals_contacts_c',
    'join_key_lhs' => 'eciu_crm_training_goals_contactscontacts_ida',
    'join_key_rhs' => 'eciu_crm_training_goals_contactseciu_crm_training_goals_idb',
  ),
  'eciu_crm_resources_eciu_crm_badges' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_badges',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_badges' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_badges',
        'rhs_table' => 'eciu_crm_badges',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_badges_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_badges_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_badges_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_badges_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_badgesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_badges_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_resources_ida',
          1 => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_badges_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_badges_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_badgeseciu_crm_badges_idb',
  ),
  'eciu_crm_resources_eciu_crm_ddc' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_ddc',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_ddc' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_ddc',
        'rhs_table' => 'eciu_crm_ddc',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_ddc_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_ddc_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_ddc_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_ddc_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_ddcspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_ddc_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_ddceciu_crm_resources_ida',
          1 => 'eciu_crm_resources_eciu_crm_ddceciu_crm_ddc_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_ddc_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_ddceciu_crm_ddc_idb',
  ),
  'eciu_crm_training_actuals_am_projecttemplates' => 
  array (
    'name' => 'eciu_crm_training_actuals_am_projecttemplates',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_am_projecttemplates' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_am_projecttemplates_c',
        'join_key_lhs' => 'eciu_crm_tdbc8mplates_ida',
        'join_key_rhs' => 'eciu_crm_t534bactuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_am_projecttemplates_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_tdbc8mplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t534bactuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_am_projecttemplatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_am_projecttemplates_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_tdbc8mplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_am_projecttemplates_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t534bactuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_am_projecttemplates_c',
    'join_key_lhs' => 'eciu_crm_tdbc8mplates_ida',
    'join_key_rhs' => 'eciu_crm_t534bactuals_idb',
  ),
  'accounts_eciu_crm_training_goals_1' => 
  array (
    'name' => 'accounts_eciu_crm_training_goals_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_eciu_crm_training_goals_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_goals',
        'rhs_table' => 'eciu_crm_training_goals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_eciu_crm_training_goals_1_c',
        'join_key_lhs' => 'accounts_eciu_crm_training_goals_1accounts_ida',
        'join_key_rhs' => 'accounts_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
      ),
    ),
    'table' => 'accounts_eciu_crm_training_goals_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_eciu_crm_training_goals_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_eciu_crm_training_goals_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_eciu_crm_training_goals_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_eciu_crm_training_goals_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_eciu_crm_training_goals_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_eciu_crm_training_goals_1_c',
    'join_key_lhs' => 'accounts_eciu_crm_training_goals_1accounts_ida',
    'join_key_rhs' => 'accounts_eciu_crm_training_goals_1eciu_crm_training_goals_idb',
  ),
  'eciu_crm_training_actuals_contacts' => 
  array (
    'name' => 'eciu_crm_training_actuals_contacts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_contacts' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_contacts_c',
        'join_key_lhs' => 'eciu_crm_training_actuals_contactscontacts_ida',
        'join_key_rhs' => 'eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_contacts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_training_actuals_contactscontacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_contacts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_training_actuals_contactscontacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_contacts_c',
    'join_key_lhs' => 'eciu_crm_training_actuals_contactscontacts_ida',
    'join_key_rhs' => 'eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb',
  ),
  'eciu_crm_training_actuals_eciu_crm_tracks' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_tracks',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_tracks' => 
      array (
        'lhs_module' => 'ECiu_crm_tracks',
        'lhs_table' => 'eciu_crm_tracks',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_tracks_c',
        'join_key_lhs' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
        'join_key_rhs' => 'eciu_crm_t5d8dactuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_tracks_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_t5d8dactuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_tracksspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_tracks_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_tracks_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_t5d8dactuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_tracks',
    'lhs_table' => 'eciu_crm_tracks',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_tracks_c',
    'join_key_lhs' => 'eciu_crm_training_actuals_eciu_crm_trackseciu_crm_tracks_ida',
    'join_key_rhs' => 'eciu_crm_t5d8dactuals_idb',
  ),
  'eciu_crm_training_actuals_eciu_crm_health_indicators' => 
  array (
    'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_training_actuals_eciu_crm_health_indicators' => 
      array (
        'lhs_module' => 'ECiu_crm_health_indicators',
        'lhs_table' => 'eciu_crm_health_indicators',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_training_actuals',
        'rhs_table' => 'eciu_crm_training_actuals',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_c',
        'join_key_lhs' => 'eciu_crm_t0682icators_ida',
        'join_key_rhs' => 'eciu_crm_tdbd3actuals_idb',
      ),
    ),
    'table' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_t0682icators_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_tdbd3actuals_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicatorsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_t0682icators_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_tdbd3actuals_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_health_indicators',
    'lhs_table' => 'eciu_crm_health_indicators',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_training_actuals_eciu_crm_health_indicators_c',
    'join_key_lhs' => 'eciu_crm_t0682icators_ida',
    'join_key_rhs' => 'eciu_crm_tdbd3actuals_idb',
  ),
  'eciu_crm_resources_user_actions_eciu_crm_resources' => 
  array (
    'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_user_actions_eciu_crm_resources' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resources_user_actions',
        'rhs_table' => 'eciu_crm_resources_user_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
        'join_key_lhs' => 'eciu_crm_rf9fdsources_ida',
        'join_key_rhs' => 'eciu_crm_r82bfactions_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_rf9fdsources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_r82bfactions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_eciu_crm_resourcesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_rf9fdsources_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_eciu_crm_resources_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_r82bfactions_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_user_actions_eciu_crm_resources_c',
    'join_key_lhs' => 'eciu_crm_rf9fdsources_ida',
    'join_key_rhs' => 'eciu_crm_r82bfactions_idb',
  ),
  'eciu_crm_resources_eciu_crm_resource_types' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_resource_types',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_resource_types' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resource_types',
        'rhs_table' => 'eciu_crm_resource_types',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_resource_types_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_resource_typeseciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_re25ae_types_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_resource_types_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_resource_typeseciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_re25ae_types_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_resource_typesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_resource_types_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_resource_typeseciu_crm_resources_ida',
          1 => 'eciu_crm_re25ae_types_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_resource_types_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_resource_typeseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_re25ae_types_idb',
  ),
  'eciu_crm_resources_user_actions_contacts' => 
  array (
    'name' => 'eciu_crm_resources_user_actions_contacts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_user_actions_contacts' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_resources_user_actions',
        'rhs_table' => 'eciu_crm_resources_user_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_user_actions_contacts_c',
        'join_key_lhs' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
        'join_key_rhs' => 'eciu_crm_r8e7aactions_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_user_actions_contacts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_r8e7aactions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_contacts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_user_actions_contactscontacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'eciu_crm_resources_user_actions_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_r8e7aactions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_user_actions_contacts_c',
    'join_key_lhs' => 'eciu_crm_resources_user_actions_contactscontacts_ida',
    'join_key_rhs' => 'eciu_crm_r8e7aactions_idb',
  ),
  'eciu_crm_resources_eciu_crm_languages' => 
  array (
    'name' => 'eciu_crm_resources_eciu_crm_languages',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'eciu_crm_resources_eciu_crm_languages' => 
      array (
        'lhs_module' => 'ECiu_crm_resources',
        'lhs_table' => 'eciu_crm_resources',
        'lhs_key' => 'id',
        'rhs_module' => 'ECiu_crm_languages',
        'rhs_table' => 'eciu_crm_languages',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'eciu_crm_resources_eciu_crm_languages_c',
        'join_key_lhs' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_resources_ida',
        'join_key_rhs' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_languages_idb',
      ),
    ),
    'table' => 'eciu_crm_resources_eciu_crm_languages_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_resources_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_languages_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_languagesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'eciu_crm_resources_eciu_crm_languages_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'eciu_crm_resources_eciu_crm_languageseciu_crm_resources_ida',
          1 => 'eciu_crm_resources_eciu_crm_languageseciu_crm_languages_idb',
        ),
      ),
    ),
    'lhs_module' => 'ECiu_crm_resources',
    'lhs_table' => 'eciu_crm_resources',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_languages',
    'rhs_table' => 'eciu_crm_languages',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'eciu_crm_resources_eciu_crm_languages_c',
    'join_key_lhs' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_resources_ida',
    'join_key_rhs' => 'eciu_crm_resources_eciu_crm_languageseciu_crm_languages_idb',
  ),
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignature',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'cases_created_contact' => 
  array (
    'name' => 'cases_created_contact',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'contact_created_by_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'prospectlists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_prospectlists' => 
  array (
    'name' => 'securitygroups_prospectlists',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProspectLists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'projects_notes' => 
  array (
    'name' => 'projects_notes',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_tasks' => 
  array (
    'name' => 'projects_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_meetings' => 
  array (
    'name' => 'projects_meetings',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_calls' => 
  array (
    'name' => 'projects_calls',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_emails' => 
  array (
    'name' => 'projects_emails',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_project_tasks' => 
  array (
    'name' => 'projects_project_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'project_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_assigned_user' => 
  array (
    'name' => 'projects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_modified_user' => 
  array (
    'name' => 'projects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_created_by' => 
  array (
    'name' => 'projects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_projecttask' => 
  array (
    'name' => 'securitygroups_projecttask',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'project_tasks_notes' => 
  array (
    'name' => 'project_tasks_notes',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_tasks' => 
  array (
    'name' => 'project_tasks_tasks',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_meetings' => 
  array (
    'name' => 'project_tasks_meetings',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_calls' => 
  array (
    'name' => 'project_tasks_calls',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_emails' => 
  array (
    'name' => 'project_tasks_emails',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_assigned_user' => 
  array (
    'name' => 'project_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_modified_user' => 
  array (
    'name' => 'project_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_created_by' => 
  array (
    'name' => 'project_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_created_opportunities' => 
  array (
    'name' => 'campaignlog_created_opportunities',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_targeted_users' => 
  array (
    'name' => 'campaignlog_targeted_users',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'target_id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_sent_emails' => 
  array (
    'name' => 'campaignlog_sent_emails',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'schedulers_modified_user_id_rel' => 
  array (
    'name' => 'schedulers_modified_user_id_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_jobs_rel' => 
  array (
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulersjobs_assigned_user' => 
  array (
    'name' => 'schedulersjobs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'schedulersjobs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_notes_parent' => 
  array (
    'name' => 'contact_notes_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_aos_quotes' => 
  array (
    'name' => 'contact_aos_quotes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'billing_contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_aos_invoices' => 
  array (
    'name' => 'contact_aos_invoices',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'billing_contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_aos_contracts' => 
  array (
    'name' => 'contact_aos_contracts',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_aop_case_updates' => 
  array (
    'name' => 'contacts_aop_case_updates',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_aos_quotes' => 
  array (
    'name' => 'account_aos_quotes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'billing_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_aos_invoices' => 
  array (
    'name' => 'account_aos_invoices',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'billing_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_aos_contracts' => 
  array (
    'name' => 'account_aos_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'contract_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_emails' => 
  array (
    'name' => 'opportunity_emails',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_currencies' => 
  array (
    'name' => 'opportunity_currencies',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'currency_id',
    'rhs_module' => 'Currencies',
    'rhs_table' => 'currencies',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_campaign' => 
  array (
    'name' => 'opportunities_campaign',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_aos_quotes' => 
  array (
    'name' => 'opportunity_aos_quotes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_aos_contracts' => 
  array (
    'name' => 'opportunity_aos_contracts',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'calls_reschedule' => 
  array (
    'name' => 'calls_reschedule',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'call_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_aos_contracts_rel' => 
  array (
    'name' => 'emails_aos_contracts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'AOS_Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_meetings_rel' => 
  array (
    'name' => 'emails_meetings_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'alerts_modified_user' => 
  array (
    'name' => 'alerts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'alerts_created_by' => 
  array (
    'name' => 'alerts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'alerts_assigned_user' => 
  array (
    'name' => 'alerts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'spots_modified_user' => 
  array (
    'name' => 'spots_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'spots_created_by' => 
  array (
    'name' => 'spots_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'spots_assigned_user' => 
  array (
    'name' => 'spots_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_spots' => 
  array (
    'name' => 'securitygroups_spots',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Spots',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aobh_businesshours_modified_user' => 
  array (
    'name' => 'aobh_businesshours_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOBH_BusinessHours',
    'rhs_table' => 'aobh_businesshours',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aobh_businesshours_created_by' => 
  array (
    'name' => 'aobh_businesshours_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOBH_BusinessHours',
    'rhs_table' => 'aobh_businesshours',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_modified_user' => 
  array (
    'name' => 'sugarfeed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_created_by' => 
  array (
    'name' => 'sugarfeed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_assigned_user' => 
  array (
    'name' => 'sugarfeed_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_modified_user' => 
  array (
    'name' => 'am_projecttemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_created_by' => 
  array (
    'name' => 'am_projecttemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_assigned_user' => 
  array (
    'name' => 'am_projecttemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_modified_user' => 
  array (
    'name' => 'am_tasktemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_created_by' => 
  array (
    'name' => 'am_tasktemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_assigned_user' => 
  array (
    'name' => 'am_tasktemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_modified_user' => 
  array (
    'name' => 'favorites_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_created_by' => 
  array (
    'name' => 'favorites_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_assigned_user' => 
  array (
    'name' => 'favorites_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_modified_user' => 
  array (
    'name' => 'aok_knowledge_base_categories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_created_by' => 
  array (
    'name' => 'aok_knowledge_base_categories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_assigned_user' => 
  array (
    'name' => 'aok_knowledge_base_categories_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_modified_user' => 
  array (
    'name' => 'aok_knowledgebase_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_created_by' => 
  array (
    'name' => 'aok_knowledgebase_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_assigned_user' => 
  array (
    'name' => 'aok_knowledgebase_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aok_knowledgebase' => 
  array (
    'name' => 'securitygroups_aok_knowledgebase',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOK_KnowledgeBase',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'reminders_modified_user' => 
  array (
    'name' => 'reminders_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_created_by' => 
  array (
    'name' => 'reminders_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_assigned_user' => 
  array (
    'name' => 'reminders_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_modified_user' => 
  array (
    'name' => 'reminders_invitees_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_created_by' => 
  array (
    'name' => 'reminders_invitees_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_assigned_user' => 
  array (
    'name' => 'reminders_invitees_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_modified_user' => 
  array (
    'name' => 'fp_events_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_created_by' => 
  array (
    'name' => 'fp_events_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_assigned_user' => 
  array (
    'name' => 'fp_events_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_fp_events' => 
  array (
    'name' => 'securitygroups_fp_events',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'FP_events',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'fp_event_locations_modified_user' => 
  array (
    'name' => 'fp_event_locations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_event_locations_created_by' => 
  array (
    'name' => 'fp_event_locations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'fp_event_locations_assigned_user' => 
  array (
    'name' => 'fp_event_locations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_fp_event_locations' => 
  array (
    'name' => 'securitygroups_fp_event_locations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'FP_Event_Locations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'optimistic_locking' => 
  array (
    'name' => 'optimistic_locking',
    0 => true,
  ),
  'unified_search' => 
  array (
    'name' => 'unified_search',
    0 => true,
  ),
  'aod_indexevent_modified_user' => 
  array (
    'name' => 'aod_indexevent_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_indexevent_created_by' => 
  array (
    'name' => 'aod_indexevent_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aod_indexevent_assigned_user' => 
  array (
    'name' => 'aod_indexevent_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_modified_user' => 
  array (
    'name' => 'aod_index_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_created_by' => 
  array (
    'name' => 'aod_index_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_assigned_user' => 
  array (
    'name' => 'aod_index_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_modified_user' => 
  array (
    'name' => 'aop_case_events_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_created_by' => 
  array (
    'name' => 'aop_case_events_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_assigned_user' => 
  array (
    'name' => 'aop_case_events_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_aop_case_events' => 
  array (
    'name' => 'cases_aop_case_events',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'case_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_modified_user' => 
  array (
    'name' => 'aop_case_updates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_created_by' => 
  array (
    'name' => 'aop_case_updates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_assigned_user' => 
  array (
    'name' => 'aop_case_updates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_aop_case_updates' => 
  array (
    'name' => 'cases_aop_case_updates',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'case_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_notes' => 
  array (
    'name' => 'aop_case_updates_notes',
    'lhs_module' => 'AOP_Case_Updates',
    'lhs_table' => 'aop_case_updates',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOP_Case_Updates',
  ),
  'aor_reports_modified_user' => 
  array (
    'name' => 'aor_reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_created_by' => 
  array (
    'name' => 'aor_reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_assigned_user' => 
  array (
    'name' => 'aor_reports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aor_reports' => 
  array (
    'name' => 'securitygroups_aor_reports',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOR_Reports',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aor_reports_aor_fields' => 
  array (
    'name' => 'aor_reports_aor_fields',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_aor_conditions' => 
  array (
    'name' => 'aor_reports_aor_conditions',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_aor_reports' => 
  array (
    'name' => 'aor_scheduled_reports_aor_reports',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_fields_modified_user' => 
  array (
    'name' => 'aor_fields_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_fields_created_by' => 
  array (
    'name' => 'aor_fields_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_modified_user' => 
  array (
    'name' => 'aor_charts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_created_by' => 
  array (
    'name' => 'aor_charts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_aor_reports' => 
  array (
    'name' => 'aor_charts_aor_reports',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_conditions_modified_user' => 
  array (
    'name' => 'aor_conditions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_conditions_created_by' => 
  array (
    'name' => 'aor_conditions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_modified_user' => 
  array (
    'name' => 'aor_scheduled_reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_created_by' => 
  array (
    'name' => 'aor_scheduled_reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_modified_user' => 
  array (
    'name' => 'aos_contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_created_by' => 
  array (
    'name' => 'aos_contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_assigned_user' => 
  array (
    'name' => 'aos_contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_contracts' => 
  array (
    'name' => 'securitygroups_aos_contracts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_contracts_tasks' => 
  array (
    'name' => 'aos_contracts_tasks',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_notes' => 
  array (
    'name' => 'aos_contracts_notes',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_meetings' => 
  array (
    'name' => 'aos_contracts_meetings',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_calls' => 
  array (
    'name' => 'aos_contracts_calls',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_aos_products_quotes' => 
  array (
    'name' => 'aos_contracts_aos_products_quotes',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_aos_line_item_groups' => 
  array (
    'name' => 'aos_contracts_aos_line_item_groups',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_modified_user' => 
  array (
    'name' => 'aos_invoices_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_created_by' => 
  array (
    'name' => 'aos_invoices_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_assigned_user' => 
  array (
    'name' => 'aos_invoices_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_invoices' => 
  array (
    'name' => 'securitygroups_aos_invoices',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Invoices',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_invoices_aos_product_quotes' => 
  array (
    'name' => 'aos_invoices_aos_product_quotes',
    'lhs_module' => 'AOS_Invoices',
    'lhs_table' => 'aos_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_aos_line_item_groups' => 
  array (
    'name' => 'aos_invoices_aos_line_item_groups',
    'lhs_module' => 'AOS_Invoices',
    'lhs_table' => 'aos_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_modified_user' => 
  array (
    'name' => 'aos_pdf_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_created_by' => 
  array (
    'name' => 'aos_pdf_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_assigned_user' => 
  array (
    'name' => 'aos_pdf_templates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_pdf_templates' => 
  array (
    'name' => 'securitygroups_aos_pdf_templates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_PDF_Templates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_product_categories_modified_user' => 
  array (
    'name' => 'aos_product_categories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_categories_created_by' => 
  array (
    'name' => 'aos_product_categories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_categories_assigned_user' => 
  array (
    'name' => 'aos_product_categories_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_product_categories' => 
  array (
    'name' => 'securitygroups_aos_product_categories',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Product_Categories',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'sub_product_categories' => 
  array (
    'name' => 'sub_product_categories',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'parent_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'products' => 
  array (
    'name' => 'products',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product',
    'rhs_table' => 'aos_product',
    'rhs_key' => 'aos_product_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_modified_user' => 
  array (
    'name' => 'aos_products_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_created_by' => 
  array (
    'name' => 'aos_products_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_assigned_user' => 
  array (
    'name' => 'aos_products_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_products' => 
  array (
    'name' => 'securitygroups_aos_products',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'product_categories' => 
  array (
    'name' => 'product_categories',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'aos_product_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_modified_user' => 
  array (
    'name' => 'aos_products_quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_created_by' => 
  array (
    'name' => 'aos_products_quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_assigned_user' => 
  array (
    'name' => 'aos_products_quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_quotes_aos_products' => 
  array (
    'name' => 'aos_product_quotes_aos_products',
    'lhs_module' => 'AOS_Products',
    'lhs_table' => 'aos_products',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'product_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_modified_user' => 
  array (
    'name' => 'aos_line_item_groups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_created_by' => 
  array (
    'name' => 'aos_line_item_groups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_assigned_user' => 
  array (
    'name' => 'aos_line_item_groups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'groups_aos_product_quotes' => 
  array (
    'name' => 'groups_aos_product_quotes',
    'lhs_module' => 'AOS_Line_Item_Groups',
    'lhs_table' => 'aos_line_item_groups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'group_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_modified_user' => 
  array (
    'name' => 'aos_quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_created_by' => 
  array (
    'name' => 'aos_quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_assigned_user' => 
  array (
    'name' => 'aos_quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_quotes' => 
  array (
    'name' => 'securitygroups_aos_quotes',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_quotes_aos_product_quotes' => 
  array (
    'name' => 'aos_quotes_aos_product_quotes',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_aos_line_item_groups' => 
  array (
    'name' => 'aos_quotes_aos_line_item_groups',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_actions_modified_user' => 
  array (
    'name' => 'aow_actions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_actions_created_by' => 
  array (
    'name' => 'aow_actions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_modified_user' => 
  array (
    'name' => 'aow_workflow_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_created_by' => 
  array (
    'name' => 'aow_workflow_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_assigned_user' => 
  array (
    'name' => 'aow_workflow_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aow_workflow' => 
  array (
    'name' => 'securitygroups_aow_workflow',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOW_WorkFlow',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aow_workflow_aow_conditions' => 
  array (
    'name' => 'aow_workflow_aow_conditions',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_aow_actions' => 
  array (
    'name' => 'aow_workflow_aow_actions',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_aow_processed' => 
  array (
    'name' => 'aow_workflow_aow_processed',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_processed_modified_user' => 
  array (
    'name' => 'aow_processed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_processed_created_by' => 
  array (
    'name' => 'aow_processed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_conditions_modified_user' => 
  array (
    'name' => 'aow_conditions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_conditions_created_by' => 
  array (
    'name' => 'aow_conditions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_modified_user' => 
  array (
    'name' => 'jjwg_maps_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_created_by' => 
  array (
    'name' => 'jjwg_maps_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_assigned_user' => 
  array (
    'name' => 'jjwg_maps_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_maps' => 
  array (
    'name' => 'securitygroups_jjwg_maps',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Maps',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_Maps_accounts' => 
  array (
    'name' => 'jjwg_Maps_accounts',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'jjwg_Maps_contacts' => 
  array (
    'name' => 'jjwg_Maps_contacts',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'jjwg_Maps_leads' => 
  array (
    'name' => 'jjwg_Maps_leads',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'jjwg_Maps_opportunities' => 
  array (
    'name' => 'jjwg_Maps_opportunities',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'jjwg_Maps_cases' => 
  array (
    'name' => 'jjwg_Maps_cases',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'jjwg_Maps_projects' => 
  array (
    'name' => 'jjwg_Maps_projects',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'jjwg_Maps_meetings' => 
  array (
    'name' => 'jjwg_Maps_meetings',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'jjwg_Maps_prospects' => 
  array (
    'name' => 'jjwg_Maps_prospects',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'jjwg_Maps_jjwp_partners' => 
  array (
    'name' => 'jjwg_Maps_jjwp_partners',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'jjwp_Partners',
    'rhs_table' => 'jjwp_partners',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jjwp_Partners',
  ),
  'jjwg_markers_modified_user' => 
  array (
    'name' => 'jjwg_markers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_markers_created_by' => 
  array (
    'name' => 'jjwg_markers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_markers_assigned_user' => 
  array (
    'name' => 'jjwg_markers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_markers' => 
  array (
    'name' => 'securitygroups_jjwg_markers',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Markers',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_areas_modified_user' => 
  array (
    'name' => 'jjwg_areas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_areas_created_by' => 
  array (
    'name' => 'jjwg_areas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_areas_assigned_user' => 
  array (
    'name' => 'jjwg_areas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_areas' => 
  array (
    'name' => 'securitygroups_jjwg_areas',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Areas',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_address_cache_modified_user' => 
  array (
    'name' => 'jjwg_address_cache_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_address_cache_created_by' => 
  array (
    'name' => 'jjwg_address_cache_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_address_cache_assigned_user' => 
  array (
    'name' => 'jjwg_address_cache_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_modified_user' => 
  array (
    'name' => 'calls_reschedule_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_created_by' => 
  array (
    'name' => 'calls_reschedule_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_assigned_user' => 
  array (
    'name' => 'calls_reschedule_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_modified_user' => 
  array (
    'name' => 'securitygroups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_created_by' => 
  array (
    'name' => 'securitygroups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_assigned_user' => 
  array (
    'name' => 'securitygroups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_modified_user' => 
  array (
    'name' => 'outbound_email_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_created_by' => 
  array (
    'name' => 'outbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_assigned_user' => 
  array (
    'name' => 'outbound_email_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'templatesectionline_modified_user' => 
  array (
    'name' => 'templatesectionline_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TemplateSectionLine',
    'rhs_table' => 'templatesectionline',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'templatesectionline_created_by' => 
  array (
    'name' => 'templatesectionline_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TemplateSectionLine',
    'rhs_table' => 'templatesectionline',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gpro_courses_modified_user' => 
  array (
    'name' => 'gpro_courses_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gpro_Courses',
    'rhs_table' => 'gpro_courses',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gpro_courses_created_by' => 
  array (
    'name' => 'gpro_courses_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gpro_Courses',
    'rhs_table' => 'gpro_courses',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gpro_courses_assigned_user' => 
  array (
    'name' => 'gpro_courses_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gpro_Courses',
    'rhs_table' => 'gpro_courses',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_gpro_courses' => 
  array (
    'name' => 'securitygroups_gpro_courses',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'gpro_Courses',
    'rhs_table' => 'gpro_courses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'gpro_Courses',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_badges_modified_user' => 
  array (
    'name' => 'eciu_crm_badges_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_badges_created_by' => 
  array (
    'name' => 'eciu_crm_badges_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_badges_assigned_user' => 
  array (
    'name' => 'eciu_crm_badges_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_badges' => 
  array (
    'name' => 'securitygroups_eciu_crm_badges',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_badges',
    'rhs_table' => 'eciu_crm_badges',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_badges',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_calendar_periods_modified_user' => 
  array (
    'name' => 'eciu_crm_calendar_periods_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_calendar_periods',
    'rhs_table' => 'eciu_crm_calendar_periods',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_calendar_periods_created_by' => 
  array (
    'name' => 'eciu_crm_calendar_periods_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_calendar_periods',
    'rhs_table' => 'eciu_crm_calendar_periods',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_calendar_periods_assigned_user' => 
  array (
    'name' => 'eciu_crm_calendar_periods_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_calendar_periods',
    'rhs_table' => 'eciu_crm_calendar_periods',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_calendar_periods' => 
  array (
    'name' => 'securitygroups_eciu_crm_calendar_periods',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_calendar_periods',
    'rhs_table' => 'eciu_crm_calendar_periods',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_calendar_periods',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_countries_modified_user' => 
  array (
    'name' => 'eciu_crm_countries_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_countries',
    'rhs_table' => 'eciu_crm_countries',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_countries_created_by' => 
  array (
    'name' => 'eciu_crm_countries_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_countries',
    'rhs_table' => 'eciu_crm_countries',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_countries_assigned_user' => 
  array (
    'name' => 'eciu_crm_countries_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_countries',
    'rhs_table' => 'eciu_crm_countries',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_countries' => 
  array (
    'name' => 'securitygroups_eciu_crm_countries',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_countries',
    'rhs_table' => 'eciu_crm_countries',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_countries',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_ddc_modified_user' => 
  array (
    'name' => 'eciu_crm_ddc_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_ddc_created_by' => 
  array (
    'name' => 'eciu_crm_ddc_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_ddc_assigned_user' => 
  array (
    'name' => 'eciu_crm_ddc_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_ddc' => 
  array (
    'name' => 'securitygroups_eciu_crm_ddc',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_ddc',
    'rhs_table' => 'eciu_crm_ddc',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_ddc',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_degree_levels_modified_user' => 
  array (
    'name' => 'eciu_crm_degree_levels_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_degree_levels',
    'rhs_table' => 'eciu_crm_degree_levels',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_degree_levels_created_by' => 
  array (
    'name' => 'eciu_crm_degree_levels_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_degree_levels',
    'rhs_table' => 'eciu_crm_degree_levels',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_degree_levels_assigned_user' => 
  array (
    'name' => 'eciu_crm_degree_levels_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_degree_levels',
    'rhs_table' => 'eciu_crm_degree_levels',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_degree_levels' => 
  array (
    'name' => 'securitygroups_eciu_crm_degree_levels',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_degree_levels',
    'rhs_table' => 'eciu_crm_degree_levels',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_degree_levels',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_denominations_modified_user' => 
  array (
    'name' => 'eciu_crm_denominations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_denominations_created_by' => 
  array (
    'name' => 'eciu_crm_denominations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_denominations_assigned_user' => 
  array (
    'name' => 'eciu_crm_denominations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_denominations' => 
  array (
    'name' => 'securitygroups_eciu_crm_denominations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_denominations',
    'rhs_table' => 'eciu_crm_denominations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_denominations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_health_indicators_modified_user' => 
  array (
    'name' => 'eciu_crm_health_indicators_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_health_indicators',
    'rhs_table' => 'eciu_crm_health_indicators',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_health_indicators_created_by' => 
  array (
    'name' => 'eciu_crm_health_indicators_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_health_indicators',
    'rhs_table' => 'eciu_crm_health_indicators',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_health_indicators_assigned_user' => 
  array (
    'name' => 'eciu_crm_health_indicators_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_health_indicators',
    'rhs_table' => 'eciu_crm_health_indicators',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_health_indicators' => 
  array (
    'name' => 'securitygroups_eciu_crm_health_indicators',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_health_indicators',
    'rhs_table' => 'eciu_crm_health_indicators',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_health_indicators',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_language_list_modified_user' => 
  array (
    'name' => 'eciu_crm_language_list_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_language_list',
    'rhs_table' => 'eciu_crm_language_list',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_language_list_created_by' => 
  array (
    'name' => 'eciu_crm_language_list_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_language_list',
    'rhs_table' => 'eciu_crm_language_list',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_language_list_assigned_user' => 
  array (
    'name' => 'eciu_crm_language_list_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_language_list',
    'rhs_table' => 'eciu_crm_language_list',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_language_list' => 
  array (
    'name' => 'securitygroups_eciu_crm_language_list',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_language_list',
    'rhs_table' => 'eciu_crm_language_list',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_language_list',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_methodologies_modified_user' => 
  array (
    'name' => 'eciu_crm_methodologies_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_methodologies',
    'rhs_table' => 'eciu_crm_methodologies',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_methodologies_created_by' => 
  array (
    'name' => 'eciu_crm_methodologies_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_methodologies',
    'rhs_table' => 'eciu_crm_methodologies',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_methodologies_assigned_user' => 
  array (
    'name' => 'eciu_crm_methodologies_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_methodologies',
    'rhs_table' => 'eciu_crm_methodologies',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_methodologies' => 
  array (
    'name' => 'securitygroups_eciu_crm_methodologies',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_methodologies',
    'rhs_table' => 'eciu_crm_methodologies',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_methodologies',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_resource_types_modified_user' => 
  array (
    'name' => 'eciu_crm_resource_types_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resource_types_created_by' => 
  array (
    'name' => 'eciu_crm_resource_types_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resource_types_assigned_user' => 
  array (
    'name' => 'eciu_crm_resource_types_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_resource_types' => 
  array (
    'name' => 'securitygroups_eciu_crm_resource_types',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resource_types',
    'rhs_table' => 'eciu_crm_resource_types',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_resource_types',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_resources_modified_user' => 
  array (
    'name' => 'eciu_crm_resources_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resources_created_by' => 
  array (
    'name' => 'eciu_crm_resources_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resources_assigned_user' => 
  array (
    'name' => 'eciu_crm_resources_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_resources' => 
  array (
    'name' => 'securitygroups_eciu_crm_resources',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources',
    'rhs_table' => 'eciu_crm_resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_resources',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_resources_user_actions_modified_user' => 
  array (
    'name' => 'eciu_crm_resources_user_actions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resources_user_actions_created_by' => 
  array (
    'name' => 'eciu_crm_resources_user_actions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_resources_user_actions_assigned_user' => 
  array (
    'name' => 'eciu_crm_resources_user_actions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_resources_user_actions' => 
  array (
    'name' => 'securitygroups_eciu_crm_resources_user_actions',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_resources_user_actions',
    'rhs_table' => 'eciu_crm_resources_user_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_resources_user_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_sgt_modified_user' => 
  array (
    'name' => 'eciu_crm_sgt_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_sgt_created_by' => 
  array (
    'name' => 'eciu_crm_sgt_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_sgt_assigned_user' => 
  array (
    'name' => 'eciu_crm_sgt_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_sgt' => 
  array (
    'name' => 'securitygroups_eciu_crm_sgt',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_sgt',
    'rhs_table' => 'eciu_crm_sgt',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_sgt',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_tracks_modified_user' => 
  array (
    'name' => 'eciu_crm_tracks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_tracks_created_by' => 
  array (
    'name' => 'eciu_crm_tracks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_tracks_assigned_user' => 
  array (
    'name' => 'eciu_crm_tracks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_tracks' => 
  array (
    'name' => 'securitygroups_eciu_crm_tracks',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_tracks',
    'rhs_table' => 'eciu_crm_tracks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_tracks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_training_actuals_modified_user' => 
  array (
    'name' => 'eciu_crm_training_actuals_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_training_actuals_created_by' => 
  array (
    'name' => 'eciu_crm_training_actuals_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_training_actuals_assigned_user' => 
  array (
    'name' => 'eciu_crm_training_actuals_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_training_actuals' => 
  array (
    'name' => 'securitygroups_eciu_crm_training_actuals',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_actuals',
    'rhs_table' => 'eciu_crm_training_actuals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_training_actuals',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'eciu_crm_training_goals_modified_user' => 
  array (
    'name' => 'eciu_crm_training_goals_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_training_goals_created_by' => 
  array (
    'name' => 'eciu_crm_training_goals_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eciu_crm_training_goals_assigned_user' => 
  array (
    'name' => 'eciu_crm_training_goals_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_eciu_crm_training_goals' => 
  array (
    'name' => 'securitygroups_eciu_crm_training_goals',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ECiu_crm_training_goals',
    'rhs_table' => 'eciu_crm_training_goals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ECiu_crm_training_goals',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'res_reviews_modified_user' => 
  array (
    'name' => 'res_reviews_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'res_Reviews',
    'rhs_table' => 'res_reviews',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'res_reviews_created_by' => 
  array (
    'name' => 'res_reviews_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'res_Reviews',
    'rhs_table' => 'res_reviews',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'res_reviews_assigned_user' => 
  array (
    'name' => 'res_reviews_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'res_Reviews',
    'rhs_table' => 'res_reviews',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_res_reviews' => 
  array (
    'name' => 'securitygroups_res_reviews',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'res_Reviews',
    'rhs_table' => 'res_reviews',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'res_Reviews',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'tra_recieved_modified_user' => 
  array (
    'name' => 'tra_recieved_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tra_Recieved',
    'rhs_table' => 'tra_recieved',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tra_recieved_created_by' => 
  array (
    'name' => 'tra_recieved_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tra_Recieved',
    'rhs_table' => 'tra_recieved',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tra_recieved_assigned_user' => 
  array (
    'name' => 'tra_recieved_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tra_Recieved',
    'rhs_table' => 'tra_recieved',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_tra_recieved' => 
  array (
    'name' => 'securitygroups_tra_recieved',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'tra_Recieved',
    'rhs_table' => 'tra_recieved',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'tra_Recieved',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
);