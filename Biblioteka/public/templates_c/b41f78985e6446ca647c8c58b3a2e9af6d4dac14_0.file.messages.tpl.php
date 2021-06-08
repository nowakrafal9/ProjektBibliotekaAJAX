<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 10:11:00
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf26148bed06_68944341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41f78985e6446ca647c8c58b3a2e9af6d4dac14' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\templates\\messages.tpl',
      1 => 1623135093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf26148bed06_68944341 (Smarty_Internal_Template $_smarty_tpl) {
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
