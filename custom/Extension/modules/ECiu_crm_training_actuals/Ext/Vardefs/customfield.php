<?php 
$dictionary["ECiu_crm_training_actuals"]["fields"]["contacts"] = array(
   'name' => 'contacts',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getContactsList',
   'vname' => 'Other Pastoral Trainers',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["resources"] = array(
   'name' => 'resources',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getResourcesList',
   'vname' => 'Resource Provided',
);
$dictionary["ECiu_crm_training_actuals"]["fields"]["paralleltracks"] = array(
   'name' => 'paralleltracks',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getParallelTracksList',
   'vname' => 'Parallel Tracks',
);
?>
