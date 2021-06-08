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
        <link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
        <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
    </head>
    <body class="is-preload">
        
        <!-- Wrapper -->
        <div id="wrapper">
            
            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <header id="header">
                        <a href="{url action = 'main'}" class="logo"><strong>Projekt Biblioteka, JPDSI/PBDAW</strong></a>
                        Zalogowany użytkownik: {$user->login}
                    </header>
                    {block name = "content"} Domyślna treść strony {/block}                 
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
                            <li><a href="{url action = 'main'}">Strona główna</a></li>
                            {if {$user->role}=="Pracownik"}
                            <li><a href="{url action = 'readerList'}">Lista czytelników</a></li>
                            {else}
                            <li>
                                <span class="opener">Lista czytelników</span>
                                <ul>
                                    <li><a href="{url action = 'readerList'}">Lista czytelników</a></li>
                                    <li><a href="{url action = 'readerAdd'}">Dodaj czytelnika</a></li>
                                </ul>
                            </li> 
                            {/if}
                            <li><a href="{url action = 'bookList'}">Informacje o książce</a></li>
                            <li>
                                <span class="opener">Wypożyczone książki</span>
                                <ul>
                                    <li><a href="{url action = 'borrowedList'}">Lista wypożyczonych książek</a></li>
                                    <li><a href="{url action = 'bookBorrow'}">Wypożycz książke</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="opener">Lista książek</span>
                                <ul>
                                    <li><a href="{url action = 'bookStock'}">Lista książek</a></li>
                                    <li><a href="{url action = 'bookAdd'}">Dodaj książkę</a></li>
                                </ul>
                            </li> 
                            {if {$user->role}=="Administrator"}
                            <li>
                                <span class="opener">Konta pracowników</span>
                                <ul>
                                    <li><a href="{url action = 'employeeList'}">Lista pracowników</a></li>
                                    <li><a href="{url action = 'employeeAdd'}">Dodaj pracownika</a></li>
                                </ul>
                            </li> 
                            {/if}
                        </ul>
                    </nav>
                           
                    <nav id="menu">
                        <ul>
                            <li><a href="{url action = 'logout'}">Wyloguj</a></li>
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
        <script src="{$conf->app_url}/js/jquery.min.js"></script>
        <script src="{$conf->app_url}/js/browser.min.js"></script>
        <script src="{$conf->app_url}/js/breakpoints.min.js"></script>
        <script src="{$conf->app_url}/js/util.js"></script>
        <script src="{$conf->app_url}/js/main.js"></script>
    </body>
</html>