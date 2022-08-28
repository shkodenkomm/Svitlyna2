<!DOCTYPE html>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../../parts/main_menu.php";
    include "../../parts/config.php";
?>
<html lang="ru">
<head>
  <title>Стасик ученый</title>
    <?php
    include "../../parts/head_links.php";
    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];
    ?>
  <link rel="stylesheet" href="/css/track_gal.css">

</head>
<body>
   <?php  echo $config->gtm["gtm_body"]; ?> 
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
  <section class="row root_img first-row">
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>
    <div class="col-8 col-s-12" >

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
          <img class="preview" src="/imgs/series/stasik_sci/preview/1_hq.jpg">
          <img class="preview" src="/imgs/series/stasik_sci/preview/6_hq.jpg">
          <img class="preview" src="/imgs/series/stasik_sci/preview/11_hq.jpg">
          <img class="preview" src="/imgs/series/stasik_sci/preview/15_hq.jpg">

        </div>
          <div class="column-v4" id="f2">
              <img class="preview" src="/imgs/series/stasik_sci/preview/2_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/7_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/10_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/12_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/16_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/17_hq.jpg">

        </div>
        <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/series/stasik_sci/preview/3_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/8_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/13_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/18_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/5_hq.jpg">

        </div>
        <div class="column-v4" id= "f4">
            <img class="preview" src="/imgs/series/stasik_sci/preview/4_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/9_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/14_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/19_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/20_hq.jpg">

        </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
            <img class="preview" src="/imgs/series/stasik_sci/preview/1_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/3_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/5_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/7_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/9_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/10_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/12_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/14_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/16_hq.jpg">
            <img class="preview" src="/imgs/series/stasik_sci/preview/18_hq.jpg">
        </div>
          <div class="column-v2" id="t2">
              <img class="preview" src="/imgs/series/stasik_sci/preview/2_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/4_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/6_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/8_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/11_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/13_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/15_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/17_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/19_hq.jpg">
              <img class="preview" src="/imgs/series/stasik_sci/preview/20_hq.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 

        </div>
      </div>
    </div>  
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>  
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
