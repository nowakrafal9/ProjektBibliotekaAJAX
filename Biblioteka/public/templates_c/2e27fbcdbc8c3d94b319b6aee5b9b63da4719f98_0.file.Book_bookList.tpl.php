<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:13:51
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\templates\Book_bookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba68f433932_43433019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e27fbcdbc8c3d94b319b6aee5b9b63da4719f98' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\templates\\Book_bookList.tpl',
      1 => 1621861942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aba68f433932_43433019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2874153660aba68f425e28_42758093', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_2874153660aba68f425e28_42758093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2874153660aba68f425e28_42758093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section style="padding-top: 1em; padding-bottom: 1em">

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
">
             <div class="row gtr-uniform" style="padding-bottom:0.75em">
                 <div class="col-12">
                     <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" placeholder="Tytuł szukanej książki" />
                 </div>							
             </div>
             <input type="submit" value="Szukaj" class="primary">
             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
         </form>

    </section>

    <section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?>
            <table class="default">
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td style="width: 90%"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</td><td style="width: 10%"><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_book'];?>
" class="button small">Informacje</a></center></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <h4>Brak tytułów w bibliotece.</h4>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block 'content'} */
}
