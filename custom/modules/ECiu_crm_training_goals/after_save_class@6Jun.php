<?php
    class after_save_class
    {
        function insert_email($bean, $event, $arguments)
        {
	//echo "<pre>"; print_r($bean); die;
	if(isset($bean->rel_fields_before_value['eciu_crm_training_goals_contactscontacts_ida']) && !empty($bean->rel_fields_before_value['eciu_crm_training_goals_contactscontacts_ida'])){
		$user_id = $bean->rel_fields_before_value['eciu_crm_training_goals_contactscontacts_ida'];
		 		
	}else{
		$rowt = $bean->eciu_crm_training_goals_contactscontacts_ida->focus->eciu_crm_training_goals_contacts->beans;
		$user_id = key($rowt);
	}
	//echo $user_id; die;
	$query = "SELECT email_addresses.email_address as email FROM email_addresses 
		JOIN email_addr_bean_rel ON email_addr_bean_rel.email_address_id = email_addresses.id
		WHERE email_addr_bean_rel.bean_id ='". $user_id."' AND email_addr_bean_rel.deleted = 0";
		$db = DBManagerFactory::getInstance();  
		$result = $db->query($query);
		$row = $result->fetch_assoc();

	//find goals total
	$goals_total = $bean->y2016 + $bean->y2017 + $bean->y2018 + $bean->y2019 + $bean->y2020;
 

if(!empty($row['email'])){
	$goalQuery = "UPDATE eciu_crm_training_goals SET email = '".$row['email']."', total = '".$goals_total."' WHERE id = '".$bean->id."'";
	$db = DBManagerFactory::getInstance();  
	$goal = $db->query($goalQuery);
}
        }

    }
?>
