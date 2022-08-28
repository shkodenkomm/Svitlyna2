<!DOCTYPE html>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../parts/head_links.php";
    include "../parts/main_menu.php";
    include "../parts/config.php";
    include "../parts/objects/GalleryTextProducer.php";
?>
<html lang="ru">
<head>
  <title>Таинство крещения</title>

  <?php
        echo $config->gtm["gan_head"];
        echo $config->gtm["gtm_head"];
  ?>

  <link rel="stylesheet" href="/css/track_gal.css">

</head>
<body>
   <?php  echo $config->gtm["gtm_body"]; ?> 
   <header class ="row">
        <div class="col-1 col-s-0 col-m-0" ><p></p></div>
        <div class="col-10 col-s-12">
            <div class="main_logo">
                <?php 
                    $menu= new MainMenu();
                    $menu->doit();                    
                ?>
            </div>
         </div>
        <div class="col-1 col-s-0 col-m-0"><p></p></div>
    </header>
   <section class="row first-row">
       <div class="col-1 col-s-0 col-m-0" ><p></p></div>
       <div class="col-10 col-s-12" >
           <?php
           CristText();
           ?>
       </div>
       <div class="col-1 col-s-0 col-m-0" ><p></p></div>
   </section>
  <section class="row root_img">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12" >

      <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Next and previous buttons -->
            <div class="arrow prev" onclick="plusSlides(-1)">
                <a>&#10094;</a>
            </div>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
            <div class="arrow next" onclick="plusSlides(1)">
                <a>&#10095;</a>
            </div>
        </div>

      <div class="row_gal desctop" >
        <div class="column-v4" id="f1">
          <img class="preview" src="/imgs/gals/crist/preview/1_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/5_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/9_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/13_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/17_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/21_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/29_a_hq.jpg">


        </div>
        <div class="column-v4" id="f2">
            <img class="preview" src="/imgs/gals/crist/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/10_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/14_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/18_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/22_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/26_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/30_a_hq.jpg">


        </div>
        <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/gals/crist/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/23_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/27_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/28_a_hq.jpg">
        </div>
          <div class="column-v4" id= "f4">
              <img class="preview" src="/imgs/gals/crist/preview/4_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/8_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/12_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/16_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/20_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/24_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/25_a_hq.jpg">
          </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
            <img class="preview" src="/imgs/gals/crist/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/9_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/13_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/17_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/21_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/23_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/25_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/27_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/28_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/30_a_hq.jpg">

        </div>
          <div class="column-v2" id="t2">
              <img class="preview" src="/imgs/gals/crist/preview/2_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/4_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/6_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/8_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/10_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/12_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/14_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/16_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/18_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/20_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/22_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/24_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/26_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/29_a_hq.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 

        </div>
      </div>
    </div>  
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
