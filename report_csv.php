<?php 
 
  $start_date = date("Y-m-d", strtotime($_GET["date"]));
  $end_date = date("Y-m-d", strtotime($_GET["date2"]));
  //echo  $start_date.'<br>'.$end_date; die("here");


       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;


          $query= "Select ct.first_name, ct.last_name, SUM(ta.number_of_pastors) as total from eciu_crm_training_actuals as ta 
               JOIN eciu_crm_training_actuals_contacts_c as tac on ta.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb 
               JOIN contacts as ct on ct.id = tac.eciu_crm_training_actuals_contactscontacts_ida 
               WHERE DATE(ta.date_entered) >= '".$start_date."'
               AND DATE(ta.date_entered) <= '".$end_date."'
               AND tac.deleted =0 GROUP BY ct.id ORDER BY ct.first_name ASC"; 

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "First Name", "Last Name", "No. of Trained Pastors"));
   $count = 1;
   while ($row = $result->fetch_assoc()){ //fputcsv($output, $row);
       fputcsv($output, array($count, $row['first_name'], $row['last_name'], $row['total'] ));
       $count++;
       $total_pastors += $row['total'];
   }
   fputcsv($output, array('', $row[''], $row[''], 'Toatl Trained Pastors: '.$total_pastors ));
   fclose($output);
   exit();
   return true;

?>
          



         