<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 19:17:08
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\BookBorrow_selectBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afd414a1bf93_57845697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036e99333649a6d18837d41f9f591f3d601761d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\BookBorrow_selectBook.tpl',
      1 => 1622135817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60afd414a1bf93_57845697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59794458260afd414a0cfc1_33856470', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_59794458260afd414a0cfc1_33856470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59794458260afd414a0cfc1_33856470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 4.3em;">

        <div class="row">       
            <div class="col-6 col-12-small">
                <h3>Wyszukaj książkę:</h3> 
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookBorrow"),$_smarty_tpl ) );?>
" method="post">
                    <div class="row gtr-uniform">
                        <div class="col-4 col-12-xsmall">
                            <strong>Kod książki:</strong>
                            <input type="text" name="id_book" id="id_book" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_book;?>
" placeholder="Id książki">
                        </div>

                        <div class="col-8 col-12-xsmall">
                            <strong>Tytuł:</strong>
                            <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" placeholder="Tytuł">
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Szukaj" class="primary">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookBorrow'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
                        </div>  
                    </div>
                </form>
            </div>

            <div class="col-6 col-12-small">
                <h3>Wyszukaj czytelnika:</h3> 
                <form>
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <strong>Imię:</strong>
                            <input type="text" name="name" id="name" value="" placeholder="Imie" disabled style="background: #eeeeee">
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <strong>Nazwisko:</strong>
                            <input type="text" name="surname" id="surnamee" value="" placeholder="Nazwisko" disabled style="background: #eeeeee">
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <strong>Kod czytelnika:</strong>
                            <input type="text" name="id_reader" id="id_reader" value="" placeholder="Kod czytelnika" disabled style="background: #eeeeee">
                        </div>
                    </div>
                </form>
            </div>      
        </div>

    </section>

    <section style = "padding-top: 1em; padding-bottom: 0;">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['formSent']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 0) {?>
                <table class="alt">
                    <thead>
                        <tr>
                            <th style="width: 15%">Id książki</th>
                            <th style="width: 75%">Tytuł</th>
                            <th style="width: 10%"> </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                        <tr><td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
</td><td style="width: 75%"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</td><td style="width: 10%" ><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookBorrow'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
" class="button small">Wypożycz</a></center></td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php } else { ?>
                <h3>Brak szukanych książek.</h3>
            <?php }?>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block 'content'} */
}
