<?php 
 
       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;


          $query= "SELECT `first_name`, `last_name`, `primary_address_country`, count(*) as number FROM `contacts` WHERE deleted = 0 group by first_name , last_name, primary_address_country having count(number) > 1"; 

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "First Name", "Last Name", "Country", "No. of Time Entries in CRM"));
   $count = 1;
      while ($row = $result->fetch_assoc()){ //fputcsv($output, $row);
       fputcsv($output, array($count, $row['first_name'], $row['last_name'], $row['primary_address_country'], $row['number']));
       $count++;
   }
   fclose($output);
   exit();
   return true;

?>