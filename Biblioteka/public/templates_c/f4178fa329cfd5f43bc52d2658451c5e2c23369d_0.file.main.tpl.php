<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 09:42:22
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf1f5e4963f8_78830147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4178fa329cfd5f43bc52d2658451c5e2c23369d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\main.tpl',
      1 => 1623135093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf1f5e4963f8_78830147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93704120460bf1f5e491bb9_02557592', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_93704120460bf1f5e491bb9_02557592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_93704120460bf1f5e491bb9_02557592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section style="padding-top: 3em;">
        <div class="features">
            <article onclick="location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
readerList'" onmouseover="this.style.backgroundColor='#F4F4F4'" onmouseout="this.style.backgroundColor=''" style = "cursor: pointer; ">
                <span class="icon solid fa-user-friends"></span>
                <div class="content">
                    <h3>Lista czytelników</h3>
                    <p>Sprawdź dane czytelników zarejestrowanych w bibliotece.</p>
                </div>
            </article>

            <article onclick="location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookList'" onmouseover="this.style.backgroundColor='#F4F4F4'" onmouseout="this.style.backgroundColor=''" style = "cursor: pointer; ">
                <span class="icon solid fa-book"></span>
                <div class="content">
                    <h3>Informacja o książkach</h3>
                    <p>Sprawdź informacje o szukanej książce.</p>
                </div>
            </article>

            <article onclick="location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
borrowedList'" onmouseover="this.style.backgroundColor='#F4F4F4'" onmouseout="this.style.backgroundColor=''" style = "cursor: pointer; ">
                <span class="icon solid fa-book-reader"></span>
                <div class="content">
                    <h3>Wypożyczone książki</h3>
                    <p>Sprawdź wypożyczone książki oraz terminy ich oddania.</p>
                </div>
            </article>

            <article onclick="location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookStock'" onmouseover="this.style.backgroundColor='#F4F4F4'" onmouseout="this.style.backgroundColor=''" style = "cursor: pointer; ">
                <span class="icon solid fa-building"></span>
                <div class="content">
                    <h3>Lista książek</h3>
                    <p>Sprawdź liste książek będących własnością biblioteki.</p>
                </div>
            </article>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->role;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "Administrator") {?>
            <article onclick="location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
employeeList'" onmouseover="this.style.backgroundColor='#F4F4F4'" onmouseout="this.style.backgroundColor=''" style = "cursor: pointer; ">
                <span class="icon solid fa-user-edit"></span>
                <div class="content">
                    <h3>Zarządzaj kontami pracowników</h3>
                    <p>Edytuj, dodawaj, dezaktywuj konta pracowników.</p>
                </div>
            </article>
            <?php }?>
        </div>
    </section>    
<?php
}
}
/* {/block 'content'} */
}
