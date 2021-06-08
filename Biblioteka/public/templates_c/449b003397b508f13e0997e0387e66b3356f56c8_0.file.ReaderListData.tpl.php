<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 09:43:40
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\ReaderListData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf1fac08c181_26640973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449b003397b508f13e0997e0387e66b3356f56c8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\ReaderListData.tpl',
      1 => 1623138217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf1fac08c181_26640973 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="table-wrapper" style = "padding-top: 1em; padding-bottom: 1em">

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 0) {?>
        <table class="alt">
            <thead>
                <tr>
                    <th style="width: 10%">Id czytelnika</th>
                    <th style="width: 40%">Nazwisko</th>
                    <th style="width: 40%">Imię</th>  
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
                <tr><td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['r']->value["id_borrower"];?>
</td><td style="width: 40%"><?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
</td><td style="width: 40%"><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
</td><td style="width: 10%" ><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_borrower'];?>
" class="button small">Informacje</a></center></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

        <form method="post">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->id_reader;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                <input type="hidden" name="id_reader" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_reader;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->name;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>
                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->name;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5) {?>
                <input type="hidden" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
">
            <?php }?>

            <center>
                <button class="primary" formaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerList",'p'=>1),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 1) {?>disabled<?php }?>> &lt;&lt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerList",'p'=>$_prefixVariable7),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 0) {?>disabled<?php }?>> &lt; </button>
                <span style="margin:5%">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value-1;?>
</span>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerList",'p'=>$_prefixVariable9),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable10 == $_prefixVariable11) {?>disabled<?php }?>> &gt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable12 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"readerList",'p'=>$_prefixVariable12),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable13 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable13 == $_prefixVariable14) {?>disabled<?php }?>> &gt;&gt; </button>
            </center>
        </form>
    <?php } else { ?>
        <h4>Brak znalezionych czytelników.</h4>
    <?php }?>

</section>
<?php }
}
