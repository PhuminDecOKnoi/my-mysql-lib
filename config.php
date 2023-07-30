<?php
    require_once('./adodb/adodb.inc.php'); //C:\xampp\htdocs\my-mysql-lib\adodb\adodb.inc.php

    define('SMARTY_DIR', 'C:/xampp/htdocs/my-mysql-lib/smarty/libs/'); // set path to Smarty directory *nix style
    require_once(SMARTY_DIR . 'Smarty.class.php');
    
    define("DRIVER","mysqli");
    define("LOCALHOST","localhost");
    define("USER","root");
    define("PWD","");
    define("DB","test");

    define("TB_USERS","`tb_user`");
    define("TB_TESTS","`tb_test`"); 
?>