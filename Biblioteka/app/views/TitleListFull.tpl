{extends file = "main_template.tpl"}

{block name=content}
    
    <section style="padding-top: 1em; padding-bottom: 1em">

        <form id="form" onsubmit="ajaxPostForm('form','{$conf->action_root}titleListData','data'); return false;">
             <div class="row gtr-uniform" style="padding-bottom:0.75em">
                 <div class="col-12">
                     <input type="text" name="title" id="title" value="{$searchForm->title}" placeholder="Tytuł szukanej książki" />
                 </div>							
             </div>
             <input type="submit" value="Szukaj" class="primary">
             {*<a href="{url action = 'titleList'}" class="button">Wyczyść filtr</a>*}
             <a onclick="document.getElementById('form').reset();
               ajaxPostForm('form','{$conf->action_root}titleListData','data')" class="button">Wyczyść filtr</a>
         </form>

    </section>

    <div id="data">
        {include file="TitleListData.tpl"}
    </div>
            
{/block}