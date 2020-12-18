<?php
$dictionary["tra_Recieved"]["fields"]["resources_name"] = array(
   'name' => 'resources_name',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getResourcesList',
   'vname' => 'Resources Offered',
);

$dictionary["tra_Recieved"]["fields"]["contacts"] = array(
   'name' => 'contacts',
   'type' => 'multienum',
   'size' => '80',
   'inline_edit'=>'false',
   'function' => 'getContactsList',
   'vname' => 'Who Administered The Training',
);
?>
