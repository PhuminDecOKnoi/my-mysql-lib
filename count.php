<?php
    include("./functions.php");

    $conn = conn();
    if(!$conn) die("Disconnected with MySQL");
    
    $ADODB_COUNTRECS = TRUE;
    $num_rows_user = count_rows_user($conn);
    $num_rows_test = count_rows_test($conn);

    include_once("view_count.php");
?>