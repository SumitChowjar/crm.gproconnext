<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'count', 'modules/Calls_Reschedule/reschedule_count.php','reschedule_count', 'count'); 

//Custom Hook

$hook_array['after_save'][] = Array(1, 'after_save', 'custom/modules/Calls/after_save_class.php', 'after_save_class', 'saveCall');


?>