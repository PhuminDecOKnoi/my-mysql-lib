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

   include_once("view_delete.php"); //display index => HTML file.
?>