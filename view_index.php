<!DOCTYPE html>
<html>
    <head>
        <title><?= title_index_page(); ?></title>
    </head>
<body>
    <!-- Start Page-->
    <h1>Adodb Query</h1>
    <hr/>
    <div>
        <a href="insert.php">Add record</a>
        <a href="update.php?id=8">Update record</a>
        <a href="delete.php?id=12">Delete record</a>
    </div>
    <div>
    <?php
        while($result = $query->fetchrow()){ ?>
            <div><?php echo $result[1].$result[2] ?></div>
            <div>##########$$$$$$$$$$</div>
    <?php } ?>
    </div>
    <!-- End Page-->
</body>
</html>