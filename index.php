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

    $ADODB_COUNTRECS = TRUE;
    $num_rows_user = count_rows_user($conn);
    $num_rows_test = count_rows_test($conn);

    include_once("view_index.php");
?>