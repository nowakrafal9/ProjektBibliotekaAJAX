<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-03 19:40:04
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Reader_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b913f492cd50_25675310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43950126bbbd78f8e91980d9055a9e79b71ec79c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Reader_edit.tpl',
      1 => 1622742002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60b913f492cd50_25675310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199226165160b913f491f345_15550761', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_199226165160b913f491f345_15550761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_199226165160b913f491f345_15550761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <div class="row">                    
            <div class="col-6 col-12-small">
                <h3>Edycja/dodanie czytelnika</h3>
                 
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerSave"),$_smarty_tpl ) );?>
" method="post">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <strong>Imię:</strong>
                            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" placeholder="Imię">
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <strong>Nazwisko:</strong>
                            <input type="text" name="surname" id="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" placeholder="Nazwisko">
                        </div>
                        
                        <div class="col-8 col-12-xsmall">
                            <strong>Miasto:</strong>
                            <input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->city;?>
" placeholder="Miasto">
                        </div>
                        
                        <div class="col-4 col-12-xsmall">
                            <strong>Kod pocztowy:</strong>
                            <input type="text" name="postalCode" id="postalCode" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->postalCode;?>
" placeholder="Kod pocztowy">
                        </div>
                        
                        <div class="col-12 col-12-xsmall">
                            <strong>Adres zamieszkania:</strong>
                            <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
" placeholder="Adres zamieszkania">
                        </div>
                        
                        <div class="col-4 col-12-xsmall">
                            <strong>Numer telefonu:</strong>
                            <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phoneNumber;?>
" placeholder="Numer telefonu">
                        </div>
                        
                        <div class="col-8 col-12-xsmall">
                            <strong>E-mail:</strong>
                            <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" placeholder="Email (niewymagane)">
                        </div>
                        
                        <div class="col-12">
                            <input type="submit" value="Zapisz" class="primary">
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageMode']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "readerEdit") {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->id_borrower;?>
" class="button">Powrót</a>
                            <?php } else { ?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
" class="button">Powrót</a>
                            <?php }?>
                        </div>  
                    </div>  
                    <input type="hidden" name="id_borrower" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_borrower;?>
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
