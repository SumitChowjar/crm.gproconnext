<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class before_delete_class
{
    function primary_delete($bean, $event, $arguments)
    {
        if(isset($bean->eciu_crm_training_goals_contactscontacts_ida) && !empty($bean->eciu_crm_training_goals_contactscontacts_ida))
        {
            $goal_id = $bean->id;
            $db = DBManagerFactory::getInstance();
            $query = "UPDATE eciu_crm_training_goals SET deleted = 1 WHERE id = '".$goal_id."'";
            $goal = $db->query($query);
        }
    }
}
?>