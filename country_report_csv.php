<?php 

       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       
            global $db;
            
            $query= "SELECT COUNT(`first_name`) as Name, `primary_address_country` FROM `contacts` WHERE deleted = 0 GROUP BY `primary_address_country`";

      
           $result = $db->query($query);

          header('Content-Type: text/csv; charset=utf-8');
          header('Content-Disposition: attachment; filename=country_report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "No. of Contacts", "Country"));
   $count = 1;
   while ($row = $result->fetch_assoc()){ //fputcsv($output, $row)

    if($row['primary_address_country']==''){
               fputcsv($output, array($count, 'Country Not Provided', $row['Name']));
              }else{
                 fputcsv($output, array($count, $row['primary_address_country'], $row['Name']));
              }
       $count++;
       $total_contacts += $row['Name'];
   }
   fputcsv($output, array('', $row[''], 'Toatl Contacts: '.$total_contacts));
   fclose($output);
   exit();
   return true;

?>
          



         