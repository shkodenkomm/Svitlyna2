<!DOCTYPE html>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../parts/main_menu.php";
    include "../parts/config.php";
    include "../parts/objects/GalleryTextProducer.php"
?>
<html lang="ru">
<head>
  <title>Детская фотосессия</title>

    <?php
            include "../parts/head_links.php";
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
           ChildrenText();
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
            <img class="preview" src="/imgs/gals/children/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/7_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/8_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/9_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/10_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/11_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/12_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/13_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/14_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/15_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/16_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/17_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/18_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/19_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/20_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/21_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/22_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/23_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/68_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/69_l_hq.jpg">


        </div>
        <div class="column-v4" id="f2">
            <img class="preview" src="/imgs/gals/children/preview/24_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/25_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/26_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/27_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/28_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/29_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/30_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/31_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/32_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/33_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/34_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/35_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/36_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/37_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/37_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/38_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/39_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/40_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/41_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/42_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/43_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/44_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/45_h_hq.jpg">

        </div>
        <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/gals/children/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/50_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/51_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/52_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/63_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/66_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/67_k_hq.jpg">
        </div>
        <div class="column-v4" id="f4">
            <img class="preview" src="/imgs/gals/children/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/75_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/76_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/77_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/78_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/79_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/80_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/81_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/82_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/83_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/84_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/85_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/86_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/87_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/88_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/89_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/90_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/91_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/92_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/93_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/71_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/72_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/70_l_hq.jpg">
        </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
          <img class="preview" src="/imgs/gals/children/preview/1_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/2_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/3_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/4_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/5_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/6_a_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/7_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/8_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/9_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/10_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/11_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/12_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/13_b_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/14_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/15_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/16_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/17_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/18_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/19_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/20_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/21_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/22_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/23_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/24_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/25_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/26_c_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/27_d_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/28_d_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/29_d_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/30_d_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/31_d_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/32_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/33_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/34_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/35_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/36_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/37_e_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/37_f_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/38_f_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/39_f_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/40_g_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/41_g_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/42_g_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/43_h_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/44_h_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/45_h_hq.jpg">
          <img class="preview" src="/imgs/gals/children/preview/69_l_hq.jpg">
        </div>
        <div class="column-v2" id="t2">
            <img class="preview" src="/imgs/gals/children/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/50_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/51_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/52_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/63_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/66_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/68_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/67_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/75_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/76_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/77_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/78_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/79_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/80_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/81_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/82_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/83_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/84_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/85_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/86_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/87_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/88_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/89_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/90_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/91_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/92_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/93_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/71_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/72_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/70_l_hq.jpg">
        </div>
      </div>
      <div class="row_gal mobile" >
        <div class="column-v" id="m1" >
            <img class="preview" src="/imgs/gals/children/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/4_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/7_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/8_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/9_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/10_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/11_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/12_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/13_b_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/14_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/15_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/16_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/17_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/18_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/19_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/20_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/21_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/22_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/23_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/24_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/25_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/26_c_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/27_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/28_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/29_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/30_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/31_d_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/32_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/33_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/34_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/35_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/36_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/37_e_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/37_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/38_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/39_f_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/40_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/41_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/42_g_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/43_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/44_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/45_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/46_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/47_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/48_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/49_h_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/50_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/51_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/52_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/53_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/54_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/55_i_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/56_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/57_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/58_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/59_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/60_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/61_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/62_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/63_j_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/64_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/65_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/66_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/67_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/68_k_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/69_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/70_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/71_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/72_l_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/73_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/74_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/75_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/76_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/77_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/78_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/79_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/80_m_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/81_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/82_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/83_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/84_n_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/85_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/86_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/87_o_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/88_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/89_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/90_p_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/91_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/92_r_hq.jpg">
            <img class="preview" src="/imgs/gals/children/preview/93_r_hq.jpg">
        </div>
      </div>
    </div>  
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
