<?php
    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'hours_save',

        //The PHP file where your class is located.
        'custom/modules/ECiu_crm_training_actuals/after_save_class.php',

        //The class the method is in.
        'after_save_class',

        //The method to call.
        'insert_hours'
    );

?>