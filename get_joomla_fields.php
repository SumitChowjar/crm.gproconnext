<?php
if(isset($_POST)) {
    $email_id = $_POST['email']; //echo $email_id; die;

    if(!defined('sugarEntry'))
    define('sugarEntry', true);
    require_once ('include/entryPoint.php');
    global $db;

    $query = "SELECT esfd.field_id, esfd.uid, esfd.type, esfd.datakey, esfd.data, esf.unique_key, esf.title FROM eciu_users
        INNER JOIN eciu_social_fields_data AS esfd ON esfd.uid = eciu_users.id
        AND ( esfd.field_id IN ( 105, 133, 134, 140, 152, 160, 171, 172, 173, 211, 174, 175, 176, 177, 178, 179, 181, 182, 183, 184, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 203, 205, 207, 209, 213, 214, 215, 216, 217, 218, 219, 220, 221, 224, 223, 225, 226, 227, 228, 231, 232, 237, 245 ) )
        INNER JOIN eciu_social_fields as esf ON esf.id = esfd.field_id
        WHERE eciu_users.email =  '".$email_id."'";

        $result = $db->query($query); //echo "<pre>"; print_r($result); die;
        $str = '';
        $str .= '<div id="tabcontent3jm">';

    if($result->num_rows != 0){
        while( $row = $db->fetchByAssoc($result) ){
	//$temp[] = $row;
	if( $row['field_id'] == 133 && $row['datakey'] == "first" ){
        $row['title'] = "First Name";
        }
        if( $row['field_id'] == 133 && $row['datakey'] == "middle" ){
        $row['title'] = "Middle Name";
        }
        if( $row['field_id'] == 133 && $row['datakey'] == "last" ){
        $row['title'] = "Last Name";
        }
        if( $row['field_id'] == 133 && $row['datakey'] == "name" ){
        $row['title'] = "Full Name";
        }

        if( $row['field_id'] == 201 && $row['unique_key'] == "FIELD_CB_LANGUAGE_1_PRIMARY" ){
            $row['title'] = "Language #1 Details";
        }
        if( $row['field_id'] == 201 && $row['unique_key'] == "FIELD_CB_LANGUAGE_2_PRIMARY" ){
            $row['title'] = "Language #2 Details";
        }
        if( $row['field_id'] == 201 && $row['unique_key'] == "FIELD_CB_LANGUAGE_3_PRIMARY" ){
            $row['title'] = "Language #3 Details";
        }
        if( $row['field_id'] == 201 && $row['unique_key'] == "FIELD_CB_LANGUAGE_4_PRIMARY" ){
            $row['title'] = "Language #4 Details";
        }
        if( $row['field_id'] == 201 && $row['unique_key'] == "FIELD_CB_LANGUAGE_5_PRIMARY" ){
            $row['title'] = "Language #5 Details";
        }

        //Social Account Title Modification
        if( $row['field_id'] == 191 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_01" ){
            $row['title'] = "Your account ID #1";
        }
        if( $row['field_id'] == 192 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_02" ){
            $row['title'] = "Your account ID #2";
        }
        if( $row['field_id'] == 193 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_03" ){
            $row['title'] = "Your account ID #3";
        }
        if( $row['field_id'] == 194 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_04" ){
            $row['title'] = "Your account ID #4";
        }
        if( $row['field_id'] == 195 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_05" ){
            $row['title'] = "Your account ID #5";
        }
        if( $row['field_id'] == 196 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_06" ){
            $row['title'] = "Your account ID #6";
        }
        if( $row['field_id'] == 197 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_07" ){
            $row['title'] = "Your account ID #7";
        }
        if( $row['field_id'] == 198 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_08" ){
            $row['title'] = "Your account ID #8";
        }
        if( $row['field_id'] == 199 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_09" ){
            $row['title'] = "Your account ID #9";
        }
        if( $row['field_id'] == 200 && $row['unique_key'] == "FIELD_CB_SOCIAL_NETWORK_VALUE_10" ){
            $row['title'] = "Your account ID #10";
        }

        //Social Network Title
        if( $row['field_id'] == 213 && $row['unique_key'] == "DROPDOWN-1" ){
            $row['title'] = "Social Network #1";
        }
        if( $row['field_id'] == 214 && $row['unique_key'] == "DROPDOWN-2" ){
            $row['title'] = "Social Network #2";
        }
        if( $row['field_id'] == 215 && $row['unique_key'] == "DROPDOWN-3" ){
            $row['title'] = "Social Network #3";
        }
        if( $row['field_id'] == 216 && $row['unique_key'] == "DROPDOWN-4" ){
            $row['title'] = "Social Network #4";
        }
        if( $row['field_id'] == 217 && $row['unique_key'] == "DROPDOWN-5" ){
            $row['title'] = "Social Network #5";
        }
        if( $row['field_id'] == 218 && $row['unique_key'] == "DROPDOWN-6" ){
            $row['title'] = "Social Network #6";
        }
        if( $row['field_id'] == 219 && $row['unique_key'] == "DROPDOWN-7" ){
            $row['title'] = "Social Network #7";
        }
        if( $row['field_id'] == 220 && $row['unique_key'] == "DROPDOWN-8" ){
            $row['title'] = "Social Network #8";
        }
        if( $row['field_id'] == 221 && $row['unique_key'] == "DROPDOWN-9" ){
            $row['title'] = "Social Network #9";
        }
        if( $row['field_id'] == 224 && $row['unique_key'] == "DROPDOWN-10" ){
            $row['title'] = "Social Network #10";
        }

        //Language Titles
        if( $row['field_id'] == 223 ){
            $row['title'] = "Language #1";
        }
        if( $row['field_id'] == 225 ){
            $row['title'] = "Language #2";
        }
        if( $row['field_id'] == 226 ){
            $row['title'] = "Language #3";
        }
        if( $row['field_id'] == 227 ){
            $row['title'] = "Language #4";
        }
        if( $row['field_id'] == 228 ){
            $row['title'] = "Language #5";
        }
        
        $tmp[$row['title']] = $row;
        }

        //echo "<pre>";print_r($tmp); die;
        if(!empty($tmp['COM_EASYSOCIAL_REGISTRATION_COUNTRY_CODE']['data'])){
            $getCountry = "SELECT name FROM eciu_social_regions WHERE type = 'country' AND code = '". $tmp['COM_EASYSOCIAL_REGISTRATION_COUNTRY_CODE']['data'] ."'";
            $exc_country = $db->query($getCountry);
            $country_info = $db->fetchByAssoc($exc_country);
            $tmp['COM_EASYSOCIAL_REGISTRATION_COUNTRY_CODE']['data'] = $country_info['name'];
        }

        

        /*==================== Start Basic Info =====================*/
        $str .= "<h3>Basic Info</h3>";
        $str .= '<div class="detail view  detail508 expanded"> <table class="panelContainer" cellspacing="0"> <tbody>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> First Name </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['First Name']['data'] . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Middle Name </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['Middle Name']['data'] . '</div> </td>';
        $str .= '</tr>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Last Name </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['Last Name']['data'] . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Skype ID </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. @$tmp['COM_EASYSOCIAL_REGISTRATION_SKYPE_ID']['data'] . '</div> </td>';
        $str .= '</tr>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Phone Country Code </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. @$tmp['COM_EASYSOCIAL_REGISTRATION_PHONE_COUNTRY_CODE']['data'] . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Main Phone Number </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. @$tmp['COM_EASYSOCIAL_REGISTRATION_MAIN_PHONE_NUMBER']['data'] . '</div> </td>';
        $str .= '</tr>';

        $str .= '<tr>';
	$str .= '<td width="12.5%" scope="col"> Primary Email </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $email_id . '</div> </td>';
        $str .= '<td width="12.5%" scope="col"> Email (Secundary) </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['COM_EASYSOCIAL_REGISTRATION_EMAIL_SECONDARY']['data'] . '</div> </td>';
        $str .= '</tr>';

	$str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Country </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['COM_EASYSOCIAL_REGISTRATION_COUNTRY_CODE']['data'] . '</div> </td>';
	$str .= '<td width="12.5%" scope="col"> </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon"> </div> </td>';
        $str .= '</tr>';

        $str .= '</tbody></table> </div>';
        /*==================== End Basic Info =====================*/


        /*==================== Start Social Network Info =====================*/
if( !empty($tmp['Social Network #1']['data']) || !empty($tmp['Social Network #2']['data']) || !empty($tmp['Social Network #3']['data']) || !empty($tmp['Social Network #4']['data']) || !empty($tmp['Social Network #5']['data']) || !empty($tmp['Social Network #6']['data']) || !empty($tmp['Social Network #7']['data']) || !empty($tmp['Social Network #8']['data']) || !empty($tmp['Social Network #9']['data']) || !empty($tmp['Social Network #10']['data']) )
	{
	
	$str .= "<h3>Social Network Details</h3>";
        $str .= '<div class="detail view  detail508 expanded"> <table class="panelContainer" cellspacing="0"> <tbody>';


        $i = 1;
        for($i=1; $i<=10; $i++){
        if(!empty( $tmp['Social Network #'.$i]['data'] || $tmp['Your account ID #'.$i]['data'] )){
        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Social Network #'. $i .'</td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%">';
		$str .= '<span class="sugar_field" data-id-value=""></span>';
		$str .= '<div class="inlineEditIcon">';
        $str .= $tmp['Social Network #'.$i]['data'];
        if($tmp['Social Network #'.$i]['data'] == 'Facebook'){
            $str .= '<a href="https://www.facebook.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ($tmp['Social Network #'.$i]['data'] == 'Twitter') {
            $str .= '<a href="https://twitter.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ( ($tmp['Social Network #'.$i]['data'] == 'Google+') || ($tmp['Social Network #'.$i]['data'] == 'Google_plus') ) {
            $str .= '<a href="https://plus.google.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ($tmp['Social Network #'.$i]['data'] == 'Instagram') {
            $str .= '<a href="https://www.instagram.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ($tmp['Social Network #'.$i]['data'] == 'LinkedIn') {
            $str .= '<a href="https://www.linkedin.com/in/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ($tmp['Social Network #'.$i]['data'] == 'Pinterest') {
            $str .= '<a href="https://www.pinterest.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }elseif ($tmp['Social Network #'.$i]['data'] == 'YouTube') {
            $str .= '<a href="https://www.youtube.com/'.$tmp['Your account ID #'.$i]['data'].'" target="_blank"> <img src="custom/js/social_media1.png"> </a>';
        }
        $str .= '</div>';
		$str .= '</td>';

                $str .= '<td width="12.5%" scope="col"> Your account ID #'. $i .' </td>';
                $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['Your account ID #'.$i]['data'] . '</div> </td>';
                $str .= '</tr>';
            }
        }

        $str .= '</tbody></table> </div>';

	}
        /*==================== End Social Network Info =====================*/

        /*==================== Start Pastorial Info =====================*/
        $str .= "<h3>Pastoral Info</h3>";
        $str .= '<div class="detail view  detail508 expanded"> <table class="panelContainer" cellspacing="0"> <tbody>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Profile Type </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['COM_EASYSOCIAL_REGISTRATION_PROFILE_TYPE']['data'] . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Your professional profile description </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['COM_EASYSOCIAL_REGISTRATION_PROFILE_DESCRIPTION']['data'] . '</div> </td>';
        $str .= '</tr>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Years as Pastoral Trainer </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. str_replace('_', '-', $tmp['COM_EASYSOCIAL_REGISTRATION_YEARS_AS_PASTORAL_TRAINER']['data']) . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Average of pastors trained every year </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['COM_EASYSOCIAL_REGISTRATION_AVERAGE_PASTORS_EVERY_YEAR']['data'] . '</div> </td>';
        $str .= '</tr>';
        
        $str .= '</tbody></table> </div>';
        /*==================== End Pastorial Info =====================*/


        /*==================== Start Language Info =====================*/
	if( (isset($tmp['Language #1']['data']) && !empty($tmp['Language #1']['data'])) || (isset($tmp['Language #2']['data']) && !empty($tmp['Language #2']['data'])) || (isset($tmp['Language #3']['data']) && !empty($tmp['Language #3']['data'])) || (isset($tmp['Language #4']['data']) && !empty($tmp['Language #4']['data'])) || (isset($tmp['Language #5']['data']) && !empty($tmp['Language #5']['data'])) )
	{
	$str .= "<h3>Languages Details</h3>";
        $str .= '<div class="detail view  detail508 expanded"> <table class="panelContainer" cellspacing="0"> <tbody>';

        $j = 1;
        for($j=1; $j<=5; $j++){
            if(!empty( $tmp['Language #'.$j]['data'] )){

                $getLanguage = "SELECT title FROM eciu_social_fields_options WHERE value = '".$tmp['Language #'.$j]['data']."' AND parent_id = ". $tmp['Language #'.$j]['field_id'];
                $exc_lang = $db->query($getLanguage);
                $lang_info = $db->fetchByAssoc($exc_lang);
                $tmp['Language #'.$j]['data'] = $lang_info['title'];
                
                $str .= '<tr>';
                $str .= '<td width="8%" scope="col"> Language #'. $j .'</td>';
                $str .= '<td class="inlineEdit" type="relate" width="26.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['Language #'.$j]['data'] . '</div> </td>';

                if( $tmp['Language #'.$j.' Details'] ){
                    //$language_attr = str_replace(array('[', ']'), '', $tmp['Language #'.$j.' Details']['data']);
                    if (strpos($tmp['Language #'.$j.' Details']['data'], 'primary_language') !== false) {
                        $primary_language = "Yes";
                    }else{
                        $primary_language = "No";
                    }
                    
                    if(strpos($tmp['Language #'.$j.' Details']['data'], 'can_teach') !== false){
                        $teach = "Yes";
                    }else{
                        $teach = "No";
                    }
                }else{
                    $primary_language = "No";
                    $teach = "No";
                }

                $str .= '<td width="8%" scope="col"> Primary Language </td>';
                $str .= '<td class="inlineEdit" type="relate" width="26.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $primary_language . '</div> </td>';

                $str .= '<td width="8%" scope="col"> Can Teach </td>';
                $str .= '<td class="inlineEdit" type="relate" width="26.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $teach . '</div> </td>';
                $str .= '</tr>';

                //need to display primary checkbox

                $str .= '<tr>';
                
                $str .= '</tr>';
            }
        }

        $str .= '</tbody></table> </div>';
	}
        /*==================== End Language Info =====================*/

         /*==================== Start Last Info =====================*/
        $str .= "<h3> Reference Info </h3>";
        $str .= '<div class="detail view  detail508 expanded"> <table class="panelContainer" cellspacing="0"> <tbody>';

        $str .= '<tr>';
        $str .= '<td width="12.5%" scope="col"> Where did you hear about GProConneXt ? </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['WHERE_DID_YOU_HERE_ABOUT_GPROCONNEXT']['data'] . '</div> </td>';

        $str .= '<td width="12.5%" scope="col"> Who invited you or introduced you to GProConneXt.com? </td>';
        $str .= '<td class="inlineEdit" type="relate" width="37.5%"> <span class="sugar_field" data-id-value=""></span> <div class="inlineEditIcon">'. $tmp['WHO_INVITED_YOU_OR_INTRODUCED_YOU_TO_GPROCONNEXT_TITLE']['data'] . '</div> </td>';
        $str .= '</tr>';

        $str .= '</tbody></table> </div>';
        /*==================== End Last Info =====================*/

    }else{
        $str .= '<h3 style="padding: 13px 0px 5px 17px;"> This user is not registered on GProConneXt. </h3>';
    }

    $str .= '</div>';

    echo $str; die;
}
?>
