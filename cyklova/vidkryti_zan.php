<?php
  $page_title = 'Виховні заходи';
  require_once 'header.php';
?>
 <link rel="stylesheet" href="css/accordion2.css">
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
  <form method="post" action="search_vidk_zan.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_vidk_zan" required placeholder="Пошук вихоних заходів" title="Введіть дані для пошуку" />
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
  <form class="form-search" method="post" action="search_vidk_zan.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_vidk_zan" required placeholder="Пошук виховних заходів. Введіть дані для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section> 
</header>   
<main>
  <div class="main0" style="display: flex;">
  <div class="main1_sublect "style="height: 100% background-color: blue">
    
  </div>
  <div class="main2_sublect" style="height: 100%;  margin-bottom: 30px;  ">
    <p><h2 class="zagolovok">Виховні заходи</h2>
    </p>
   
  
<div class="tabs">
  <div class="tab-2">
    <label for="tab2-1"><h2 id="dni" class="zagolovokvyhovni" style="color: #212529;">Дні циклової комісії</h2></label>
    <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
    <div>
        <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:   #072C53;">
      <?php include 'function_vyhovna.php'?>
        <?php $vuhov = get_vuhov();
   ?>
          <?php foreach ($vuhov as $post):?>
      <div><p class="textsize" style="text-align: justify; margin-right: 15px; margin-left: 15px;"><?=$post['text']?></p><img src="<?=$post['img']?>" class="minimized"id="im121" alt="" ><p class="textsize" style="margin-top: 0px;font-weight: bold;text-indent: 0px;"><?=$post['title']?></p></div>
       <?php endforeach; ?> 
     
    </div>
  </div>
</div>
  <div class="tab-2">
    <label for="tab2-2"><h2 class="zagolovokvyhovni" style="color: #212529;">Відкриті виховні</h2></label>
    <input id="tab2-2" name="tabs-two" type="radio">
    <div>
    <p>
 <?php include 'function_vyhuvna.php'?>
        <?php $posts = get_posts();
   ?>
    <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:   #072C53;">
        <?php foreach ($posts as $post):?>
      <div><p class="textsize" style="text-align: justify; margin-right: 15px; margin-left: 15px;"><?=$post['text']?></p><img src="<?=$post['img']?>" class="minimized"id="im121" alt="" ><p class="textsize" style="margin-top: 0px;font-weight: bold;text-indent: 0px;"><?=$post['title']?></p></div>
       <?php endforeach; ?> 
       <div><img src="img/Виховна/Покрова1.webp" class="minimized" id="im121" alt="" ></div>
           <div><img src="img/Виховна/Покрова2.webp" class="minimized" id="im121" alt="" ></div>
            <div><img src="img/Виховна/Покрова3.webp" class="minimized" id="im121" alt="" ></div>
        </div>
</div>

</div>

</div>
  <div class="main1_sublect"style="height: 100%;background-color: blue">
      
  </div>
</div>
</main>
</body>
  <?php include "footer.php"  ?>
</html>

