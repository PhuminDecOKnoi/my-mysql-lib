<?php
   // file Controller.
   include("./functions.php");

   // $sql = "";
   $query = false;

   $conn = conn(); // Connected with mySQL.
   if(!$conn) die("Disconnected with MySQL");

    /*
   $sql = "INSERT INTO tb_test (user ,Password) VALUES('phumin_ak','12345')";
   $query = $conn->Query($sql);
   */
  
   $record = array();
   $record["user"] = "phumin_ak000000_111";
   $record["Password"]  = "12345_ak"; 
 
   $query = $conn->autoExecute(TB_TESTS,$record,'INSERT');
   
   if($query){
      echo "Inserted !";
   }
   
   // include_once("view_index.php"); //display index => HTML file.
?>