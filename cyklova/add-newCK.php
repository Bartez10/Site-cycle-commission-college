<?php
 $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
 session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
  }
  if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/Виховна/" . $_FILES["img"]["name"]);
	$fileName = "./img/Виховна/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO vyhovnaCK (title, text, img) VALUES(:title, :text, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":text", $_POST["text"]);
$stmt->bindValue(":img", $fileName);
$stmt->execute();
header("Location: dayOfCkADD.php");
?>