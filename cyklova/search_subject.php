<?php
  $page_title = 'Пошук дисципліни';
  require_once 'header.php';
?>

<?php 
$search_q1=$_POST['search_subject'];
 $l = mysqli_connect('localhost', 'root', '', 'pract1');
$search_q1 = trim($search_q1);
$search_q1 = strip_tags($search_q1);
$q=mysqli_query($l, "SELECT name_subject, opys_subject FROM subject Where name_subject LIKE '%$search_q1%' ");
if($itog = mysqli_fetch_array($q))
	{	$name = $itog['name_subject'];
$opys = $itog['opys_subject'];
$ddd = "Результат пошуку";}
else{$sur = null;
$name = null;
$opys = null;
$ddd = "Вказаного предмету не знайдено";
}

mysqli_free_result($q);
mysqli_close($l);
?>

<body  style="width: 100%">
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
  <form method="post" action="search_subject.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" type="text" name="search_subject" required placeholder="Пошук дисциплін" title="Введіть назву дисципліни" />
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
<form class="form-search" method="post" action="search_subject.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_subject" required placeholder="Пошук дисциплін. Введіть назву дисципліни для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section>      
</header>   
  <main style="display: flex;">
<div class="main1 "style="height: 100% background-color: blue;margin-top: 2vw; margin-bottom: 5vw;"> 
  </div>
  <div class="main2" style="height: 100%;  background-color: white; margin-top: 2vw;  margin-bottom: 30px; ">
<div class="text" >
    <h2 class="zagolovok"><?php echo "$ddd"; ?></h2>
</div>
  <div id="container" class="vyfl_no_disp" style="margin-top: 40px;position: inherit;">
  <div class="content">
   
     <div class="title"><h3 style="margin-top: 10px;"class="vyk_vyr vyk_vyr1"> <?php echo "$name"; ?></h3></div>
<div class="text teach">
    <p class="textsize"><?php echo "$opys"; ?>
    </p>
</div>
</div>
</div> 
 </div>
  <div class="main1"style="height: 100%;margin-top: 2vw; margin-bottom: 5vw;">   
  </div>
  </main>
</body>
<?php include "footer.php" ?>