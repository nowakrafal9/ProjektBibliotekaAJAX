<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 10:11:00
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf26148a03a5_71242553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e773eb9943d8469c6eb471c460d6d3ccf8d59a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\LoginView.tpl',
      1 => 1623135093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60bf26148a03a5_71242553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9645736860bf261489bda9_41353102', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "login_template.tpl");
}
/* {block 'content'} */
class Block_9645736860bf261489bda9_41353102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9645736860bf261489bda9_41353102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <h3>Zaloguj się aby kontynuować:</h3>
        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
">
            
            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="login" id="login" value="" placeholder="Login" />
                </div>						
            </div>          
            
            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                    <div class="col-3 col-3-xsmall">
                        <input type="password" name="pass" id="pass" value="" placeholder="Password" />
                    </div>    						
            </div>
            
            <input type="submit" value="Zaloguj się" class="primary"">
        </form>  
        
        <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
<?php
}
}
/* {/block 'content'} */
}
