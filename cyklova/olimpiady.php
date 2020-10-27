  <?php
  $page_title = 'Всеукраїнська олімпіада з програмування';
  require_once 'header.php';
?>
<link rel="stylesheet" href="css/olimpiady.css">
<body>
 <header>
   <section class="sequel-kidsa" style="position: fixed;" >
  <div class="sequel-masopedub">
  <div class="mplishmen"  style="display: flex;">
  <a href="index.php"><img class="logogo" src="img/Logo.webp" alt="Логотип"></a>
  <div style="font-size: 16px; color: white; margin-top:23px; ">
    <h2 style="font-size: 16px; text-transform:none;line-height: 0.5em;"  >Циклова комісія</h2>
  <h2 style="font-size: 16px;text-transform:none; line-height: 0.5em;">програмування</h2>
</div>
<div class="logo1">
  <form method="post" action="search_acm.php" name="f1">
    <input class="toggle1"  style="font-size: 14px;" type="text" name="search_acm" required placeholder="Пошук олімпіади з програмування" title="Введіть рік проведення" />
    <div class="search1"></div>
  </form>
    </div>
  </div>
  <nav>
  <div class="sequel-benmuekes"><a id="gedunean-giversaryd" href="#!"><span></span></a></div>
  <ul class="sequel-lasotedun">
  <li>
  <a href="#">Про ЦК</a>
   <ul class="sequel-dropdown">
  <li>
  <a href="history.php" class="col_men">Історія ЦК</a>
  </li>
  <li>
  <a href="teacher.php" class="col_men">Викладачі ЦК</a>
  </li>
  <li>
  <a href="news.php" class="col_men">Новини</a>
  </li>
  </ul>
  </li>
  <li>
  <a href="#">Навчальна діяльність</a>
   <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="dyszypliny.php">Навчальний план</a>
  </li>
  <li class="col_men">
  <a href="kursovi.php">Курсові роботи</a>
  </li>
  <li class="col_men">
  <a href="dyplomni.php">Дипломні роботи</a>
  </li>
  <li class="col_men">
  <a href="vidkryti_zan.php">Виховні заходи</a>
  </li>
  <li class="col_men">
  <a href="http://man.guscoll.com/">Мала академія наук</a>
  </li>
  <li class="col_men">
  <a href="#">Конкурси та олімпіади</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="informatyka.php">Олімпіада з інформатики</a>
  </li>
  <li class="col_men">
  <a href="matem.php">Олімпаіда з математики</a>
  </li>
  <li class="col_men">
  <a href="olimpiady.php">Всеукраїнська олімпіада з програмування</a>
  </li>
  </ul>
  </li>
  </ul>
  </li>
  <li>
  <a href="#">Наші випускники</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="krashi_vypusknyky.php" class="col_men">Кращі випускники</a>
  </li>
  <li class="col_men">
  <a href="vypusknyky.php">Випускники</a>
  </li>
  </ul>
  </li>
    <li>
  <a href="#">Галерея</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="index.html" class="col_men">Фото</a>
  </li>
  <li class="col_men">
  <a href="video.php">Відео</a>
  </li>
  </ul>
  </li>
      <form class="form-search" method="post" action="search_acm.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_acm" required placeholder="Пошук олімпіади з програмування. Введіть рік проведення для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section>  
</header>    
<main>
    <?php include 'function_acm.php'?>
  <div class="main0" style="display: flex;">
  <div class="main1">
    
  </div>
  <div class="main2" style="height: 100%; margin-bottom: 30px; border-bottom: solid; border-bottom-color:   #072C53; padding-bottom:  30px; ">
<!-- Bootstrap 4 -->

    <p><h2 class="zagolovok">Всеукраїнська олімпіада з програмування (ACM/ACPC)</h2></p>
    <p>
 <TABLE border = "2" cellpading ="2" cellspacing = "0" width = "100%" align = "center" style="margin-bottom: 3vw;"class="table_font">
 	 <tr> <td style="width: 50px; text-align: center;"><font><b>Рік</b></font></td>
   <td style="width: 50px; text-align: center;"><font><b>Фото</b></font></td>
   <td style="text-align: center;"><font><b>Керівник</b></font></td> 
   <td  style="text-align: center;"><font><b>Склад команди</b></font></td>
    <td  style="text-align: center;"><font><b>Результати</b></font></td> 
</tr>
<?php $posts = get_posts();
   ?>
  <?php foreach ($posts as $post):?>
      <?=$post['text']?> 
<?php endforeach; ?> 
</TABLE>
<div style="width: 100%; height: 100%; text-align: center; ;">
      <div>

<p class="textsize" style="text-align: justify;  margin-top: 3vw; margin-left: 15px; margin-right: 15px; ">13-15 вересня 2019 року на базі ТНПУ імені Володимира Гнатюка відбулись змагання ІІ етапу ACPC олімпіади
з програмування (Південно-Західний регіон). У них взяли участь 48 команд 16-ти вищих навчальних закладів Вінницької, Тернопільської, Хмельницької та Чернівецької областей.
До участі в ІI-у етапі були запрошено команду Гусятинського коледжу С_HCTNTU_Team3* , яка виборола це право у I етапі (16 квітня 2019 р., м. Тернопіль) та була допущена за квотами регіону.</p>
<p class="textsize" style="text-align: justify; margin-left: 15px; margin-right: 15px; ">Команда С_HCTNTU_Team3* у складі Музики Василя, Коваля Василя та Будника Олександра, що є студентами спеціальність 121 «Інженерія програмного забезпечення» змагалися у вмінні створювати алгоритми та коректно і грамотно реалізовувати їх на мові Python та С++. Керівник команди Барціховська К.І.
Вітаємо учасників олімпіади та бажаємо нових успіхів у наступних змаганнях !</p></div>
      <div><img class="minimized" src="img/Конкурси і олімпіади/ACM/photo_2019-09-19_11-04-06.webp" id="im121"></div>
      <div><p class="textsize" style="margin: 0px; margin-bottom: 30px;font-weight: bold;text-indent: 0px;">Студенти на всеукраїнській олімпіаді з програмування (ACM/ACPC)</p></div>
    </div>
<div style=" height: 100%; text-align: center;">
      
      <div><p class="textsize" style="text-align: justify;  margin-top: 3vw; margin-left: 15px; margin-right: 15px; ">16-17 вересня 2016 року дві команди студентів Гусятинського коледжу ТНТУ імені Івана Пулюя взяли участь у ІІ-у етапі Всеукраїнської студентської  олімпіади з програмування ACMICPC 2016 Південно-Західного регіону, яка проводилася  на базі Тернопільського національного педагогічного університету імені Володимира Гнатюка.
Всіх команд Південно-Західного регіону  було 37, серед них 7 команд  сформовані на базі коледжів. Враховуючи високі результати,  продемонстровані у І-му турі, Гусятинський коледж представляли  дві команди:

команда TNTUGK_16Plus — друге місце серед команд ВНЗ І-ІІ р.а.(керівник Стельмащук Л.В.): Сава Роман (гр. П-31), Кузь Сергій (гр. П-31), Шинкар Андрій (П-31);
команда TNTUGK_fixiki — четверте місце серед команд ВНЗ І-ІІ р.а., керівник (Оляніна Н.В.): Євсюков Владислав (гр. П-41), Ковальчук Тарас (гр. П-41), Бережний Богдан (П-41).</p></div>
      <div><img class="minimized" src="img/Конкурси і олімпіади/ACM/Opera Знімок_2019-09-20_100526_old.guscollege.webp" alt="" id="im121"></div>
      <div><p class="textsize" style="margin-top: 0px;text-indent: 0px; font-weight: bold">Представники Гусятинського коледжу на  олімпіаді з програмування ACMICPC 2016 Південно-Західного регіону</p></div>
    </div>

      <div style=" height: 100%; text-align: center;">
      
      <div><p class="textsize" style="text-align: justify; margin-top: 3vw; margin-left: 15px; margin-right: 15px; ">Починаючи з 2011 року Гусятинський коледж  виставляє команди студентів для участі  в 1/8 фіналу Міжнародної олімпіади з програмування і постійно демонструє найвищі результати серед команд ВНЗ І-ІІ р.а. Тернопільської області. В 2014 та 2015  роках і команди у складі Чорного Ігоря, Дубини Віталія, Стельмащука Володимира та Біланюка Святослава, Давидова Андрія, Мех Оксани вийшли у наступний тур Міжнародної олімпіади з програмування і брали участь у її роботі в м. Львові.</p></div>
      <div><img class="minimized" src="img/Конкурси і олімпіади/ACM/olimpiada.webp" alt="" id="im121"></div>
      <div><p class="textsize" style="margin: 0px;text-indent: 0px; font-weight: bold">Студенти спеціальності під час проведення обласної олімпіади</p></div>
    </div>
<div style=" height: 100%; text-align: center;">
      
      <div><p class="textsize" style="text-align: justify; margin-left: 15px; margin-right: 15px; margin-top: 3vw; ">Коледж надає можливість наукового  розвитку  і завжди підтримує  та спрямовує науково-дослідницькі починання студентів. Так, у 2014 році було організовано участь студентів Гусятинського коледжу ТНТУ ім  Івана Пулюя  у Зимовій школі програмування (м. Харків). Дві команди студентів у складі: Чорного Ігоря, Дубини Віталія, Мех Оксани, Біланюка Святослава,  Дубінського Ярослава, Стельмащука Володимира (керівник Пріян Н.В) пройшли навчання  у Зимовій школі програмування.</p></div>
      <div><img class="minimized" src="img/Конкурси і олімпіади/ACM/zacharpolis.webp" alt="" id="im121"></div>
      <div><p class="textsize" style="margin: 0px;text-indent: 0px; font-weight: bold">Студенти Гусятинського коледжу на заняттях Зимової школи програмування (справа на ліво): Стельмащук В., Чорний І., Дубінський Я., Біланюк С., Дубина В., Мех О.</p></div>
      <div><img class="minimized" src="img/Конкурси і олімпіади/ACM/winterschool.webp" alt="" id="im121"></div>
      <div><p class="textsize" style="margin: 0px;text-indent: 0px; font-weight: bold">Студенти Гусятинського коледжу Стельмащук Володимир, Дубина Андрій, Мех Оксана у Зимовій школі програмування під час тренінгу</p></div>
    </div>

   
</div>
  <div class="main1">
      
  </div>
</div>
</main>
<script>
  var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides[currentSlide].className = 'slide';
  currentSlide = (currentSlide+1)%slides.length;
  slides[currentSlide].className = 'slide showing';
}
  </script>
  <script>
  var slides1 = document.querySelectorAll('#slides1 .slide1');
var currentSlide1 = 0;
var slideInterval1 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides1[currentSlide1].className = 'slide1';
  currentSlide1 = (currentSlide1+1)%slides1.length;
  slides1[currentSlide1].className = 'slide1 showing1';
}
  </script>
  <script>
  var slides2 = document.querySelectorAll('#slides2 .slide2');
var currentSlide2= 0;
var slideInterval2 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides2[currentSlide2].className = 'slide2';
  currentSlide2 = (currentSlide2+1)%slides2.length;
  slides2[currentSlide2].className = 'slide2 showing2';
}
  </script>
  <script>
  var slides3 = document.querySelectorAll('#slides3 .slide3');
var currentSlide3 = 0;
var slideInterval3 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides3[currentSlide3].className = 'slide3';
  currentSlide3 = (currentSlide3+1)%slides3.length;
  slides3[currentSlide3].className = 'slide3 showing3';
}
  </script>
  <script>
  var slides4 = document.querySelectorAll('#slides4 .slide4');
var currentSlide4 = 0;
var slideInterval4 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides4[currentSlide4].className = 'slide4';
  currentSlide4 = (currentSlide4+1)%slides4.length;
  slides4[currentSlide4].className = 'slide4 showing4';
}
  </script>
  <script>
  var slides5 = document.querySelectorAll('#slides5 .slide5');
var currentSlide5 = 0;
var slideInterval5 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides5[currentSlide5].className = 'slide5';
  currentSlide5 = (currentSlide5+1)%slides5.length;
  slides5[currentSlide5].className = 'slide5 showing5';
}
  </script>
    <script>
  var slides6 = document.querySelectorAll('#slides6 .slide6');
var currentSlide6 = 0;
var slideInterval6 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides6[currentSlide6].className = 'slide6';
  currentSlide6 = (currentSlide6+1)%slides6.length;
  slides6[currentSlide6].className = 'slide6 showing6';
}
  </script>
    <script>
  var slides7 = document.querySelectorAll('#slides7 .slide7');
var currentSlide7 = 0;
var slideInterval7 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides7[currentSlide7].className = 'slide7';
  currentSlide7 = (currentSlide7+1)%slides7.length;
  slides7[currentSlide7].className = 'slide7 showing7';
}
  </script>
  <script>
  var slides8 = document.querySelectorAll('#slides8 .slide8');
var currentSlide8= 0;
var slideInterval8 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides8[currentSlide8].className = 'slide8';
  currentSlide8 = (currentSlide8+1)%slides8.length;
  slides8[currentSlide8].className = 'slide8 showing8';
}
  </script>
  <script>
  var slides9 = document.querySelectorAll('#slides9 .slide9');
var currentSlide9 = 0;
var slideInterval9 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides9[currentSlide9].className = 'slide9';
  currentSlide9 = (currentSlide9+1)%slides9.length;
  slides9[currentSlide9].className = 'slide9 showing9';
}
  </script>
  <script>
  var slides10 = document.querySelectorAll('#slides10 .slide10');
var currentSlide10 = 0;
var slideInterval10 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides10[currentSlide10].className = 'slide10';
  currentSlide10 = (currentSlide10+1)%slides10.length;
  slides10[currentSlide10].className = 'slide10 showing10';
}
  </script>
  <script>
  var slides11 = document.querySelectorAll('#slides11 .slide11');
var currentSlide11 = 0;
var slideInterval11 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides11[currentSlide11].className = 'slide11';
  currentSlide11 = (currentSlide11+1)%slides11.length;
  slides11[currentSlide11].className = 'slide11 showing11';
}
  </script>
</body>
  <?php include "footer.php"  ?>
</html>

