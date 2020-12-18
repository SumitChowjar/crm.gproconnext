<?php 
if(isset($_POST))
{
	   $start_date = date("Y-m-d", strtotime($_POST['start_date']));
     $end_date = date("Y-m-d", strtotime($_POST['end_date']));
    
       
       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       global $db;

if( isset($_POST['column_name']) && !empty($_POST['column_name']) ){
              $query= "Select count(ct.id) as contacts,ct.first_name, ct.last_name, sum(ectg.y2016) as y2016, 
                       sum(ectg.y2017) as y2017, sum(ectg.y2018) as y2018,sum(ectg.y2019) as y2019, sum(ectg.y2020) as y2020, SUM(ectg.total) as total_goals from eciu_crm_training_goals as ectg 
                       JOIN eciu_crm_training_goals_contacts_c as ectgc on ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb = ectg.id 
                       JOIN contacts as ct 
                       on ct.id = ectgc.eciu_crm_training_goals_contactscontacts_ida 
                       WHERE DATE(ectg.date_entered) >= '".$start_date."'
                       AND DATE(ectg.date_entered) <= '".$end_date."'
                       AND ectg.deleted =0 AND ct.deleted=0 GROUP BY ct.id ORDER BY ".$_POST['column_name']." ".$_POST['sort'];
                  $sort_key = $_POST['sort'];
                  //echo $query; die;

          }else{
            $query= "Select count(ct.id) as contacts,ct.first_name, ct.last_name, sum(ectg.y2016) as y2016, 
                     sum(ectg.y2017) as y2017, sum(ectg.y2018) as y2018, sum(ectg.y2019) as y2019, sum(ectg.y2020) as y2020, SUM(ectg.total) as total_goals from eciu_crm_training_goals as ectg 
                     JOIN eciu_crm_training_goals_contacts_c as ectgc on ectgc.eciu_crm_training_goals_contactseciu_crm_training_goals_idb = ectg.id 
                     JOIN contacts as ct 
                       on ct.id = ectgc.eciu_crm_training_goals_contactscontacts_ida
                       WHERE DATE(ectg.date_entered) >= '".$start_date."'
                         AND DATE(ectg.date_entered) <= '".$end_date."'
                         AND ectg.deleted =0 AND ct.deleted=0 GROUP BY ct.id ORDER BY ct.first_name ASC";
                  $sort_key = "ASC";
                
          }  
          
      
         $result = $db->query($query);
        //print_r($result); die();

          //if( @$_POST['column_name'] == 'ct.id' && $_POST['sort'] == 'DESC' ){
           // $count = $result->num_rows;
         //}else{
           // $count = 1;
         //}
           $count = 1;
           
            $str = '';
            $str .= '<div id="detailpanel_report" class="detail view  detail508   expanded">';
         
         if($result->num_rows != 0)
         {
          $str.='<h4><a id="mylink" href="javascript:void(0)" class="collapseLink" onclick="javascript:myLinkButtonClick();">';
          $str.='<img border="0" id="detailpanel_report_img_hide" src="themes/Suite7/images/basic_search.gif?v=N3y-Ekbw475Psgre05yy4Q">';
          $str.='</a>';
          $str.='<a id="exp" href="javascript:void(0)" class="expandLink" onclick="javascript:myLinkButtonClick();"><img border="0" id="detailpanel_report_img_show" src="themes/Suite7/images/advanced_search.gif?v=N3y-Ekbw475Psgre05yy4Q">';
           $str.='</a>Report</h4>';
           $str.='<table id="FIELDS" class="panelContainer" cellspacing="0"><tbody><tr><td width="37.5%" colspan="4">
                  <span id="field_lines_span">';
           $str.='<table class="list" id="report_table" width="100%" cellspacing="0" cellpadding="0" border="0" repeat_header="1"><thead><tr class="pagination"><td colspan="18">';
           $str.='<thead>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span>Sr.No.</span>';
           $str.='<input type="hidden" id="contacts_id_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           /*$str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_Actuals_Report("first_name")>No. of Contacts</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="first_name_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';*/
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("first_name")>First Name</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="first_name_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("last_name")>Last Name</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="last_name_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("y2016")>Year 2016</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="y2016_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("y2017")>Year 2017</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="y2017_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("y2018")>Year 2018</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="y2018_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("y2019")>Year 2019</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="y2019_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("y2020")>Year 2020</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="y2020_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_goals_Report("total_goals")>Total Goals</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="total_goals_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='</thead>';
             
              $contacts = 0;

              while( $row = $db->fetchByAssoc($result) )
            {
              //print_r($row); die();
              $contacts = $contacts+1;

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
              $str.='</td>';
             /* $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['contacts'].' </span>';
              $str.='</td>';*/
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['first_name'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['last_name'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['y2016'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['y2017'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['y2018'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['y2019'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['y2020'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="letf">';
              $str.= '<span class="sugar_field" id="pastors"> '.$row['total_goals'].'</span>';
              $str.='</td>';
              $str.='</tr>';
              
              $total_goals += $row['total_goals'];

              //if( @$_POST['column_name'] == 'ct.id' && $_POST['sort'] == 'DESC' )
               //{
                 // $count--;
              // }
              //else
               //{
                //  $count++;
              // }

              $count = $count+1;
           }

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name">  </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="pastors"> No. of Contacts: '.$contacts.'</span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> Total Submitted Goals: '.$total_goals.'</span>';
              $str.='</th>';
              $str.='</tr>';
              $str.='</table>';
              $str.='</span></td></tr></tbody>';
              $str.='</table>';

       }
        else
       {
         echo "0"; die;
       }
      
        $str .= '</div>';
        echo $str; die;

}
?>
