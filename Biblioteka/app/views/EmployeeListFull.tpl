{extends file = "main_template.tpl"}

{block name = "content"}
    
    <section style = "padding-top: 1em; padding-bottom: 0;">

         <form id="form" onsubmit="ajaxPostForm('form','{$conf->action_root}employeeListData','data'); return false;">

            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="login" id="login" value="{$searchForm->login}" placeholder="Login" />
                </div>	
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="name" id="name" value="{$searchForm->name}" placeholder="Imię" />
                </div>						
                <div class="col-3 col-3-xsmall">
                    <input type="text" name="surname" id="surname" value="{$searchForm->surname}" placeholder="Nazwisko" />
                </div>    						
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a onclick="document.getElementById('form').reset();
               ajaxPostForm('form','{$conf->action_root}employeeListData','data')" class="button">Wyczyść filtr</a>
        </form> 
        <p>
            <a href="{url action = 'employeeAdd'}" class="button primary icon solid fa-plus">Dodaj pracownika</a>
        </p>

    </section>

    <div id="data">
        {include file = "EmployeeListData.tpl"}
    </div>
            
{/block}
