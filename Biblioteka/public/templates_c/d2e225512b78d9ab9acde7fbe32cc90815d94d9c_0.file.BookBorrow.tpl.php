<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:05:25
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\BookBorrow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba495401155_19380660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e225512b78d9ab9acde7fbe32cc90815d94d9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\BookBorrow.tpl',
      1 => 1621860628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:BookBorrow_selectBorrower.tpl' => 1,
    'file:BookBorrow_selectBook.tpl' => 1,
  ),
),false)) {
function content_60aba495401155_19380660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147930176760aba4953f5b46_82829710', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_147930176760aba4953f5b46_82829710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_147930176760aba4953f5b46_82829710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "bookBorrowed") {?>
        <section style = "padding-top: 1em; padding-bottom: 0;">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
" class="button primary">Powrót</a>
        </section>  
    <?php }?>
        
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "selectBorrower") {?> <?php $_smarty_tpl->_subTemplateRender("file:BookBorrow_selectBorrower.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
          
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "selectBook") {?> <?php $_smarty_tpl->_subTemplateRender("file:BookBorrow_selectBook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
    
<?php
}
}
/* {/block 'content'} */
}
