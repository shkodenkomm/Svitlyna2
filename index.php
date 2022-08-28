<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/head_links.php";
    include "parts/main_menu.php";
    include "parts/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];
  ?>
    <title>Cімейний фотограф</title>
    <meta name="description" 
          content="Привабливі ціни для фотосесії ф студії або вашій локації.
                  Дитяча, сімейная, персональна, фотосесія вагітності, Love Story, таїнство вінчання і хрещення, репортаж. 
                  Послуги: фоиозьйомка, фотокнижка, подарунковий сертифікат, допомога у створенні образу">

  <link rel="stylesheet" href="/css/slide_show_main.css">

</head>

<body>
    <?php  include "parts/fbMsgPlugin.php"   ?>
    <header class ="row">
        <div class="col-2 col-s-0 col-m-0" ><p></p></div>
        <div class="col-8 col-s-12">
            <div class="main_logo">
                <?php 
                    $menu= new MainMenu();
                    $menu->doit();                    
                ?>
            </div>
         </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </header>
    <main>
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <!-- карусель -->
            <div class="col-8 col-s-12" >
             <?php
                 include  "parts/main_karusel.php";
             ?>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12">
               <section>
                    <?php include "aboutMe.php" ?>
                </section>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12">
                <h1>Послуги фотографа в Києві</h1>
                <section>
                    <?php
                    include "parts/objects/CommonCart.php";
                    insertCarts(); ?>
                </section>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>

        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12">
                <h1>Як вибрати фотографа у Києві?</h1>
                <section>
                    <?php include "content/howSelectPhotograph.php"  ?>
                </section>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>

    </main>
    <script src="/js/slide.js"></script>
</body>
</html>











































