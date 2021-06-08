<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-23 15:28:00
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aa58605c9497_29584459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c029c76f35e4f2dfde66d139fbb77a0072d985' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\templates\\messages.tpl',
      1 => 1621772665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa58605c9497_29584459 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <section style="padding-top: 1em; padding-bottom: 1em">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <strong style="color:#f56a6a"><li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li></strong>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </section>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <section style="padding-top: 1em; padding-bottom: 1em">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?><strong style="color:gray"> <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li> </strong><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></section><?php }
}
}
