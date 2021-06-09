<section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

    {if {$numRecords} > 0}
        <table class="alt">
            <thead>
                <tr>
                    <th style="width: 10%">Kod książki</th>
                    <th style="width: 10%">Kod czytelnika</th>  
                    <th style="width: 15%">Data wypożyczenia</th> 
                    <th style="width: 15%">Data oddania</th>  
                    <th style="width: 10%"> </th>
                </tr>
            </thead>

            <tbody>
                {foreach $records as $r}
                {strip}
                    <tr>
                        <td style="width: 10%">{$r["id_book"]}</td> 
                        <td style="width: 10%">{$r["id_borrower"]}</td> 
                        <td style="width: 15%">{$r["borrow_date"]}</td> 
                        {if {$dateToday} > {$r["return_date"]}}
                            <td style="width: 15%; background-color: #f56a6a;"><strong>{$r["return_date"]}</strong></td>
                        {else}
                            <td style="width: 15%">{$r["return_date"]}</td>
                        {/if}
                        <td style="width: 10%"><center><a href="{url action = 'borrowedInfo'}/{$r["id_book"]}" class="button small">Szczegóły</a></center></td> 
                    </tr>
                {/strip}
                {/foreach}
            </tbody>
        </table>

        <form method="post">
        {if {$searchForm->id_book}}
            <input type="hidden" name="id_book" value="{$searchForm->id_book}">
        {/if}
        {if {$searchForm->id_reader}}
            <input type="hidden" name="id_reader" value="{$searchForm->id_reader}">
        {/if}
        {if {$searchForm->status}}
            <input type="hidden" name="status" value="{$searchForm->status}">
        {/if}

        <center>
            <button class="primary" formaction="{url action = "borrowedList" p = 1}" {if {$page}==1}disabled{/if}> &lt;&lt; </button>
            <button class="primary" formaction="{url action = "borrowedList" p = {$page-1}}" {if {$page-1}==0}disabled{/if}> &lt; </button>
            <span style="margin:5%">Strona {$page} z {$lastPage-1}</span>
            <button class="primary" formaction="{url action = "borrowedList" p = {$page+1}}" {if {$page+1}=={$lastPage}}disabled{/if}> &gt; </button>
            <button class="primary" formaction="{url action = "borrowedList" p = {$lastPage-1}}" {if {$page}=={$lastPage-1}}disabled{/if}> &gt;&gt; </button>

        </center>
        </form>

    {else}
        <h4>Nie znaleziono szukanych wypożyczonych książek.</h4>
    {/if}

</section>
