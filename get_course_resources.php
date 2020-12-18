<?php

if (!defined('sugarEntry')) define('sugarEntry', true);

require_once('include/entryPoint.php');
global $db;

$primaryModule = 'gpro_Courses';
$relationship_name = 'gpro_courses_eciu_crm_resources';

if(isset($_POST['id']) && !empty($_POST['id'])) {

    $course_id = $_POST['id'];

    $query = "SELECT course_resource.order_no, course_resource.date_modified, course_resource.gpro_courses_eciu_crm_resourcesgpro_courses_ida, course_resource.gpro_courses_eciu_crm_resourceseciu_crm_resources_idb, resource.id, resource.name, resource.description, resource.resource_id, resource.url, resource.file_name, resource.category, cstm.hours_c, cstm.language_c, cstm.access_level_c
              FROM gpro_courses_eciu_crm_resources_c as course_resource
              JOIN eciu_crm_resources as resource 
                ON resource.id = course_resource.gpro_courses_eciu_crm_resourceseciu_crm_resources_idb
              JOIN eciu_crm_resources_cstm as cstm
                ON cstm.id_c = resource.id
              WHERE course_resource.gpro_courses_eciu_crm_resourcesgpro_courses_ida = '$course_id'
              AND course_resource.deleted = 0
              ORDER BY ISNULL(course_resource.order_no), course_resource.order_no
             ";

    $result = $db->query($query);
    $subpanel_html = '';
    $counter = 1;
    while ($row = $db->fetchByAssoc($result)) {

        $resources[] = $row;
        $resource_id = $row['id'];

        if($counter % 2 == 0) {
            $subpanel_html .= "<tr height='20' class='evenListRowS1' id='{$row['id']}' style='cursor: move;' custom='y'>";
        }else{
            $subpanel_html .= "<tr height='20' class='oddListRowS1' id='{$row['id']}' style='cursor: move;' custom='y'>";
        }

        $subpanel_html .= "
                
                <td scope='row' valign='top' class=''>
                    <span sugar='slot1b'>{$row['resource_id']}</span>
                </td>
    
                <td scope='row' valign='top' class=''><span sugar='slot2b'><a href='index.php?module=ECiu_crm_resources&amp;action=DetailView&amp;record={$row['id']}'>{$row['name']}</a></span></td>
    
                <td scope='row' valign='top' class=''>
                    <span sugar='slot3b'>{$row['category']}</span>
                </td>
    
                <td scope='row' valign='top' class=''>
                    <span sugar='slot4b'>{$row['hours_c']}</span>
                </td>
    
                <td scope='row' valign='top' class='inlineButtons'><span sugar='slot5b'>
                    <ul id='' class='clickMenu subpanel records fancymenu button SugarActionMenu'>
                        <li class='sugar_action_button'>
                            <div style='display: inline' id=''>
                            <a href='http://stagingcrm.gproconnext.com/index.php?module=ECiu_crm_resources&action=EditView&record={$row['id']}&parent_module={$primaryModule}&parent_id={$course_id}&return_module={$primaryModule}&return_id={$course_id}&return_action=DetailView&return_relationship={$relationship_name}'>edit</a>
                            </div>
                        </li>
                        <li>
                            <a href='javascript:sub_p_rem(".'"'.$relationship_name.'"'.", ".'"'.$relationship_name.'"'.", ".'"'.$resource_id.'"'.", 0);' class='listViewTdToolsS1' id='gpro_courses_eciu_crm_resources_remove_{$counter}' onclick='return sp_rem_conf();'>remove</a>
                        </li>
                    </ul></span>
                </td>";

        $subpanel_html .= "</tr>";

        $counter++;
    }
    echo $subpanel_html; die;
}