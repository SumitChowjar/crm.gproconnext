<?php 
     if(isset($_POST['Id']))
     {
          
        $id = $_POST['Id'];
        $array1 = array();

        if(!defined('sugarEntry'))
        define('sugarEntry', true);

       
        require_once ('include/entryPoint.php');
       
        global $db;

        $query = "SELECT `first_name`, `last_name` FROM `contacts` WHERE id = '".$id."'";

        $result = $db->query($query);
        if($result->num_rows > 0)
        {
            $row = $db->fetchByAssoc($result);
            $first_name =  html_entity_decode($row['first_name']);
            $last_name =  html_entity_decode($row['last_name'], ENT_QUOTES);
            $array1[] = "$first_name $last_name";
        }
         //print_r($array1);
     }


     if(isset($_POST['UserId']))
     {
          
        $id = $_POST['UserId'];
        $array2 = array();

        if(!defined('sugarEntry'))
        define('sugarEntry', true);

       
        require_once ('include/entryPoint.php');
       
        global $db;

       $query = "SELECT `first_name`, `last_name` FROM users WHERE id = '".$id."'";

        $result = $db->query($query);
        if($result->num_rows > 0)
        {
            $row = $db->fetchByAssoc($result);
            $first_name = html_entity_decode($row['first_name']);
            $last_name =  html_entity_decode($row['last_name']);
            $array2[] = "$first_name $last_name";
        }
         //echo $user_name;
     }

        $return = array();
        if(isset($array1))
        {
          $return['array1'] = $array1;
        }
        if(isset($array2))
        {
           $return['array2'] = $array2;
        }

         echo json_encode($return);

      

?>