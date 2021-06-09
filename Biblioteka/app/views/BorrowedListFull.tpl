{extends file = "main_template.tpl"}

{block name=content}
    
    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form id="form" onsubmit="ajaxPostForm('form','{$conf->action_root}borrowedListData','data'); return false;">

            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="id_book" id="id_book" value="{$searchForm->id_book}" placeholder="Kod książki" />
                </div>	

                <div class="col-3 col-5-xsmal">
                    <input type="text" name="id_reader" id="id_reader" value="{$searchForm->id_reader}" placeholder="Kod czytelnika" />
                </div>	

                <div class="col-3">
                    <select name="status" id="status">
                        <option value="" selected disabled hidden>Status</option>
                        <option value="0" {if isset($searchForm->status) and $searchForm->status==0}selected{/if}>Po terminie</option>
                        <option value="1" {if isset($searchForm->status) and $searchForm->status==1}selected{/if}>W terminie</option>
                    </select>
                </div>   	
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a onclick="document.getElementById('form').reset();
               ajaxPostForm('form','{$conf->action_root}borrowedListData','data')" class="button">Wyczyść filtr</a>
        </form>    

        <p>
            <a href="{url action = 'bookBorrow'}" class="button primary icon solid fa-plus">Wypożycz książkę</a>
        </p>

    </section>

    <div id="data">
        {include file = "BorrowedListData.tpl"}
    </div>
            
{/block}
