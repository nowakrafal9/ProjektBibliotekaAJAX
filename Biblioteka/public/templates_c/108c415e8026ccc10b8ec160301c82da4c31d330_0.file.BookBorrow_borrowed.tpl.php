<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:23:45
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\BookBorrow_borrowed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba8e14d5f99_91571143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108c415e8026ccc10b8ec160301c82da4c31d330' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\BookBorrow_borrowed.tpl',
      1 => 1621862340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60aba8e14d5f99_91571143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130207294060aba8e14d0e55_22068633', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_130207294060aba8e14d0e55_22068633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130207294060aba8e14d0e55_22068633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
" class="button primary">Powrót</a>
        
    </section>  
        
<?php
}
}
/* {/block 'content'} */
}
