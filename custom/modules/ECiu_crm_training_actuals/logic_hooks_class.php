<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 26/10/17
 * Time: 4:57 PM
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logic_hooks_class
{
    function after_ui_frame_method($event, $arguments)
    {
        $url_to_add_contact = "https://".$_SERVER['HTTP_HOST']."/index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView";
        $url_to_add_resource = "https://".$_SERVER['HTTP_HOST']."/index.php?module=ECiu_crm_resources&action=EditView&return_module=ECiu_crm_resources&return_action=DetailView";
        echo '<link rel="stylesheet" href="custom/css/chosen.min.css">';
        echo '<script src="custom/js/chosen.jquery.min.js"></script>';
        echo
            '<script type="text/javascript">
                $("td > #contacts, td > #resources, td > #paralleltracks, td > #country_c").chosen();
		$("#contacts_chosen").after("<br><a href='.$url_to_add_contact.' target='."_blank".'>Add Pastoral Trainer</a>");
		$(".chosen-container-multi").css("width", "310px");
		$("#resources_chosen").after("<br><a href='.$url_to_add_resource.' target='."_blank".'>Add Resource</a>");
            </script>';
    }
}
