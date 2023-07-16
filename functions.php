<?php
    
    require_once('./adodb/adodb.inc.php'); //C:\xampp\htdocs\my-mysql-lib\adodb\adodb.inc.php

    define("DRIVER","mysqli");
    define("LOCALHOST","localhost");
    define("USER","root");
    define("PWD","");
    define("DB","test");
    
    function conn(){
        $db = adoNewConnection(DRIVER);
        $db->connect(LOCALHOST,USER,PWD,DB);
        return $db;
    }
?>