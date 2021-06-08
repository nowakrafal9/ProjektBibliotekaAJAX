<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:27:21
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Book_addBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba9b91aa868_74880619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5e1586fb0a999a6a3eb8170cd214cff3766fb3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Book_addBook.tpl',
      1 => 1621862720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60aba9b91aa868_74880619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76126532660aba9b91a27d7_45752890', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_76126532660aba9b91a27d7_45752890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_76126532660aba9b91a27d7_45752890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <div class="row">                    
            <div class="col-6 col-12-small">
                <h3>Dodaj książkę</h3> 
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookSave"),$_smarty_tpl ) );?>
" method="post">
                    <div class="row gtr-uniform">
                        <div class="col-4 col-12-xsmall">
                            <strong>Kod książki:</strong>
                            <input type="text" name="id_book" id="id_book" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_book;?>
" placeholder="Id książki">
                        </div>

                        <div class="col-8 col-12-xsmall">
                            <strong>Kod tytułu:</strong>
                            <input type="text" name="book_code" id="book_code" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->book_code;?>
" placeholder="Kod tytułu">
                        </div>
                        
                        <div class="col-12">
                            <input type="submit" value="Dodaj" class="primary">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookStock'),$_smarty_tpl ) );?>
" class="button">Powrót</a>
                        </div>  
                    </div>  
                </form>
            </div>                         
        </div>
                        
    </section>
                        
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php
}
}
/* {/block 'content'} */
}
