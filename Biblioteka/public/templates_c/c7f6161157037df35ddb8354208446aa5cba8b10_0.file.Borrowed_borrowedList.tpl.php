<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-04 00:11:35
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Borrowed_borrowedList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b95397077e83_24867396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f6161157037df35ddb8354208446aa5cba8b10' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Borrowed_borrowedList.tpl',
      1 => 1622758253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b95397077e83_24867396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125812667960b9539705d6f2_06039534', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_125812667960b9539705d6f2_06039534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125812667960b9539705d6f2_06039534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
">

            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="id_book" id="id_book" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_book;?>
" placeholder="Kod książki" />
                </div>	

                <div class="col-3 col-5-xsmal">
                    <input type="text" name="id_reader" id="id_reader" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_reader;?>
" placeholder="Kod czytelnika" />
                </div>	

                <div class="col-3">
                    <select name="status" id="status">
                        <option value="" selected disabled hidden>Status</option>
                        <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['searchForm']->value->status)) && $_smarty_tpl->tpl_vars['searchForm']->value->status == 0) {?>selected<?php }?>>Po terminie</option>
                        <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['searchForm']->value->status)) && $_smarty_tpl->tpl_vars['searchForm']->value->status == 1) {?>selected<?php }?>>W terminie</option>
                    </select>
                </div>   	
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
        </form>    

        <p>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookBorrow'),$_smarty_tpl ) );?>
" class="button primary icon solid fa-plus">Wypożycz książkę</a>
        </p>

    </section>

    <section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?>
            <table class="alt">
                <thead>
                    <tr>
                        <th style="width: 10%">Kod książki</th>
                        <th style="width: 10%">Kod czytelnika</th>  
                        <th style="width: 15%">Data wypożyczenia</th> 
                        <th style="width: 15%">Data oddania</th>  
                        <th style="width: 10%"> </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
</td><td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_borrower"];?>
</td><td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['r']->value["borrow_date"];?>
</td><?php ob_start();
echo $_smarty_tpl->tpl_vars['dateToday']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['r']->value["return_date"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable2 > $_prefixVariable3) {?><td style="width: 15%; background-color: #f56a6a;"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value["return_date"];?>
</strong></td><?php } else { ?><td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['r']->value["return_date"];?>
</td><?php }?><td style="width: 10%"><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedReturn'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_book"];?>
" class="button small">Oddaj</a></center></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
                
            <form method="post">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->id_book;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>
                <input type="hidden" name="id_book" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_book;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->id_reader;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5) {?>
                <input type="hidden" name="id_reader" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_reader;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->status;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6) {?>
                <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->status;?>
">
            <?php }?>

            <center>
                <button class="primary" formaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"borrowedList",'p'=>1),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 1) {?>disabled<?php }?>> &lt;&lt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"borrowedList",'p'=>$_prefixVariable8),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == 0) {?>disabled<?php }?>> &lt; </button>
                <span style="margin:5%">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value-1;?>
</span>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable10 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"borrowedList",'p'=>$_prefixVariable10),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable11 == $_prefixVariable12) {?>disabled<?php }?>> &gt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable13 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"borrowedList",'p'=>$_prefixVariable13),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable14 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable14 == $_prefixVariable15) {?>disabled<?php }?>> &gt;&gt; </button>

            </center>
            </form>
            
        <?php } else { ?>
            <h4>Nie znaleziono szukanych wypożyczonych książek.</h4>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block 'content'} */
}
