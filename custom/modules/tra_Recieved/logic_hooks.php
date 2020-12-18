<?php
/**
 * Created by PhpStorm.
 * User: brock sudeep
 * Date: 07/30/18
 * Time: 04:01 PM
 */

    $hook_version = 1;
    $hook_array = Array();

    $hook_array['after_ui_frame'] = Array();
    $hook_array['after_ui_frame'][] = Array(1, 'after_ui_frame', 'custom/modules/tra_Recieved/logic_hooks_class.php', 'logic_hooks_class', 'after_ui_frame_method'
    );