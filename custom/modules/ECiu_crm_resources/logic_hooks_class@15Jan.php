<?php
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function add_img_ratio_msg($event, $arguments){
	        if (strtolower($_REQUEST['action']) == 'editview') {
		        echo <<<EOF
					<script type="text/javascript">
					    $("#image_c_old").parent('td').append("<p class='dateFormat' style='margin-top: 2px;'>Preffered image resolution: 500 X 300 px</p>");
					</script>
EOF;

	        }
        }
    }
?>
