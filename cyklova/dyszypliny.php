<?php
  $page_title = 'Навчальний план';
  require_once 'header.php';
?>
 <link rel="stylesheet" href="css/accordion2.css">
<body >
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
<main>
  <div class="main0" style="display: flex;">
  <div class="main1_sublect "style="height: 100% background-color: blue">
    
  </div>
  <div class="main2_sublect" style="height: 100%;  text-align:; font-size: 15px; align-content: center;border-bottom: solid; border-bottom-color: #072C53; margin-bottom: 40px;">
    <p><h2 class="zagolovok">Навчальний план</h2></p>

<ul class="" style="list-style: none; margin-right:70px; ">
      <li ><a class="knopa_zan" style="width: 100%; text-decoration: none;" href="document/НПІПЗНовий1.pdf">Навчальний план</a></li> 
    </ul>


  <h2 id="dni"  style="margin-top:30px; font-size:18px;letter-spacing: 1px; padding-left: 5px; color: #212529; padding-right: 5px; text-align: center;">Цикл дисциплін математичної та природничо-наукової підготовки</h2>
    <div>
      <div class="accordion">
        <?php $result = mysqli_query($connection, "Select * From subject Where id=1");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-33" name="checkbox-33" />
    <label for="checkbox-33" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=2");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-34" name="checkbox-34" />
    <label for="checkbox-34" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=3");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-35" name="checkbox-35" />
    <label for="checkbox-35" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=4");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-36" name="checkbox-36" />
    <label for="checkbox-36" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=5");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-37" name="checkbox-37" />
    <label for="checkbox-37" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=6");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-38" name="checkbox-38" />
    <label for="checkbox-38" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=7");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-39" name="checkbox-39" />
    <label for="checkbox-39" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=8");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-40" name="checkbox-40" />
    <label for="checkbox-40" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=9");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-41" name="checkbox-41" />
    <label for="checkbox-41" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  
  
</div>    </div>
  
    <h2 id="dni" style="font-size:18px;letter-spacing: 1px;padding-left: 5px; color: #212529; padding-right: 5px; text-align: center;">Цикл  дисциплін гуманітарної  та  соціально-економічної підготовки</h2>
    <div>
            <div class="accordion">
  <?php $result = mysqli_query($connection, "Select * From subject Where id=10");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-42" name="checkbox-42" />
    <label for="checkbox-42" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  
    <?php $result = mysqli_query($connection, "Select * From subject Where id=11");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-43" name="checkbox-43" />
    <label for="checkbox-43" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  
    <?php $result = mysqli_query($connection, "Select * From subject Where id=12");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-44" name="checkbox-44" />
    <label for="checkbox-44" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=13");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-45" name="checkbox-45" />
    <label for="checkbox-45" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=14");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-46" name="checkbox-46" />
    <label for="checkbox-46" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=15");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-47" name="checkbox-47" />
    <label for="checkbox-47" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=16");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-48" name="checkbox-48" />
    <label for="checkbox-48" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=17");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-49" name="checkbox-49" />
    <label for="checkbox-49" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=18");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-50" name="checkbox-50" />
    <label for="checkbox-50" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
   
  
</div>   
    </div>
  
<h2 id="dni" style="font-size:18px;letter-spacing: 1px; padding-left: 5px;color: #212529;  padding-right: 5px; text-align: center;">Цикл професійної та практичної підготовки</h2>
    <div>
      <div class="accordion">
        <?php $result = mysqli_query($connection, "Select * From subject Where id=19");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-1" name="checkbox-1" />
    <label for="checkbox-1" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=20");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-2" name="checkbox-2" />
    <label for="checkbox-2" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=21");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-3" name="checkbox-3" />
    <label for="checkbox-3" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=22");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-4" name="checkbox-4" />
    <label for="checkbox-4" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=23");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-5" name="checkbox-5" />
    <label for="checkbox-5" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=24");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-6" name="checkbox-6" />
    <label for="checkbox-6" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=25");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-7" name="checkbox-7" />
    <label for="checkbox-7" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=26");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-8" name="checkbox-8" />
    <label for="checkbox-8" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=27");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-9" name="checkbox-9" />
    <label for="checkbox-9" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=28");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-10" name="checkbox-10" />
    <label for="checkbox-10" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=29");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-11" name="checkbox-11" />
    <label for="checkbox-11" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=30");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-12" name="checkbox-12" />
    <label for="checkbox-12" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=31");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-13" name="checkbox-13" />
    <label for="checkbox-13" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=32");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-14" name="checkbox-14" />
    <label for="checkbox-14" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=33");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-15" name="checkbox-15" />
    <label for="checkbox-15" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=34");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-16" name="checkbox-16" />
    <label for="checkbox-16" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=35");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-17" name="checkbox-17" />
    <label for="checkbox-17" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=36");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-18" name="checkbox-18" />
    <label for="checkbox-18" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=37");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-19" name="checkbox-19" />
    <label for="checkbox-19" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  <?php $result = mysqli_query($connection, "Select * From subject Where id=38");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-20" name="checkbox-20" />
    <label for="checkbox-20" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
</div>    </div>
  
   <h2 id="dni" style="font-size:18px;letter-spacing: 1px; padding-left: 5px;color: #212529;  padding-right: 5px;text-align: center;">Вибіркові  навчальні  дисципліни</h2>
   
    <div>
            <div class="accordion">
  <?php $result = mysqli_query($connection, "Select * From subject Where id=39");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-21" name="checkbox-21" />
    <label for="checkbox-21" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  
    <?php $result = mysqli_query($connection, "Select * From subject Where id=40");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-22" name="checkbox-22" />
    <label for="checkbox-22" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
  
    <?php $result = mysqli_query($connection, "Select * From subject Where id=41");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-23" name="checkbox-23" />
    <label for="checkbox-23" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=42");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-24" name="checkbox-24" />
    <label for="checkbox-24" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=43");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-25" name="checkbox-25" />
    <label for="checkbox-25" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=44");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-26" name="checkbox-26" />
    <label for="checkbox-26" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=45");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-27" name="checkbox-27" />
    <label for="checkbox-27" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=46");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-28" name="checkbox-28" />
    <label for="checkbox-28" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=47");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-29" name="checkbox-29" />
    <label for="checkbox-29" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=48");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-30" name="checkbox-30" />
    <label for="checkbox-30" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=49");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-31" name="checkbox-31" />
    <label for="checkbox-31" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
    <?php $result = mysqli_query($connection, "Select * From subject Where id=50");
                  while($row = mysqli_fetch_array($result)) {
                    $name = $row['name_subject']; $twoname = $row['opys_subject'];} ?>
  <div class="trigger">
    <input type="checkbox" id="checkbox-32" name="checkbox-32" />
    <label for="checkbox-32" class="checkbox">
      <?php echo "$name"; ?><i></i>
    </label>
    <div class="content">
      <p><?php echo "$twoname"; ?></p>
    </div>
  </div>
</div>   
    </div>

</div>
<div class="main1_sublect"style="height: 100%;background-color: blue">
      
  </div>
</div>

</main>
<script> $("#all").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });</script>
</body>
  <?php include "footer.php"  ?>
</html>

