<?php 
 
  $start_date = date("Y-m-d", strtotime($_GET["date"]));
  $end_date = date("Y-m-d", strtotime($_GET["date2"]));
  //echo  $start_date.'<br>'.$end_date; die("here");


       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;


          $query= "Select count(ct.id) as contacts,ct.first_name, ct.last_name, sum(ectg.y2016) as y2016, 
                     sum(ectg.y2017) as y2017, sum(ectg.y2018) as y2018, sum(ectg.y2019) as y2019, sum(ectg.y2020) as y2020, SUM(ectg.total) as total_goals from eciu_crm_training_goals as ectg 
                     JOIN eciu_crm_training_goals_contacts_c as ectgc on ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb = ectg.id 
                     JOIN contacts as ct 
                       on ct.id = ectgc.eciu_crm_training_goals_contactscontacts_ida
                       WHERE DATE(ectg.date_entered) >= '".$start_date."'
                         AND DATE(ectg.date_entered) <= '".$end_date."'
                         AND ectg.deleted =0 AND ct.deleted=0 GROUP BY ct.id ORDER BY ct.first_name ASC"; 

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "First Name", "Last Name", "Year 2016", "Year 2017", "Year 2018", "Year 2019", "Year 2020", "Total Goals"));
   $count = 1;
   $contacts = 0;
   while ($row = $result->fetch_assoc()){ //fputcsv($output, $row);
    $contacts = $contacts+1;
       fputcsv($output, array($count, $row['first_name'], $row['last_name'], $row['y2016'], $row['y2017'], $row['y2018'], $row['y2019'], $row['y2020'], $row['total_goals']));
       $count++;
       $total_goals += $row['total_goals'];
   }
   fputcsv($output, array('', 'No. of Contacts: '.$contacts, $row[''], $row[''], $row[''], $row[''], $row[''], $row[''], 'Total Submitted Goals:'.$total_goals));
   fclose($output);
   exit();
   return true;

?>