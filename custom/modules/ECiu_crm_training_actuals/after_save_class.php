<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class after_save_class
{
    function insert_hours($bean, $event, $arguments)
    {
        if(isset($bean->date_from) && isset($bean->date_to))
        {
            $dateform = $bean->date_from;
            $dateto   = $bean->date_to;

            $starttimestamp = strtotime($dateform);
            $endtimestamp = strtotime($dateto);
            $difference = abs($endtimestamp - $starttimestamp)/3600;

            $db = DBManagerFactory::getInstance();
            $hoursQuery = "UPDATE eciu_crm_training_actuals SET hours = '".$difference."' WHERE id = '".$bean->id."'";
            $hours = $db->query($hoursQuery);
        }

    }
}
?>
