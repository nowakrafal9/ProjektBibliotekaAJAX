<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 11:13:53
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\ReaderAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf34d140e797_26898337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5276e6ee5b6a4f81e3313846ac3057621cfb458d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\ReaderAdd.tpl',
      1 => 1623143629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60bf34d140e797_26898337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74886751760bf34d1405335_19686931', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_74886751760bf34d1405335_19686931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74886751760bf34d1405335_19686931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">
        
        <div class="row">                    
            <div class="col-6 col-12-small">
                <h3>Dodanie czytelnika</h3>
                 
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerSave"),$_smarty_tpl ) );?>
" method="post">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <strong>Imię:</strong>
                            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" placeholder="Imię" required>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <strong>Nazwisko:</strong>
                            <input type="text" name="surname" id="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" placeholder="Nazwisko" required>
                        </div>
                        
                        <div class="col-8 col-12-xsmall">
                            <strong>Miasto:</strong>
                            <input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->city;?>
" placeholder="Miasto" required>
                        </div>
                        
                        <div class="col-4 col-12-xsmall">
                            <strong>Kod pocztowy:</strong>
                            <input type="text" name="postalCode" id="postalCode" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->postalCode;?>
" placeholder="Kod pocztowy" required>
                        </div>
                        
                        <div class="col-12 col-12-xsmall">
                            <strong>Adres zamieszkania:</strong>
                            <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
" placeholder="Adres zamieszkania" required>
                        </div>
                        
                        <div class="col-4 col-12-xsmall">
                            <strong>Numer telefonu:</strong>
                            <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phoneNumber;?>
" placeholder="Numer telefonu" required>
                        </div>
                        
                        <div class="col-8 col-12-xsmall">
                            <strong>E-mail:</strong>
                            <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" placeholder="Email (niewymagane)">
                        </div>
                        
                        <div class="col-12">
                            <input type="submit" value="Zapisz" class="primary">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
" class="button">Powrót</a>
                        </div>  
                    </div>  
                    <input type="hidden" name="return" value="ReaderAdd">
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
