<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 09:44:35
  from 'D:\xampp\htdocs\pliki\ProjektBibliotekaAJAX\Biblioteka\app\views\templates\main_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf1fe3469df3_12058381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0f2b35cf1c2a2afabc05129cd48c77e0990bae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\ProjektBibliotekaAJAX\\Biblioteka\\app\\views\\templates\\main_template.tpl',
      1 => 1623138262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf1fe3469df3_12058381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Bibliotekos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
    </head>
    <body class="is-preload">
        
        <!-- Wrapper -->
        <div id="wrapper">
            
            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <header id="header">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'main'),$_smarty_tpl ) );?>
" class="logo"><strong>Projekt Biblioteka, JPDSI/PBDAW</strong></a>
                        Zalogowany użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>

                    </header>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152503947860bf1fe345fd10_74696151', "content");
?>
                 
                </div>
            </div>
                
            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">
                    <!-- Menu -->          
                    <nav id="menu">
                        <header class="major">
                                <h2>Menu</h2>
                        </header>
                        <ul>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'main'),$_smarty_tpl ) );?>
">Strona główna</a></li>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->role;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "Pracownik") {?>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
">Lista czytelników</a></li>
                            <?php } else { ?>
                            <li>
                                <span class="opener">Lista czytelników</span>
                                <ul>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerList'),$_smarty_tpl ) );?>
">Lista czytelników</a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'readerAdd'),$_smarty_tpl ) );?>
">Dodaj czytelnika</a></li>
                                </ul>
                            </li> 
                            <?php }?>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
">Informacje o książce</a></li>
                            <li>
                                <span class="opener">Wypożyczone książki</span>
                                <ul>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowedList'),$_smarty_tpl ) );?>
">Lista wypożyczonych książek</a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookBorrow'),$_smarty_tpl ) );?>
">Wypożycz książke</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="opener">Lista książek</span>
                                <ul>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookStock'),$_smarty_tpl ) );?>
">Lista książek</a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookAdd'),$_smarty_tpl ) );?>
">Dodaj książkę</a></li>
                                </ul>
                            </li> 
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->role;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "Administrator") {?>
                            <li>
                                <span class="opener">Konta pracowników</span>
                                <ul>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeList'),$_smarty_tpl ) );?>
">Lista pracowników</a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'employeeAdd'),$_smarty_tpl ) );?>
">Dodaj pracownika</a></li>
                                </ul>
                            </li> 
                            <?php }?>
                        </ul>
                    </nav>
                           
                    <nav id="menu">
                        <ul>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
">Wyloguj</a></li>
                        </ul>
                    </nav>
                        
                    <!-- Footer -->
                    <footer id="footer">
                        <p class="copyright">Projekt wykonany przy użycia szablonu <a href="https://html5up.net/editorial">Editorial</a>. Wykonał: Rafał Nowak, PAW1</p>
                    </footer>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block "content"} */
class Block_152503947860bf1fe345fd10_74696151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152503947860bf1fe345fd10_74696151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść strony <?php
}
}
/* {/block "content"} */
}
