<?php
    // file Controller.
    include("./functions.php");

    $sql = "";
    $get_user = array();
    $get_test = array();

    $conn = conn(); // Connected with mySQL.
    if(!$conn) die("Disconnected with MySQL");

    $ADODB_FETCH_MODE = ADODB_FETCH_NUM; //return query like rows.
    $get_users = select_tb_user($conn);
    $get_tests  = select_tb_test($conn);

    include_once("view_index.php"); //display index => HTML file.
?>