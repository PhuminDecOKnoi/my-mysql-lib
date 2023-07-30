<?php
    // file Controller.
    include("./functions.php");

    $sql = "";
    $query = false;
    $message = "";

    $get_test = array();

    $conn = conn(); // Connected with mySQL.
    if(!$conn) $message = "Disconnected with MySQL";

    $ADODB_FETCH_MODE = ADODB_FETCH_NUM; //return query like rows.
    $sql ="SELECT * FROM `tb_test`";
    $query = $conn->execute($sql);

    include_once("view_index.php"); //display index => HTML file.
?>