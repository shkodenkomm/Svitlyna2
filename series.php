<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "parts/head_links.php";
    include "parts/main_menu.php";
    include "parts/config.php";

    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];

    function makeTile($seria_link, $title, $img_link){
        echo '
        <div class="seria col-6">
                    <div class="seria_caption col-12">
                        <a href="gals/series/'.$seria_link.'">'.$title.'</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/'.$seria_link.'">
                            <img src="/imgs/series/tiles/'.$img_link.'">
                        </a>
                    </div>
                </div>
         ';
    }
    ?>

    <title>Серии</title>
    <link rel="stylesheet" href="/css/series.css">

</head>

<body>
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
    <section>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <div class="col-8 col-s-8">
            <section id="tiles">


            <?php
                      makeTile("ny_katya.php", "Новогодняя сказка", "ng_kazka.jpg");
                makeTile("ng_avto.php", "Машина деда Мороза", "ng_avto.jpg");
            makeTile("ny_tania.php", "Новогодняя история", "ng_story.jpg");
            makeTile("ng_zoia.php", "Новогоднее волшебство", "ng_zoya.jpg");
            makeTile("ny_yulia_nelia.php", "А снег идет, а снег идет!", "sneg.jpg");
      
                makeTile("pinup.php", "Pin-up история", "pinup.jpg");
                makeTile("oksana_mega.php", "Семейная прогулка в Межигорье", "oksana_lam.jpg");
      
                makeTile("stasik_sci.php", "Стасик-ученый", "stasik.jpg");
                makeTile("slavutych_katya.php", "Однажды туманным утром", "morning.jpg");
                makeTile("natasha_sasha.php", "Наташа и Саша в ожидании чуда", "wait_chudo.jpg");

            ?>


<!---->
<!--                <div class="seria col-6 middle_pad" id="tile3">-->
<!--                    <div class="seria_caption col-12">-->
<!--                        <a href="gals/series/.php"></a>-->
<!--                    </div>-->
<!--                    <div class="tile_img col-12">-->
<!--                        <a href="/gals/series/oksana_mega.php" >-->
<!--                            <img src="/imgs/series/oksana_mega/OksanaJam_Mejigore.jpg">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->

            </section>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section>
</main>
</body>
</html>
