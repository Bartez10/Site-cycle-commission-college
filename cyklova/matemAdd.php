<?php

  $page_title = 'Внесення одімпіад з математики';
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
<div>
  <table style="width: 100%;">
    <tr>
      <th>ID</th>
      <th>Рік проведення</th>
       <th></th>
        <th><a href="admin.php" style="float: right; " type="button" style="color: white" class="btn btn-primary">Назад</a></th>
    </tr>
    <?php
    $matems = mysqli_query($connection, "SELECT id_matem, rik FROM matem");
    $matems = mysqli_fetch_all($matems);
    foreach ($matems as $matem) {
      ?>
       <tr>
         <td><?=$matem[0]?></td>
         <td><?=$matem[1]?></td>
         <td><a href="updateMatem.php?id=<?=$matem[0]?>">Змінити</a></td>
         <td><a style="color: red" href="delete-matem.php?id=<?=$matem[0]?>">Видалити</a></td>
      </tr>
    <?php
  }
    ?>
  </table>
</div>
<div style="display: flex; justify-content: center; padding: 20px; flex-wrap: wrap; ">
<form style="width: 600px; margin-top:50px;" action="add-matem.php" method="POST" enctype="multipart/form-data" >
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Рік проведення</span>
  </div>
  <input name="rik"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Інформація</span>
  </div>
  <textarea name="text" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
<tr >
    <td  style="text-align: center;"><font><b>Рік проведення</b></font></td>
        <td style="text-align: center;" ><Font ><a class="thumbnail"><img  alt="" src="img/art.webp" /><span><ul id="slides13">
  <li class="slide13 showing13"><img id="imAcm" src="img/Конкурси і олімпіади/Математика/Назва фото" alt="" ></li>
  <li class="slide13"><img id="imAcm" src="img/Конкурси і олімпіади/Математика/Назва фото" alt="" ></li>
</ul><br /></span></a></Font></td>
    <td ><font>Місце проведення</font></td>
    <td><font> Студент</font></td>
    <td ><font>Результат</font></td>
  </tr></textarea>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Фото</span>
  </div>
  <input name="img"  type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
 <button type="submit" class="btn btn-primary">Додати</button>
</form>
</div>