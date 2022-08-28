<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../parts/head_links.php";
    include "../parts/main_menu.php";
    include "../parts/config.php";
    include "../parts/objects/GalleryTextProducer.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Семейная фотосессия</title>

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
   <section class="row first-row" >
       <div class="col-1 col-s-0 col-m-0" ><p></p></div>
       <div class="col-10 col-s-12" >
           <?php
                FamilyText();
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
          <img class="preview" src="/imgs/gals/family/preview/1_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/5_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/9_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/13_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/17_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/21_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/25_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/29_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/33_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/37_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/41_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/45_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/35_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/49.jpg">
          <img class="preview" src="/imgs/gals/family/preview/53.jpg">
          <img class="preview" src="/imgs/gals/family/preview/57.jpg">
          <img class="preview" src="/imgs/gals/family/preview/61.jpg">
          <img class="preview" src="/imgs/gals/family/preview/65.jpg">
          <img class="preview" src="/imgs/gals/family/preview/69.jpg">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg">
        </div>
        <div class="column-v4" id="f2">
          <img class="preview" src="/imgs/gals/family/preview/2_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/6_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/10_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/14_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/18_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/22_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/26_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/47_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/30_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/34_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/46_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/36_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/40_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/51.jpg">
          <img class="preview" src="/imgs/gals/family/preview/50.jpg">
          <img class="preview" src="/imgs/gals/family/preview/58.jpg">
          <img class="preview" src="/imgs/gals/family/preview/62.jpg">
          <img class="preview" src="/imgs/gals/family/preview/66.jpg">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg">
        </div>
        <div class="column-v4" id="f3">
          <img class="preview" src="/imgs/gals/family/preview/3_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/7_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/11_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/23_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/27_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/43_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/39_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/38_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/42_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/44_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/32_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/55.jpg">
          <img class="preview" src="/imgs/gals/family/preview/54.jpg">
          <img class="preview" src="/imgs/gals/family/preview/59.jpg">
          <img class="preview" src="/imgs/gals/family/preview/63.jpg">
          <img class="preview" src="/imgs/gals/family/preview/67.jpg">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg">
        </div>
        <div class="column-v4" id= "f4">
          <img class="preview" src="/imgs/gals/family/preview/4_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/8_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/12_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/15_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/16_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/19_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/24_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/20_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/48_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/31_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/28_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/52.jpg">
          <img class="preview" src="/imgs/gals/family/preview/56.jpg">
          <img class="preview" src="/imgs/gals/family/preview/60.jpg">
          <img class="preview" src="/imgs/gals/family/preview/64.jpg">
          <img class="preview" src="/imgs/gals/family/preview/68.jpg">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg">
        </div> 
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
          <img class="preview" src="/imgs/gals/family/preview/1_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/5_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/2_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/6_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/9_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/13_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/17_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/10_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/14_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/18_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/22_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/21_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/25_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/26_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/47_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/46_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/40_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/36_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/30_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/34_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/29_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/33_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/37_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/41_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/45_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/35_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/49.jpg">
          <img class="preview" src="/imgs/gals/family/preview/53.jpg">
          <img class="preview" src="/imgs/gals/family/preview/51.jpg">
          <img class="preview" src="/imgs/gals/family/preview/50.jpg">
          <img class="preview" src="/imgs/gals/family/preview/57.jpg">
          <img class="preview" src="/imgs/gals/family/preview/61.jpg">
          <img class="preview" src="/imgs/gals/family/preview/65.jpg">
          <img class="preview" src="/imgs/gals/family/preview/69.jpg">
          <img class="preview" src="/imgs/gals/family/preview/58.jpg">
          <img class="preview" src="/imgs/gals/family/preview/62.jpg">
          <img class="preview" src="/imgs/gals/family/preview/66.jpg">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg">
          
        </div>
        <div class="column-v2" id="t2">
          <img class="preview" src="/imgs/gals/family/preview/3_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/7_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/4_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/8_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/11_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/12_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/15_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/16_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/19_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/24_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/20_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/23_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/27_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/48_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/31_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/28_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/43_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/39_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/38_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/42_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/44_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/32_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/52.jpg">
          <img class="preview" src="/imgs/gals/family/preview/56.jpg">
          <img class="preview" src="/imgs/gals/family/preview/55.jpg">
          <img class="preview" src="/imgs/gals/family/preview/54.jpg">
          <img class="preview" src="/imgs/gals/family/preview/59.jpg">
          <img class="preview" src="/imgs/gals/family/preview/63.jpg">
          <img class="preview" src="/imgs/gals/family/preview/67.jpg">
          <img class="preview" src="/imgs/gals/family/preview/60.jpg">
          <img class="preview" src="/imgs/gals/family/preview/64.jpg">
          <img class="preview" src="/imgs/gals/family/preview/68.jpg">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 
          <img class="preview" src="/imgs/gals/family/preview/1_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/2_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/3_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/4_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/5_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/6_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/7_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/8_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/9_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/10_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/11_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/12_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/13_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/14_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/15_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/16_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/17_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/18_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/19_b.jpg">
          <img class="preview" src="/imgs/gals/family/preview/20_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/21_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/22_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/23_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/24_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/25_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/26_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/27_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/28_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/29_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/30_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/31_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/32_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/33_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/34_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/35_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/36_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/37_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/38_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/39_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/40_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/41_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/42_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/43_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/44_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/45_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/46_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/47_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/48_u.jpg">
          <img class="preview" src="/imgs/gals/family/preview/49.jpg">
          <img class="preview" src="/imgs/gals/family/preview/50.jpg">
          <img class="preview" src="/imgs/gals/family/preview/51.jpg">
          <img class="preview" src="/imgs/gals/family/preview/52.jpg">
          <img class="preview" src="/imgs/gals/family/preview/53.jpg">
          <img class="preview" src="/imgs/gals/family/preview/54.jpg">
          <img class="preview" src="/imgs/gals/family/preview/55.jpg">
          <img class="preview" src="/imgs/gals/family/preview/56.jpg">
          <img class="preview" src="/imgs/gals/family/preview/57.jpg">
          <img class="preview" src="/imgs/gals/family/preview/58.jpg">
          <img class="preview" src="/imgs/gals/family/preview/59.jpg">
          <img class="preview" src="/imgs/gals/family/preview/60.jpg">
          <img class="preview" src="/imgs/gals/family/preview/61.jpg">
          <img class="preview" src="/imgs/gals/family/preview/62.jpg">
          <img class="preview" src="/imgs/gals/family/preview/63.jpg">
          <img class="preview" src="/imgs/gals/family/preview/64.jpg">
          <img class="preview" src="/imgs/gals/family/preview/65.jpg">
          <img class="preview" src="/imgs/gals/family/preview/66.jpg">
          <img class="preview" src="/imgs/gals/family/preview/67.jpg">
          <img class="preview" src="/imgs/gals/family/preview/68.jpg">
          <img class="preview" src="/imgs/gals/family/preview/69.jpg">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg">
        </div>
      </div>
    </div>  
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
