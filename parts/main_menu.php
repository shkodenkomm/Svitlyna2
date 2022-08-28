<?php

class MainMenu{


    private $menu_html;
    private $logo_container;
    private $nav_container;
    private $style;

    function __construct()
    {
        $this->style[] = '<link rel="stylesheet" href="/css/top_nav.css">';
        $this->style[] = '<link rel="stylesheet" href="/css/drop_down.css">';

        $this->logo_container =
            '<div class="logo_container">
                <span class="photoname">ОЛЕНА ХОМЕНКО</span>
                <span class="palochka">&nbsp;&nbsp;|</span>
                <span>&nbsp;&nbsp;Фотограф Київ</span>
            </div>';

        $this->nav_container =
             '<div class=nav_container>  
                <nav class="topnav">  
                    <a class="nav-link" href="/">Головна</a>
                    <span>/</span>
                    <div class="dropdown" id="menu1">
                        <a class="dropbtn nav-link" href="#" onclick="toogleMenu(\'menu1\')">Портфоліо</a>
                        <div class="dropdown-content">
                            <a href="/gals/personal.php">Персональна фотосесія</a>
                            <a href="/gals/children.php">Дитяча фотосесія</a>
                            <a href="/gals/family.php">Сімейна фотосесія</a>
                            <a href="/gals/series/natasha_sasha.php">Фотосесія вагітності</a>
                            <a href="/gals/series/love_story.php">Love story</a>
                            <a href="/gals/photo_walk_with_horses.php">Фотосія з кіньми</a>
                            <a href="/gals/series/mother_doter.php">Фотосесія мама и дочка</a>
                            <a href="/gals/crist.php">Зйомка хрещення</a>
                            
                        </div>
                    </div>
                    <span>/</span>
                    <a class="nav-link" href="/series.php">Серії</a>
                    <span>/</span>
                    <a class="nav-link" href="/contacts.php">Контакти</a>
                </nav>
             </div>';
    }

    function doit(){

        $this->menu_html = $this->style[0].$this->style[1].$this->logo_container.$this->nav_container;


        echo $this->menu_html;
    }
}

?>
