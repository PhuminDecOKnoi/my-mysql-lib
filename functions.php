<?php

    include_once('./config.php');

    function conn(){
        $db = adoNewConnection(DRIVER);
        $db->connect(LOCALHOST,USER,PWD,DB);
        $db->debug = false;
        return $db;
    }
    function select_tb_user($con){
        $sql = 'SELECT * FROM '.TB_USERS;
        $result = $con->GetRow($sql);
        return $result;
    }
    function select_tb_test($con){
        $sql = 'SELECT * FROM '.TB_TESTS;
        $result = $con->GetRow($sql);
        return $result;
    }
    function count_rows_user($con){
        $sql = 'SELECT * FROM '.TB_USERS;
        $result = $con->Execute($sql);
        $num_row_user = $result->recordCount();
        return (int) $num_row_user;
    }
    function count_rows_test($con){
        $sql = 'SELECT * FROM '.TB_TESTS;
        $result = $con->Execute($sql);
        $num_row_user = $result->recordCount();
        return (int) $num_row_user;
    }
    function title_index_page(){
        echo "index page";
    }
    function title_count_page(){
        echo "count page";
    }
    function inserted_record($conn,$record){
        $conn->autoExecute(TB_TESTS,$record,'INSERT');
        return $conn;
    }
    function updated_record($conn,$record,$where){
        $conn->autoExecute(TB_TESTS,$record,'UPDATE',$where);
        return $conn;
    }
    function deleted_record($conn,$get){
        $sql = "DELETE FROM ".TB_TESTS." WHERE ID=".$get.";"; // echo $sql;
        $conn->Execute($sql);
        return $conn;
    }
?>