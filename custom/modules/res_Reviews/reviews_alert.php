<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class ReviewsAlert
    {
        function notification($bean, $event, $arguments)
        {
          if( empty($bean->fetched_row['id']) )
          {
            //$user_details = $u->retrieve_by_email_address("jason@gprocommission.org");
            $contact = new Contact();
            $contact_details = $contact->retrieve($bean->contact_id_c);
            $conatct_name = $contact_details->name;

            $resource = new ECiu_crm_resources();
            $res_details = $resource->retrieve($bean->eciu_crm_resources_res_reviews_1eciu_crm_resources_ida);
            $res_name = $res_details->name;

            $notification_msg = $conatct_name. " gave review to " . $res_name;
            $seedAlert = new Alert();
            $seedAlert->name = $notification_msg;
            $seedAlert->assigned_user_id = "52e20f15-6055-050a-4631-582b83f7b80e";
            $seedAlert->is_read = 0 ;
            $seedAlert->type = "info";
            $seedAlert->target_module = "Review";
            $seedAlert->url_redirect = "index.php?module=ECiu_crm_resources&action=DetailView&record=".$bean->eciu_crm_resources_res_reviews_1eciu_crm_resources_ida;
            $seedAlert->save();
          }
        }
    }
?>
