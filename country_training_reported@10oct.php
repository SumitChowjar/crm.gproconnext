<?php        
     if(!defined('sugarEntry'))
     define('sugarEntry', true);
     require_once ('include/entryPoint.php');
       
      global $db;
      $count = 0;

        if( isset($_POST['column_name']) && !empty($_POST['column_name']) ){ //echo "<pre>"; print_r($_POST); die;
          
           $query= "SELECT COUNT( ct.first_name ), ct.primary_address_country, SUM(actuals.number_of_pastors) as no_of_trained_pastors, SUM(goals.total) as no_of_training FROM contacts AS ct
		INNER JOIN eciu_crm_training_actuals_contacts_c AS tac ON tac.eciu_crm_training_actuals_contactscontacts_ida = ct.id
		INNER JOIN eciu_crm_training_actuals as actuals ON actuals.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb
		INNER JOIN eciu_crm_training_goals_contacts_c as ectgc ON ectgc.eciu_crm_training_goals_contactscontacts_ida = ct.id AND ectgc.deleted = 0
		INNER JOIN eciu_crm_training_goals as goals ON goals.id = ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb AND goals.deleted = 0
		WHERE tac.deleted = 0 AND ct.primary_address_country != ''
		GROUP BY ct.primary_address_country
             	ORDER BY ".$_POST['column_name']." ".$_POST['sort'];
             $sort_key = $_POST['sort'];
        }else{
           $query= "SELECT COUNT( ct.first_name ), ct.primary_address_country, SUM(actuals.number_of_pastors) as no_of_trained_pastors, SUM(goals.total) as no_of_training FROM contacts AS ct
		INNER JOIN eciu_crm_training_actuals_contacts_c AS tac ON tac.eciu_crm_training_actuals_contactscontacts_ida = ct.id
		INNER JOIN eciu_crm_training_actuals as actuals ON actuals.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb
		INNER JOIN eciu_crm_training_goals_contacts_c as ectgc ON ectgc.eciu_crm_training_goals_contactscontacts_ida = ct.id AND ectgc.deleted = 0
		INNER JOIN eciu_crm_training_goals as goals ON goals.id = ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb AND goals.deleted = 0
		WHERE tac.deleted = 0 AND ct.primary_address_country != ''
		GROUP BY ct.primary_address_country
		ORDER BY ct.primary_address_country ASC";
            $sort_key = "ASC"; //echo "<pre>"; print_r($query);die;
        }
        
         $result = $db->query($query);
      
            $str  = '<div id="custom_content">';
            $str .= '<table id="custom_report"><tbody><tr><td>';
            $str .= '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back"><input tabindex="2" title="Submit" onclick="training_reported_countryCsv(this);" class="button" type="button" value="Export CSV">';
            $str .= '<div class="moduleTitle"><h2> Countries where tarining reported </h2><div class="clear"></div></div>';
            $str .= '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
            $str .= '<tbody><tr>';
            $str .= '</tr></tbody>';
            $str .= '</table>';
            $str .= '</div>';
            $str .= '<div id="report-data">';


            $str .= '<div id="detailpanel_report" class="detail view  detail508 expanded">';
            if($result->num_rows != 0)
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
           $str.='<span style="cursor:pointer" onclick=sort_Countries_Training_Report("primary_address_country")>Country</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="country_name_sort" value="'.$sort_key.'">';
           $str .='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Countries_Training_Report("COUNT(first_name)")>No. of Contacts</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="contacts_name_sort" value="'.$sort_key.'">';
           $str .='</div>';
           $str.='</th>';
	   $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Countries_Training_Report("no_of_training")>No. of Trainings</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="training_sort" value="'.$sort_key.'">';
           $str .='</div>';
           $str.='</th>';
	   $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Countries_Training_Report("no_of_trained_pastors")>No. of Trained Pastors</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="trained_pastors_sort" value="'.$sort_key.'">';
           $str .='</div>';
           $str.='</th>';
           $str.='</thead>';
             
              while( $row = $db->fetchByAssoc($result) )
            {
              //echo "<pre>"; print_r($row);die; 
              $count =$count+1;

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['primary_address_country'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['COUNT( ct.first_name )'].' </span>';
              $str.='</td>';
$str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['no_of_training'].' </span>';
              $str.='</td>';
$str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['no_of_trained_pastors'].' </span>';
              $str.='</td>';
              $str.='</tr>';
              
              $total_contacts += $row['COUNT( ct.first_name )'];
	      $total_training += $row['no_of_training'];
	      $total_pastors += $row['no_of_trained_pastors'];
           }

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<th class valign="top" align="left">';
              $str.= '<span class="sugar_field">  </span>';
              $str.='</th>';
              $str.='<th class valign="top" align="left">';
              $str.= '<span class="sugar_field">  </span>';
              $str.='</th>';
              $str.='<th class valign="top" align="left">';
              $str.= '<span class="sugar_field"> Total Contacts: '.$total_contacts.' </span>';
              $str.='</th>';
	      $str.='<th class valign="top" align="left">';
              $str.= '<span class="sugar_field"> Total: '.$total_training.' </span>';
              $str.='</th>';
	      $str.='<th class valign="top" align="left">';
              $str.= '<span class="sugar_field"> Total Trained Pastors: '.$total_pastors.' </span>';
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

?>
