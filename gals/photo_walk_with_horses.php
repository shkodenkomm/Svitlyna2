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

  <title>Фотосессия с лошадями</title>

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
           HorseText();
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
            <img class="preview" src="/imgs/gals/horses/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/9_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/38_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/35_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/12_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/16_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/25_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/29_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/51_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/63_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/32_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/72_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/67_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/70_l_hq.jpg">
        </div>
        <div class="column-v4" id="f2">
            <img class="preview" src="/imgs/gals/horses/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/6_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/10_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/39_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/19_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/13_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/17_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/45_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/24_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/26_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/50_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/31_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/33_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/75_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/68_l_hq.jpg">

        </div>
        <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/gals/horses/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/7_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/36_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/40_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/20_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/14_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/22_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/43_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/27_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/52_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/34_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/69_l_hq.jpg">
        </div>
        <div class="column-v4" id="f4">
            <img class="preview" src="/imgs/gals/horses/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/8_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/37_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/42_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/21_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/11_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/15_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/23_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/18_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/44_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/28_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/30_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/66_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/71_l_hq.jpg">


        </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
            <img class="preview" src="/imgs/gals/horses/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/7_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/9_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/11_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/13_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/15_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/17_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/19_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/21_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/23_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/25_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/27_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/29_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/30_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/34_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/35_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/36_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/37_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/41_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/44_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/45_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/51_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/52_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/63_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/72_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/75_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/67_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/68_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/71_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/69_l_hq.jpg">
        </div>
        <div class="column-v2" id="t2">
            <img class="preview" src="/imgs/gals/horses/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/6_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/8_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/10_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/12_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/14_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/16_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/18_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/20_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/22_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/24_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/26_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/28_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/32_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/33_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/31_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/38_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/39_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/40_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/42_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/43_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/50_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/66_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/70_l_hq.jpg">

        </div>
      </div>
      <div class="row_gal mobile" >
        <div class="column-v" id="m1" >
            <img class="preview" src="/imgs/gals/horses/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/6_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/7_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/8_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/9_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/10_b_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/11_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/12_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/13_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/14_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/15_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/16_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/17_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/18_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/19_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/20_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/21_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/22_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/23_c_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/24_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/25_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/26_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/27_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/28_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/29_d_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/30_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/31_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/32_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/33_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/34_e_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/35_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/36_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/37_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/38_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/39_f_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/40_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/41_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/42_g_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/43_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/44_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/45_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/50_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/51_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/52_h_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/63_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/66_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/67_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/68_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/69_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/70_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/71_l_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/72_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/horses/preview/75_m_hq.jpg">
        </div>
      </div>
    </div>  
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
