<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:05:21
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Borrowed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba491654852_02094333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b23e1fc7580e42a29c01f888dbd690321addcff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Borrowed.tpl',
      1 => 1621861520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Borrowed_borrowedList.tpl' => 1,
    'file:Borrowed_borrowedReturn.tpl' => 1,
  ),
),false)) {
function content_60aba491654852_02094333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197585738860aba49164c554_66961529', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_197585738860aba49164c554_66961529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197585738860aba49164c554_66961529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "borrowedList") {?> <?php $_smarty_tpl->_subTemplateRender("file:Borrowed_borrowedList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "borrowedReturn") {?> <?php $_smarty_tpl->_subTemplateRender("file:Borrowed_borrowedReturn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
        
<?php
}
}
/* {/block "content"} */
}
