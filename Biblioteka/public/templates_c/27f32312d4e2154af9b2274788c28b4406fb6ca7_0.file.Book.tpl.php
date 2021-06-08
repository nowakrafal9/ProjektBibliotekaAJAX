<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 14:37:31
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Book.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ab9e0b398179_33113435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f32312d4e2154af9b2274788c28b4406fb6ca7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Book.tpl',
      1 => 1621859839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Book_bookList.tpl' => 1,
    'file:Book_bookInfo.tpl' => 1,
    'file:Book_bookStock.tpl' => 1,
  ),
),false)) {
function content_60ab9e0b398179_33113435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4802783260ab9e0b38de02_35275018', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_4802783260ab9e0b38de02_35275018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4802783260ab9e0b38de02_35275018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "bookList") {?> <?php $_smarty_tpl->_subTemplateRender("file:Book_bookList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "bookInfo") {?> <?php $_smarty_tpl->_subTemplateRender("file:Book_bookInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "bookStock") {?> <?php $_smarty_tpl->_subTemplateRender("file:Book_bookStock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
    
<?php
}
}
/* {/block 'content'} */
}
