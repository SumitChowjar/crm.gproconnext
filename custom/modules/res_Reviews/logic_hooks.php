<?php
    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'Notification',

        //The PHP file where your class is located.
        'custom/modules/res_Reviews/reviews_alert.php',

        //The class the method is in.
        'ReviewsAlert',

        //The method to call.
        'notification'
    );

?>