<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:30:18
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\templates\Borrowed_borrowedReturn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60abaa6a9848e8_98641405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b18c913b1a191e5489e0594d14546feb7ee5d9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\templates\\Borrowed_borrowedReturn.tpl',
      1 => 1621862998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60abaa6a9848e8_98641405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122084399260abaa6a979cd5_55247298', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_122084399260abaa6a979cd5_55247298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122084399260abaa6a979cd5_55247298',
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
