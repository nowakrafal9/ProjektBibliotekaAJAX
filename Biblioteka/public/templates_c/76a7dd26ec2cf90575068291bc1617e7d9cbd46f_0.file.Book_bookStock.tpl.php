<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:14:26
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\templates\Book_bookStock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba6b2224157_85552309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a7dd26ec2cf90575068291bc1617e7d9cbd46f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\templates\\Book_bookStock.tpl',
      1 => 1621861927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aba6b2224157_85552309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181172731060aba6b2211539_06049415', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_181172731060aba6b2211539_06049415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181172731060aba6b2211539_06049415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookStock'),$_smarty_tpl ) );?>
">          
            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="book_code" id="book_code" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->book_code;?>
" placeholder="Kod książki" />
                </div>	

                <div class="col-6 col-5-xsmal">
                    <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" placeholder="Tytuł" />
                </div>	

                <div class="col-3">
                    <select name="borrowed" id="borrowed">
                        <option value="" selected disabled hidden>Wszystkie</option>
                        <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['searchForm']->value->borrowed)) && $_smarty_tpl->tpl_vars['searchForm']->value->borrowed == 0) {?>selected<?php }?>>Niewypożyczone</option>
                        <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['searchForm']->value->borrowed)) && $_smarty_tpl->tpl_vars['searchForm']->value->borrowed == 1) {?>selected<?php }?>>Wypożyczone</option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookStock'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
        </form> 

        <p>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookAdd'),$_smarty_tpl ) );?>
" class="button primary icon solid fa-plus">Dodaj książkę</a>
        </p>

    </section>

    <section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value > 0;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
</td><td style="width: 60%"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</td><td style="width: 15%"><?php ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["borrowed"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "0") {?>Niewypożyczona<?php } else { ?>Wypożyczona<?php }?></td><td style="width: 15%"><?php ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["borrowed"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "0") {?><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookBorrow'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
" class="button small">Wypożycz</a></center><?php } else { ?><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedReturn'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
" class="button small">Oddaj</a></center><?php }?></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <h4>Brak książek w bibliotece</h4>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block 'content'} */
}
