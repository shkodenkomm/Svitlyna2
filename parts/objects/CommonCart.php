<?php
    function insertCart(
        $link,$linkImg,$title,
        $article="",
        $linkText="",
        $cssFile="",
        $classCol="col-6 col-s-6"

    ){
        echo '
        <div class="cart '.$classCol.'">
            <div class="cart_img" >
                <a href="'.$link.'" class="cart_img_title"  col-12">
                <div> 
                        <img src="'.$linkImg.'">
                </div>
                </a>
            </div>
            <div class="blok">
                <div class="cart_title">
                    <div><h2><i>'.$title.'</i></h2></div>
                </div>
            
                <div class="cart_article">
                    <div>'.$article.'</div>
                </div>           
                <div class="cart_link">
                   <i><a href="'.$link.'">'.$linkText.'</a></i>
                </div>
            </div>
        
        </div>
        ';
    }

    function insertCarts(){

        echo '
        <link rel="stylesheet" href="/css/cart.css">
        ';

        insertCart("/gals/personal.php",
            "/imgs/main_cats/personal.jpg",
            "Персональна фотосессія",
            "Це вид зйомки, мета якої наголосити на індивідуальності головного героя (чоловіки чи жінки), показати його найкращі якості, унікальність, стиль.",
            "Більше ...");

        insertCart("/gals/children.php",
            "/imgs/main_cats/children.jpg",
            "Дитяча фотосессія",
            "Головний герой цієї зйомки – одна дитина або кілька дітей. Дитяча фотосесія – це безмежне поле для фантазій та творчості.",
            "Більше ...");

        insertCart("/gals/family.php",
            "/imgs/main_cats/family.jpg",
            "Сімейна фотосесія",
            "Цей варіант найкраще підходить сім'ям, які мають дітей. Мета зйомки – відобразити взаємодію між усіма членами сім'ї.",
            "Більше ...");


        insertCart("/gals/series/natasha_sasha.php",
            "/imgs/main_cats/pregant.jpg",
            "Фотосессія   вагітності",
            "Це найніжніший, найзворушливіший вид фотосесії, у якому головною героїнею виступає майбутня мама.",
            "Більше ...");


        insertCart("/gals/series/love_story.php",
            "/imgs/main_cats/love_story.jpg",
            "Love story",
            "Це фотосесія для закоханої пари. Він і вона головні та єдині герої цієї найромантичнішої зйомки.",
            "Більше ...");


        insertCart("/gals/photo_walk_with_horses.php",
            "/imgs/main_cats/animals_small.png",
            "Фотосессія з кіньми",
            "Фото прогулянка з конями підходить людям, які люблять цих прекрасних тварин, катання верхи та прогулянки на природі.",
            "Більше ...");

        insertCart("/gals/series/mother_doter.php",
            "/imgs/main_cats/motherdother.jpg",
            "Фотосессія мама і донечка",
            "Ідеальний варіант фотосесії для мами із донькою. Є варіантом сімейної фотосесії, але весь фокус спрямований на стосунки мами з донькою, відображення їх любові, ласки, турботи.",
            "Більше ...");

        insertCart("/gals/crist.php",
            "/imgs/main_cats/crist_small.png",
            "Зйомка хрестин (таїнства хрещення)",
            "Фотозйомка хрещення — це фото фіксація одного з найважливіших церковних обрядів, обряду хрещення, яке проводиться раз у житті.",
            "Більше ...");
    }
?>


