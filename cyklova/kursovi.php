<?php
  $page_title = 'Курсові роботи';
  require_once 'header.php';
?>
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
  <form method="post" action="search_kursovi.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_kursova" required placeholder="Пошук курсових" title="Введіть тему або студента" />
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
    <form class="form-search" method="post" action="search_kursovi.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_kursova" required placeholder="Пошук курсових. Введіть тему або студента для пошуку" class="sea1">
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
  <div class="main1 "style="height: 100% background-color: blue">
    
  </div>
  <div class="main2" style="height: 100%;  justify-content: center;  margin-bottom: 30px; ">
    <p><h2 class="zagolovok">Курсові роботи (2019/2020)</h2></p>
    <h5 style="margin-bottom: 2vw; text-align:;">Курсовий проект(Бази даних)</h5>
      <?php include 'function_kursovi.php'?>
    <div style="border-bottom: solid; border-bottom-color: #072C53; " ><TABLE border = "2" cellpading ="2" cellspacing = "0" width = "100%" align = "center" style="margin-bottom: 3vw;" >
  <tr> <td style="width: 50px; text-align: center;" ><font size="2"><b>№</b></font></td> <td style="text-align: center;"><font size="2"><b>Тема роботи</b></font></td> <td style="text-align: center;"><font size="2"><b>Прізвище студента</b></font></td> </tr>
   

<tr>
  <td style="text-align: center"><font><b ></b></font></td>
    <td style="text-align: center"><font size="2"><b >П-41</b></font></td>
    <td style="text-align: center"><font><b ></b></font></td>

    
  </tr>
 <?php $posts = get_posts();
   $ii=1?>
  <?php foreach ($posts as $post):?>
  <tr>
    <td style="text-align: center;"><font size = "2"><b>   <?php 
   echo $ii++;?></b></font></td>
    <td><font size = "2">   <?=$post['tema']?></font></td>
    <td><font size = "2">   <?=$post['student']?></font></td>
        </tr>
        <?php endforeach; ?> 
</TABLE></div>
       <?php include 'function_kursovi1.php'?>
<h5 style="margin-bottom: 2vw; text-align:; margin-top: 2vw;">Курсова робота(ОПАМ)</h5>
<div style="border-bottom: solid; border-bottom-color: #072C53; " > <TABLE border = "2" cellpading ="2" cellspacing = "0" width = "100%" align = "center" style="margin-bottom: 3vw;">
  <tr> 
    <td style="width: 50px; text-align: center;" >
      <font size = "2"><b>№</b></font>
    </td> 
    <td style="text-align: center;">
      <font size = "2"><b>Тема роботи</b></font>
    </td> 
    <td style="text-align: center;">
      <font size = "2"><b>Прізвище студента</b></font>
    </td> 
</tr>
<tr>
  <td style="text-align: center"><font size = "2"><b ></b></font></td>
    <td style="text-align: center"><font size = "2"><b >П-31</b></font></td>
    <td style="text-align: center"><font size = "2"><b ></b></font></td>
    
  </tr>
 <?php $posts = get_kurs();
  $ii=1; ?>
  <?php foreach ($posts as $post):?>
  <tr>
    <td style="text-align: center;"><font size = "2"><b><?php 
   echo $ii++;?> </b></font></td>
    <td><font size = "2"> <?=$post['tema']?> </font></td>
    <td><font size = "2"> <?=$post['student']?> </font></td>
  </tr>
  <?php endforeach; ?> 
</TABLE></div>

</div>
  <div class="main1"style="height: 100%;background-color: blue">
      
  </div>
</div>

</main>
</body>
  <?php include "footer.php"  ?>
</html>

