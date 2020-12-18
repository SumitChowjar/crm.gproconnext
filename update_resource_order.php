<?php

if (!defined('sugarEntry')) define('sugarEntry', true);

if($_POST) {

    if( isset($_POST['new_order']) && !empty($_POST['new_order']) ) {

        require_once('include/entryPoint.php');
        require_once('data/BeanFactory.php');
        global $db;

        $values = "";
        $conditions = "";
        $subquery = "(CASE ";
        $resource_ids = "";
        foreach ($_POST['new_order'] as $key=>$resource) {
            $subquery .= "WHEN gpro_courses_eciu_crm_resourceseciu_crm_resources_idb = '$resource' THEN $key ";
            $resource_ids .= "'$resource',";
        }
        $subquery .= "END) ";

        $ids = rtrim($resource_ids, ',');

        $query = "UPDATE gpro_courses_eciu_crm_resources_c SET order_no = $subquery 
                  WHERE gpro_courses_eciu_crm_resourceseciu_crm_resources_idb IN ($ids)
                  AND gpro_courses_eciu_crm_resourcesgpro_courses_ida = '".$_POST['course_id']."'";

        if($db->query($query)) {
            return true;
        }else{
            return false;
        }
    }
}