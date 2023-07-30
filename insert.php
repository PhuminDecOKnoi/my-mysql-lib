<?php
   // file Controller.
   include("./functions.php");

   // $sql = "";
   $query = false;
   $message = "";
   
   $conn = conn(); // Connected with mySQL.
   if(!$conn) $message = "Disconnected with MySQL";
  
   $record = array();
   $record["user"] = "phumin_ak000000_111";
   $record["Password"]  = "12345_ak"; 
   
   $query = inserted_record($conn,$record);

   if($query) $message = "Inserted !";

   include_once("view_insert.php"); //display index => HTML file.
?>