<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:10:27
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\templates\Reader_readerInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba5c32ca055_94642362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84807019c6336b737f884ab22f4de16cf4b75b24' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\templates\\Reader_readerInfo.tpl',
      1 => 1621861684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aba5c32ca055_94642362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8558652560aba5c32b6a84_96787733', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_8558652560aba5c32b6a84_96787733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8558652560aba5c32b6a84_96787733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">    

        <h3><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
, <?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->role;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "Administrator") {?> [<a href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerEdit"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_borrower"];?>
' style='color:#9a9a9a'>Edytuj</a>] <?php }?></h3> 
        <div class="row">       
            <div class="col-6 col-12-small">
                <h3>Dane kontaktowe: </h3>
                <p>
                    <strong>Miasto:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["city"];?>
 <br/> 
                    <strong>Adres:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["address"];?>
 <br/>
                    <strong>Kod pocztowy:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["postal_code"];?>
 <br/>      
                </p>
                <p>
                    <strong>Telefon:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value["phone_number"];?>
 <br/>             
                    <strong>Email:</strong> <?php ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["email"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == '') {?>Brak<?php } else {
echo $_smarty_tpl->tpl_vars['r']->value["email"];
}?> <br/>
                </p>
            </div>

            <div class="col-6 col-12-small">
                <h3>Wypożyczone książki:</h3>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 > 0) {?>
                    <table class="alt">
                        <thead>
                            <tr>
                                <th style="width: 20%">Kod książki</th>
                                <th style="width: 60%">Tytuł</th>
                                <th style="width: 20%">Data zwrotu</th>       
                            </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                            <tr><td style="width: 20%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
</td><td style="width: 60%"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</td><?php ob_start();
echo $_smarty_tpl->tpl_vars['dateToday']->value;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["return_date"];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable4 > $_prefixVariable5) {?><td style="width: 20%; background-color: #f56a6a;"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value["return_date"];?>
</strong></td><?php } else { ?><td style="width: 20%"><?php echo $_smarty_tpl->tpl_vars['r']->value["return_date"];?>
</td><?php }?></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <h4>Brak wypożyczonych książek</h4>
                <?php }?>                  
            </div>
        </div>

    </section>

    <section style="padding-top: 1em; padding-bottom: 1em">

        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
" class="button primary">Powrót</a>

    </section>
        
<?php
}
}
/* {/block "content"} */
}
