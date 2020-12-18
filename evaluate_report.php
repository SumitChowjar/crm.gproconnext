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
         $query= "Select ct.first_name, ct.last_name, SUM(ta.number_of_pastors) as total from eciu_crm_training_actuals as ta 
               JOIN eciu_crm_training_actuals_contacts_c as tac on ta.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb 
               JOIN contacts as ct on ct.id = tac.eciu_crm_training_actuals_contactscontacts_ida 
               WHERE DATE(ta.date_entered) >= '".$start_date."'
               AND DATE(ta.date_entered) <= '".$end_date."'
               AND tac.deleted =0 GROUP BY ct.id ORDER BY ".$_POST['column_name']." ".$_POST['sort'];
                  $sort_key = $_POST['sort']; 

       }else{

         

         $query= "Select ct.first_name, ct.last_name, SUM(ta.number_of_pastors) as total from eciu_crm_training_actuals as ta 
               JOIN eciu_crm_training_actuals_contacts_c as tac on ta.id = tac.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb 
               JOIN contacts as ct on ct.id = tac.eciu_crm_training_actuals_contactscontacts_ida 
               WHERE DATE(ta.date_entered) >= '".$start_date."'
               AND DATE(ta.date_entered) <= '".$end_date."'
               AND tac.deleted =0 GROUP BY ct.id ORDER BY ct.first_name ASC"; 
               $sort_key = "ASC";
       }

        //echo $query; die();

         $result = $db->query($query);

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
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_Actuals_Report("first_name")>First Name</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="first_name_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_Actuals_Report("last_name")>Last Name</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="last_name_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer" onclick=sort_Training_Actuals_Report("SUM(number_of_pastors)")>No. of Trained Pastors</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str .= '<input type="hidden" id="number_of_pastors_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='</thead>';
             

              while( $row = $db->fetchByAssoc($result) )
            {
              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['first_name'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['last_name'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="letf">';
              $str.= '<span class="sugar_field" id="pastors"> '.$row['total'].'</span>';
              $str.='</td>';
              $str.='</tr>';
              
              $total_pastors += $row['total'];

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
              $str.= '<span class="sugar_field" id="last_name">  </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="pastors"> Total Trained Pastors: '.$total_pastors.'</span>';
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
