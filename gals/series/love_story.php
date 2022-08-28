<?php
    $path = "../../parts";
    include "$path/main_menu.php";
    include "$path/config.php";
    include "$path/objects/CommonGallery.php";

    $gl = new CommonGallery(pathinfo(__FILE__, PATHINFO_FILENAME), "imgs/series");
    $gl->pageTitle = "Love story";
    $gl->textFunction = "Love_StorytText";

    include "$path/common_gallery.php"
?>
