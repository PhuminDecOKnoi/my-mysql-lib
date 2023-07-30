<?php
   // file Controller.
   include("./functions.php");

   $get = $_GET['id'];
   $query = false;
   $message = "";
   $record = array();
   $update = "";

   $conn = conn(); // Connected with mySQL.
   if(!$conn) $message = "Disconnected with MySQL";
  
    // Update by record array
   $record["user"] = "phumin_ak666667777776666777777_222";
   $record["Password"]  = "12345XXXXXXX_ak"; 

   if(isset($get)){
        $where = 'ID='.$get;
        $query = updated_record($conn,$record,$where);
        if($query) $message = "Updated = ".$get;

   }else{
        $message = "id not isset !";
    }

   // start Starty
   $smarty = smarty();
   $smarty->assign('title','Update page');
   $smarty->assign('message',$message);
   
   $smarty->display('update.tpl');
?>