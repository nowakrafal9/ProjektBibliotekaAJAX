<section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

    {if {$numRecords} > 0}
        <table class="alt">
            <thead>
                <tr>
                    <th style="width: 10%">Id czytelnika</th>
                    <th style="width: 30%">Nazwisko</th>
                    <th style="width: 30%">Imię</th>  
                    <th style="width: 10%"> </th>
                </tr>
            </thead>

            <tbody>
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td style="width: 10%">{$r["id_borrower"]}</td> 
                        <td style="width: 30%">{$r["surname"]}</td>
                        <td style="width: 30%">{$r["name"]}</td>      
                        <td style="width: 10%" ><center><a href="{url action = 'readerInfo'}/{$r['id_borrower']}" class="button small">Informacje</a></center></td>  
                    </tr>
                {/strip}
                {/foreach}
            </tbody>
        </table>
                
        <form method="post">
            {if {$searchForm->id_reader}}
                <input type="hidden" name="id_reader" value="{$searchForm->id_reader}">
            {/if}
            {if {$searchForm->name}}
                <input type="hidden" name="name" value="{$searchForm->name}">
            {/if}
            {if {$searchForm->surname}}
                <input type="hidden" name="surname" value="{$searchForm->surname}">
            {/if}

            <center>    
                <button class="primary" onclick="ajaxPostForm('form', '{url action="readerListData" p = 1}', 'data'); return false;" {if {$page}==1}disabled{/if}> &lt;&lt; </button>
                <button class="primary" onclick="ajaxPostForm('form', '{url action="readerListData" p = {$page-1}}', 'data'); return false;" {if {$page-1}==0}disabled{/if}> &lt; </button>
                <span style="margin:5%">Strona {$page} z {$lastPage-1}</span>
                <button class="primary" onclick="ajaxPostForm('form', '{url action="readerListData" p = {$page+1}}', 'data'); return false;" {if {$page+1}=={$lastPage}}disabled{/if}> &gt; </button>
                <button class="primary" onclick="ajaxPostForm('form', '{url action="readerListData" p = {$lastPage-1}}', 'data'); return false;" {if {$page}=={$lastPage-1}}disabled{/if}> &gt;&gt; </button>
            </center>
        </form>

    {else}
        <h4>Brak znalezionych czytelników.</h4>
    {/if}

</section>
