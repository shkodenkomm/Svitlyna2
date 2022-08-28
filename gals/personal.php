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

    <title>Персональна (індивідуальна портретна) фотосесія у Києві </title>

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
            </div><div class="col-1 col-s-0 col-m-0" ><p></p></div>
         </div>
        <div class="col-1 col-s-0 col-m-0"><p></p></div>
    </header>
   <section class="row first-row">
       <div class="col-1 col-s-0 col-m-0" ><p></p></div>
       <div class="col-10 col-s-12" >
           <?php
                personalText();
            ?>
       </div>
       <div class="col-1 col-s-0 col-m-0" ><p></p></div>
   </section>
  <section class="row root_img">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12" >

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
            <img class="preview" src="/imgs/gals/personal/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/10_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/14_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/18_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/35_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/22_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/32_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/29_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_4_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_1_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/41_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/42_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/49_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/56_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/51_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/57_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/61_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/68_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/72_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/75_g.jpg">
        </div>
          <div class="column-v4" id="f2">
            <img class="preview" src="/imgs/gals/personal/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/9_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/12_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/34_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/36_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/21_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/27_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/31_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/25_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_2_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_7_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/40_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/43_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/50_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/54_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/58_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/52_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/62_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/65_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/69_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/73_g.jpg">
        </div>
          <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/gals/personal/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/8_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/20_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/37_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/23_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/26_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/30_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/28_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_5_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/39_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/45_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/46_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/53_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/55_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/59_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/63_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/70_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/74_g.jpg">

        </div>
        <div class="column-v4" id="f4">
            <img class="preview" src="/imgs/gals/personal/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/13_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/17_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/16_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/38_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/24_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_3_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_6_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/44_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/47_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/48_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/60_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/64_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/66_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/71_g.jpg">


        </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
            <img class="preview" src="/imgs/gals/personal/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/9_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/13_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/17_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/21_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/23_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/25_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/30_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/31_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/32_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/35_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/38_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_1_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_3_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_7_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/39_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/42_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/44_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/48_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/52_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/50_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/53_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/55_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/56_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/60_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/61_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/64_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/65_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/68_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/70_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/72_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/74_g.jpg">
        </div>
        <div class="column-v2" id="t2">
            <img class="preview" src="/imgs/gals/personal/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/8_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/10_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/12_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/14_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/16_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/18_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/20_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/22_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/24_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/27_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/28_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/26_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/29_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/34_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/36_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/37_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_5_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_2_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_6_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_4_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/40_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/41_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/43_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/45_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/46_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/47_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/51_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/49_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/54_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/57_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/58_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/59_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/62_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/63_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/66_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/69_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/71_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/73_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/75_g.jpg">

        </div>
      </div>
      <div class="row_gal mobile" >
        <div class="column-v" id="m1" >
            <img class="preview" src="/imgs/gals/personal/preview/1_a_hq.jpg">">
            <img class="preview" src="/imgs/gals/personal/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/8_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/9_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/10_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/12_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/13_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/14_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/16_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/17_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/18_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/20_a_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/21_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/22_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/23_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/24_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/25_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/26_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/27_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/28_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/29_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/30_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/31_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/32_b_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_1_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_2_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_3_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_4_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_5_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_6_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_7_b1_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/33_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/34_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/35_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/36_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/37_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/38_c_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/39_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/40_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/41_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/42_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/43_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/44_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/45_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/46_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/47_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/48_d_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/49_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/50_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/51_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/52_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/53_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/54_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/55_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/56_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/57_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/58_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/59_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/60_e_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/61_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/62_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/63_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/64_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/65_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/66_f_hq.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/68_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/69_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/70_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/71_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/72_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/73_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/74_g.jpg">
            <img class="preview" src="/imgs/gals/personal/preview/75_g.jpg">
        </div>
      </div>
    </div>  
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
