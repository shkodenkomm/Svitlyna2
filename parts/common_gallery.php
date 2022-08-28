<!DOCTYPE html>
<html>
<head>
    <?php
    error_reporting(E_ERROR);
    ini_set('display_errors', 1);

    include "head_links.php";
    $menu = new MainMenu();
    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];
    ?>

    <title><?php echo $gl->pageTitle ?></title>

    <link rel="stylesheet" href="/css/track_gal.css">
</head>
<body>
<?php  echo $config->gtm["gtm_body"]; ?>
<header class ="row">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12">
        <div class="main_logo">
            <?php   $menu->doit();  ?>
        </div>
    </div>
    <div class="col-1 col-s-0 col-m-0"><p></p></div>
</header>
<section class="row first-row">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12" >
        <?php
            $gl->CallText();
        ?>
    </div>
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
</section>
<section class="row root_img">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12" >

        <!-- The Modal -->
        <?php echo $gl->modalImageView() ?>

        <div class="row_gal desctop" >
            <?php $gl->renderForDesctop() ?>
        </div>

        <div class="row_gal tablet" >
            <?php $gl->renderForTablet() ?>
        </div>

        <div class="row_gal mobile" >
            <?php $gl->renderForMobile() ?>
        </div>
    </div>
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
</section>
<script src="/js/img_modal.js"></script>
</body>
</html>
