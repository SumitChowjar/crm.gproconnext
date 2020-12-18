<?php 

       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;
            /*$query= "SELECT COUNT( ct.first_name ), ct.primary_address_country, SUM(actuals.number_of_pastors) as no_of_trained_pastors, SUM(goals.total) as no_of_training FROM contacts AS ct
		INNER JOIN eciu_crm_training_actuals_contacts_c AS tac ON tac.eciu_crm_training_actuals_contactscontacts_ida = ct.id AND tac.deleted = 0
		INNER JOIN eciu_crm_training_actuals as actuals ON actuals.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb
		INNER JOIN eciu_crm_training_goals_contacts_c as ectgc ON ectgc.eciu_crm_training_goals_contactscontacts_ida = ct.id AND ectgc.deleted = 0
		INNER JOIN eciu_crm_training_goals as goals ON goals.id = ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb AND goals.deleted = 0
		WHERE ct.primary_address_country != ''
		GROUP BY ct.primary_address_country
		ORDER BY ct.primary_address_country ASC";*/

            $query= "SELECT COUNT( ct.first_name ) , ct.primary_address_country FROM contacts AS ct
                     JOIN eciu_crm_training_actuals_contacts_c AS tac ON tac.eciu_crm_training_actuals_contactscontacts_ida = ct.id AND tac.deleted =0
                     WHERE ct.primary_address_country !=  ''
                    GROUP BY ct.primary_address_country
                    ORDER BY ct.primary_address_country ASC";

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "Country", "No. of Contacts"));
   $count = 1;
   while ($row = $result->fetch_assoc()){ //fputcsv($output, $row)
                 fputcsv($output, array($count, $row['primary_address_country'], $row['COUNT( ct.first_name )']));
       $count++;
       $total_contacts += $row['COUNT( ct.first_name )'];
   }
   fputcsv($output, array('', $row[''], 'Toatl Contacts: '.$total_contacts ));
   fclose($output);
   exit();
   return true;

?>
          



         
