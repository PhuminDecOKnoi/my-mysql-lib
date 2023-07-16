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
    function select_tb_user($con){
        $sql = 'SELECT * FROM `tb_user`';
        $result = $con->GetRow($sql);
        return $result;
    }
    function select_tb_test($con){
        $sql = 'SELECT * FROM `tb_test`';
        $result = $con->GetRow($sql);
        return $result;
    }
    function count_rows_user($con){
        $sql = 'SELECT * FROM `tb_user`';
        $result = $con->Execute($sql);
        $num_row_user = $result->recordCount();
        return (int) $num_row_user;
    }
    function count_rows_test($con){
        $sql = 'SELECT * FROM `tb_test`';
        $result = $con->Execute($sql);
        $num_row_user = $result->recordCount();
        return (int) $num_row_user;
    }
    function title_index_page(){
        echo "index page";
    }
?>