{include file="header.tpl"}{* head file=CSS, javascript *}
<body>
    <h1>Adodb Query</h1>
    <hr/>
    <div>
        <a href="insert.php">Add record</a>
        <a href="update.php?id=8">Update record</a>
        <a href="delete.php?id=12">Delete record</a>
    </div>
    <p>
        {$message}
        <ol type="a">
        {foreach $arr as $res}
            <li>{$res[0]} | {$res[1]} | {$res[2]}</li>
        {/foreach}
        </ol>
    </p>
</body>
{include file="footer.tpl"}{* footer file=javascript *}