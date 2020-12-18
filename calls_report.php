<?php 
if(isset($_POST))
{
	   $start_date = date("Y-m-d", strtotime($_POST['start_date']));
     $end_date = date("Y-m-d", strtotime($_POST['end_date']));
    
       
       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       global $db;


            // "SELECT DISTINCT
            //          (SELECT COUNT(*) FROM calls WHERE status='Planned' AND deleted = 0) as Planned,
            //          (SELECT COUNT(*) FROM calls WHERE status='Held' AND deleted = 0) as Held,
            //          (SElect COUNT(*) FROM calls WHERE status='Not Held' AND deleted = 0) as Not_Held,
            //          (SELECT COUNT(*) FROM calls WHERE direction='Outbound' AND deleted = 0) as Outbound,
            //          (SELECT COUNT(*) FROM calls WHERE direction='Inbound' AND deleted = 0) as Inbound,
            //          (SELECT COUNT(*) FROM calls WHERE deleted = 0) as TotalCount FROM calls  WHERE DATE(calls.date_entered) >= '".$start_date."' AND DATE(calls.date_entered)<= '".$end_date."'";


              $query = "SELECT DISTINCT (SELECT COUNT(*) FROM calls WHERE status='Planned' AND deleted = 0 AND DATE(calls.`date_entered`) >= '".$start_date."' AND DATE(calls.`date_entered`)<= '".$end_date."') as Planned, 
                       (SELECT COUNT(*) FROM calls WHERE status='Held' AND deleted = 0 AND DATE(calls.date_entered) >= '".$start_date."' AND DATE(calls.date_entered)<= '".$end_date."') as Held, 
                       (SELECT COUNT(*) FROM calls WHERE status='Not Held' AND deleted = 0 AND DATE(calls.date_entered) >= '".$start_date."' AND DATE(calls.date_entered) <= '".$end_date."') as Not_Held, 
                       (SELECT COUNT(*) FROM calls WHERE direction='Outbound' AND deleted = 0 AND DATE(calls.date_entered) >= '".$start_date."' AND DATE(calls.date_entered) <= '".$end_date."') as Outbound, 
                      (SELECT COUNT(*) FROM calls WHERE direction='Inbound' AND deleted = 0 AND DATE(calls.`date_entered`) >= '".$start_date."' AND DATE(calls.`date_entered`) <= '".$end_date."') as Inbound, 
                      (SELECT COUNT(*) FROM calls WHERE deleted = 0 AND DATE(calls.date_entered) >= '".$start_date."' AND DATE(calls.date_entered) <= '".$end_date."') as TotalCount FROM calls ";
                //print_r($query); die();
      
         $result = $db->query($query);
       

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
           $str.='<span style="cursor:pointer">Planned</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Held</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Not Held</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Outbound</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Inbound</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Total Logged calls</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='</thead>';
             
              $contacts = 0;

              while( $row = $db->fetchByAssoc($result) )
            {
              //print_r($row); die();

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['Planned'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['Held'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['Not_Held'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['Outbound'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['Inbound'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['TotalCount'].' </span>';
              $str.='</td>';
              $str.='</tr>';
              
           }
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
