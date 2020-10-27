 <?php
  $page_title = 'Олімпіада з математики';
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
  <form method="post" action="search_matem.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_matem" required placeholder="Пошук олімпіади з математики" title="Введіть рік проведення" />
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
     <form class="form-search" method="post" action="search_matem.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_matem" required placeholder="Пошук олімпіади з математики. Введіть рік проведення для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section> 
</header>   
<main>
  <?php include 'function_matem.php'?>
  <div class="main0" style="display: flex;">
  <div class="main1 "style="height: 100% background-color: blue">
    
  </div>
  <div class="main2" style="height: 100%; margin-bottom: 30px; border-bottom: solid; border-bottom-color:   #072C53; padding-bottom:  30px; ">
    <p><h2 class="zagolovok">Олімпіада з математики</h2></p>
    <p>
    <div style="width: 100%; height: 100%; text-align: center;">
      <div>

<p class="textsize" style="text-align: justify; margin-left: 15px; margin-right: 15px;">З 2006 року методичне об’єднання математики ВНЗ І-ІІ рівнів акредитації Тернопільської області щорічно проводить олімпіади з вищої математики (за винятком 2009 року). Якнайактивнішу участь у них беруть студенти Гусятинського коледжу Тернопільського національного технічного університету імені Івана Пулюя, зокрема – спеціальності «Інженерія програмного забезпечення» під керівництвом викладача вищої математики, кандидата фізико-математичних наук Стельмащук Людмили Володимирівни. </p>
<p class="textsize" style="text-align: justify; margin-left: 15px; margin-right: 15px;">Результатом підготовки – призові місця наших учасників. </p></div>  
    </div>
      <TABLE border = "2" cellpading ="2" cellspacing = "0" width = "100%" align = "center" class="table_font" >
  <tr> <td style="width: 50px; text-align: center;"><font><b>Рік</b></font></td>
   <td style="width: 50px; text-align: center;"><font><b>Фото</b></font></td>
    <td style="text-align: center;"><font><b>Місце проведення</b></font></td>
     <td  style="text-align: center;"><font ><b>Прізвище учасника</b></font></td> 
     <td  style="text-align: center;"><font ><b>Результат</b></font></td> </tr>

      <?php $posts = get_posts();
   ?>
  <?php foreach ($posts as $post):?>
      <?=$post['text']?> 
<?php endforeach; ?> 
</TABLE>
   

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
  <script>
  var slides12 = document.querySelectorAll('#slides12 .slide12');
var currentSlide12 = 0;
var slideInterval12 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides12[currentSlide12].className = 'slide12';
  currentSlide12 = (currentSlide12+1)%slides12.length;
  slides12[currentSlide12].className = 'slide12 showing12';
}
  </script>
  <script>
  var slides13 = document.querySelectorAll('#slides13 .slide13');
var currentSlide13 = 0;
var slideInterval13 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides13[currentSlide13].className = 'slide13';
  currentSlide13 = (currentSlide13+1)%slides13.length;
  slides13[currentSlide13].className = 'slide13 showing13';
}
  </script>
     <script>
  var slides14 = document.querySelectorAll('#slides14 .slide14');
var currentSlide14 = 0;
var slideInterval14 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides14[currentSlide14].className = 'slide14';
  currentSlide14 = (currentSlide14+1)%slides14.length;
  slides14[currentSlide14].className = 'slide14 showing14';
}
  </script>
   <script>
  var slides15 = document.querySelectorAll('#slides15 .slide15');
var currentSlide15 = 0;
var slideInterval15 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides15[currentSlide15].className = 'slide15';
  currentSlide15 = (currentSlide15+1)%slides15.length;
  slides15[currentSlide15].className = 'slide15 showing15';
}
  </script>
   <script>
  var slides16 = document.querySelectorAll('#slides16 .slide16');
var currentSlide16 = 0;
var slideInterval16 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides16[currentSlide16].className = 'slide16';
  currentSlide16 = (currentSlide16+1)%slides16.length;
  slides16[currentSlide16].className = 'slide16 showing16';
}
  </script>
     <script>
  var slides17 = document.querySelectorAll('#slides17 .slide17');
var currentSlide17 = 0;
var slideInterval17 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides17[currentSlide17].className = 'slide17';
  currentSlide17 = (currentSlide17+1)%slides17.length;
  slides17[currentSlide17].className = 'slide17 showing17';
}
  </script>
   <script>
  var slides18 = document.querySelectorAll('#slides18 .slide18');
var currentSlide18 = 0;
var slideInterval18 = setInterval(nextSlide,2000);
 
function nextSlide(){
  slides18[currentSlide18].className = 'slide18';
  currentSlide18 = (currentSlide18+1)%slides18.length;
  slides18[currentSlide18].className = 'slide18 showing18';
}
  </script>
  
</body>
  <?php include "footer.php"  ?>
</html>

