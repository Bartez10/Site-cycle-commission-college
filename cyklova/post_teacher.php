<?php include "header.php"  ?>
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
  <form method="post" action="search_teacher.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_teacher" required placeholder="Пошук викладачів" title="Введіть прізвище або ім'я" />
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
      <form class="form-search" method="post" action="search_teacher.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_teacher" required placeholder="Пошук викладачів. Введіть прізвище або ім'я для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section> 
</header> 
  <main style="display: flex;">
<div class="main1 "style="height: 100% background-color: blue">
    
  </div>
  <div class="main2" style="height: 100%;  margin-bottom: 30px; background-color: white; border-bottom: solid; border-bottom-color: #072C53; margin-bottom: 30px;">


<?php include 'function_teacher.php'?>
<?php

$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();


$post = get_post_by_id($post_id);
?>
 <div class="teacher_inf" id="container" style=" margin-top: 2vw;">
  <div class="title" style="text-align: justify;"><h2 class="zagolovok" style="align-content: center;text-align: center; margin-bottom: 30px;"><?=$post['surname_teacher']?> <?=$post['name_teacher']?> <?=$post['twoname_teacher']?></h2></p></div>
    <div class="img" style="margin-top: 2vw; display: flex;justify-content: center;">
      <img src="<?=$post['img']?>" alt="" class="minimized" id="photo123" >
    </div>  
  <div class="content">
     <div class="title" style="text-align: center;"><p><h5 style="font-size:19px;"><?=$post['title']?></h5></p></div>
     <div class="text " >
    <p><?=$post['text1']?> </p>
</div>
 </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>

  

    <script  src="js/index.js"></script>



 </div>
  <div class="main1"style="height: 100%;">
      
  </div>

  </main>

</body>
<?php include "footer.php"  ?>
