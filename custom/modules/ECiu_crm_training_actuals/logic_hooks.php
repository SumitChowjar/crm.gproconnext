<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 26/10/17
 * Time: 4:55 PM
 */

$hook_version = 1;
$hook_array = Array();

$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'after_ui_frame',

    //The PHP file where your class is located.
    'custom/modules/ECiu_crm_training_actuals/logic_hooks_class.php',

    //The class the method is in.
    'logic_hooks_class',

    //The method to call.
    'after_ui_frame_method'
);
