{extends file = "main_template.tpl"}

{block name=content}
   
    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form id="form" onsubmit="ajaxPostForm('form','{$conf->action_root}bookListData','data'); return false;">          
            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="book_code" id="book_code" value="{$searchForm->book_code}" placeholder="Kod książki" />
                </div>	

                <div class="col-6 col-5-xsmal">
                    <input type="text" name="title" id="title" value="{$searchForm->title}" placeholder="Tytuł" />
                </div>	

                <div class="col-3">
                    <select name="borrowed" id="borrowed">
                        <option value="" selected disabled hidden>Wszystkie</option>
                        <option value="0" {if isset($searchForm->borrowed) and $searchForm->borrowed==0}selected{/if}>Niewypożyczone</option>
                        <option value="1" {if isset($searchForm->borrowed) and $searchForm->borrowed==1}selected{/if}>Wypożyczone</option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a onclick="document.getElementById('form').reset();
               ajaxPostForm('form','{$conf->action_root}bookListData','data')" class="button">Wyczyść filtr</a>
        </form> 
         <p>
            <a href="{url action = 'bookAdd'}" class="button primary icon solid fa-plus">Dodaj książkę</a>
        </p>
    </section>

    <div id="data">
        {include file = "BookListData.tpl"}
    </div>
          
    {*{include file = "messages.tpl"}*}
{/block}