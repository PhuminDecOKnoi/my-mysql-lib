<?php
    // file Controller.
    include("./functions.php");

    $sql = "";
    $query = false;
    $message = "";
    $arr = array();
    $i = 0;

    $get_test = array();

    $conn = conn(); // Connected with mySQL.
    if(!$conn) $message = "Disconnected with MySQL";

    $ADODB_FETCH_MODE = ADODB_FETCH_NUM; //return query like rows.
    $sql ="SELECT * FROM `tb_test`";
    $query = $conn->execute($sql);

    // FetchRow

    while($result = $query->fetchrow()){
        $arr[$i] = $result;
        $i++;
    }
    // start Starty
    $smarty = smarty();
    $smarty->assign('title','Index page');
    $smarty->assign('message',$message);
    $smarty->assign('arr',$arr); //sql->excute->fetchrow

    $smarty->display('index.tpl');
?>