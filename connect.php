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

    if(!$db) echo "errer!";

    $sql = 'SELECT * FROM `tb_user`';

    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
    //$result = $db->Execute($sql);
    $result = $db->getAll($sql);

    print_r($result);
?>