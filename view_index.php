<!DOCTYPE html>
<html>
    <head>
        <title><?php title_index_page(); ?></title>
    </head>
<body>

    <h1>Adodb Query</h1>
    <hr/>
    <?php 
        print_r($get_users);
        echo $num_rows_user;

        print_r($get_tests);
        echo $num_rows_test;
    ?>
</body>
</html>