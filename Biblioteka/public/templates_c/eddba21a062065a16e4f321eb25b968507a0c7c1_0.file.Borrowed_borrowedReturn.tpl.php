<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 16:22:40
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Borrowed_borrowedReturn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afab30efaf10_76328722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eddba21a062065a16e4f321eb25b968507a0c7c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Borrowed_borrowedReturn.tpl',
      1 => 1621862998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60afab30efaf10_76328722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18376222960afab30eeb589_77017912', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_18376222960afab30eeb589_77017912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18376222960afab30eeb589_77017912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">

        <div class="row">
            <div class="col-6 col-12-small">
                <h3>Wypożyczona książka</h3>
                <strong>Kod książki:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["id_book"];?>
 <br/>
                <strong>Tytuł książki:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["title"];?>
 <br/>
                <strong>Data wypożyczenia:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["borrow_date"];?>
 <br/>
                <strong>Data oddania:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["return_date"];?>
 <br/>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['afterDeadline']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'no') {?>
                    <strong>Pozostały czas: </strong> <?php echo $_smarty_tpl->tpl_vars['timeLeft']->value;?>
<br/>
                <?php } else { ?>
                    <strong>Po terminie: </strong> <?php echo $_smarty_tpl->tpl_vars['timeLeft']->value;?>
<br/>
                <?php }?> 
            </div>

            <div class="col-6 col-12-small">
                <h3>Dane czytelnika</h3>
                <strong>Kod czytelnika:</strong> <?php echo $_smarty_tpl->tpl_vars['reader']->value["id_borrower"];?>
 <br/>
                <strong>Imie:</strong> <?php echo $_smarty_tpl->tpl_vars['reader']->value["name"];?>
 <br/>
                <strong>Nazwisko:</strong> <?php echo $_smarty_tpl->tpl_vars['reader']->value["surname"];?>
 <br/>
                <strong>Nr telefonu:</strong> <?php echo $_smarty_tpl->tpl_vars['reader']->value["phone_number"];?>
 <br/>
            </div>
        </div>

    </section>

    <section style="padding-top: 1em; padding-bottom: 1em">

        <h4>Czy na pewno chcesz zwrócić książkę?</h4>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookReturn'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['book']->value["id_book"];?>
" class="button primary small">Zwróć</a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
" class="button small">Powrót</a>

    </section>
        
<?php
}
}
/* {/block 'content'} */
}
