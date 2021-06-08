<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-04 00:11:26
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Book_bookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b9538ed0f6b0_31225448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf432ce991afa4f5e78c45096e89f23064fd3ea' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Book_bookList.tpl',
      1 => 1622758232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b9538ed0f6b0_31225448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71223925860b9538ecfb636_66180673', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_71223925860b9538ecfb636_66180673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71223925860b9538ecfb636_66180673',
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
                
            <form method="post">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->title;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                    <input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
">
                <?php }?>
     
                <center>
                    <button class="primary" formaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>1),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?>disabled<?php }?>> &lt;&lt; </button>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable4),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 0) {?>disabled<?php }?>> &lt; </button>
                    <span style="margin:5%">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value-1;?>
</span>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable6),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable7 == $_prefixVariable8) {?>disabled<?php }?>> &gt; </button>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable9),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable10 == $_prefixVariable11) {?>disabled<?php }?>> &gt;&gt; </button>
                </center>
            </form>
        <?php } else { ?>
            <h4>Nie znaleziono szukanych tytułów w bibliotece.</h4>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block 'content'} */
}
