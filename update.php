<?php
   // file Controller.
   include("./functions.php");

   $query = false;
   $record = array();
   $update = "";

   $conn = conn(); // Connected with mySQL.
   if(!$conn) die("Disconnected with MySQL");
  
  
   $record["user"] = "phumin_ak0099993333000_222";
   $record["Password"]  = "12345_ak"; 
   $update = 'ID=11';
 
   $query = $conn->autoExecute(TB_TESTS,$record,'UPDATE',$update);
   
   if($query){
      echo "Updated !";
   }
   
   // include_once("view_index.php"); //display index => HTML file.
?>