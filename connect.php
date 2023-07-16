<?php
    require_once('./adodb/adodb.inc.php'); //C:\xampp\htdocs\my-mysql-lib\adodb\adodb.inc.php

    $driver = 'mysqli';

    $localost = "localhost";
    $user="root";
    $password="";
    $database="tb_user";

    $db = adoNewConnection($driver);
    $db->connect($localost,$user,$password,$database);

    if(!$db) echo "errer!";
?>