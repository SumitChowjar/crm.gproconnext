<?php 
if(isset($_POST))
{
	   $start_date = date("Y-m-d", strtotime($_POST['start_date']));
     $end_date = date("Y-m-d", strtotime($_POST['end_date']));
    
       
       if(!defined('sugarEntry'))
       define('sugarEntry', true);
       require_once ('include/entryPoint.php');
       global $db;


            $query = "SELECT t2.recieved_email, t2.name, t1.sent_email  from
                   (
                     SELECT count(ec.ie_id) as recieved_email, users.user_name as name  FROM `email_addresses` as email 
 
                     JOIN email_addr_bean_rel as email_rel on email_rel.email_address_id = email.id 
 
                     JOIN users on users.id = email_rel.bean_id 
 
                     JOIN email_cache as ec on ec.toaddr = email.email_address
 
                     WHERE email_rel.deleted = 0 AND DATE(ec.senddate) >= '".$start_date."' AND DATE(ec.senddate) <= '".$end_date."'
 
                     GROUP BY users.user_name
 
                   ) as t2 JOIN
                   (
                     SELECT count(emails.id) as sent_email, users.user_name 
    
                     FROM `emails` 
    
                     JOIN users on users.id = emails.assigned_user_id 
    
                     WHERE emails.status = 'sent' AND emails.deleted = 0 AND DATE(emails.date_sent) >= '".$start_date."' AND DATE(emails.date_sent) <= '".$end_date."'
     
                     GROUP BY users.user_name
      
                   ) as t1 on t1.user_name = t2.name";
                 
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
           $str.='<span>Sr.No.</span>';
           $str.='<input type="hidden" id="contacts_id_sort" value="'.$sort_key.'">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">User Name</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Sent Emails</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='<th scope="col">';
           $str.='<div style="white-space: normal;" width="100%" align="letf">';
           $str.='<span style="cursor:pointer">Recieved Emails</span>';
           $str.='<img src="custom/js/if_sort.png" style="height:12px;">';
           $str.='</div>';
           $str.='</th>';
           $str.='</thead>';
             
              $contacts = 0;

              while( $row = $db->fetchByAssoc($result) )
            {
              //print_r($row); die();
              $total += $row['number_of_tasks'];

              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['name'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['sent_email'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['recieved_email'].' </span>';
              $str.='</td>';
              $str.='</tr>';


              $total_sent_email += $row['sent_email'];
              $total_recieved_email += $row['recieved_email'];
              
              $count++;
              
           }
              $str.='<tr class="oddListRowS1" height="20">';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name">  </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name">  </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> Total Number of Sent Emails: '.$total_sent_email.' </span>';
              $str.='</th>';
              $str.='<th scope="col">';
              $str.= '<span class="sugar_field" id="last_name"> Total Number of Recieved Emails: '.$total_recieved_email.'  </span>';
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