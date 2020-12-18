<?php
 function getContactsList()
{
   $query = "SELECT id,first_name,last_name FROM contacts where deleted = 0 ORDER BY first_name ASC";
   $result = $GLOBALS['db']->query($query, false);

   $list = array();
   while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
       $list[$row['id']] = $row['first_name']." ".$row['last_name'];
   }

   return $list;
}

function getResourcesList()
{
   $query = "SELECT id,name FROM eciu_crm_resources where deleted = 0 ORDER BY name ASC";
   $result = $GLOBALS['db']->query($query, false);

   $list = array();
   while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
       $list[$row['id']] = $row['name'];
   }

   return $list;
}

function getParallelTracksList()
{
   $query = "SELECT id,name FROM eciu_crm_tracks where deleted = 0 ORDER BY name ASC";
   $result = $GLOBALS['db']->query($query, false);

   $list = array();
   while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
       $list[$row['id']] = $row['name'];
   }

   return $list;
}
?>
