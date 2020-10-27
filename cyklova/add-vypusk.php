<?php
 $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');

 session_start();

 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
  }
   if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/кращі_випускники/" . $_FILES["img"]["name"]);
	$fileName = "./img/кращі_випускники/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}
$sql = "INSERT INTO vypusk (name_vypusk, surname_vypusk, twoname_vypusk, rik, work, vyd, linkedin, img) VALUES(:name_vypusk, :surname_vypusk, :twoname_vypusk, :rik, :work, :vyd, :linkedin, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":name_vypusk", $_POST["name_vypusk"]);
$stmt->bindValue(":surname_vypusk", $_POST["surname_vypusk"]);
$stmt->bindValue(":twoname_vypusk", $_POST["twoname_vypusk"]);
$stmt->bindValue(":rik", $_POST["rik"]);
$stmt->bindValue(":work", $_POST["work"]);
$stmt->bindValue(":vyd", $_POST["vyd"]);
$stmt->bindValue(":linkedin", $_POST["linkedin"]);
$stmt->bindValue(":img", $fileName);
$stmt->execute();
 header("Location: vypuskAdd.php");
?>