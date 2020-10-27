<?php

       $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }
if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/Новини/" . $_FILES["img"]["name"]);
	$fileName = "./img/Новини/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO news (text, text1, title, img, date) VALUES(:text, :text1,:title, :img, :date)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":text", $_POST["text"]);
$stmt->bindValue(":text1", $_POST["text1"]);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":date", $_POST["date"]);

$stmt->execute();
header("Location: newsAdd.php");
?>