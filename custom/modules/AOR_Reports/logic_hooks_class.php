<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function after_ui_frame_method($event, $arguments)
        {
            if (strtolower($_REQUEST['action']) == 'index' || strtolower($_REQUEST['action']) == 'listview') {
                //$GLOBALS['log']->fatal("here"); die("here");
                echo '<script src="custom/js/reports.js"></script>';
            }
        }
    }

?>
