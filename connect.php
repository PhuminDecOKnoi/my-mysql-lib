<?php
    require_once('./adodb/adodb.inc.php'); //C:\xampp\htdocs\my-mysql-lib\adodb\adodb.inc.php

    $driver = 'mysqli';
    $localost = "localhost";
    $user = "root";
    $password = "";
    $database = "test";
    $result = array();

    $db = adoNewConnection($driver);
    $db->connect($localost,$user,$password,$database);

    if(!$db) die("Disconnected!");

    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;

    $sql = 'SELECT * FROM `tb_user`';
    $result = $db->getAll($sql);

    print_r($result);
?>