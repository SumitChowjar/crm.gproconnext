<?php
    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'email_save',

        //The PHP file where your class is located.
        'custom/modules/ECiu_crm_training_goals/after_save_class.php',

        //The class the method is in.
        'after_save_class',

        //The method to call.
        'insert_email'
    );


	$hook_array['before_relationship_delete'] = Array();
	$hook_array['before_relationship_delete'][] = Array(
		//Processing index. For sorting the array.
		1,
	       
		//Label. A string value to identify the hook.
		'delete_from_main',
	       
		//The PHP file where your class is located.
		'custom/modules/ECiu_crm_training_goals/before_delete_class.php',
	       
		//The class the method is in.
		'before_delete_class',
	       
		//The method to call.
		'primary_delete'
	);

?>
