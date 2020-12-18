<?php

$module_name = "gpro_Courses";

$hook_array['after_retrieve'] = Array();
$hook_array['after_retrieve'][] = Array(

    1,

    'after_retrieve',

    "custom/modules/{$module_name}/logic_hooks_class.php",

    'resourceList',

    'reloadPage'
);


$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'Hours', "custom/modules/{$module_name}/logic_hooks_class.php", 'CourseHours', 'hours');

$hook_array['before_relationship_delete'] = Array();
$hook_array['before_relationship_delete'][] = Array(
        1,

        'reduce course hours',

        "custom/modules/{$module_name}/logic_hooks_class.php",

        'CourseHours',

        'removeHours'
    );


$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(
    1,

    'drag_and_drop',

    "custom/modules/{$module_name}/logic_hooks_class.php",

    'app_hooks',

    'dragDrop'
);


$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(

    1,

    'after_relationship_delete',

    "custom/modules/{$module_name}/logic_hooks_class.php",

    'CourseHours',

    'unlinkRelation'
);
