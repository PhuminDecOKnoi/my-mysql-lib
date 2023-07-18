<!DOCTYPE html>
<html>
    <head>
        <title><?= title_index_page(); ?></title>
    </head>
<body>
    <!-- Start Page-->
    <h1>Adodb Query</h1>
    <hr/>
    <?= print_r($get_users); ?>
    <hr/>
    <?= print_r($get_tests);?>
    <div>
        <div><?= $get_users[1]?></div>
        <div><?= $get_users[2]?></div>
        <div><?= $get_users[3]?></div>
    </div>
    <div>
        <div><?= $get_tests[1]?></div>
        <div><?= $get_tests[2]?></div>
    </div>
    <div></div>
    <!-- End Page-->
</body>
</html>