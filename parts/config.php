<?php

    //tararam-inf-ua.1gb.ua
  $ganId="UA-145454799-1";
  $gtmPortfolioId="GTM-K4P3CCF";

  $config= (object) array(
      'host' => 'localhost',
      'username' => 'root',
      'pass' => 'password',
      'database' => 'db',
      'gtm' => array(
          'gan_head'=>"<script async src='https://www.googletagmanager.com/gtag/js?id=".$ganId."'></script>
                <script>
                          window.dataLayer = window.dataLayer || [];
                          function gtag(){dataLayer.push(arguments);}
                          gtag('js', new Date());     
                          gtag('config', '".$ganId."');
                      </script>",        

          'gtm_head'=>"<!-- Google Tag Manager -->
             <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','".$gtmPortfolioId."');
            </script>
            <!-- End Google Tag Manager -->",

          'gtm_body'=> "  <!-- Google Tag Manager (noscript) -->
                <noscript><iframe src='https://www.googletagmanager.com/ns.html?id=".$gtmPortfolioId."' height='0' width='0'
                    style='display:none;visibility:hidden'>
                    </iframe>
                </noscript>
              <!-- End Google Tag Manager (noscript) -->" 
      )
  );



?>