<?php
phpinfo();die;

ini_set('max_execution_time', 5000);

if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once('include/entryPoint.php');
global $db;

/*--- Begin API Properties ---*/

$url = $sugar_config['site_url']."/service/v3_1/rest.php"; //echo $url; die;
$username = 'super.admin.2';
$pw = 'K+3x:"UsRzGg"7EF';
$password = htmlspecialchars($pw, ENT_QUOTES);

function call($method, $parameters, $url)
{
    ob_start();
    $curl_request = curl_init();

    curl_setopt($curl_request, CURLOPT_URL, $url);
    curl_setopt($curl_request, CURLOPT_POST, 1);
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

    $jsonEncodedData = json_encode($parameters);

    $post = array(
        "method" => $method,
        "input_type" => "JSON",
        "response_type" => "JSON",
        "rest_data" => $jsonEncodedData
    );

    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($curl_request);
    curl_close($curl_request);

    $result = explode("\r\n\r\n", $result, 2);
    $response = json_decode($result[1]);
    ob_end_flush();

    return $response;
}

/*--- Stop API Properties ---*/


/**********fetch data from csv file************/
$filename = "Portuguese_Canada";
$file = array_map('str_getcsv', file('custom/migration_csv/DONE/'.$filename.'.csv'));
$emails_array = array_column($file, 13);
$email_counts = array_count_values($emails_array);
//echo "<pre>"; print_r($file); die;
$error_report = [];
//echo "<p><b>======================".$filename."======================</b></p>";
foreach ( $file as $row ){
    //echo "<pre>"; print_r($row);
    if ($row[0] == "Lead Source") {

        continue;

    } else { //die;

        $row[2] = trim($row[2]);
        $row[3] = trim($row[3]);
        $row[13] = trim($row[13]);
        //if email value is empty
        if( !isset($row[13]) || empty($row[13]) )
        {
            $row['bug'] = "Email column can't be empty or null";
            $error_report[] = array(
                'salutation' => $row[1],
                'first_name' => $row[3],
                'last_name' => $row[2],
                'email' => $row[13],
                'country' => $row[9],
                'bug' => $row['bug'],
            );
            continue;
        }

    
    //check if email address is not valid
    if (!filter_var($row[13], FILTER_VALIDATE_EMAIL)) {
        $row['bug'] = "Invalid email format";
            $error_report[] = array(
                'salutation' => $row[1],
                'first_name' => $row[3],
                'last_name' => $row[2],
                'email' => $row[13],
                'country' => $row[9],
                'bug' => $row['bug'],
            );
            continue;
    }

        $email_occurance = $email_counts[$row[13]];
        //Email exists in sheet multiple times
        if($email_occurance > 1){
            $row['bug'] = "Email exists in sheet multiple times";
            $error_report[] = array(
                'salutation' => $row[1],
                'first_name' => $row[3],
                'last_name' => $row[2],
                'email' => $row[13],
                'country' => $row[9],
                'bug' => $row['bug'],
            );
            continue;
        }

        $fetch_contact_id =
            "SELECT eabr.bean_id as contact_id FROM email_addresses as email
        INNER JOIN email_addr_bean_rel as eabr ON eabr.email_address_id = email.id
        WHERE email.email_address = '" . $row[13] . "' AND email.deleted = 0";
//print_r($fetch_contact_id); die;
        $result = $db->query($fetch_contact_id); //echo "<pre>"; print_r($result);die("1");

        //Email exists in crm database multiple times
        if( $result->num_rows > 1 ){
            $row['bug'] = "Email redundancy in crm database";
            $error_report[] = array(
                'salutation' => $row[1],
                'first_name' => $row[3],
                'last_name' => $row[2],
                'email' => $row[13],
                'country' => $row[9],
                'bug' => $row['bug'],
            );
            continue;
        }
        //No match found in database of this email
        elseif( $result->num_rows == 0 ){
            $contact_id = '';
        }
        //email exist in database
        else{
        $contact_id = $db->fetchByAssoc($result)['contact_id'];
        }
        //echo "<pre>"; print_r($contact_id);die("welcome");
        //$final_array[] = $row;

        if ( isset($contact_id) ) {

            //evaluate phone numbers
                if (!empty($row[10])) {

                    if (!empty($row[11])) {
                        $office_phone = ltrim($row[10], '0') . " " . ltrim($row[11], '0');
                    } else {
                        $office_phone = '';
                    }

                    if (!empty($row[12])) {
                        $mobile_phone = ltrim($row[10], '0') . " " . ltrim($row[12], '0');
                    } else {
                        $mobile_phone = '';
                    }

                    if (!empty($row[27])) {
                        $home_phone = ltrim($row[10], '0') . " " . ltrim($row[27], '0');
                    } else {
                        $home_phone = '';
                    }

                } else {
                    $office_phone = $row[11];
                    $mobile_phone = $row[12];
                    $home_phone = $row[27];
                }

                //Evaluate GPro Associate Id
                if ( !empty($row[25]) ) {
                    $user_name = explode(' ', $row[25]); //echo "<pre>"; print_r($user_name); die;
                    $first_name = @$user_name[0];

                    $last_name = @$user_name[1];
                    if( $first_name == "Johnson" && $last_name == "Mathews" ){
                        $fetch_user_id = "
                            SELECT rel.bean_id as id FROM email_addresses as email
                            LEFT JOIN email_addr_bean_rel as rel 
                                on rel.email_address_id = email.id AND rel.bean_module = 'Users' AND rel.deleted = 0
                                WHERE email.email_address = 'johnson@gprocommission.org' AND email.deleted = 0";
                    }else{
                        $fetch_user_id = "
                            SELECT id FROM users
                            WHERE first_name = '" . $first_name . "' AND last_name = '" . $last_name . "' ";
                    }
                    $user_id = $db->query($fetch_user_id); //echo "<pre>"; print_r($user_id); die();
                    if ($user_id->num_rows > 0) {
                        $user_id = $db->fetchByAssoc($user_id); //echo "<pre>"; print_r($user_id);  die();
                        $user_id = $user_id['id'];
                    } else {
                        $user_id = '';
                    }
                }else{
                    $user_id = '';
                }
        //echo $user_id; die();
        $row['user_id'] = $user_id;

                //evaluate salutation (Plz add carefully some of them are title now and will be merged in title field)
                $salutation = '';
                $designition_title = '';

                if ( strcasecmp("Bishop", $row[1] ) == 0 ) {
                    $salutation = "Bishop";
                }
                elseif( strcasecmp("Brother", $row[1] ) == 0 ) {
                    $salutation = "Brother";
                }
                elseif ( strcasecmp("Deacon", $row[1] ) == 0 ) {
                    $salutation = "deacon";
                }
                elseif ( strcasecmp("Director", $row[1] ) == 0 ) {
                    $salutation = "Director";
                }
                elseif ( strcasecmp("Dr.", $row[1] ) == 0 ) {
                    $salutation = "Dr.";
                }
                elseif ( strcasecmp("Elder", $row[1] ) == 0 ) {
                    $salutation = "Elder";
                }
                elseif ( strcasecmp("Evêque", $row[1] ) == 0 ) {
                    $salutation = "Eveque";
                }
                elseif ( strcasecmp("Frère", $row[1] ) == 0 ) {
                    $salutation = "Frere";
                }
                elseif ( strcasecmp("Irmão", $row[1] ) == 0 ) {
                    $salutation = "Irmao";
                }
                elseif ( strcasecmp("M.", $row[1] ) == 0 ) {
                    $salutation = "M.";
                }
                elseif ( strcasecmp("Mr.", $row[1] ) == 0 ) {
                    $salutation = "Mr.";
                }
                elseif ( strcasecmp("Mrs.", $row[1] ) == 0 ) {
                    $salutation = "Mrs.";
                }
                elseif ( strcasecmp("Ms.", $row[1] ) == 0 ) {
                    $salutation = "Ms.";
                }
                elseif ( strcasecmp("Pasteur", $row[1] ) == 0 ) {
                    $salutation = "Pasteur";
                }
                elseif ( strcasecmp("Pastor", $row[1] ) == 0 ) {
                    $salutation = "Pastor";
                }
                elseif ( strcasecmp("Professor", $row[1] ) == 0 || strcasecmp("Prof.", $row[1] ) == 0 ) {
                    $salutation = "Prof.";
                }
                elseif ( strcasecmp("Rev.", $row[1] ) == 0 ) {
                    $salutation = "Rev.";
                }
                elseif ( strcasecmp("Rev. Dr.", $row[1] ) == 0 ) {
                    $salutation = "Rev_Dr";
                }
                elseif ( strcasecmp("Sister", $row[1] ) == 0 ) {
                    $salutation = "Sister";
                }
                elseif ( strcasecmp("Sœur", $row[1] ) == 0 ) {
                    $salutation = "Soeur";
                }
                elseif ( strcasecmp("Sra.", $row[1] ) == 0 ) {
                    $salutation = "Sra._spanish";
                }elseif ( strcasecmp("Apôtre", $row[1] ) == 0 ){
                    $salutation = "Apotre";
                }elseif ( strcasecmp("Prophète", $row[1] ) == 0 ){
                    $salutation = "Prophete";
                }
                //remaining will be added in the title field
                else{
                    $designition_title = $row[1];
                }

                //evaluate pastoral journey
                if( strcasecmp("Try", $row[19] ) == 0 ){
                    $row[19] = "Try";
                }
                elseif ( strcasecmp("Commit/Repeat/Sustain (continue to update goals/give progress)", $row[19] ) == 0 ){
                    $row[19] = "Commit";
                }
                elseif ( strcasecmp( "Trust (have submitted goals)", $row[19] ) == 0 ){
                    $row[19] = "TrustAdopt";
                }
                elseif ( strcasecmp( "Unaware", $row[19] ) == 0 ){
                    $row[19] = "COLD";
                }
                elseif ( strcasecmp( "Know/Aware", $row[19] ) == 0 ){
                    $row[19] = "KnowAware";
                }
                elseif ( strcasecmp( "Like/Resonate", $row[19] ) == 0 ){
                    $row[19] = "LikeResonate";
                }
                elseif ( strcasecmp( "Advocate", $row[19] ) == 0 ){
                    $row[19] = "ReferAdocate";
                }
                elseif ( strcasecmp( "Inactive", $row[19] ) == 0 ){
                    $row[19] = "inactive";
                }
                elseif ( strcasecmp( "Cancelled/Dropped Out", $row[19] ) == 0 ){
                    $row[19] = "CanceledDroppedOut";
                }

                //evalute lead source
                $row[0] = trim($row[0]);
                if( strcasecmp("Congress Delegate", $row[0] ) == 0 ){
                    $row[0] = "Congress_delegate";
                }
                elseif ( strcasecmp("Congress Applicant", $row[0] ) == 0 ){
                    $row[0] = "Congress_applicant";
                }elseif ( strcasecmp( "NGPA Delegate", $row[0] ) == 0 ){
                    $row[0] = "NGPA_delegate";
                }elseif ( strcasecmp("NGPA Contact", $row[0] ) == 0 ){
                    $row[0] = "NGPA_contact";
                }elseif ( strcasecmp("DGPA Delegate", $row[0] ) == 0 ){
                    $row[0] = "DGPA_delegate";
                }elseif ( strcasecmp("Communication Campaign Response", $row[0] ) == 0 ){
                    $row[0] = "Communication_Campaign_Response";
                }elseif ( strcasecmp("Social Media", $row[0] ) == 0 ){
                    $row[0] = "Social_Media";
                }elseif ( strcasecmp("Egyptian Evangelical Community", $row[0] ) == 0 ){
                    $row[0] = "Egyptian_Evangelical_Community";
                }elseif ( strcasecmp("Egyptian Presbyterian Church", $row[0] ) == 0 ){
                    $row[0] = "Egyptian_Presbyterian_Church";
                }
                elseif ( strcasecmp("Spanish Survey Response", $row[0] ) == 0 ){
                    $row[0] = "Spanish_Survey_Responses";
                }
                elseif ( strcasecmp("Haggai", $row[0] ) == 0 ){
                    $row[0] = "Haggai";
                }


                //evaluate country
                if( $row[9] == "Democratic Republic of the Congo" || $row[9] == "DRC" || $row[9] == "DROC" ){
                    $row[9] = "CONGO KINSHASA";
                }elseif ( $row[9] == "Republique du Congo" || $row[9] == "Congo Brazzaville" || $row[9] == "Republic of the Congo" ){
                    $row[9] = "CONGO";
                }elseif ( $row[9] == "Sénégal" ){
                    $row[9] = "SENEGAL";
                }

                //preferred method of contact
                $row[14] = trim($row[14]);
                if ( strcasecmp("Whatsapp", $row[14] ) == 0 ) {
                    $row[14] = "^WhatsApp^";
                }elseif ( strcasecmp("Email", $row[14] ) == 0 ){
                    $row[14] = "^email^";
                }elseif ( strcasecmp("Cell Phone", $row[14] ) == 0 ){
                    $row[14] = "^CellPhone^";
                }elseif ( strcasecmp("Facebook Messenger", $row[14] ) == 0 ){
                    $row[14] = "^FacebookMessenger^";
                }elseif ( strcasecmp("Google Hangouts", $row[14] ) == 0 ){
                    $row[14] = "^GoogleHangouts^";
                }elseif ( strcasecmp("Business Phone", $row[14] ) == 0 ){
                    $row[14] = "^BusinessPhone^";
                }elseif ( strcasecmp("Home Phone", $row[14] ) == 0 ){
                    $row[14] = "^HomePhone^";
                }elseif ( strcasecmp("LINE", $row[14] ) == 0 ){
                    $row[14] = "^Line^";
                }elseif ( strcasecmp("WeChat", $row[14] ) == 0 ){
                    $row[14] = "^WeChat^";
                }elseif ( strcasecmp("QQ", $row[14] ) == 0 ){
                    $row[14] = "^Qq^";
                }

                //preferred frequency of contact
                if ( strcasecmp("Monthly", $row[15] ) == 0 ){
                    $row[15] = "Monthly";
                } elseif ( strcasecmp("Once Every Three Months", $row[15] ) == 0 ){
                    $row[15] = "Once_Every_Three_Months";
                } elseif ( strcasecmp("Twice a Month", $row[15] ) == 0 ){
                    $row[15] = "Twice_a_Month";
                } elseif ( strcasecmp("Once a Year", $row[15] ) == 0 ){
                    $row[15] = "Once_a_Year";
                } elseif ( strcasecmp("Twice a Year", $row[15] ) == 0 ){
                    $row[15] = "Twice_a_Year";
                } elseif ( strcasecmp("Once Every Four Months", $row[15] ) == 0 ){
                    $row[15] = "Once_Every_Four_Months";
                } elseif ( strcasecmp("Weekly", $row[15] ) == 0 ){
                    $row[15] = "Weekly";
                }


                //preferred day time of contact
                if ( strcasecmp("Between 6:00 am and 10:00 am", $row[16] ) == 0 ){
                    $row[16] = "Between_6_am_and_10_am";
                } elseif ( strcasecmp("Between 10:00 am and 2:00 pm", $row[16] ) == 0 ){
                    $row[16] = "Between_10_am_and_2_pm";
                } elseif ( strcasecmp("Between 2:00 pm and 6:00 pm", $row[16] ) == 0 ){
                    $row[16] = "Between_2_pm_and_6_pm";
                } elseif ( strcasecmp("Between 6:00 pm and 10:00 pm", $row[16] ) == 0 ){
                    $row[16] = "Between_6_pm_and_10_pm";
                }

                //birth date format
                if( !empty($row[17]) ){
                    if (DateTime::createFromFormat('m/d/Y', $row[17]) !== FALSE) {
                        $row[17] = DateTime::createFromFormat('m/d/Y', $row[17])->format('Y-m-d');
                    }
                }

        //initalize final array
        $final_array[] = $row;

        if( !empty($row[4]) && !empty($row[5]) )
        {
            $primary_address_street = $row[4] . ', ' . $row[5];
        }
        elseif ( empty($row[4]) && empty($row[5]) )
        {
            $primary_address_street = "";
        }
        elseif ( empty($row[4]) && !empty($row[5]) ) {
            $primary_address_street = $row[5];
        }
        else
        {
            $primary_address_street = $row[4];  
        }

        
                /*----------------------------------------- Update Contacts Details -----------------------------------------*/

                if( !empty($row[17]) ){
                    $personal_details[] = array(
                        array("name" => 'id', "value" => $contact_id),
                        array("name" => 'email1', "value" =>$row[13]),
                        array("name" => 'lead_source', "value" => $row[0]),
                        array("name" => 'salutation', "value" => $salutation),
                        array("name" => 'title', "value" => $designition_title),
                        array("name" => 'last_name', "value" => $row[2]),
                        array("name" => 'first_name', "value" => $row[3]),
                        array("name" => 'primary_address_street', "value" => $primary_address_street),
                        array("name" => 'primary_address_city', "value" => $row[6]),
                        array("name" => 'primary_address_state', "value" => $row[7]),
                        array("name" => 'primary_address_postalcode', "value" => $row[8]),
                        array("name" => 'primary_address_country', "value" => strtoupper($row[9])),
                        array("name" => 'phone_work', "value" => $office_phone),
                        array("name" => 'phone_mobile', "value" => $mobile_phone),

                        array( "name"=>'preferred_method_of_contact_c', "value"=>$row[14] ),
                        array( "name"=>'preferred_frequen_of_contact_c', "value"=>$row[15] ),
                        array( "name"=>'preferred_day_time_of_contac_c', "value"=>$row[16] ),
                        array(
                            "name" => 'birthdate',
                            "value" => $row[17]
                        ),
                        array("name" => 'assigned_user_id', "value" => $user_id),

                        array( "name"=>'stake_holder_type_c', "value"=>$row[18] ),
                        array( "name"=>'pastoral_journey_c', "value"=>$row[19] ),
                        array( "name"=>'phone_home', "value"=>$row[27] ),
                    );
                }else{
                    $personal_details[] = array(
                        array("name" => 'id', "value" => $contact_id),
                        array("name" => 'email1', "value" =>$row[13]),
                        array("name" => 'lead_source', "value" => $row[0]),
                        array("name" => 'salutation', "value" => $salutation),
                        array("name" => 'title', "value" => $designition_title),
                        array("name" => 'last_name', "value" => $row[2]),
                        array("name" => 'first_name', "value" => $row[3]),
                        array("name" => 'primary_address_street', "value" => $primary_address_street),
                        array("name" => 'primary_address_city', "value" => $row[6]),
                        array("name" => 'primary_address_state', "value" => $row[7]),
                        array("name" => 'primary_address_postalcode', "value" => $row[8]),
                        array("name" => 'primary_address_country', "value" => strtoupper($row[9])),
                        array("name" => 'phone_work', "value" => $office_phone),
                        array("name" => 'phone_mobile', "value" => $mobile_phone),

                        array( "name"=>'preferred_method_of_contact_c', "value"=>$row[14] ),
                        array( "name"=>'preferred_frequen_of_contact_c', "value"=>$row[15] ),
                        array( "name"=>'preferred_day_time_of_contac_c', "value"=>$row[16] ),
                        array("name" => 'assigned_user_id', "value" => $user_id),

                        array( "name"=>'stake_holder_type_c', "value"=>$row[18] ),
                        array( "name"=>'pastoral_journey_c', "value"=>$row[19] ),
                        array( "name"=>'phone_home', "value"=>$row[27] ),
                    );
                }
        }
    }
}
//echo "<pre>"; print_r($personal_details); die;
//echo "<pre>"; print_r($final_array); die;

/*------------------------- create csv for bug report -------------------------*/
//echo "<pre>"; print_r($error_report); die;

 header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="'.$filename.'_not_imported_users_'.date("d-M-Y").'.csv"');

// // do not cache the file
header('Pragma: no-cache');
header('Expires: 0');

// // create a file pointer connected to the output stream
 $file_instance = fopen('php://output', 'w');

// // send the column headers
 $columns = array('Salutation', 'First Name', 'Last Name', 'Email', 'Country', 'Error');
 fputcsv($file_instance, $columns);

// // insert row data
foreach ($error_report as $report)
{
  fputcsv($file_instance, $report);
 }

exit(); die;


//Api login
$login_parameters = array(
    "user_auth" => array(
        "user_name" => $username,
        "password" => md5($password),
        "version" => "1"
    ),
    "application_name" => "RestTest",
    "name_value_list" => array(),
);

$login_result = call("login", $login_parameters, $url);
$session_id = $login_result->id; //echo $session_id; die;

if( !empty($session_id) ){

    //fisrt part: update contact personal details
    if( isset($personal_details) && !empty($personal_details) ){
        $set_entries_parameters = array(

            "session" => $session_id,

            "module_name" => "Contacts",

            "name_value_list" => $personal_details,

        );
        $set_entries_result = call("set_entries", $set_entries_parameters, $url);
        echo "<p>Contacts Updated:</p><pre>";print_r($set_entries_result);
    }

}


/* ================ Second Part: Update Additional Details =============== */

foreach ( $final_array as $key=>$row ){
    $contact_id = $set_entries_result->ids[$key];

    if( !empty($contact_id) ):

    /*----------------------------------------- Update Notes -----------------------------------------*/

    if (!empty($row[26])) {
        //check if same note already exists in database
        /*AND name = ""*/
        $fetch_note =
            'SELECT * FROM notes
                        WHERE deleted = 0
                        AND description = "' . $row[26] .'"
                        AND parent_type = "Contacts"
                        AND name = "Note"
                        AND contact_id = "'. $contact_id.'"'; //echo $fetch_note;die;
        $execute_note_query = $db->query($fetch_note); //echo "<pre>"; print_r($execute_note_query);die;
        if ( $execute_note_query->num_rows == 0 ){
            $notes[] = array(
                array("name" => "name", "value" => "Note"),
                array("name" => 'contact_id', "value" => $contact_id),
                array("name" => 'parent_type', "value" => 'Contacts'),
                array("name" => 'description', "value" => $row[26]),
            );
        }
        /*else
        {
            $note_data = $db->fetchByAssoc($execute_note_query);
            $notes[] = array(
                array("name" => "id", "value" => $note_data['id']),
                array("name" => "name", "value" => "Note"),
                array("name" => 'contact_id', "value" => $contact_id),
                array("name" => 'parent_type', "value" => 'Contacts'),
                array("name" => 'description', "value" => $row[26]),
            );
        }*/
    }


    /*----------------------------------------- Update Training Goals -----------------------------------------*/

    if ( !empty($row[20]) ) {
        $row[20] = filter_var($row[20], FILTER_SANITIZE_NUMBER_INT);
        if( !empty($row[20]) )
        {
            $fetch_goal_id =
            "SELECT goals.eciu_crm_training_goals_contactseciu_crm_training_goals_idb as goal_id, ectg.y2016, ectg.y2017, ectg.y2018, ectg.y2019, ectg.y2020, ectg.total FROM eciu_crm_training_goals_contacts_c as goals
                        INNER JOIN eciu_crm_training_goals as ectg ON ectg.id = goals.eciu_crm_training_goals_contactseciu_crm_training_goals_idb AND ectg.deleted = 0
                        WHERE goals.deleted = 0 AND goals.eciu_crm_training_goals_contactscontacts_ida = '".$contact_id."'"; //echo $fetch_goal_id; die;
        $execute_query = $db->query($fetch_goal_id); //echo "<pre>"; print_r($execute_query);die;
        $goal_data = $db->fetchByAssoc($execute_query); //echo "<pre>"; print_r($goal_data);die;

        if ($execute_query->num_rows > 0) {
            $goal_id = $goal_data['goal_id'];
            $goal_total = $goal_data['y2016'] + $row[20] + $goal_data['y2018'] + $goal_data['y2019'] + $goal_data['y2020'];
            $updated_goals[] = array(
                array("name" => "id", "value" => $goal_id),
                array("name" => "y2017", "value" => $row[20]),
                array("name" => "total", "value" => $goal_total),
                array("name" => "email", "value" => $row[13]),
                array("name" => "eciu_crm_training_goals_contactscontacts_ida", "value" => $contact_id),
            );
        } else {
            $goal_total = $row[20];
            $updated_goals[] = array(
                array("name" => "y2017", "value" => $row[20]),
                array("name" => "total", "value" => $goal_total),
                array("name" => "email", "value" => $row[13]),
                array("name" => "eciu_crm_training_goals_contactscontacts_ida", "value" => $contact_id),
            );
        }
        }
        
    }


    /*------------------------------------- Update Training Actuals ------------------------------------*/
    if (!empty($row[21])) {
        $row[21] = filter_var($row[21], FILTER_SANITIZE_NUMBER_INT);
        if (!empty($row[21]))
        {
            $fetch_actual_id =
            "SELECT actuals.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb as actual_id FROM eciu_crm_training_actuals_contacts_c as actuals
                        INNER JOIN eciu_crm_training_actuals as ecta
            ON ecta.id = actuals.eciu_crm_training_actuals_contactseciu_crm_training_actuals_idb
            AND ecta.deleted = 0
            AND ecta.number_of_pastors = ".$row[21]."
            AND ecta.recourd_type = 'Actual_Activity'
                        WHERE actuals.deleted = 0 AND actuals.eciu_crm_training_actuals_contactscontacts_ida = '". $contact_id."'";
        $execute_actual_query = $db->query($fetch_actual_id); //echo "<pre>"; print_r($execute_actual_query);die;
        $actual_data = $db->fetchByAssoc($execute_actual_query); //echo "<pre>"; print_r($actual_data);die;

        if ($execute_actual_query->num_rows <= 0) {

            $updated_actuals[] = array(
                array("name" => "number_of_pastors", "value" => $row[21]),
                array("name" => "recourd_type", "value" => "Actual_Activity"),
                array("name" => "language_c", "value" => "English"),
                array("name" => "date_from", "value" => date('Y-m-d', strtotime('2017-10-01'))),
                array("name" => "date_to", "value" => date('Y-m-d', strtotime('2017-10-01'))),
                array("name" => "eciu_crm_training_actuals_contactscontacts_ida", "value" => $contact_id),
            );
                
            }   
        }
        

        /*$actual_id = $actual_data['actual_id'];
        $updated_actuals[] = array(
            array("name" => "id", "value" => $actual_id),
            array("name" => "number_of_pastors", "value" => $row[21]),
            array("name" => "date_from", "value" => date('Y-m-d', strtotime('2017-07-01'))),
            array("name" => "date_to", "value" => date('Y-m-d', strtotime('2017-07-01'))),
            array("name" => "eciu_crm_training_actuals_contactscontacts_ida", "value" => $contact_id),
        );*/

    }


    /*----- Update History: My last connection with this person was -----*/
    if (!empty($row[22])) {
        if (DateTime::createFromFormat('m/d/y', $row[22]) !== FALSE) {
            $subject = "My last 'connection' with this person was";
            $start_date = DateTime::createFromFormat('m/d/y', $row[22])->format('Y-m-d');
        }
        else{
            $subject = $row[22];
            $start_date = DateTime::createFromFormat('Y-m-d', '2017-10-01')->format('Y-m-d');
        }

        //check if same history exists in database
        $fetch_history =
            'SELECT * FROM tasks
                        WHERE deleted = 0
                        AND name = "'.$subject.'"
                        AND priority = "Medium"
                        AND status = "Completed"
                        AND DATE(date_start) = "' . $start_date .'"
                        AND parent_type = "Tasks"
                        AND contact_id = "'. $contact_id.'"'; //echo $fetch_history;die;
        $execute_history_query = $db->query($fetch_history);
        if ( $execute_history_query->num_rows == 0 ) {
            $updated_history[] = array(
                array("name" => "name", "value" => $subject),
                array("name" => 'priority', "value" => "Medium"),
                array("name" => 'status', "value" => "Completed"),
                array("name" => 'date_start', "value" => $start_date),
                array("name" => 'contact_id', "value" => $contact_id),
                array("name" => 'parent_type', "value" => 'Tasks'),
                array("name" => 'assigned_user_id', "value" => $row['user_id']),
            );
        }
    }


    /*------ Update Activity: My "next step" with this person is ------*/
    if (!empty($row[23]) || !empty($row[24])) {
        if (DateTime::createFromFormat('m/d/y', $row[24]) !== FALSE){
            $due_date2 = DateTime::createFromFormat('m/d/y', $row[24])->format('Y-m-d');
        }
        else{
            $due_date2 = DateTime::createFromFormat('Y-m-d', '2017-10-01')->format('Y-m-d');
        }

        //check if same activity exists in database
        $fetch_activity =
            'SELECT * FROM tasks
                        WHERE deleted = 0
                        AND name = "My \'next step\' with this person is"
                        AND priority = "Medium"
                        AND status = "Not Started"
                        AND DATE(date_due) = "' . $due_date2 .'"
                        AND description = "'.$row[23].'"
                        AND parent_type = "Tasks"
                        AND contact_id = "'. $contact_id.'"';
        $execute_activity_query = $db->query($fetch_activity);
        if( $execute_activity_query->num_rows == 0 ){
            $updated_activities[] = array(
                array("name" => "name", "value" => "My 'next step' with this person is"),
                array("name" => 'priority', "value" => "Medium"),
                array("name" => 'status', "value" => "Not Started"),
                array("name" => 'date_due', "value" => $due_date2),
                array("name" => 'contact_id', "value" => $contact_id),
                array("name" => 'parent_type', "value" => 'Tasks'),
                array("name" => 'description', "value" => $row[23]),
                array("name" => 'assigned_user_id', "value" => $row['user_id']),
            );
        }

    }

    endif;


}

//echo "<pre>"; print_r($notes); die;

if($session_id){

//update contact notes
    if( isset($notes) && !empty($notes) ){
        $set_notes_parameters = array(
            "session" => $session_id,
            "module_name" => "Notes",
            "name_value_list" => $notes,
        ); //echo "<pre>"; print_r($notes);die;
        $set_notes_result = call("set_entries", $set_notes_parameters, $url);
        echo "<p>Notes Updated:</p><pre>"; print_r($set_notes_result);
    }


//update training goals
    if( isset($updated_goals) && !empty($updated_goals) ){
        $goals_parameters = array(
            "session" => $session_id,
            "module_name" => "ECiu_crm_training_goals",
            "name_value_list" => $updated_goals,
        );
        $goals_result = call("set_entries", $goals_parameters, $url);
        echo "<p>Updated Training Goals: </p><pre>"; print_r($goals_result);
    }


//update training actuals
    if( isset($updated_actuals) && !empty($updated_actuals) ){
        $actuals_parameters = array(
            "session" => $session_id,
            "module_name" => "ECiu_crm_training_actuals",
            "name_value_list" => $updated_actuals,
        );
        $actuals_result = call("set_entries", $actuals_parameters, $url);
        echo "<p> Updated Training Actuals: </p><pre>"; print_r($actuals_result);
    }



//update history (my last connection with this person was)
    if( isset($updated_history) && !empty($updated_history) ){
        $history_parameters = array(
            "session" => $session_id,
            "module_name" => "Tasks",
            "name_value_list" => $updated_history,
        );
        $history_result = call("set_entries", $history_parameters, $url);
        echo "<p> History created: </p><pre>"; print_r($history_result);
    }



//update activities
    if( isset($updated_activities) && !empty($updated_activities) ){
        $activity_parameters = array(
            "session" => $session_id,
            "module_name" => "Tasks",
            "name_value_list" => $updated_activities,
        );
        $activity_result = call("set_entries", $activity_parameters, $url);
        echo "<p> Activities Updated: </p><pre>"; print_r($activity_result);
    }
}

die("<p>-------------DONE-------------</p>");
//fclose($file);
?>