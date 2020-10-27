
<?php
  $page_title = 'Новини';
  require_once 'header.php';
?>
 <body>
  <header >
   <section class="sequel-kidsa" style="position: fixed;" >
  <div class="sequel-masopedub">
  <div class="mplishmen"  style="display: flex;">
  <a href="index.php"><img class="logogo" src="img/Logo.webp" alt="Логотип"></a>
  <div style="font-size: 16px; color: white; margin-top:23px; ">
    <h2 style="font-size: 16px; text-transform:none;line-height: 0.5em;"  >Циклова комісія</h2>
  <h2 style="font-size: 16px;text-transform:none; line-height: 0.5em;">програмування</h2>
</div>
  <div class="logo1">
 <form method="post" action="search_news.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" style="font-size: 14px;" type="text" name="search_news" required placeholder="Пошук новин"  title="Введіть дані для пошуку" />
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
    <form class="form-search" method="post" action="search_news.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_news" required placeholder="Пошук новин. Введіть дані для пошуку" class="sea1">
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
  <div class="main2" style="height: 100%;  margin-bottom: 30px; background-color: white;">


<?php include 'function_news.php'?>

 <section id="news">
  <div class="novunu" ><p><h2 class="zagolovok">Новини</h2></p>
   
  </div>
 <?php $posts = get_posts();
   ?>
  <?php foreach ($posts as $post):?>
  <div id="container" class="vyfl_no_disp" style="margin-top: 40px;position: inherit;">
    
    
  <div class="content">
    <div class="img" style="display: flex;justify-content: center;" >
      <img style="margin-left: 10px; margin-top:10px;" src="<?=$post['img']?>" alt="" class="minimized" id="photo124321" >
    </div>  
     <div class="title"><h3 style="margin-top: 10px; font-size: 19px"class="vyk_vyr vyk_vyr1"> <?=$post['title'] ?></h3></div>
  <div class="date" style="color: gray; margin-bottom: 1vw;margin-left: 1vw;"><?=$post['date'] ?></div>
<div class="text teach">
    <p class="textsize"><?=mb_substr($post['text'], 0, 190, 'UTF-8').'...'?>
    </p>
</div>
  <div class="next"><a style="text-decoration: none;" href="post.php?post_id=<?=$post['id']?>" class="knopa_slide">Детальніше</a>
  </div>
</div>
</div>
<?php endforeach; ?>  

 
</section> 


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>

  

    <script  src="js/index.js"></script>



 </div>
  <div class="main1"style="height: 100%;">
      
  </div>
  </main>
</body>
<?php include "footer.php"?>
