<?php

include('./functions.php');

$smarty = smarty(); // ref. class smarty template

$smarty->assign('title', 'index pageXXXXXX');
$smarty->assign('greet', 'Hello World');
$smarty->assign('name','Phumin Decoknoi');

$arr = array('Phumin_ak','pas12345','08999999');
$smarty->assign('arr',$arr);


$smarty->display('smarty_index.tpl');
?>