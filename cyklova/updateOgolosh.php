<?php

  $page_title = 'Зміна оголошень';
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
<style>
  td, th {
    padding:10px;
  }
  th{
    background: #606060;
    color: white;
  }
  td{
    background: #b5b5b5;
  }
</style>
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

<div style="display: flex; justify-content: center; padding: 20px; flex-wrap: wrap; ">

<?php
$ogolosh_id = $_GET['id'];
$ogolosh1 = mysqli_query($connection, "SELECT *  From ogoloshenya Where id_odoloshenya = '$ogolosh_id'");
$ogolosh1 = mysqli_fetch_assoc($ogolosh1); 
?>


<form style="width: 600px; margin-top:50px;" action="update-ogolosh.php" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?=$ogolosh1['id_odoloshenya']?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Заголовок</span>
  </div>
  <input name="title"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$ogolosh1['title']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Текст</span>
  </div>
  <textarea name="text1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?=$ogolosh1['text1']?></textarea>
</div>
 <button type="submit" class="btn btn-primary">Змінити</button>
 <a href="ogoloshAdd.php" type="button" style="color: white" class="btn btn-primary">Назад</a>
</form>

</div>