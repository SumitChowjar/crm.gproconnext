<?php        
     if(!defined('sugarEntry'))
     define('sugarEntry', true);
     require_once ('include/entryPoint.php');
       
      global $db;
      $count = 0;

      
           
           $query = "SELECT `first_name`, `last_name`, `primary_address_country`, count(*) as number FROM `contacts` WHERE deleted = 0 group by first_name , last_name, primary_address_country having count(number) > 1";

          
        
        
         $result = $db->query($query);
      
            $str  = '<div id="custom_content">';
            $str .= '<table id="custom_report"><tbody><tr><td>';
            $str .= '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back"><input tabindex="2" title="Submit" onclick="duplicate_accounts_csv();" class="button"      type="button" value="Export CSV">';
            $str .= '<div class="moduleTitle"><h2> Duplicate Accounts Report</h2><div class="clear"></div></div>';
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
                $str .='<table id="FIELDS" class="panelContainer" cellspacing="0">
                        <tbody><tr><td width="37.5%" colspan="4"><span id="field_lines_span">';
                $str .='<table class="list" id="report_table" width="100%" cellspacing="0" cellpadding="0"  border="0" repeat_header="1"><thead><tr class="pagination"><td colspan="18">';
                $str .='<thead>';
                $str .='<th scope="col">';
                $str .='<div style="white-space: normal;" width="100%" align="letf" >S.N</div>';
                $str .='</th>';
                $str .='<th scope="col">';
                $str .='<div style="white-space: normal;" width="100%" align="letf">';
                $str .='<span style="cursor:pointer">First Name</span>';
                $str .='</div>';
                $str .='</th>';
                $str .='<th scope="col">';
                $str .='<div style="white-space: normal;" width="100%" align="letf">';
                $str .='<span style="cursor:pointer">Last Name</span>';
                $str .='</div>';
                $str .='</th>';
                $str .='<th scope="col">';
                $str .='<div style="white-space: normal;" width="100%" align="letf">';
                $str .='<span style="cursor:pointer">Country</span>';
                $str .='</div>';
                $str .='</th>';
	              $str .='<th scope="col">';
                $str .='<div style="white-space: normal;" width="100%" align="letf">';
                $str .='<span style="cursor:pointer">No. of Time Entries in CRM</span>';
                $str .='</div>';
                $str .='</th>';
                $str .='</thead>';
             
              while( $row = $db->fetchByAssoc($result) )
            {
              
              $count =$count+1;

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
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['primary_address_country'].' </span>';
              $str.='</td>';
              $str.='<td class valign="top" align="left">';
              $str.= '<span class="sugar_field" id="last_name"> '.$row['number'].' </span>';
              $str.='</td>';
              $str.='</tr>';
              
           }

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


            $str .= '</div>';
            $str .= '</td></tr></tbody></table>';
            $str .= '</div>';
                 
    echo $str; die;

?>
