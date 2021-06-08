<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-28 11:46:37
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Employee_employeeInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b0bbfd5c59f0_99921169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b16b3089008571bbc09ac3ba0805fdc85e0165' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Employee_employeeInfo.tpl',
      1 => 1622195189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0bbfd5c59f0_99921169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113392178760b0bbfd5bae88_38622875', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_113392178760b0bbfd5bae88_38622875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113392178760b0bbfd5bae88_38622875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section style="padding-top: 1em; padding-bottom: 1em">

        <h3 class="content"><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
, <?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
 [<a href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeEdit"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_employee"];?>
' style='color:#9a9a9a'>Edytuj</a>]</h3>   
        <p>
            <strong>Kod pracownika:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["employee_code"];?>
 
        </p>
        <p>
            <strong>Login:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["login"];?>
 <br/>             
            <strong>Hasło:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["password"];?>
 <br/>
        </p>
        <p>
            <strong>Uprawnienia:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["role"];?>
 <br/>
            <strong>Stan konta:</strong> <?php ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["active"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>Aktywne<?php } else { ?>Wyłączone<?php }?> <br/>
        </p>

    </section> 

    <section style="padding-top: 1em; padding-bottom: 1em">

        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeList'),$_smarty_tpl ) );?>
" class="button primary">Powrót</a>

    </section> 
<?php
}
}
/* {/block "content"} */
}
