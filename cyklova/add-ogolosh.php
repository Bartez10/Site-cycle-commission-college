<?php
 $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
 session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
  }
  if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/Оголошення/" . $_FILES["img"]["name"]);
	$fileName = "./img/Оголошення/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO ogoloshenya (title, text1, img) VALUES(:title, :text1, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":text1", $_POST["text1"]);
$stmt->bindValue(":img", $fileName);
$stmt->execute();
header("Location: ogoloshAdd.php");
?>