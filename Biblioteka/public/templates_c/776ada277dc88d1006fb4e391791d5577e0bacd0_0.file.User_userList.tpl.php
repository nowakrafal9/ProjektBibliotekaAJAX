<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-28 10:18:48
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\User_userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b0a768c48b26_68740384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '776ada277dc88d1006fb4e391791d5577e0bacd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\User_userList.tpl',
      1 => 1622189925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0a768c48b26_68740384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181146384960b0a768c45746_56108767', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_181146384960b0a768c45746_56108767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181146384960b0a768c45746_56108767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
">

            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="login" id="login" value="" placeholder="Login" />
                </div>	
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="name" id="name" value="" placeholder="Imię" />
                </div>						
                <div class="col-3 col-3-xsmall">
                    <input type="text" name="surname" id="surname" value="" placeholder="Nazwisko" />
                </div>    						
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
        </form> 
        <p>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'UserAdd'),$_smarty_tpl ) );?>
" class="button primary icon solid fa-plus">Dodaj czytelnika</a>
        </p>

    </section>

    <section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

                    <table class="alt">
                <thead>
                    <tr>
                        <th style="width: 20%">Login</th>
                        <th style="width: 35%">Imię</th>
                        <th style="width: 35%">Nazwisko</th>  
                        <th style="width: 10%"> </th>
                    </tr>
                </thead>

                <tbody>
                                            <tr>
                            <td style="width: 20%"></td> 
                            <td style="width: 35%"></td>
                            <td style="width: 35%"></td>      
                            <td style="width: 10%" ><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'UserInfo'),$_smarty_tpl ) );?>
" class="button small">Informacje</a></center></td>  
                        </tr>
                                    </tbody>
            </table>
                    <h4>Brak szukanych pracowników.</h4>
        
    </section>
        
<?php
}
}
/* {/block "content"} */
}
