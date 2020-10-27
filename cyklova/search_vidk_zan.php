<?php
  $page_title = 'Пошук виховних заходів';
  require_once 'header.php';
?>
<?php 
$search_q=$_POST['search_vidk_zan'];
 $l = mysqli_connect('localhost', 'root', '', 'pract1');
$search_q = trim($search_q);
$search_q = strip_tags($search_q);
$q=mysqli_query($l, "SELECT text, title, img FROM vyhovna1 Where title LIKE '%$search_q%'");
if($itog = mysqli_fetch_array($q))
	{	$title = $itog['title'];
$text = $itog['text'];
$img = $itog['img'];
$ddd = "Результат пошуку";}
else{
	$title = null;
$text = null;
$img = null;
$ddd = "Вказаного виховного заходу не знайдено";
}

mysqli_free_result($q);
mysqli_close($l);
?>
<body style="width: 100%;">
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
  <main style="display: flex;">
<div class="main1 "style="height: 100% background-color: blue;margin-top: 2vw; margin-bottom: 5vw;"> 
  </div>
  <div class="main2" style="height: 100%;  background-color: white; margin-top: 2vw;margin-bottom: 30px;">
<div class="text" >
    <h2 class="zagolovok"><?php echo "$ddd"; ?></h2>
</div>
  <div id="container" class="vyfl_no_disp" style="margin-top: 40px;position: inherit;">
  <div class="content">
    <div class="img" style="display: flex;justify-content: center;" >
      <img style="margin-left: 10px; margin-top:10px;" src="<?php echo "$img"; ?>" alt="" class="minimized" id="photo124321" >
    </div>  
     <div class="title"><h3 style="margin-top: 10px;"class="vyk_vyr vyk_vyr1"><?php echo "$title"; ?></h3></div>
<div class="text teach">
    <p class="textsize"><?php echo "$text"; ?>
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