<?php
  $page_title = 'Зміна інформації про викладача';
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
$teacher_id = $_GET['id'];
$teacher1 = mysqli_query($connection, "SELECT * From teacher Where id_teacher = '$teacher_id'");
$teacher1 = mysqli_fetch_assoc($teacher1); 
?>

<form style="width: 600px; margin-top:50px;" action="update-teacher.php" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?=$teacher1['id_teacher']?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Прізвище</span>
  </div>
  <input name="surname_teacher"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$teacher1['surname_teacher']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Ім'я</span>
  </div>
  <input name="name_teacher"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$teacher1['name_teacher']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">По батькові</span>
  </div>
  <input name="twoname_teacher"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$teacher1['twoname_teacher']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Заголовок</span>
  </div>
  <input name="title"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$teacher1['title']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Коротко про викладача</span>
  </div>
 <textarea name="text" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><p class="textsize"><?=$teacher1['text']?></p></textarea>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Про викладача</span>
  </div>
 <textarea name="text1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><p class="textsize"><?=$teacher1['text1']?></p></textarea>
</div>
 <button type="submit" class="btn btn-primary">Змінити</button>
 <a href="teacherAdd.php" type="button" style="color: white" class="btn btn-primary">Назад</a>
</form>

</div>