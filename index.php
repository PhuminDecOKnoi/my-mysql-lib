<?php

    include("./functions.php");

    $conn = conn();
    if(!$conn) die("Disconnected with MySQL");

    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;

    $sql = 'SELECT * FROM `tb_user`';
    $result = $conn->getAll($sql);

    print_r($result);

    $sql = 'SELECT * FROM `tb_test`';
    $result = $conn->getAll($sql);

    print_r($result);
?>