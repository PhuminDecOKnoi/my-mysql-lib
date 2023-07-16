<?php

    include("./functions.php");

    $sql = "";
    $get_user = array();
    $get_test = array();

    $conn = conn();
    if(!$conn) die("Disconnected with MySQL");

    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;

    $sql = 'SELECT * FROM `tb_user`';
    $get_user = $conn->getAll($sql);

    $sql = 'SELECT * FROM `tb_test`';
    $get_test = $conn->getAll($sql);

?>