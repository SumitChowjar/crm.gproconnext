<?php
require_once('include/SugarPHPMailer.php');
include_once('include/utils/db_utils.php'); // for from_html function


    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class logic_hooks_class
    {
        function add_img_ratio_msg($event, $arguments){
          if (strtolower($_REQUEST['action']) == 'editview') {
            echo <<<EOF
          <script type="text/javascript">
              $("#image_c_old").parent('td').append("<p class='dateFormat' style='margin-top: 2px;'>Preffered image resolution: 500 X 300 px</p>");
              $("#hours_c").attr("placeholder", "HH:MM");
          </script>
EOF;

          }
        }


        //execute when user approved/rejected any resource suggestion
        //update approved_rejected_by and approved_rejected_on fileds
        //send email notification to contacts
        function changeStatus($bean, $event, $arguments)
        {
        if ( $bean->status_c != 'pending' && $bean->fetched_row['status_c'] == 'pending' )
          {
            if ( empty( $bean->user_id_c ) )
            {
              $bean->approved_rejected_on_c = date("Y-m-d H:i:s");
              $bean->user_id_c = $bean->modified_user_id;
                  $contact_id = $bean->contact_id_c;
                  $sql = "SELECT email_addresses.email_address FROM email_addr_bean_rel as eabr
                JOIN email_addresses ON email_addresses.id = eabr.email_address_id AND email_addresses.deleted = 0
                WHERE eabr.bean_id = '{$contact_id}' AND eabr.deleted = 0 AND eabr.bean_module = 'Contacts' AND eabr.primary_address = 1";
                  $contact_email = $GLOBALS['db']->getOne($sql);
              if( $bean->save() )
              {
                $send_email = $this->sendEmail($bean, $contact_email);
              }
            }
          }

          //echo "<pre>"; print_r($bean); die;
          if( !empty($bean->gpro_courses_eciu_crm_resourcesgpro_courses_ida) )
          {
            $course_id = $bean->gpro_courses_eciu_crm_resourcesgpro_courses_ida;
            $course_prv_id = $bean->rel_fields_before_value['gpro_courses_eciu_crm_resourcesgpro_courses_ida'];
            if( $course_id == $course_prv_id )
            {
              if( $bean->fetched_row['hours_c'] != $bean->hours_c )
              {
                  $resource_prv_hrs = explode(":", $bean->fetched_row['hours_c']);
                  $resource_prv_hrs = $resource_prv_hrs[0] + ($resource_prv_hrs[1]/60);

                  $resource_hrs = explode(":", $bean->hours_c);
                  $resource_hrs = $resource_hrs[0] + ($resource_hrs[1]/60);

                  $course = $bean->gpro_courses_eciu_crm_resources->beans[$course_id];
                  $course->hours = $course->hours - $resource_prv_hrs + $resource_hrs;
                  $course->save();
              }
            }
          }
        }


        //method to send email
        function sendEmail($bean, $toEmail)
        {
          $gproconnext_host = "https://gproconnext.com/";
          if( $bean->status_c == "approved" )
          { 
            $subject = "Congratulations! Resource Approval";
            $title = "Congratulations ".$bean->suggested_by_c;
            $message = "Your suggested resource '".$bean->name."' has been approved by the system admin. Now this resource is available on <a href='https://gprolearning.org' target='_blank'>GProLearning.org</a>.";
          }else{
            $subject = "Oops! Resource Rejected";
            $title = "Hello ".$bean->suggested_by_c;
            $message = "Unfortunately, your suggested resource '".$bean->name."' has been rejected by the system admin. You can view more resources on <a href='https://gprolearning.org' target='_blank'>GProLearning.org</a>.";
          }

          $message_body = '<table cellpadding="0" cellspacing="0" border="0" style="width:650px;table-layout:fixed;margin:0 auto;background:#fff;border:1px solid #ededed;border-top-color:#f4f4f4;border-bottom-color:#f4f4f4;border-radius:4px">
                       <tbody><tr><td style="padding-top:20px;padding-left:20px"><img src="'.$gproconnext_host.'images/easysocial_override/email_logo.png" width="250px" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 715px; top: 70px;"><div id=":24a" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div></td></tr>                                
         <tr> <td style="text-align:center;padding:40px 10px 0"> <div style="margin-bottom:15px"><div style="font-family:Arial;font-size:32px;font-weight:normal;color:#333;display:block;margin:4px 0">'.$title.'</div></div></td></tr>
         <tr><td dir="ltr" bgcolor="#ffffff" height="100%" valign="top" width="100%" style="padding:20px 24px 24px;font-family:sans-serif;font-size:14px;color:#555555;text-align:center">                          
               
               <table role="presentation" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px">
                  <tbody><tr>
                     <td bgcolor="#f6f9fb" align="center" style="padding:24px">
                        <table role="presentation" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px">
                           <tbody><tr>
                              <td valign="top" width="100%">
                                 <p style="color:#999999;line-height:1.5;text-align:left;margin:0;padding:0 0 40px" class="m_-6123857658227921219stack-column">
                                 '.$message.'
                                 </p>
                              </td>
                           </tr>
                        </tbody></table>';

        if( !empty($bean->custom_message_c) )
        {
          $message_body .= '<div style="margin:30px auto;text-align:center;display:block">
                              <img src="'.$gproconnext_host.'components/com_easysocial/themes/wireframe/images/emails/divider.png" alt="divider" class="CToWUd">
                          </div>
                          <table role="presentation" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px">
                           <tbody><tr>
                              <td valign="top" width="100%">
                                 <p style="color:#999999;line-height:1.5;text-align:left;margin:0;padding:0 0 40px" class="m_-6123857658227921219stack-column">
                                    '.$bean->custom_message_c.'
                                 </p>
                              </td>
                           </tr>
                        </tbody></table>';
        }

        $message_body .= '</td>
                  </tr>
               </tbody></table>
               
            </td>
         </tr>
         <tr><td style="text-align:center"><b><i>Please do not reply directly to this email, your reply would not be received.</i><b></b></b></td></tr>
                           <br><br>

                       </tbody>
                   </table>';

          $emailObj = new Email();
          $defaults = $emailObj->getSystemDefaultEmail();
          $mail = new SugarPHPMailer();
          $mail->setMailerForSystem();
          $mail->From = "noreply@gproconnext.com";
          $mail->FromName = 'noreply@gproconnext.com';
          $mail->Subject = from_html($subject);
          $mail->Body = from_html($message_body);
          $mail->ContentType = "text/html";
          $mail->prepForOutbound();
            $mail->AddAddress($toEmail);
      if( $mail->Send() )
      {
        return true;
      }
  }


  function checkHoursFormat($bean, $event, $arguments){
    $hours = $bean->hours_c;
    $params = array(
        'module'=> $bean->module_dir,
        'action'=>'EditView',
        'record' => $bean->id
        );
    if(!empty($hours))
    {
      $hours_str_length = strlen($bean->hours_c);
      if( $hours_str_length != 5 )
      {
          SugarApplication::appendErrorMessage('The hours should be in HH:MM format.'.$errorMsg);
          SugarApplication::redirect('index.php?' . http_build_query($params));
      }

      if (! preg_match("/([1-9][0-9]|0[0-9]):([0-5][0-9])/", $hours))
        {
          SugarApplication::appendErrorMessage('The hours should be in HH:MM format and minutes should not be more than 59.'.$errorMsg);
          SugarApplication::redirect('index.php?' . http_build_query($params));
        }
    }
  }

    }
?>
