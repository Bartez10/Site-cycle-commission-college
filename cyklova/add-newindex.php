<?php

       $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }
if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/Новини/Головна/" . $_FILES["img"]["name"]);
	$fileName = "./img/Новини/Головна/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO newIndex (text, title, img) VALUES(:text, :title, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":text", $_POST["text"]);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":img", $fileName);

$stmt->execute();
header("Location: newindexAdd.php");
?>