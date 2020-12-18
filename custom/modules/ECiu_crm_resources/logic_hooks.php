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

	//approved/rejected resource suggestion
	$hook_array['before_save'][] = Array(
		1,
		'before_save',
		'custom/modules/ECiu_crm_resources/logic_hooks_class.php',
		'logic_hooks_class',
		'changeStatus'
	);

	//check hours formnat (validation)
	$hook_array['before_save'][] = Array(
		1,
		'before_save',
		'custom/modules/ECiu_crm_resources/logic_hooks_class.php',
		'logic_hooks_class',
		'checkHoursFormat'
	);