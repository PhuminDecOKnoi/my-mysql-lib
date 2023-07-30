<?php
   // file Controller.
   include("./functions.php");

   $get = $_GET['id'];
   $query = false;
   $message = "";
   
   $conn = conn(); // Connected with mySQL.
   if(!$conn) $message = "Disconnected with MySQL";

   if(isset($get)){
    
        $query = deleted_record($conn, $get);
        if($query) $message ="Deleted record=".$get;
   }

   // start Starty
   $smarty = smarty();
   $smarty->assign('title','Delete page');
   $smarty->assign('message',$message);
   
   $smarty->display('delete.tpl');
?>