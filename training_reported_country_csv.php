<?php 

       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;
            
            $query= "SELECT COUNT(DISTINCT ct.id) as contacts, ct.primary_address_country, SUM(actuals.number_of_pastors) as no_of_trained_pastors, count(actuals.id) as no_of_trainings FROM eciu_crm_training_actuals_contacts_c AS tac
             INNER JOIN contacts AS ct ON tac.eciu_crm_training_actuals_contactscontacts_ida = ct.id
             INNER JOIN eciu_crm_training_actuals as actuals ON actuals.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb
             WHERE tac.deleted = 0 AND ct.primary_address_country != '' 
             GROUP BY ct.primary_address_country
             ORDER BY ct.primary_address_country ASC";

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "Country", "No. of Contacts", "No. of Trainings", "No. of Pastors"));
   $count = 1;
   while ($row = $result->fetch_assoc()){ //fputcsv($output, $row)
                 fputcsv($output, array($count, $row['primary_address_country'], $row['contacts'], $row['no_of_trainings'], $row['no_of_trained_pastors']));
       $count++;
       $total_contacts += $row['contacts'];
       $total_trainings += $row['no_of_trainings'];
       $total_pastors += $row['no_of_trained_pastors'];
   }
   fputcsv($output, array('', $row[''], 'Toatl Contacts: '.$total_contacts, 'Total Trainings: '.$total_trainings, 'Total Trained Pastors: '.$total_pastors ));
   fclose($output);
   exit();
   return true;

?>
          



         