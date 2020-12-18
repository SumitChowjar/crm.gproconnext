<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function getCall($bean, $event, $arguments)
        {
            if($arguments['related_module'] == 'Calls' && $arguments['module'] = 'Contacts') {
                $call = $arguments['related_bean'];

                if(!empty($call->created_by)) {
                    $user_id = $call->created_by;
                }else{
                    $user_id = $bean->modified_user_id;
                }
                $call->assigned_user_id = $user_id;
                $call->save();

            }
        }
    }

?>