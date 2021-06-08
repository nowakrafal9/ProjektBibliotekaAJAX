<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 14:52:32
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Employee_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b77f10402741_23482943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c45ac2e67d4c015f1d278290dddd4975b2d60617' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Employee_edit.tpl',
      1 => 1622638346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60b77f10402741_23482943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163007764060b77f103f0b56_75496910', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_163007764060b77f103f0b56_75496910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_163007764060b77f103f0b56_75496910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <div class="row">                    
            <div class="col-6 col-12-small">
                <h3>Edycja/dodanie pracownika</h3> 

                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeSave"),$_smarty_tpl ) );?>
" method="post">
                    <div class="row gtr-uniform">
                        <div class="col-5 col-12-xsmall">
                            <strong>Imię:</strong>
                            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" placeholder="Imię">
                        </div>

                        <div class="col-5 col-12-xsmall">
                            <strong>Nazwisko:</strong>
                            <input type="text" name="surname" id="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" placeholder="Nazwisko">
                        </div>
                        
                        <div class="col-5 col-12-xsmall">
                            <strong>Kod pracownika:</strong>
                            <input type="text" name="employee_code" id="employee_code" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->employee_code;?>
" placeholder="Kod pracownika">
                        </div>
                        <div class="col-7 col-12-xsmall"> </div>
                        
                        <div class="col-5 col-12-xsmall">
                            <strong>Login:</strong>
                            <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Login">
                        </div>
                        
                        <div class="col-5 col-12-xsmall">
                            <strong>Hasło:</strong>
                            <input type="text" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" placeholder="Hasło">
                        </div>
                        
                        <div class="col-5 col-12-small">
                            <strong>Rola:</strong>
                            <select name="role" id="role">
                                <option value="Pracownik" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->role)) && $_smarty_tpl->tpl_vars['form']->value->role == "Pracownik") {?>selected<?php }?>>Pracownik</option>
                                <option value="Administrator" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->role)) && $_smarty_tpl->tpl_vars['form']->value->role == "Administrator") {?>selected<?php }?>>Administrator</option>
                            </select>
                        </div>
                        
                        <div class="col-12 col-12-small">
                                <input type="checkbox" id="active" name="active" value="1" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->active)) && $_smarty_tpl->tpl_vars['form']->value->active == 1) {?>checked<?php }?>>
                                <label for="active">Konto aktywne</label>
                        </div>
                            
                        <div class="col-12">
                            <input type="submit" value="Zapisz" class="primary">
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "employeeEdit") {?>   
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->id_employee;?>
" class="button">Powrót</a>
                            <?php } else { ?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeList'),$_smarty_tpl ) );?>
" class="button">Powrót</a>
                            <?php }?>
                        </div>                     
                    </div>  
                    <input type="hidden" name="id_employee" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_employee;?>
">
                </form>
            </div>                         
        </div>
                
    </section>
                            
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    </section>
        
<?php
}
}
/* {/block 'content'} */
}
