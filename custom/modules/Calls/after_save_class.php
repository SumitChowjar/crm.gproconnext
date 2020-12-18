<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_save_class
    {
        function saveCall($bean, $event, $arguments)
        {
            
            if($bean->assigned_user_id == '' && $bean->modified_user_id != '')
            {
            	$user_id = $bean->modified_user_id;

            }else
            {
                $user_id = $bean->assigned_user_id;
            }

            $bean->assigned_user_id = $user_id;
            $db = DBManagerFactory::getInstance();
            $update = "UPDATE calls SET assigned_user_id ='{$bean->assigned_user_id}' WHERE id='{$bean->id}'";
            $run = $db->query($update);
           
        }
    }

?>