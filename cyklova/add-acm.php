<?php

       $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }
if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"],  "./img/Конкурси і олімпіади/ACM/" . $_FILES["img"]["name"]);
}else{
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO acm (rik, text) VALUES(:rik, :text)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":rik", $_POST["rik"]);
$stmt->bindValue(":text", $_POST["text"]);

$stmt->execute();
header("Location: acmAdd.php");
?>