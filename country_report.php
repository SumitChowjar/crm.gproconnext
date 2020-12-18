<?php        
if(!defined('sugarEntry'))
define('sugarEntry', true);
require_once ('include/entryPoint.php');
global $db;
$count = 0;
if(isset($_POST['country']) && !empty($_POST['country'])){
$country = $_POST['country'];
if($country == '0'){
$query= "SELECT COUNT(id) as Contacts, primary_address_country FROM contacts WHERE deleted = 0 GROUP BY primary_address_country";
$sort_key = "ASC";
}
else
{
$query= "SELECT COUNT(id) as Contacts, primary_address_country FROM contacts WHERE `primary_address_country` = '".$country."' AND deleted = 0 GROUP BY primary_address_country";
}
}
elseif(isset($_POST['column_name']) && !empty($_POST['column_name'])){
$query= "SELECT COUNT(id) as Contacts, primary_address_country FROM contacts WHERE deleted = 0 GROUP BY primary_address_country ORDER BY ".$_POST['column_name']." ".$_POST['sort'];
$sort_key = $_POST['sort'];
}
else{
$query= "SELECT COUNT(id) as Contacts, primary_address_country FROM contacts WHERE deleted = 0 GROUP BY primary_address_country";
$sort_key = "ASC";
}
$result = $db->query($query);
/*
$mis_countries = "SELECT COUNT(first_name) as Name, primary_address_country FROM contacts WHERE 'primary_address_country' = '' GROUP BY primary_address_country";
$result12 = $db->query($mis_countries);
echo "<pre>"; print_r($result12); die;*/
//print_r($result);
//if( @$_POST['column_name'] == 'COUNT(first_name)' && $_POST['sort'] == 'DESC' )
//{
//  $count = $result->num_rows;
// }
//  else
//  {
// $count = 1;
//}
$count = 1;
$str = '<div id="custom_content">';
$str .= '<table id="custom_report"><tbody><tr><td>';
$str .= '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back"><input tabindex="2" title="Submit" onclick="countryCsv(this);" class="button" type="button" value="Export CSV">';
$str .= '<div class="moduleTitle"><h2> Contacts Per Country </h2><div class="clear"></div></div>';
$str .= '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
$str .= '<tbody><tr>';
$str .= '</tr></tbody>';
$str .= '</table>';
$str .= '</div>';
$str .= '<div id="report-data">';
//country search section
$str .= '<div class="edit view search basic" id="custom_country">';
$str .='<table width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr>';
$str .='<td id= "custom_td" scope="row" nowrap="nowrap" width="1%"><label for="name_basic">Country</label></td>';
$str .= '<td nowrap="nowrap" width="1%">';
$str .= '<select id="country_id">';
$value = $GLOBALS['app_list_strings']['countries_dom'];
array_shift($value);
array_unshift($value, "ALL"); 
foreach ($value as $key => $country) {
if(isset($_POST['country']) && !empty($_POST['country']) && $key == $_POST['country'] ){
$str .= '<option value="'.$key.'" selected>'.$country.'</option>';
}else{
$str .= '<option value="'.$key.'">'.$country.'</option>';
}
}
$str .= '</select>';
$str .= '<td class="sumbitButtons">';
$str .= '<input tabindex="2" title="Search" onclick="countryName(this);" class="button" type="submit" name="button" value="Search" id="search_form_submit">&nbsp;</td>';
$str .= '</tr></tbody></table>';
$str .= '</div>';
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
/*$str .= '<label >Country</label><input type="text" name="country" size="25" placeholder="country"><input type= "submit" tabindex="2" title="Submit" onclick="countryName(this);" class="button" value="Submit">';*/
//$str .= '<label >Country</label>';
//country dropdown
/*$str .= '<select id="country_id">';
foreach ($GLOBALS['app_list_strings']['countries_dom'] as $key => $country) {
$str .= '<option value="'.$key.'">'.$country.'</option>';
}
$str .= '</select>';*/
//$str .= '<input type= "submit" tabindex="2" title="Submit" onclick="countryName(this);" class="button" value="Submit">';
$str.='<table id="FIELDS" class="panelContainer" cellspacing="0">
<tbody>';   
$str .= '<tr><td width="37.5%" colspan="4"><span id="field_lines_span">';
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
$str.='<span style="cursor:pointer" onclick=sort_Countries_Report("primary_address_country")>Country </span>';
$str.='<img src="custom/js/if_sort.png" style="height:12px;">';
$str .= '<input type="hidden" id="country_name_sort" value="'.$sort_key.'">';
$str.='</div>';
$str.='</th>';
$str.='<th scope="col">';
$str.='<div style="white-space: normal;" width="100%" align="letf">';
$str.='<span style="cursor:pointer" onclick=sort_Countries_Report("COUNT(id)")>No. Of Contacts </span>';
$str.='<img src="custom/js/if_sort.png" style="height:12px;">';
$str.= '<input type="hidden" id="contacts_id_sort" value="'.$sort_key.'">';
$str.='</div>';
$str.='</th>';
$str.='</thead>';
while( $row = $db->fetchByAssoc($result) )
{ //echo "<pre>"; print_r($row); die;
if($row['primary_address_country']=='NULL' || $row['primary_address_country']==''){
$miscellaneous = $row['Contacts'];
}else{
$str.='<tr class="oddListRowS1" height="20">';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';              
$str.= '<span class="sugar_field" id="last_name"> '.$row['primary_address_country'].'</span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$row['Contacts'].' </span>';
$str.='</td>';  
$str.='</tr>';
$count = $count+1;
}
$total_contacts += $row['Contacts'];
//if( @$_POST['column_name'] == 'COUNT(first_name)' && $_POST['sort'] == 'DESC' ){
//$count--;
//}else{
// $count++;
//}
}
//row for misllenious countries
if(!isset($_POST['country']) && empty($_POST['country']) ){
$str.='<tr class="oddListRowS1" height="20">';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';              
$str.= '<span class="sugar_field" id="last_name"> <b>Z-Miscellaneous <b></span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$miscellaneous.' </span>';
$str.='</td>';  
$str.='</tr>';
}else{
if( $_POST['country'] == "0"){
$str.='<tr class="oddListRowS1" height="20">';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$count.' </span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';              
$str.= '<span class="sugar_field" id="last_name"> <b>Z-Miscellaneous <b></span>';
$str.='</td>';
$str.='<td class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> '.$miscellaneous.' </span>';
$str.='</td>';  
$str.='</tr>';
}
}
$str.='<tr class="oddListRowS1" height="20">';
$str.='<th class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name">  </span>';
$str.='</th>';
$str.='<th class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name">  </span>';
$str.='</th>';
$str.='<th class valign="top" align="left">';
$str.= '<span class="sugar_field" id="last_name"> Total Contacts: '.$total_contacts.' </span>';
$str.='</th>';
$str.='</tr>';
$str.='</table>';
$str.='</span></td></tr></tbody>';
$str.='</table>';

}
else
{
//echo '<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>'; die;
echo "0"; die;
}
$str .= '</div>';            
$str .= '</div>';
$str .= '</td></tr></tbody></table>';
$str .= '</div>';
echo $str; die;
?>