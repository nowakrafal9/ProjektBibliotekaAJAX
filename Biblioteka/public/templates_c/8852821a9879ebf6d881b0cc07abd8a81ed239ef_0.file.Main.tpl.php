<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 10:12:11
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf265bc32981_51248458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8852821a9879ebf6d881b0cc07abd8a81ed239ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\Main.tpl',
      1 => 1623139929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf265bc32981_51248458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23857457860bf265bc2afc5_08889689', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.tpl");
}
/* {block 'content'} */
class Block_23857457860bf265bc2afc5_08889689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_23857457860bf265bc2afc5_08889689',
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
