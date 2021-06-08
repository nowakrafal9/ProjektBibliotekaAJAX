<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-04 00:12:15
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Employee_employeeList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b953bf473d05_32515706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7832cc45d3a195c151eabc1eb5e2eb45597d259' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Employee_employeeList.tpl',
      1 => 1622758333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b953bf473d05_32515706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124337364360b953bf45cd07_13288852', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block "content"} */
class Block_124337364360b953bf45cd07_13288852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_124337364360b953bf45cd07_13288852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style = "padding-top: 1em; padding-bottom: 0;">

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeList'),$_smarty_tpl ) );?>
">

            <div class="row gtr-uniform" style="padding-bottom:0.75em">
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" placeholder="Login" />
                </div>	
                <div class="col-3 col-5-xsmal">
                    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->name;?>
" placeholder="Imię" />
                </div>						
                <div class="col-3 col-3-xsmall">
                    <input type="text" name="surname" id="surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" placeholder="Nazwisko" />
                </div>    						
            </div>

            <input type="submit" value="Szukaj" class="primary">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeList'),$_smarty_tpl ) );?>
" class="button">Wyczyść filtr</a>
        </form> 
        <p>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeAdd'),$_smarty_tpl ) );?>
" class="button primary icon solid fa-plus">Dodaj pracownika</a>
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
                        <th style="width: 20%">Login</th>
                        <th style="width: 35%">Imię</th>
                        <th style="width: 35%">Nazwisko</th>  
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
                    <?php if ($_smarty_tpl->tpl_vars['r']->value["active"] == 1) {?><tr><?php } else { ?><tr style="color: red"><?php }?><td style="width: 20%"><?php echo $_smarty_tpl->tpl_vars['r']->value["login"];?>
</td><td style="width: 35%"><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
</td><td style="width: 35%"><?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
</td><td style="width: 10%" ><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value["id_employee"];?>
" class="button small">Informacje</a></center></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
                
            <form method="post">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->login;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                <input type="hidden" name="login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->name;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->name;?>
">
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>
                <input type="hidden" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
">
            <?php }?>

            <center>
                <button class="primary" formaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeList",'p'=>1),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 1) {?>disabled<?php }?>> &lt;&lt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeList",'p'=>$_prefixVariable6),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 0) {?>disabled<?php }?>> &lt; </button>
                <span style="margin:5%">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value-1;?>
</span>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeList",'p'=>$_prefixVariable8),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable9 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable9 == $_prefixVariable10) {?>disabled<?php }?>> &gt; </button>
                <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable11 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"employeeList",'p'=>$_prefixVariable11),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable12 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable12 == $_prefixVariable13) {?>disabled<?php }?>> &gt;&gt; </button>
            </center>
            </form>
        <?php } else { ?>
            <h4>Nie znaleziono szukanych pracowników.</h4>
        <?php }?>

    </section>
            
<?php
}
}
/* {/block "content"} */
}
