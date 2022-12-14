<?php

function insertTextBlock($title, $text, $imgSrc, $imgDirection=" img-right"){
    if(!empty($imgSrc)){
        $imgSrc = '<img  class="img_gal border-dark '.$imgDirection.' " src="'.$imgSrc.'"/>';
    }else $imgSrc ="";

echo
     '
      <link rel="stylesheet" href="/css/gals_articles.css">
           <div class="row background-block m-bachround">
               <h1 style="margin-top: 0; " class="title">
                    ' .$title.'
               </h1>
               <div class="txt">
                  
                       '.$imgSrc.$text.'                       
                  
               </div>
     
     ';
}

function personalText(){
    $title = "Персональна (індивідуальна портретна) фотосесія у Києві ";
    $text ="<p>Це вид зйомки, мета якої підкреслити індивідуальність головного героя (чоловіки чи жінки), показати найкращі риси, унікальність, стиль. Це не тільки можливість отримати якісні фотографії, але й побачити себе з нового боку, оскільки фотограф вміє помічати найбільш вдалі ракурси, світло, допомагає створити настрій, розкритися і бути собою.</p>
    <p> Я вважаю, що індивідуальна портретна фотосесія — це певною мірою психотерапія, що дозволяє краще пізнати себе, прийняти та полюбити ще більше. Клієнт та фотограф розробляють один або кілька образів, планують сюжет, підбирають найбільш підходящі локації та реквізит. Фотограф допомагає з позуванням, підказує, що робити. Дуже важливо, щоб герой зйомки довіряв фотографу та почував себе комфортно у його присутності. Найкращий результат досягається у разі співтворчості. Коли клієнт виконує рекомендації фотографа і водночас трохи імпровізує та пропонує свої ідеї. Персональна фотосесія може проводитися як у студії, так і в будь-якому іншому місці, де досить гарне для цього світло. Все залежить від ідеї та фантазії.</p>
    <p>Окремий вид персональної зйомки— іміджева фотосессія. Вона потрібна спеціалістам для просування свого бренду, створення потрібного бізнес образу. Вона може освітлювати як тільки професійну грань людини, так і інші її сторони життя. На приклад, ми покажемо спеціаліста як на робочому місці, створивши класичні портрети, так і в інших сферах життя: на заняттях спортом, за улюбленими хоббі, в колі близьких, на прогулянці, в улюбленій машині, тощо. Це важливо, бо зараз люди купують у людей, а для цього необхідно їх познайомити з вами. Після такої комплексної фотосессії у вас будуть фото для публікацій в різноманітних образах і локаціях на кілька місяців вперед.</p>";
    $imgSrc ="";

    insertTextBlock($title, $text, $imgSrc);
}

function ChildrenText(){
    $title = "Дитяча фотосесія у Києві і як зацікавити дитину на фотосессії";
    $text ="<p>Головний герой цієї зйомки – одна дитина або кілька дітей. Дитяча фотосесія - це безмежне поле для фантазій та творчості. 
            Залежно від віку дитини сценарії та місце проведення фотосесії будуть різними. Але ключовий момент у дитячій фотосесії - це має бути гра.</p>
            <p>Дівчатка та хлопчики перетворюються на прекрасних принцес та принців, героїнь та героїв улюблених казок, мультиків та фільмів. 
             Або кухарів, художників, танцюристів, вчених експериментаторів, кінних вершників... </p>
            <p>Гарна зйомка можлива і без особливих образів. 
               Комусь із діток буде достатньо мати поруч пухнастого друга песика. 
               А хтось вперше візьме в руки кролика і буде випромінювати щастя на фото. 
               Деяким діткам цікаво просто виконувати завдання: пробігти  від одного кущика до іншого, або підкидати листя, високо підстрибнути, обняти маму за шию, 
               ловити пелюстки, збирати квіти, чи просто зробити «ку-ку» із за дерева.</p>
             <p></p>";
    
    $imgSrc ="../../imgs/gals_imgs/children.jpg";

    insertTextBlock($title, $text, $imgSrc, " img-left");

}

function FamilyText(){
    $title = "Сімейна фотосесія у Києві";
    $text ="<p>
              Цей варіант найкраще підходить сім'ям, які мають дітей. 
              Мета зйомки передати взаємодію між усіма членами сім'ї. 
              Діти почуваються комфортно, оскільки поряд батьки. 
              А дорослі швидше розкриваються, граючи та взаємодіючи з дітками. 
              Цей вид зйомки дозволяє отримати найживіші, емоційні, природні фото. 
              Позування тут мінімальне, хіба що на деяких групових фото. 
              У цій зйомці фотограф переважно підказує сім'ї що робити і де краще стати з урахуванням світла, а потім фіксує ці моменти на фото.
           </p>
            <p>
              Залежно від віку дітей та побажань дорослих сценарій може бути досить різним. 
              Від спокійної більш постановочної фотосесії у студії до ігор, прогулянок, пікніків, подорожей на машині чи велосипедах та навіть цілого фото дня  
              «День із життя сім'ї». 
               Сценарій сім'я та фотограф продумують заздалегідь. 
               Планується послідовність дій, яка буде об'єднати всіх членів родини упродовж усієї фотосесії.
               фотограф допомагає підібрати локацію, одяг для всієї родини (family look), який також має візуально об'єднувати сім'ю та відповідати обраним локаціям, 
               додаткові аксесуари та реквізит.
            </p>";
    $imgSrc ="../../imgs/gals_imgs/family.jpg";

    insertTextBlock($title, $text, $imgSrc);
}

function PregantText(){
    $title = "Фотосесія вагітності у Києві";
    $text ="<p>Це найніжніший, зворушливий вид фотосесії, у якому головною героїнею виступає майбутня мама. 
               Але також можуть бути і додаткові учасники: чоловік, діти та навіть домашні вихованці. 
               Мета фотосесії показати, наскільки прекрасна та жіночна майбутня мама. 
                Передати її емоції, спокійну радість, надію, її мрії в очікуванні на народження дива. Чудово, коли у зйомці беруть участь усі члени сім'ї. 
               Це дає можливість сфотографувати романтичність, уважність і турботу майбутнього батька про кохану дружину. 
               Очікування дітьми появи на світ довгоочікуваного братика чи сестрички. 
               Фотографії вагітності особливі для мене, вони випромінюють дуже жіночу та чисту енергетику, стан особливої радості та урочистості. 
               Найкращий час для фотосесії вагітності терміном з 23 по 30-й тиждень. 
               В цей час жінка чудово виглядає, вже видно особливі зміни фігури і, водночас, самопочуття гарне, немає набряків, ще не складно позувати і активно рухатися під час фотосесії. 
               Місце для проведення фотосесії вагітності має бути максимально комфортним, затишним та спокійним, щоб майбутня матуся змогла розслабитися та добре почуватися. 
               Одяг повинен бути зручним, з м'яких бажано натуральних тканин, що добре драпіруються, спокійних кольорів. 
                Макіяж має бути дуже природним. Додатковим реквізитом можуть бути крихітні дитячі одяг та іграшки. 
                У цьому випадку фото максимально передадуть особливу атмосферу очікування на чудову подію.</p>";
    $imgSrc ="../../imgs/gals_imgs/pregant.jpg";

    insertTextBlock($title, $text, $imgSrc);

}

function Love_StorytText(){
    $title = "Love story в Києві";
    $text ="<p>
      Це фотосесія для закоханої пари.
      Він і вона головні та єдині герої цієї найромантичнішої зйомки, наповненої почуттями, турботою, закоханими поглядами, поцілунками та ніжними обіймами. 
      В ідеалі фотограф повинен бути майже невидимкою, яка підглядає за цим таїнством через видошукач, щоб не порушити цю особливу інтимну атмосферу спілкування люблячих сердець. 
      А закохані повинні розчинитися один в одному і поводитися так, ніби вони зовсім одні. 
      Тому для цієї зйомки особливо важливим є хороший контакт з фотографом, довірливе та комфортне спілкування з ним. 
      Love story дозволяє відобразити унікальну і неповторну історію відносин закоханої пари. 
      Можна розповісти історію знайомства, показати романтичне побачення у значущих для пари місцях, сфотографувати хвилюючий момент, коли чоловік робить пропозицію 
      або створити фото історію одного чудового дня з життя закоханої пари. 
      Лавсторі може бути як передвесільним, так і приуроченим до річниці весілля або початку знайомства. 
      Головне бажання запам'ятати на завжди чудові миті, коли два серця б'ються в унісон.
       Пара розповідає фотографу свої побажання, а він допомагає вибрати найбільш підходящі локації, створити сценарій фотосесії, атмосферу 
      та підібрати гармонійні образи для закоханих.
      </p>";
    $imgSrc ="";

    insertTextBlock($title, $text, $imgSrc);
}

function HorseText(){
    $title = "Фотосесія з кіньми у Києві і передмісті";
    $text ="<p>
            Фото прогулянка з конями підходить людям, які люблять цих прекрасних тварин, катання верхи та прогулянки на природі. 
            Героєм такої фотоісторії може бути як одна людина, так і закохана пара або сім'я. 
            Навіть якщо ви не вмієте їздити верхи або навіть побоюєтеся коня, не відмовляєте собі в задоволенні отримати гарні кадри з цією чудовою твариною.
            Для фотосесій використовуються дуже спокійні, слухняні та адекватні тварини. 
           Я провела багато фотосесій з конями і в моєму досвіді ще не було жодної людини, яка б не сіла верхи на коня, навіть якщо на початку фотосесії побоювався навіть до нього підійти. 
           Сама взаємодія з конем є зцілюючою для людини, кінь відкриває серце. Напруга і страх поступово йдуть, а на їх місце приходить захоплення від контакту та щира радість. 
           Ви насолоджуєтесь прогулянкою в лісі або в полі, взаємодією з конем і отримуєте на згадку красиві атмосферні фото. 
           Фотосесія з конем зазвичай триває одну годину. 
           За цей час можна зробити фотографії у двох образах, якщо це персональна фотосесія, чи створити повноцінну фото історію для пари чи сім'ї. 
           Фотограф допомагає з підбором одягу та реквізиту, вибором локації, позуванням.      </p>";
    $imgSrc ="";

    insertTextBlock($title, $text, $imgSrc);
}

function MotherText(){
    $title = "Фотосесія мама та донька (дочки матері) у Києві";
    $text ="<p>
           Ідеальний варіант фотосесії для мами із донькою.
           Є варіантом сімейної фотосесії, але весь фокус спрямований на стосунки мами з донькою, відображення їхньої любові, ласки, турботи. 
           Найбільш популярні два варіанти цього фотосесі. 
           У першому варіанті підбирається гарний family look, наприклад ошатні ніжні сукні одного кольору. 
           Зйомка частіше проходить в красиво декорованій студії, але може проводитися і на вулиці, скажімо в квітучих садах. 
           А з лютого по квітень чудове місце для фотосесії мами та доньки – це теплиця, повна квітучих азалій. 
           Другий чудовий варіант — це жива зйомка у стилі «День із життя», яка дозволяє сфотографувати щирі емоції та справжні стосунки. 
           Ця зйомка не постановочна і цікавіша. 
           Донька і мама займаються цікавими заняттями, що їх об'єднують: печуть пиріжки, читають, стрибають з подушками на ліжку, 
           гуляють в улюблених місцях, смакують морозиво в кафе, грають, тощо....
      </p>";
    $imgSrc ="";

    insertTextBlock($title, $text, $imgSrc);
}

function CristText(){
    $title = "Зйомка хрестин (таїнства хрещення) у Києві";
    $text ="<p>
             Фотозйомка хрещення — це фото фіксація одного з найважливіших церковних обрядів, обряду хрещення, яке проводиться раз у житті. 
             Бути фотографом на хрестини для мене – це особлива радість та честь! 
             Це можливість бути присутньою на цьому світлому, урочистому, дуже зворушливому Таїнстві, сповненому любові, турботи, довіри, дуже особливої доброї атмосфери. 
             Я завжди дуже вдячна за довіру до мене та дозвіл розділити цю радість із родиною! 
             Зазвичай зйомка починається трохи раніше від таїнства. 
             Роблять спільні фотографії з родичами та близькими біля храму або у храмі. 
             Потім фіксуються всі важливі моменти обряду хрещення. 
             Після закінчення хрестин у храмі зазвичай робиться групове фото зі священиком та всіма запрошенними. 
             Ця фотозйомка зазвичай триває близько години. 
             Якщо сім'я, наприклад, хоче сфотографувати святкування хрестин у ресторані, то про це потрібно домовлятися з фотографом додатково.
         </p>";
    $imgSrc ="";

    insertTextBlock($title, $text, $imgSrc);
}