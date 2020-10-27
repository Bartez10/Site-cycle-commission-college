
<?php
  $page_title = 'Кращі випускники';
  require_once 'header.php';
?>
 <link rel="stylesheet" href="css/card_vypusknyky.css">

<body >
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
  <form method="post" action="search_krashi_vyp.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_krashi_vyp" required placeholder="Пошук кращого випускника" title="Введіть прізвище або ім'я" />
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
   <form class="form-search" method="post" action="search_krashi_vyp.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_krashi_vyp" required placeholder="Пошук кращого випускника. Введіть прізвище або ім'я для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section>
</header> 
<main>
   <div class="main0" style="display: flex; justify-content: center;">
  <div class="main112">  
  </div>
 <div class="main221" style="height: 100%;  margin-bottom: 30px; background-color: white; border-bottom: solid; border-bottom-color:   #072C53; padding-bottom:  30px; ">
<?php include 'function_vypusk.php'?>
 <section id="news">
  <div class="novunu"><p><h2 class="zagolovok">Кращі випускники</h2></p>
   
  </div>
  
<div class="wrapper" style="position: inherit; padding-top: 40px; padding-bottom:40px;">
   <?php $posts = get_posts();
   ?>
    <?php foreach ($posts as $post):?>
 <div class="card" style="position: inherit;">
  <div class="face face3" style="position: inherit;">
   <div class="content" style=" display: flex; 
  justify-content: center;">
    <img   src="<?=$post['img']?>">
    <h3><?=$post['surname_vypusk']?> <?=$post['name_vypusk']?> </h3>
   </div>
  </div>
  <div class="face face2">
   <div class="content">
     <ul class="">
    <li class="">Рік випуску: <?=$post['rik']?></li>
     <li class="">Місце роботи: <?=$post['work']?></li>
    <li class="">Напрямок розробки: <?=$post['vyd']?></li>
  </ul>
    <a style="font-family: Alice" href="<?=$post['linkedin']?>" target="_blank">Linkedin</a>
   </div>
  </div>
 </div>
 <?php endforeach; ?> 
</div>
</section> 
 </div>
  <div class="main112">
      
  </div>
</div>
</main>
</body>
 <?php include "footer.php"  ?>
</html>
