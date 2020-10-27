<?php

       $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }
if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/викладачі/" . $_FILES["img"]["name"]);
	$fileName = "./img/викладачі/" . $_FILES["img"]["name"];
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO teacher (name_teacher, surname_teacher, twoname_teacher, text, text1, title, img) VALUES( :name_teacher, :surname_teacher, :twoname_teacher,:text, :text1,:title, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":name_teacher", $_POST["name_teacher"]);
$stmt->bindValue(":surname_teacher", $_POST["surname_teacher"]);
$stmt->bindValue(":twoname_teacher", $_POST["twoname_teacher"]);
$stmt->bindValue(":text", $_POST["text"]);
$stmt->bindValue(":text1", $_POST["text1"]);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":img", $fileName);
$stmt->execute();
header("Location: teacherAdd.php");
?>