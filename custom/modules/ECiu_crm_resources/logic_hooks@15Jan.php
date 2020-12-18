<?php
	$hook_version = 1;
	$hook_array = Array();

    	//to show image ratio message on editView
	$hook_array['after_ui_frame'][] = Array(
		1,
		'after_ui_frame',
		'custom/modules/ECiu_crm_resources/logic_hooks_class.php',
		'logic_hooks_class',
		'add_img_ratio_msg'
	);
