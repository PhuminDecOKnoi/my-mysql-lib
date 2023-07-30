    {include file="header.tpl"}
    <body>
        <p>
            {* assign from smarty.php *}
            {$greet}
            {$name}

            <p>{$arr[0]}</p>
            <p>{$arr[1]}</p>
            <p>{$arr[2]}</p>

            <p>
            
                {if $arr[0] ==0}
                    <div>{$arr[2]}</div>
                {else}
                    <div>{$arr[0]}</div>
                {/if}

            </p>
        </p> 
    </body>
    {include file="footer.tpl"}