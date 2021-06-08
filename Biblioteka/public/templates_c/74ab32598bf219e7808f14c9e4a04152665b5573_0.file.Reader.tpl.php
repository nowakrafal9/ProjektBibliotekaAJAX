<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:04:53
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Reader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba4750764a1_00471303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ab32598bf219e7808f14c9e4a04152665b5573' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Reader.tpl',
      1 => 1621861199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Reader_readerList.tpl' => 1,
    'file:Reader_readerInfo.tpl' => 1,
  ),
),false)) {
function content_60aba4750764a1_00471303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53371280060aba47506da67_46273689', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_53371280060aba47506da67_46273689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53371280060aba47506da67_46273689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "readerList") {?> <?php $_smarty_tpl->_subTemplateRender("file:Reader_readerList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "readerInfo") {?> <?php $_smarty_tpl->_subTemplateRender("file:Reader_readerInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
        
<?php
}
}
/* {/block "content"} */
}
