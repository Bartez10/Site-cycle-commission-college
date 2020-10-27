<?php

       $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }
if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./document/" . $_FILES["img"]["name"]);
	$fileName = "./document/" . $_FILES["img"]["name"];
}

$sql = "INSERT INTO rozklad (title, img) VALUES(:title, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":img", $fileName);
$stmt->execute();
header("Location: rozkladAdd.php");
?>