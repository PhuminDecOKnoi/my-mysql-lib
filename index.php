<?php

    include("./functions.php");

    $sql = "";
    $get_user = array();
    $get_test = array();

    $conn = conn();
    if(!$conn) die("Disconnected with MySQL");

    $ADODB_FETCH_MODE = ADODB_FETCH_NUM;
    $get_users = select_tb_user($conn);
    $get_tests  = select_tb_test($conn);

    include_once("view_index.php");
?>