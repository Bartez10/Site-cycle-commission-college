<?php

  $page_title = 'Зміна кращих випускників';
include 'db_connection.php';
  session_start();
  if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
  }
?>
 <title>Гусятинська ЦК програмування | Офіційний сайт - <?php echo htmlspecialchars($page_title)?></title>
   <link rel="shortcut icon" href="img/Logo_title – копія.ico" type="image/x-icon">
<link href="css/alice/alice.css" rel="stylesheet">
<link rel="stylesheet" href="css/nove_menu.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <section class="sequel-kidsa" style="position: static;" >
  <div class="sequel-masopedub" style="display: flex; justify-content: center;">
  <div class="mplishmen"  style="display: flex; justify-content: center;">
  <a href="index.php"><img class="logogo" style="width: 70px;
  height:70px;" src="img/Logo.webp" alt="Логотип"></a>
  <div style="font-size: 16px; color: white; margin-top:23px; ">
    <h2 style="font-size: 16px; font-family: Alice; text-transform:none;line-height: 0.5em;"  >Циклова комісія</h2>
  <h2 style="font-size: 16px;font-family: Alice;text-transform:none; line-height: 0.5em;">програмування</h2>
 
</div>
  </div>
 
  
  </div>
</section>

<?php
$krashi_id = $_GET['id'];
$krasi1 = mysqli_query($connection, "SELECT * From vypusk Where id_vypusk = '$krashi_id'");
$krasi1 = mysqli_fetch_assoc($krasi1); 
?>

<div style="display: flex; justify-content: center; ">
<form style="width: 600px; margin-top:50px;" action="update-vypusk.php" method="POST" enctype="multipart/form-data" >
 <input type="hidden" name="id" value="<?=$krasi1['id_vypusk']?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Прізвище</span>
  </div>
  <input name="surname_vypusk"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['surname_vypusk']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Ім'я</span>
  </div>
  <input name="name_vypusk"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['name_vypusk']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">По батькові</span>
  </div>
  <input name="twoname_vypusk"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['twoname_vypusk']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Рік випуску</span>
  </div>
  <input name="rik"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['rik']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Місце роботи</span>
  </div>
  <input name="work"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['work']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Напрямок розробки</span>
  </div>
  <input name="vyd"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['vyd']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Посилання LinkedIn</span>
  </div>
  <input name="linkedin"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$krasi1['linkedin']?>">
</div>
 <button type="submit" class="btn btn-primary">Змінити</button>
 <a href="vypuskAdd.php" type="button" style="color: white" class="btn btn-primary">Назад</a>
</form>

</div>