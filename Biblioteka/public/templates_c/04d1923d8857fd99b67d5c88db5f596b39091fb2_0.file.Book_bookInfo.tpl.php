<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-24 15:15:32
  from 'D:\xampp\htdocs\pliki\ProjektBiblioteka\Biblioteka\app\views\Book_bookInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aba6f44a7fb2_68317029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d1923d8857fd99b67d5c88db5f596b39091fb2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBiblioteka\\Biblioteka\\app\\views\\Book_bookInfo.tpl',
      1 => 1621861909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aba6f44a7fb2_68317029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165686037360aba6f449f612_17763763', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_165686037360aba6f449f612_17763763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165686037360aba6f449f612_17763763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">

        <h3 class="content"><?php echo $_smarty_tpl->tpl_vars['book']->value["title"];?>
</h3>   
        <p>
            <strong>Kod tytułu:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["book_code"];?>

        </p>
        <p>
            <strong>Autor:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value["surname"];?>
 <br/>             
            <strong>Wydawnictwo:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["publisher"];?>
 <br/>
            <strong>Gatunek:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["genre"];?>
 <br/>
            <strong>Ilość stron:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["pages"];?>
 <br/>
        </p>
        <p>
            <strong>Ilość egzemplarzy:</strong> <?php echo $_smarty_tpl->tpl_vars['allBooks']->value;?>
<br/>
            <strong>Wypożyczone:</strong> <?php echo $_smarty_tpl->tpl_vars['borrowedBooks']->value;?>
<br/>
            <strong>W bibliotece:</strong> <?php ob_start();
echo $_smarty_tpl->tpl_vars['allBooks']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['borrowedBooks']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable1-$_prefixVariable2;?>
<br/>
        </p>

    </section> 

    <section style="padding-top: 1em; padding-bottom: 1em">

        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
" class="button primary">Powrót</a>

    </section> 

<?php
}
}
/* {/block 'content'} */
}
