<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$GLOBALS['PrimaryModule'] = 'gpro_Courses';

class CourseHours
    {
        function hours($bean, $event, $arguments)
        {
        	//fetch selected resource details
        	$resource = reset($bean->gpro_courses_eciu_crm_resources->tempBeans);

            //conver hours:minute to decimal
            if( !empty($resource->hours_c) )
            {
                $resource_hrs = explode(":", $resource->hours_c);
                $resource_hrs = $resource_hrs[0] + ($resource_hrs[1]/60);
            }
            else
            {
                $resource_hrs = 0;
            }
        	
            //sum: Resource hours & Course hours
            $bean->hours = $bean->hours + $resource_hrs;
            $bean->save();

            echo "<meta http-equiv='refresh' content='0'>";
            exit();
        }


        function removeHours($bean, $event, $arguments){
        	$course_total_hours = $bean->hours;
        	$selected_resource_hours = $arguments['related_bean']->hours_c;
            if( !empty($selected_resource_hours) )
            {
                $hours_format = explode(":", $selected_resource_hours);
                $selected_resource_hours = $hours_format[0] + ($hours_format[1]/60);
            }else
            {
                $selected_resource_hours = 0;
            }
            
        	if( $course_total_hours < $selected_resource_hours )
        	{
        		$updated_course_hours = 0;
        	}else{
        		$updated_course_hours = $course_total_hours - $selected_resource_hours;
        	}
        	$bean->hours = $updated_course_hours;
        	$bean->save();
        }


        function unlinkRelation($bean, $event, $arguments)
        {
            $db = DBManagerFactory::getInstance();
            $update_order = "UPDATE `gpro_courses_eciu_crm_resources_c` SET `order_no`= NULL
              WHERE `gpro_courses_eciu_crm_resourcesgpro_courses_ida` = '{$arguments['id']}'
              AND `gpro_courses_eciu_crm_resourceseciu_crm_resources_idb` = '{$arguments['related_id']}'";
            $db->query($update_order);
            echo "<meta http-equiv='refresh' content='0'>";
            exit();
        }
    }



    class app_hooks
    {
        function dragDrop($event, $arguments)
        {
            if ($_REQUEST['module'] == $GLOBALS['PrimaryModule'] && $_REQUEST['action'] == 'DetailView') {
                echo "<script type='text/javascript' src='/custom/js/drag-drop.js'></script>";
            }
        }
    }


class resourceList
{
    function reloadPage($bean, $event, $arguments)
    {
        if($_REQUEST) {
            if ($_REQUEST['value'] == 'DetailView' && $_REQUEST['module'] == $GLOBALS['PrimaryModule'] && $_REQUEST['subpanel_module_name'] == 'gpro_courses_eciu_crm_resources') {
                $resource_id = $_REQUEST['subpanel_id'];
                $course_id = $arguments['id'];

                $db = DBManagerFactory::getInstance();
                $query = "SELECT * FROM gpro_courses_eciu_crm_resources_c as course_resource
                  WHERE course_resource.gpro_courses_eciu_crm_resourcesgpro_courses_ida = '{$course_id}'
                  AND course_resource.gpro_courses_eciu_crm_resourceseciu_crm_resources_idb = '{$resource_id}'
                  AND course_resource.deleted = 0";
                $result = $db->query($query);
                if ($result->num_rows > 0) {
                    echo "<meta http-equiv='refresh' content='0'>";
                    exit();
                }
            }
        }
    }
}