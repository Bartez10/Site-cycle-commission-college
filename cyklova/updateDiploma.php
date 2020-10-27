<?php
  $page_title = 'Внесення інформації про дипломи';
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

<div style="display: flex; justify-content: center; ">
   <?php
$diploma_id = $_GET['id'];
$diploma1 = mysqli_query($connection, "SELECT * From diploma Where id_diploma = '$diploma_id'");
$diploma1 = mysqli_fetch_assoc($diploma1); 
?>
<form style="width: 600px; margin-top:50px;" action="update-diploma.php" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?=$diploma1['id_diploma']?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Тема</span>
  </div>
  <input name="tema"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$diploma1['tema']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Студент</span>
  </div>
   <input name="student"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$diploma1['student']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Керівник</span>
  </div>
   <input name="kerivnyk"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$diploma1['kerivnyk']?>">
</div>
 <button type="submit" class="btn btn-primary">Змінити</button>
</form>

</div>