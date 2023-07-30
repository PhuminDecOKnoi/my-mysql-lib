{include file="header.tpl"}{* head file=CSS, javascript *}
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