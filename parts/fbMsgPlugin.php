<?php
    echo '
       <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : \'v5.0\'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \'https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js\';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, \'script\', \'facebook-jssdk\'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101333651340828"
        theme_color="#44bec7"
        logged_in_greeting="Здравствуйте !"
        logged_out_greeting="Здравствуйте !">
      </div>
    ';
