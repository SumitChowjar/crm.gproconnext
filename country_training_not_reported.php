<?php        
if(!defined('sugarEntry'))
 define('sugarEntry', true);
require_once ('include/entryPoint.php');

global $db;
$count = 0;

    if( isset($_POST['sort']) && !empty($_POST['sort']) ){ //echo "<pre>"; print_r($_POST); die;
        
        $sort_key = $_POST['sort'];
       $query= "SELECT ectac.eciu_crm_training_actuals_contactscontacts_ida, contacts.primary_address_country FROM eciu_crm_training_actuals_contacts_c as ectac
       INNER JOIN contacts ON contacts.id = ectac.eciu_crm_training_actuals_contactscontacts_ida
       WHERE ectac.deleted = 0 AND contacts.primary_address_country != ''";
       $result = $db->query($query);
       while( $row = $db->fetchByAssoc($result) ){
        $contacts_ids[] = $row['eciu_crm_training_actuals_contactscontacts_ida'];
        $countries[] = $row['primary_address_country'];
      }
      $contacts_ids = join("','",$contacts_ids);
      $countries = join("','",$countries);   
      
      $query2 = "SELECT primary_address_country FROM contacts WHERE primary_address_country NOT IN ('$countries') AND id NOT IN ('contacts_ids') GROUP BY primary_address_country ORDER BY primary_address_country ".$sort_key;
      $countries_hv_not_actuals = $db->query($query2);

      }else{

        $sort_key = "ASC";
       $query= "SELECT ectac.eciu_crm_training_actuals_contactscontacts_ida, contacts.primary_address_country FROM eciu_crm_training_actuals_contacts_c as ectac
       INNER JOIN contacts ON contacts.id = ectac.eciu_crm_training_actuals_contactscontacts_ida
       WHERE ectac.deleted = 0 AND contacts.primary_address_country != ''";
       $result = $db->query($query);
       while( $row = $db->fetchByAssoc($result) ){
        $contacts_ids[] = $row['eciu_crm_training_actuals_contactscontacts_ida'];
        $countries[] = $row['primary_address_country'];
      }
      $contacts_ids = join("','",$contacts_ids);
      $countries = join("','",$countries);   

      $query2 = "SELECT primary_address_country FROM contacts WHERE primary_address_country NOT IN ('$countries') AND id NOT IN ('contacts_ids') GROUP BY primary_address_country ORDER BY primary_address_country ASC";
      $countries_hv_not_actuals = $db->query($query2);


    }

    if( isset($_GET['type']) && !empty($_GET['type']) ){

      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=countries_without_trainers_report.csv');

   // create a file pointer connected to the output stream
         $output = fopen('php://output', 'w');

   // output the column headings
   fputcsv($output, array("Sr.No.", "Country"));
   $count = 1;
   while ( $rw = $db->fetchByAssoc($countries_hv_not_actuals) ){ //fputcsv($output, $row);
       fputcsv($output, array($count, $rw['primary_address_country'] ));
       $count++;
   }
   fputcsv($output, array('', 'Toatl Countries: '.$countries_hv_not_actuals->num_rows ));
   fclose($output);
   exit();
   return true;
    }else{

      $str  = '<div id="custom_content">';
      $str .= '<table id="custom_report"><tbody><tr><td>';
      $str .= '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back"><input tabindex="2" title="Submit" onclick="countryWithoutActualsCsv();" class="button" type="button" value="Export CSV">';
      $str .= '<div class="moduleTitle"><h2> Countries Where Training Not Reported </h2><div class="clear"></div></div>';
      $str .= '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
      $str .= '<tbody><tr>';
      $str .= '</tr></tbody>';
      $str .= '</table>';
      $str .= '</div>';
      $str .= '<div id="report-data">';


    $str .= '<div id="detailpanel_report" class="detail view  detail508 expanded">';
    if($countries_hv_not_actuals->num_rows != 0)
    {
     $str.='<h4>
     <a id ="myLink" href="javascript:void(0)" class="collapseLink" onclick="javascript:myLinkButtonClick();">
      <img border="0" id="detailpanel_report_img_hide" src="themes/Suite7/images/basic_search.gif?v=N3y-Ekbw475Psgre05yy4Q"></a>
      <a id="exp2" href="javascript:void(0)" class="expandLink" onclick="javascript:myLinkButtonClick();">
        <img border="0" id="detailpanel_report_img_show" src="themes/Suite7/images/advanced_search.gif?v=N3y-Ekbw475Psgre05yy4Q"></a>
        Report
      </h4>';
      $str.='<table id="FIELDS" class="panelContainer" cellspacing="0">
      <tbody><tr>
        <td width="37.5%" colspan="4">
          <span id="field_lines_span">';
           $str.='<table class="list" id="report_table" width="100%" cellspacing="0" cellpadding="0" border="0" repeat_header="1"><thead><tr class="pagination"><td colspan="18">';
           $str.='<thead>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf" >S.N</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sortByCountryName()>Country</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="country_name_sort" value="'.$sort_key.'">';
           $str .='</div>';
           $str.='</th>';
           $str.='</thead>';

           while( $rw = $db->fetchByAssoc($countries_hv_not_actuals))
           {

            $count =$count+1;

            $str.='<tr class="oddListRowS1" height="20">';
            $str.='<td class valign="top" align="left">';
            $str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
            $str.='</td>';
            $str.='<td class valign="top" align="left">';
            $str.= '<span class="sugar_field" id="last_name"> '.$rw['primary_address_country'].' </span>';
            $str.='</td>';
            $str.='</tr>';
          }

          $str.='<tr class="oddListRowS1" height="20">';
          $str.='<th class valign="top" align="left">';
          $str.= '<span class="sugar_field" id="last_name">  </span>';
          $str.='</th>';
          $str.='<th class valign="top" align="left">';
          $str.= '<span class="sugar_field" id="last_name"> Total Contatcts: '.$countries_hv_not_actuals->num_rows.' </span>';
          $str.='</th>';
          $str.='</tr>';

          $str.='</tr>';
          $str.='</table>';
          $str.='</span></td></tr></tbody>';
          $str.='</table>';

        }
        else
        {
          echo "No Data Found"; die;
        }

        $str .= '</div>';            


        $str .= '</div>';
        $str .= '</td></tr></tbody></table>';
        $str .= '</div>';

        echo $str; die;

    }

      
        ?>