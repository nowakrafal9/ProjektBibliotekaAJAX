<section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

    {if {$numRecords > 0}}
        <table class="alt">
            <thead>
                <tr>
                    <th style="width: 10%">Kod książki</th>
                    <th style="width: 60%">Tytuł</th>
                    <th style="width: 15%">Status</th>    
                    <th style="width: 15%"></th>  
                </tr>
            </thead>

            <tbody>
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td style="width: 10%">{$r["id_book"]}</td> 
                        <td style="width: 60%">{$r["title"]}</td>
                        <td style="width: 15%">{if {$r["borrowed"]} == "0"}Niewypożyczona{else}Wypożyczona{/if}</td>   
                        <td style="width: 15%">
                            {if {$r["borrowed"]} == "0"}     
                                <center><a class="button small" onclick="confirmLink('{$conf->action_url}bookDelete/{$r["id_book"]}','Czy na pewno usunąć książkę:\n\nKod książki: {$r["id_book"]}\nTytuł: {$r["title"]}?')" >Usuń</a></center>
                            {else}
                                <center><span class="button small disabled">Usuń</span></center>
                            {/if}
                        </td> 

                    </tr>
                {/strip}
                {/foreach}
            </tbody>
        </table>

        <form method="post">
        {if {$searchForm->book_code}}
            <input type="hidden" name="book_code" value="{$searchForm->book_code}">
        {/if}
        {if {$searchForm->title}}
            <input type="hidden" name="title" value="{$searchForm->title}">
        {/if}
        {if {$searchForm->borrowed}}
            <input type="hidden" name="borrowed" value="{$searchForm->borrowed}">
        {/if}

        <center>
            <button class="primary" formaction="{url action = "bookStock" p = 1}" {if {$page}==1}disabled{/if}> &lt;&lt; </button>
            <button class="primary" formaction="{url action = "bookStock" p = {$page-1}}" {if {$page-1}==0}disabled{/if}> &lt; </button>
            <span style="margin:5%">Strona {$page} z {$lastPage-1}</span>
            <button class="primary" formaction="{url action = "bookStock" p = {$page+1}}" {if {$page+1}=={$lastPage}}disabled{/if}> &gt; </button>
            <button class="primary" formaction="{url action = "bookStock" p = {$lastPage-1}}" {if {$page}=={$lastPage-1}}disabled{/if}> &gt;&gt; </button>
        </center>
        </form>
    {else}
        <h4>Brak książek w bibliotece</h4>
    {/if}

</section>
